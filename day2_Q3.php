<?php

function isPalindrome($str) {
    // Remove non-alphanumeric characters and convert to lowercase
    $str = preg_replace("/[^a-zA-Z0-9]/", "", $str);
    $str = strtolower($str);

    // Reverse the string
    $reversedStr = strrev($str);

    // Compare original string with reversed string
    return $str === $reversedStr;
}

// Example usage
$input = "Racecar";
if (isPalindrome($input)) {
    echo "The string is a palindrome!";
} else {
    echo "The string is not a palindrome.";
}

?>
