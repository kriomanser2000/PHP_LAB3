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
.circleCont
{
    display: flex;
    gap: 5px;
}
.circle
{
    width: 50px;
    height: 50px;
    background-color: blue;
    border-radius: 50%;
}
</style>
<body>
<div class="circleCont">
    <?php for ($i = 0; $i < 10; $i++): ?>
        <div class="circle"></div>
    <?php endfor; ?>
</div>
</body>
</html>