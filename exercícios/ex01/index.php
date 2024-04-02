<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1 POO</title>
</head>

<body>
    <?php 
    require_once 'classPen.php' ; 
    $pen = new Pen ;
    $pen -> color = "Blue" ;
    $pen -> tip = 0.5;
    $pen -> discover() ;
    $pen -> scratch() ;

    $pen2 = new Pen ;
    $pen2 -> color ="Green" ;
    $pen2 -> charge = 50 ;
    $pen2 -> cover() ;
    print_r($pen2);
    ?>
</body>

</html>