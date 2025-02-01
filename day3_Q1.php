<?php
// Define the filename
$filename = "students.txt";

// Step 1: Create and write to the file
$students = ["gracy" ,  "simmba" ,  "samruddhi" ,  "sakshi" ,  "sayali"];
$file = fopen($filename, "w"); // Open file in write mode

foreach ($students as $name) {
    fwrite($file, $name . PHP_EOL); // Write each name to a new line
}

fclose($file); // Close the file

// Step 2: Read and display the contents
echo "Contents of the file:\n";
$file = fopen($filename, "r"); // Open file in read mode

while (($line = fgets($file)) !== false) {
    echo $line; // Output each line
}

fclose($file); // Close the file
?>