<?php
 session_start();
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

        echo '<form action="index.php" method="post">'.
             '<input type="text" name="nome" id="" placeholder="Digite o seu nome" require>'.
             '<input type="submit" value="ENVIAR">'.
             '</form>';
        
         // VERIFICAR SE O MÉTODO É POST
        if ($_SERVER['REQUEST_METHOD']==='POST'){
            echo '<p>O MÉTODO AGORA É <mark>POST</mark></p>';
        } else {echo '</br><p>O MÉTODO <b>NÃO É POST</b></p>'; }

       // VERIFICAR SE POST EXITE E SE ESTÁ VAZIO
       if (isset($_POST['nome']) && empty($_POST['nome'])) {
        echo '<p>O POST EXISTE E ESTÁ VAZIO</p>';
       } else if (isset($_POST['nome']) && !empty($_POST['nome'])){
        echo '<p>O POST EXISTE E NÃO ESTÁ VAZIO</p>';
       } else if (!isset($_POST['nome'])) {
        echo '<p>O POST NÃO EXISTE</p>';
       }

        if(!isset($_SESSION['nomes'])){
            $_SESSION['nomes']=[];
        } if (isset($_POST['nome'])) {
            $_SESSION['nomes'][] = $_POST['nome'];
        }

        // SAÍDA DAS VARIÁVEIS GLOBLAIS     
        echo '<pre>';
        print_r ($_POST);
        print_r($_SESSION);
        print_r ($_SERVER);
        echo '</pre>';
    ?>
</body>
</html>
