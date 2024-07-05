<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $content = $_POST['content'];
    $file = $_POST['file'];

    // Define the target file path
    $filePath = 'files/outputs/' . $file;

    // Save the content back to the YAML file
    if (file_put_contents($filePath, $content) !== false) {
        echo "File saved successfully!";
    } else {
        echo "Error saving the file.";
    }
} else {
    echo "Invalid request.";
}
?>
