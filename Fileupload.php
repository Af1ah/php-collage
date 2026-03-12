<?php
if(isset($_POST['upload'])) {
$filename = $_FILES['file']['name'];
$tempname = $_FILES['file']['tmp_name'];
$folder = "uploads/" . $filename;
// Create uploads folder if not exists
if (!file_exists("uploads")) {
mkdir("uploads");
}
if(move_uploaded_file($tempname, $folder)) {
echo "File uploaded successfully!";
} else {
echo "File upload failed!";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>File Upload</title>
</head>
<body>
<h2>Upload File</h2>
<form method="post" enctype="multipart/form-data">
Select File:
<input type="file" name="file" required>
<br><br>
<input type="submit" name="upload" value="Upload">
</form>
</body>
</html>
