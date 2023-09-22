<?php
function test_odd($var)
{
    return($var & 1);
}
function test_4($var) {
    return $var > 3;
}

$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd"));
print_r(array_filter($a1,"test_4"));


$amounts = array(10,30,40,50,200,400);
function amount($val) { return $val > 50; }
$amount_2 = function($val) { return $val > 50; };
// print_r(array_filter($amounts, static function ($val) { return $val > 50; }));
// print_r(array_filter($amounts, "amount"));
print_r(array_filter($amounts, $amount_2));
