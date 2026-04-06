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

        echo '<form action="index2.php" method="post" accept-charset="ISO-8859-1">'.
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

       // TAMANHO DA REQUISIÇÃO CONTENT_LENGTH
       if(isset($_SERVER['CONTENT_LENGTH'])){
        echo 'Tamanho requisição:'.$_SERVER['CONTENT_LENGTH'];
       }

        // SAÍDA DAS VARIÁVEIS GLOBLAIS     
        echo '<pre>';
        print_r ($_SERVER);
        print_r ($_POST);
        echo '</pre>';
    ?>
</body>
</html>
