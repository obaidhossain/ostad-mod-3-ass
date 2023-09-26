<?php
/*
    Task 1: String Manipulation

    Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". Write a PHP function which takes "$text" as an argument to:
    Convert the string to all lowercase.
    Replace "brown" with "red" in the string.
    Print the modified text.
*/

// Function to modify text
function modifyText($text) {
    // Convert the string to lowercase
    $lowercaseText = strtolower($text);
    
    // Replace "brown" with "red" in the lowercase string
    $modifiedText = str_replace('brown', 'red', $lowercaseText);
    
    // Print the modified text
    echo $modifiedText;
}

// Original text
$text = "The quick brown fox jumps over the lazy dog.";

// Call the function with the original text
modifyText($text);
?>
