<?php
class Employee
{
    public $name;
    public $age;
    public $salary;

    function __construct($a, $b, $c)
    {
        $this->name = $a;
        $this->age = $b;
        $this->salary = $c;
    }

    function info()
    {
        echo "<h3>Employee  Profile</h3>";
        echo "Employee nmae : " . $this->name . "<br>";
        echo "Employee age : " . $this->age . "<br>";
        echo "Employee salary : " . $this->salary . "<br>";
    }
}
class Manager extends Employee
{
    public $ta = 1000;
    public $phone = 300;
    public $totalsalary;

    function info()
    {
        $this->totalsalary = $this->salary + $this->ta + $this->phone;
        echo "<h3>Manager  Profile</h3>";
        echo "Manager nmae : " . $this->name . "<br>";
        echo "Manager age : " . $this->age . "<br>";
        echo "Manager salary : " . $this->totalsalary . "<br>";
    }
}

$test = new Employee('Anand Kumar', 20, 10000);
$test->info();
$test2 = new Manager('Sarvrsh Kumar', 30, 22000);
$test2->info();
