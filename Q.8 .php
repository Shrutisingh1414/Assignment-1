<!-- Q8.Scenario: You are creating a grading system for a 
school website. 
Based on the score obtained by a student in an exam, 
you need to assign a grade. Write a PHP script that 
takes the score as input and assigns a grade according to 
the following criteria: 
Score >= 90: Grade A 
Score >= 80: Grade B 
Score >= 70: Grade C 
Score >= 60: Grade D 
Score < 60: Grade &F  -->
<?php
$score = 85; //Example score

if ($score >= 90) {
    echo "Grade A";
} elseif ($score >= 80) {
    echo "Grade B";
} elseif ($score >= 70) {
    echo "Grade C";
} elseif ($score >=60) {
    echo "Grade D";
} else {
    echo "Grade F";}
?>