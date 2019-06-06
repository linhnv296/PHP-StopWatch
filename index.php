<?php
include 'StopWatch.php';
$timepush = new StopWatch();
$timepush->start();
$arr;
for ($i=0;$i < 100000000; $i++){
    $arr +=$i;
}
echo $arr;
$timepush->end();
echo "<br>";
echo $timepush->getElapsedTime();