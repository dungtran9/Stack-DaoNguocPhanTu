<?php
include_once ("Stack.php");

$arr =[1,2,3,4,5,6,7,8];
$stark = new Stack(count($arr));
for($i=0;$i<count($arr);$i++){
    $stark->push($arr[$i]);
}
var_dump($stark->getStack());
