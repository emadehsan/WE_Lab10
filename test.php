<?php
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('gre', $array, false); // $key = 2;
echo $key;
$key = array_search('re', $array, false);   // $key = 1;
echo $key;

?>