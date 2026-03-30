<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <form action="" method="post">
<input type="text" name="" id="" require placeholder="Digite o seu nome">    
</form> -->
    <?php
        // echo 'Ola mundo';
        echo '<form action="index.php" method="post">';
        echo '<input type="text" name="nome" id="" placeholder="Digite o seu nome" require>';
        echo '<input type="submit" value="ENVIAR">';
        echo '</form>';
        echo '<pre>';
        print_r ($_SERVER);
        print_r ($_POST);
        echo '</pre>';
    ?>
</body>
</html>