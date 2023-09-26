<?php
class Persion
{
    public $name, $age;

    public function __construct($name = "No Name", $age = 0)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function show()
    {
        echo $this->name . " - " . $this->age;
    }
}

$test = new Persion();
// $test->name = "Ashish Kumar";
// $test->age = 18;
$test2 = new Persion("Mukesh Kumar", 18);
$test3 = new Persion("Avadhesh Kumar", 24);

$test->show();
echo "<br>";
$test2->show();
echo "<br>";
$test3->show();