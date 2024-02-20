<!-- shopping card  -->
<?php
function calculate total price ($items) {
    total price = 0;
    for each ($items as $item){
        $totalprice +=['price'];
    }
    if ($total price> 5000) {
        $discounted price= totalprice *0.9;
        return$discountedprice;
    } else {
        return totalprice;
    }
} 
// example usage 
$items =array(
    array("item" => "shirt", "price"=>1500),
    array("item" => "jeans", "price"=> 2500),
    array("item" => "shoes", "price"=> 1200)
);
$totalprice calculatetotalprice($items);
echo "totalprice": Rs".$totalprice;
?>


