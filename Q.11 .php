<!-- Q10.Scenario: You are developing a blog platform where 
users can 
publish articles. However, you want to implement a 
feature that 
Limits the length of article titles to 50 characters. Write a 
PHP 
script that checks the length of the article title and 
truncates it to 
50 characters if it exceeds the limit. -->
<?php
$articleTitle = "This is a very long article exceeding 50 character limits";

if (strlen($articleTitle) > 50) {
    $turncatedTitle = substr($articleTitle, 0, 50);
    echo $turncatedTitle;
} else {
    echo $articleTitle;
}
?>