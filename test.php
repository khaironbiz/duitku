<?php
$time = 1555906948740;
echo $time;
echo "<br>";
$str_time = date('d-m-Y H:i:s');
echo $str_time;
echo "<br>";
$str_time = "02-12-22";
$time = strtotime($str_time);
echo $time;