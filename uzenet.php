<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
        
    <body>
        <h1>Üzenet érkezett</h1>
        <?php
        
        echo "Név:" . $_POST["name"]."<br>";
        echo "Telefon:" . $_POST["phone"]."<br>";
        echo "Email:" . $_POST["email"]."<br>";
        echo "Üzenet:" . $_POST["message"]."<br>";
        
        ?>
    </body>
</html>

<?php
print_r($_POST);
?>