File Metadata Analyzer Microservice
======================

The File Metadata Analyzer is a web application that accepts an input file and returns its metadata, including the file name, type, and size, displayed within an HTML page. Built with PHP, Composer, and Twig, this application uses modern templating to deliver a user-friendly experience.

Requirements
------------

*   **Apache Server:** Required to run the application.
*   **PHP:** Version 8.1 or higher recommended.
*   **Composer:** For managing PHP dependencies.

Installation
------------

1.  **Clone the repository:**
    
        git clone https://github.com/jvpdls/file-metadata-ms.git
        cd file-metadata-ms
    
2.  **Install dependencies:**
    
        composer install
    
3.  **Configure Apache:**
    *   Set up a virtual host for the project in Apache.

Usage
-----

1.  **Rename `.env.example` to `.env`**
2.  **Start the Apache server.**
3.  **Access the application** via `http://localhost` (or your configured domain).
4.  **Provide a file** using the web interface.

    4.1. Alternatively, you can submit a file via a POST request using an API client for REST, such as Insomnia.
    - Method: `POST`
    - Endpoint: `/api/analyze`
    - Content-Type: `multipart/form-data`
    - Form Data:
        - Key: `file`
        - Value: `"your-file.png"`

### Example response

```
{
	"fileName": "your_file.png",
	"fileType": "image/png",
	"fileSize": 12345
}
```

Contributing
------------

Feel free to submit issues or pull requests. Ensure your contributions adhere to the coding standards used in the project.