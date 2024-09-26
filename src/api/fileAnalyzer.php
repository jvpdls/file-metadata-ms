<?php

function showFileMetadata(array $file = null): string
{
    $response = array();

    if (!isset($file)) {
        http_response_code(400);
        $response = array(
            'error' => 'No input file was provided.'
        );
    } else {
        $fileName = $file['name'];
        $fileType = $file['type'];
        $fileSize = $file['size'];

        $response = array(
            'fileName' => $fileName,
            'fileType' => $fileType,
            'fileSize' => $fileSize
        );
    }

    header('Content-Type: application/json');
    return json_encode($response);
}
