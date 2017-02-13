<?php

    // configuration
    require("includes/config.php"); 

    // search for user shared in DB
    $rows = CS50::query( "SELECT * FROM commodities");
    $products = [];
    foreach ($rows as $row)
    {
        {
            $products[] = [
                "ID" => $row["ID"],
                "Category" => $row["Category"],
                "Name" => $row["Name"],
                "Price" => $row["Price"],
                "Article_Number" => $row["ArtNumber"],
                "Image_Link" => $row["Image"]
            ];
        }
    }
    
    // render portfolio
    render("comm_table_template.php", ["products" => $products, "title" => "Commodities list"]);
?>