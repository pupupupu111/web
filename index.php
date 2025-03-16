<?php
// Set the current directory (current folder)
$folder = './';

// Generate a random 10-letter string
$fileName = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 10);

// Define the full file path
$filePath = $folder . $fileName . '.txt';  // You can change the file extension if needed

// Create and write to the file
file_put_contents($filePath, "This is a randomly generated file.");

// Output success message
echo "File '$fileName.txt' has been created successfully in the current directory.";
?>
