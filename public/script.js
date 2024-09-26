function sendFileToServer(file) {
  const formData = new FormData();
  formData.append("file", file);

  fetch("/api/analyze", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      const jsonString = JSON.stringify(data, null, 2);
      const blob = new Blob([jsonString], { type: "application/json" });
      const url = URL.createObjectURL(blob);
      window.open(url, "_blank");
      URL.revokeObjectURL(url);
    })
    .catch((error) => {
      console.error(error);
    });
}

document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");
  form.addEventListener("submit", function (event) {
    event.preventDefault();
    const input = document.querySelector("input");
    const file = input.files[0];
    sendFileToServer(file);
    input.value = null;
  });
});
