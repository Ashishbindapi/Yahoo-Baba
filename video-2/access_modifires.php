<?php
class Base
{
    protected $name;

    public function __construct($n)
    {
        $this->name = $n;
    }

    public function show()
    {
        echo "Your Name : " . $this->name . "<br>";
    }
}

class Derived extends Base
{
    public function get()
    {
        echo "Your Name : " . $this->name . "<br>";
    }
}

$test = new Derived("Ashish Kumar");
// $test->name = "bsbdsjkdkjas";
$test->get();
