<?php

use Persion as GlobalPersion;

class Persion
{
    private $conn;
    public function __construct()
    {
        $this->conn = mysqli_connect();
    }

    public function hello()
    {
        echo "Hello Everyone";
    }

    public function __destruct()
    {
        mysqli_close($this->conn);
    }
}

$test = new Persion();
$test->hello();