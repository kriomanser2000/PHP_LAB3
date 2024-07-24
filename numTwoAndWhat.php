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
<?php
$binary = "101101";
$decimal = bindec($binary);
$hexadecimal = dechex($decimal);
echo "<p>Шістнадцяткове представлення: " . strtoupper($hexadecimal) . "</p>";
?>
</body>
</html>