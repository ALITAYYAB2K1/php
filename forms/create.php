<?php 

$uploadsDir = "uploads/";
$contactsFile = "contacts.json";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

    if(empty($name) || empty($email) || empty($password)  || empty($_FILES["image"]["name"])){	
        echo "Please fill in all the fields";
    }else{
        if(!is_dir($uploadsDir)){
            mkdir($uploadsDir, 0777, true);
        }
        $imageName = time() . "_" . basename($_FILES["image"]["name"]);
        $imagePath = $uploadsDir . $imageName;

        if(move_uploaded_file(@$_FILES["image"]["tmp_name"],$imagePath))
        {
            $contacts = file_exists($contactsFile) ? 
            json_decode(file_get_contents($contactsFile), true) : [];

            $contacts[] = [
                "id" => rand(1000,10000),
                "name" => $name,
                "email" => $email,
                "password" => password_hash($password, PASSWORD_DEFAULT),
                "image" => $imagePath
            ];
            file_put_contents($contactsFile, json_encode($contacts));
            echo "Contact created successfully";
            header("Location: index.php");
            exit;
        }
        else{
            echo "Failed to upload image";
        }

       

    
    }

}
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
        <label>Username</label>
        <input type="text" name="username" placeholder="Username">
        <label>Email</label>
        <input type="email" name="email" placeholder="Email">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password">
        <label>Contact Image</label>
        <input type="file" name="image" accept="image/*" required>
        <button type="submit">Submit</button>
    </form>


</body>

</html>