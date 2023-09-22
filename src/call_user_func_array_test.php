<?php
function foobar($arg, $arg2) {
    echo __FUNCTION__, " got $arg and $arg2\n";
}
class Foo {
    function bar($arg, $arg2) {
        echo __METHOD__, " got $arg and $arg2\n";
    }
}

$func = function($arg1, $arg2) {
    return $arg1 * $arg2;
};

// Call the foobar() function with 2 arguments
call_user_func_array("foobar", array("one", "two"));

// Call the $foo->bar() method with 2 arguments
$foo = new Foo;
call_user_func_array(array($foo, "bar"), array("three", "four"));

var_dump(call_user_func_array($func, array(2, 4)));