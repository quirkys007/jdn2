<?php

// Set the path to the zip file
$zipFilePath = 'path/to/your/archive.zip';

// Set the destination directory for the unzipped files
$destinationDir = 'path/to/your/destination';

// Check if the zip file exists
if (!file_exists($zipFilePath)) {
    die("Error: Zip file not found");
}

// Create the destination directory if it doesn't exist
if (!file_exists($destinationDir)) {
    mkdir($destinationDir, 0777, true);
}

// Open the zip file
$zip = new ZipArchive();
if ($zip->open($zipFilePath) === true) {
    // Extract all files to the destination directory
    $zip->extractTo($destinationDir);

    // Close the zip file
    $zip->close();

    echo 'Files extracted successfully.';
} else {
    echo 'Error: Unable to open the zip file.';
}

?>
