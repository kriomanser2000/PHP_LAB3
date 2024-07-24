<?php
function generateCalendar()
{
    $today = date('j');
    $month = date('m');
    $year = date('Y');
    $monthName = date('F', strtotime("$year-$month-01"));
    $firstDayOfMonth = date('w', strtotime("$year-$month-01"));
    $daysInMonth = date('t', strtotime("$year-$month-01"));
    echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th colspan='7' style='text-align: center;'>$monthName $year</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Нд</th>";
    echo "<th>Пн</th>";
    echo "<th>Вт</th>";
    echo "<th>Ср</th>";
    echo "<th>Чт</th>";
    echo "<th>Пт</th>";
    echo "<th>Сб</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>";
    for ($i = 0; $i < $firstDayOfMonth; $i++)
    {
        echo "<td></td>";
    }
    for ($day = 1; $day <= $daysInMonth; $day++)
    {
        $isToday = ($day == $today) ? 'today' : '';
        $isHoliday = in_array($day, [1, 7, 14]) ? 'holiday' : '';
        echo "<td class='$isToday $isHoliday'>$day</td>";
        if (($firstDayOfMonth + $day) % 7 == 0)
        {
            echo "</tr><tr>";
        }
    }
    if (($firstDayOfMonth + $daysInMonth) % 7 != 0)
    {
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}
generateCalendar();
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
<style>
    table
    {
        width: 100%;
        border-collapse: collapse;
    }
    td {
        width: 14%;
        height: 100px;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
    }
    .holiday
    {
        color: red;
    }
    .today
    {
        border: 2px solid blue;
    }
    td:hover
    {
        background-color: red;
        color: white;
    }
    td:hover.black
    {
        background-color: black;
        color: white;
    }
</style>
<body>

</body>
</html>