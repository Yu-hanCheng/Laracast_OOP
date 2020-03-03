<?php

class Fib
{

    function fibV1($n)
    {
        if ($n <= 2) {
            return 1;
        } else {
            return $this->fibV1($n - 2) + $this->fibV1($n - 1);
        }
    }

    function fibV2($n)
    {
        static $result = array();

        if (!isset($result[$n])) {
            if ($n <= 2) {
                $result[$n] = 1;
            } else {
                $result[$n] = $this->fibV2($n - 2) + $this->fibV2($n - 1);
            }
        }
        return $result[$n];
    }
}

$fib = new Fib(); 


$startTime = (float) microtime(true);
print($fib->fibV1(20));
$endTime = (float) microtime(true);
echo "Spent Time: ", ($endTime - $startTime), "(s)\n";


$startTime = (float) microtime(true);
print($fib->fibV2(20));
$endTime = (float) microtime(true);
echo "Spent Time: ", ($endTime - $startTime), "(s)\n";


?>