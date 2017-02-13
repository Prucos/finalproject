<?php
                if(!empty($products) ) {
echo ('<div class="panel panel-primary">
    <div class="panel-heading">MySQL table content</div>
    <table class="table table-hover .table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Name</th>
                <th>Price</th>
                <th>Article_Number</th>
                <th>Image_Link</th>
            </tr>
        </thead>
        <tbody>');
            
                    foreach ($products as $product)
                    {
                        print("<tr>");
                        print("<td>{$product["ID"]}</td>");
                        print("<td>{$product["Category"]}</td>");
                        print("<td>{$product["Name"]}</td>");
                        print("<td>{$product["Price"]}</td>");
                        print("<td>{$product["Article_Number"]}</td>");
                        print("<td><img src='{$product["Image_Link"]}'/></td>");
    
                        print("</tr>");
                    }
        echo ('</tbody>
    </table>
</div>');

                } else {
                    print("<h3>Data base is empty!</h3>");
                }
        
            ?>