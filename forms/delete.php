<?php 
    if(isset($_GET["id"]))
    {
        $contactFile = 'contacts.json';
        $contacts = file_exists($contactFile) ? 
            json_decode(file_get_contents($contactFile), true) : [];
        // remove contact by id
        $contacts = array_filter($contacts,fn($c) => $c["id"] != $_GET["id"]);

        file_put_contents($contactFile, json_encode(array_values($contacts)));
        echo "contact deleted successfully";
        header("Location: index.php");
    }
?>