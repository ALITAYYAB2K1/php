<?php 
 $pdo = require 'db.php';
 $contacts = [];
 if( $pdo) {
    // $stmt is local variable for statment 
    $stmt = $pdo->query("SELECT * FROM contacts");

    //fetch all contacts from statement
    $contacts = $stmt -> fetchAll(PDO::FETCH_ASSOC);
 }

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="create.php">Create new contact</a>
    <ul>
        <?php foreach ($contacts as $contact) :?>
        <li>
            <img src="<?php echo $contact["image"]; ?>" height="50" />
            <?php echo $contact["name"]; ?>
            <?php echo $contact["email"]; ?>
            <a href="delete.php?id=<?php echo $contact["id"]; ?>">
                Delete
            </a>
        </li>

        <?php endforeach;?>

    </ul>



</body>

</ht>