<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           include 'lib/class.config.php';
           include 'lib/class.database.php';
           
           $db = new database();
           $db->GetData();
           
        ?>
    </body>
</html>
