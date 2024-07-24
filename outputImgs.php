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
    .container
    {
        display: flex;
        flex-wrap: wrap;
    }
    .container img
    {
        width: 200px;
        height: 150px;
        margin: 5px;
    }
</style>
<body>
<div class="container">
    <?php
    $directory = 'img/';
    $images = glob($directory . 'img*.jpg');
    foreach ($images as $image)
    {
        echo '<img src="' . $image . '" alt="Image">';
    }
    ?>
</div>
</body>
</html>