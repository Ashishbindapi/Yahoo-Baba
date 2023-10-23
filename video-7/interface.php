<?php
interface parent1
{
    function calc($a, $b);
}

interface parent2
{
    function sub($c, $d);
}

class ChildClass implements parent1, parent2
{
    public function calc($a, $b)
    {
        echo $a + $b;
    }
    public function sub($c, $d)
    {
        echo $c - $d;
    }
}

$test = new ChildClass();
$test->calc(20,50);
echo "<br>";
$test->sub(60,40);