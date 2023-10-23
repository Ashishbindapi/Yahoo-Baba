<?php

    class Base{
        protected static $name = "Jasvant";

        public function show()
        {
            echo static::$name;
            echo self::$name;
        }
    }
    class Derived extends Base{
        protected static $name = "Kumar";
    }

$test = new Derived();
$test->show();