<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include './models/dbconnect.php';
        include './models/addressCRUD.php';
        
        $addresses = readAllAddress();
        
        include './templates/view-address.html.php';
        
        
        
        ?>
    </body>
</html>
