<?php
function test_odd($var)
{
    return($var & 1);
}

$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd"));


$amounts = array(10,30,40,50,200,400);
function amount($val) { return $val > 50; }
$amount_2 = function($val) { return $val > 50; };
// print_r(array_filter($amounts, static function ($val) { return $val > 50; }));
// print_r(array_filter($amounts, "amount"));
print_r(array_filter($amounts, $amount_2));
