<?php
/*
    Task 3: Array Sorting  

    Create an array called $grades with the following values: 85, 92, 78, 88, 95. Write a PHP function which takes "$grades" as an argument to sort the array in descending order and print the sorted grades as array.
*/

// Function to sort grades in descending order
function sortGradesDescending(&$grades) {
    rsort($grades);
}

// Create the grades array
$grades = array(85, 92, 78, 88, 95);

// Call the function with the grades array
sortGradesDescending($grades);

// Print the sorted grades as an array
print_r($grades);
?>
