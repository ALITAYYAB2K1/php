<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
        $string = "Hello World";
        echo strtolower($string)."<br>";
        echo strtoupper($string)."<br>";
        echo str_replace("Hello", "Hi", $string)."<br>";
    ?>
</body>

</html>