<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site em PHP</title>
</head>
<body>
    <?php
       // include('includes/header.php');
       include_once('includes/header.php'); // inclui só uma vez e continua e código mesmo com algum erro
       
       // require('incluides/header.php') // não roda com erro, 
       // require_once('incluides/header.php')
    ?>
    <div>
        <?php
            echo 'Olá site teste - este é conteúdo';
        ?>
    </div>
    <?php
        include('includes/footer.php');
    ?>
</body>
</html>