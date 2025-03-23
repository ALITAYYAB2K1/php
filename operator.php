<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Hello world</h1> <br>";
        $x = 10;
        $y = 20;
        echo $x + $y . "<br>";
        echo $x - $y . "<br>";
        echo $x * $y . "<br>";
        echo $x / $y . "<br>";
        echo $x % $y . "<br>";
        echo $x ** $y . "<br>";
        echo $x++ . "<br>";
        echo $x-- . "<br>";
        if($x == $y){
            echo "True <br>";
        }else{
            echo "False <br>";
        }
        for($i = 1; $i <= 10; $i++){
            echo $i . "<br>";
        }
        while($x <= 20){
            echo $x . "<br>";
            $x++;
        }
        do{
            echo $x . "<br>";
            $x++;
        }while($x <= 30);

    ?>
    
</body>
</html>