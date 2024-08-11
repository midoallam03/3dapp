<?php
$directory = '../images';
// Only load files with the following extensions
$allowed_extensions = array('jpg','jpeg','gif','png');
// An array used to separate the extension from each file
$file_parts = array();
// Response message
$response = "";

// Check if the directory exists and is readable
if (!is_dir($directory)) {
    die("Error: Directory $directory does not exist.");
}

if (!is_readable($directory)) {
    die("Error: Directory $directory is not readable.");
}

// Opens the directory to parse the images
if ($dir_handle = opendir($directory)) {
    // Iterate through all the files
    while ($file = readdir($dir_handle)) {
        // First check for hidden files
        if (substr($file, 0, 1) != '.') {
            // Split each file name to extract the file extension
            $file_components = explode('.', $file);
            // Grab the extension token
            $extension = strtolower(array_pop($file_components));
            // Is this file a valid image. If so, add it to the response
            if (in_array($extension, $allowed_extensions)) {
                // Build a response string using the ~ symbol as a string separator
                $response .= '/'.$file.'~';
            }
        }
    }
    closedir($dir_handle);
} else {
    die("Error: Unable to open directory $directory.");
}

// Return response while removing the last ~ separator
echo substr_replace($response,"",-1);
?>
