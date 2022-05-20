<?php
    
    $paragrafo = 'php vedi di rigare dritto';
    $_GET['censura'];
    $replaceStringa = str_replace($_GET['censura'], '***', $paragrafo);

    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p>
    <?php echo strlen($paragrafo)?>
    <?php echo $paragrafo; ?>
</p>

<span>
    <?php echo strlen($replaceStringa) ?>
    <?php echo $replaceStringa ?>
</span>


</body>
</html>


