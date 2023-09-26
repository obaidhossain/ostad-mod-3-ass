<?php
/*
    Task 4: Multidimensional Array

    Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.
*/

// Function to calculate and print the average grade for each student
function calculateAndPrintAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $averageGrade = array_sum($grades) / count($grades);
        echo "{$student}'s avg grade: {$averageGrade}\n";
    }
}

// Create the multidimensional array for student grades
$studentGrades = array(
    'Jodu' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Modu' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Kodu' => array('Math' => 75, 'English' => 82, 'Science' => 88)
);

// Call the function with the student grades array
calculateAndPrintAverageGrades($studentGrades);
?>
