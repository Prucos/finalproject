<?php

    require(__DIR__."/includes/config.php");
    $uploaddir = __DIR__."/uploads/";
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    $systemBaseName = "base.txt"; // sets uploaded commodities base file name
    
    //Loading file
    echo '<pre>';
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo "File successfully loaded.\n";
    } else {
        echo "File not loaded!\n";
    }
    // Debug info
    //echo 'Некоторая отладочная информация:';
    //print_r($_FILES);
    
    print "</pre>";
    
    // changing file permissions
    chmod($uploaddir . $_FILES['userfile']["name"], 0777);
    if (file_exists($uploaddir . "base.txt")) unlink($uploaddir . "base.txt");  // Deletes old base to avoid errors
    rename($uploaddir . $_FILES['userfile']["name"], $uploaddir . $systemBaseName); // renames uploaded file in systemBaseName
    
    include_once(__DIR__."/importToDB.php");
?>