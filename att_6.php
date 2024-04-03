<?php
function bubbleSort($arr)
{
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($obs = 0; $obs < $n - $i - 1; $obs++) {
            if ($arr[$obs] > $arr[$obs + 1]) {
                $tempo = $arr[$obs];
$arr[$obs] = $arr[$obs + 1];
$arr[$obs + 1] = $tempo;
}}}
return $arr;
}
$arr = [64, 34, 25, 12, 22, 11, 90];
echo "Original: ";
print_r($arr);

echo "Ordenado com BubbleSort: ";
$sortedArr = bubbleSort($arr);
print_r($sortedArr);
?>
