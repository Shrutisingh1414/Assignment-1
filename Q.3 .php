<?php
function determineFitnessLevel($steps) {
    if ($steps < 5000) {
        return 'Beginner';
    } elseif ($steps >= 5000 && $steps < 10000) {
        return 'Intermediate';
    } elseif ($steps >= 10000 && $steps < 15000) {
        return 'Advanced';
    } else {
        return 'Expert';
    }
}

// Example usage:
$stepsWalked = 5000;
$fitnessLevel = determineFitnessLevel($stepsWalked);
echo "Fitness level for $stepsWalked steps: $fitnessLevel";
?>