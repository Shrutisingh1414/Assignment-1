<!-- traffic light simulation -->
<?php
$color=="RED";
if($color=="GREEN"){
    echo "GREEN - GO";
} elseif ($color == "YELLOW"){
    echo "YELLOW -  SLOW DOWN";
}elseif ($color =="RED") {
    echo "RED - STOP";
} else {
    echo "invalid character";
}
?>