<?php
    //require(__DIR__."/includes/config.php");

    // import files
    if (($file = fopen(__DIR__."/uploads/base.txt", "r")) !== FALSE) {
            while ( ($data = fgetcsv($file, 0, ",")) !== FALSE) {
                //var_dump($data[0], $data[1], $data[2], $data[3]);
                CS50::query("INSERT INTO commodities (ArtNumber, Category, Name, Price) VALUES (?, ?, ?, ?) ON DUPLICATE KEY UPDATE Price = Price", $data[0], $data[1], $data[2], $data[3]);
            }
    } else {
        echo "failed to open file";
    }
    fclose($file);
    //echo ("imported to DB");
    include(__DIR__."/search.php");
?>