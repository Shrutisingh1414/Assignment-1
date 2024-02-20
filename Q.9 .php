<!-- Q9.Scenario: Suppose you are developing a user profile 
Page for d 
social media platform. You want to display different 
messages to 
users based on their account type (e.g., basic or premium). 
Write 
a PHP script that checks the user's account type and 
displays a 
personalized message accordingly. For example, if the 
user has a 
premium account, echo ""Welcome Premium User!"; 
otherwise 
echo "Welcome Basic User!"  -->
<?php
$userAccountType = "Premium"; //Example Account type

if ($userAccountType === "premium") {
    echo "Welcome Premium User!";
} else {
    echo "Welcome Basic User!";
}
?>