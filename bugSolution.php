```php
$file = fopen("path/to/file.txt", "r");
if ($file === false) {
    // Handle the error specifically
    $error = error_get_last();
    echo "Error opening file: " . $error["message"] . "\n";
} else {
    // Process the file
    while (($line = fgets($file)) !== false) {
        // Process each line
        echo $line;
    }
    fclose($file);
}
```