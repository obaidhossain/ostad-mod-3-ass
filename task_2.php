<?php
/*
    Task 2: Array Manipulation

    Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.
*/

// Function to remove even numbers from an array
function removeEvenNumbers(&$numbers) {
    $numbers = array_filter($numbers, function ($value) {
        return $value % 2 != 0;
    });
}

// Create the numbers array
$numbers = range(1, 10);

// Call the function with the numbers array
removeEvenNumbers($numbers);

// Print the resulting array
print_r($numbers);
?>
