<?php
$targetDirectory = "uploads/";
$targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
$messages = array();

// Check if file is a valid document
if ($imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx") {
    $messages[] = "Only PDF, DOC, and DOCX files are allowed.";
    $uploadOk = 0;
}

// Check if file already exists
if (file_exists($targetFile)) {
    $messages[] = "File already exists.";
    $uploadOk = 0;
}

// Check file size (limit it to 5MB)
if ($_FILES["fileToUpload"]["size"] > 5 * 1024 * 1024) {
    $messages[] = "File size exceeds the limit.";
    $uploadOk = 0;
}

// Upload the file if everything is okay
if ($uploadOk == 0) {
    $messages[] = "File was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        $messages[] = "File has been uploaded successfully.";
    } else {
        $messages[] = "An error occurred during file upload.";
    }
}

// Redirect back to the upload page with messages as URL parameters
$redirectUrl = "test.php";
if (!empty($messages)) {
    $messageString = implode("|", $messages);
    $redirectUrl .= "?message=" . urlencode($messageString);
}
header("Location: " . $redirectUrl);
exit();
?>
