<!-- Q12.Scenario: You are building a subscription-based 
service where users can choose between different 
subscription plans. However, you want to offer a trial period for new users.
Write a PHP script that checks if the user is a new user and offers 
them a trial period if they haven't subscribed before.  -->
<?php
$userIsnew =true;

if ($userIsnew) {
    echo "Congratulations! You qualify for a trial period";
} else {
    echo "Thank you for your intrest in our service.";
}
?>