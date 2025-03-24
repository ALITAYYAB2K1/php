<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require 'header.php'; 
     // if we use require instead of include, the file must exist and be valid or the script will stop executing
     // if we use include, the file does not have to exist and the script will continue executing
    ?>


    <main>
        <h1>Home</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
    </main>

    <?php include 'footer.php'; ?>


    
</body>
</html>