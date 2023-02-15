<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check if a file was uploaded
  if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
    $allowed_types = ["image/jpeg", "image/png"]; // Allowed file types
    $max_size = 5 * 1024 * 1024; // Maximum file size (5MB)

    // Check if the file type and size are valid
    if (in_array($_FILES["image"]["type"], $allowed_types) && $_FILES["image"]["size"] <= $max_size) {
      $file_name = $_FILES["image"]["name"];
      $file_tmp = $_FILES["image"]["tmp_name"];

      // Move the uploaded file to a permanent location
      move_uploaded_file($file_tmp, "uploads/" . $file_name);

      echo "File uploaded successfully!";
    } else {
      echo "Invalid file type or size.";
    }
  } else {
    echo "No file was uploaded.";
  }
}
?>

<!-- HTML form to upload the image file -->
<form method="post" enctype="multipart/form-data">
  <input type="file" name="image" accept="image/jpeg, image/png">
  <button type="submit">Upload</button>
</form>