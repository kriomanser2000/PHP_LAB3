<?php
$N = 10;
$oddNumbers = [];
for ($i = 1; count($oddNumbers) < $N; $i += 2)
{
    $oddNumbers[] = $i;
}
echo "Непарні числа: ";
foreach ($oddNumbers as $num)
{
    echo "<span style='font-size: {$oddNumbers[$N-1]}px; color: red;'>$num </span>";
}
$average = array_sum($oddNumbers) / count($oddNumbers);
echo "<br>Середнє значення: $average";
echo "<br>Непарні числа в зворотньому порядку: ";
for ($i = count($oddNumbers) - 1; $i >= 0; $i--)
{
    echo "<span style='font-size: {$oddNumbers[$N-1]}px; color: red;'>{$oddNumbers[$i]} </span>";
}