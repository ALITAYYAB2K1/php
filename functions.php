<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Functions</h1>
    <?php
    function sayHello($name = "World"){
        return "Hello $name <br>";
    }
    $name = sayHello("John");
    echo $name;
    function add($num1, $num2){
        return $num1 + $num2;
    }
    echo add(10, 20)."<br>";


    ?>
    
</body>
</html>