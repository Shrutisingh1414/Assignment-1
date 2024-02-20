<!-- Checking for discount eligibility -->
<?php
$orderAmount=1200;//example order amount
if($orderAmount>1000){
    echo "Congratulation!You qualify for a diacount";
}else{
    echo "You need to spend more to qualify for the discount";
}
?>