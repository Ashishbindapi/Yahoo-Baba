<?php
// require "./classes/first.php";
// require "./classes/second.php";

function my_autoloader($class)
{
    require "./classes/" . $class . ".php";
}
spl_autoload_register('my_autoloader');

$test = new First();
echo "<br>";
$test2 = new Second();
