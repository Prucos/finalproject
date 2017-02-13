<?php
        //require("includes/config.php");
        include('includes/simple_html_dom.php');
        //$search_keyword = $_POST["commodity"];
        
        $datas = CS50::query("SELECT * FROM commodities WHERE 1");
        
        foreach($datas as $data) {
            //var_dump($data);
            $search_keyword = $data["Name"];
            $newhtml = file_get_html("https://www.google.com.ua/search?q=".$search_keyword."&as_st=y&hl=ru&tbas=0&tbs=isz:l,imgo:1&tbm=isch&ei=Wj5NWOq4LMKlsAGE_K74DA&emsg=NCSR&noj=1");
            $images = $newhtml->find('img');
            array_shift($images);
            $image = $images[5];
        
            //foreach($images as $image) {
            $url = $image->src;
            //echo '<img src="'.$url.'">';
            CS50::query("UPDATE commodities SET Image = ? WHERE Name = ?", 
                $url, $search_keyword);
        }
        
        render("upload_complete_template.php", ["title" => "Upload complete!"]);
        //echo "END!!";
        
        
        
            
	//}
	
?>