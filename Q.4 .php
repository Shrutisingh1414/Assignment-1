<?php
function calculateGrade($score) {
    if ($score < 60) {
        return 'F';
    } elseif ($score >= 60 && $score <= 70) {
        return 'D';
    } elseif ($score >= 71 && $score <= 80) {
        return 'C';
    } elseif ($score >= 81 && $score <= 90) {
        return 'B';
    } else {
        return 'A';
    }
}

// Example usage:
$score = 75;
$grade = calculateGrade($score);
echo "Score: $score, Grade: $grade";
?>