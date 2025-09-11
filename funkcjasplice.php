<p> dodawanie elementow </p>
<?php
$a1 = array("red", "green", "blue", "yellow");
$a2 = array("orange", "black");
array_splice($a1, 2, 0, $a2);
print_r($a1);
?>