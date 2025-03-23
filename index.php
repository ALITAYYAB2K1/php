<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php
     $name = "John";
      $age = 25;
      $isMale = true;
      $height = 1.85;
      $salary = null;
      // Print the variables.
      echo $name . "<br>";
      echo $age ."<br>";
      echo $isMale ."<br>";
      echo $height . "<br>";
      echo $salary . "<br>";
      // Print the type of the variables.
      echo gettype($name) .  "<br>";
      echo gettype($age) . "<br>";
      echo gettype($isMale) . "<br>";
      echo gettype($height) . "<br>";
      echo gettype($salary) . "<br>";
      // Print the whole variable.
      var_dump($name);
      var_dump($age);
      var_dump($isMale);
      var_dump($height);
      var_dump($salary);
      // Change the value of the variable.
      $name = false;
      $age = "25";
      $isMale = "true";
      $height = 1.85;
      $salary = null;
      // Print the type of the variables.
      echo gettype($name) .  "<br>";
      echo gettype($age) . "<br>";
      echo gettype($isMale) . "<br>";
      echo gettype($height) . "<br>";
      echo gettype($salary) . "<br>";
      


    

  
      ?>

  </body>
</html>
