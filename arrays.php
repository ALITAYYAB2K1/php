<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Arrays</h1>
    <?php 
    /*
        $fruits = array("Apple", "Banana", "Orange");
        echo $fruits[0]."<br>";
        echo $fruits[1]."<br>";
        echo $fruits[2]."<br>";
        echo count($fruits)."<br>";
        $fruits[3] = "Mango";
        echo count($fruits)."<br>";
        echo var_dump($fruits);
        */

        $user = [
            "name" => "John",
            "age" => 30,
            "hobbies" => ["Reading", "Sports"],
        ];
        echo $user["name"] . "<br>";
        echo $user["age"]."<br>";
        echo $user["hobbies"][0]."<br>";
        echo $user["hobbies"][1]."<br>";

        echo "</pre>";
    ?>

</body>

</html>