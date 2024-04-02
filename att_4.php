<?php
$num0 = 0;
$num1 = 1;

echo $num0 . "\n";
echo $num1 . "\n";

for ($i = 2; $i <10; $i++) {
    $num3 = $num0 + $num1;
    echo $num3 . "\n";
    $num0 = $num1;
    $num1 = $num3;
}
?>
