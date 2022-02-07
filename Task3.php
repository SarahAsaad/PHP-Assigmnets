<!-- WHAT IS THE OUTPUT OF THESE SCRIPTS -->
<?php
$x=655;
var_dump(is_int($x));
// bool(True)
$x=4.1;
var_dump(is_int($x));
// bool(false)
$x=2000.5;
var_dump(is_float($x));
// bool(true)
$x="farah";
var_dump(is_numeric($x));
// bool(false)
echo(min(0,100,-30,20));
// -30
echo(max(0,100,-30,20));
// 100
echo(abs(-1258));
// 1258
echo(round(6.1));
// 6
echo(round(4.6))."<br>";
// 5
echo(rand());
// any number i.e 4

