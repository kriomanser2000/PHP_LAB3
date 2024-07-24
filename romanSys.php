<?php
function toRoman($number)
{
    $map = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I'
    ];
    $roman = '';
    foreach ($map as $value => $letter)
    {
        while ($number >= $value)
        {
            $roman .= $letter;
            $number -= $value;
        }
    }
    return $roman;
}
$number = 2007;
$romanNumber = toRoman($number);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p><?php echo htmlspecialchars($romanNumber); ?></p>
</body>
</html>