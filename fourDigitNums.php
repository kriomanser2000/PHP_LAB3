<?php
function areAllDigitsEven($num)
{
    $digits = str_split($num);
    foreach ($digits as $digit)
    {
        if ($digit % 2 !== 0)
        {
            return false;
        }
    }
    return true;
}
function areAllDigitsOdd($num)
{
    $digits = str_split($num);
    foreach ($digits as $digit)
    {
        if ($digit % 2 === 0)
        {
            return false;
        }
    }
    return true;
}
function areDigitsMirror($num)
{
    $str = strval($num);
    return $str === strrev($str);
}
function areDigitsDescending($num)
{
    $digits = str_split($num);
    for ($i = 0; $i < 3; $i++)
    {
        if ($digits[$i] <= $digits[$i + 1])
        {
            return false;
        }
    }
    return true;
}
function countSpecialNumbers()
{
    $countMirror = 0;
    $countEven = 0;
    $countOdd = 0;
    $countDescending = 0;
    for ($num = 1000; $num <= 9999; $num++)
    {
        if (areDigitsMirror($num))
        {
            $countMirror++;
        }
        if (areAllDigitsEven($num))
        {
            $countEven++;
        }
        if (areAllDigitsOdd($num))
        {
            $countOdd++;
        }
        if (areDigitsDescending($num))
        {
            $countDescending++;
        }
    }
    return [
        'mirror' => $countMirror,
        'even' => $countEven,
        'odd' => $countOdd,
        'descending' => $countDescending,
    ];
}
$result = countSpecialNumbers();
echo "Кількість дзеркальних чисел: " . $result['mirror'] . "\n";
echo "Кількість чисел з парними цифрами: " . $result['even'] . "\n";
echo "Кількість чисел з непарними цифрами: " . $result['odd'] . "\n";
echo "Кількість чисел, де цифри йдуть в порядку від більшого до меншого: " . $result['descending'] . "\n";