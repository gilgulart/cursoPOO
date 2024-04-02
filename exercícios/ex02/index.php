<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objeto Mouse</title>
</head>

<body>
    <?php 
    require_once 'mouse.php' ;
    $mouse = new mouse ;
    // $mouse -> button = true;
    $mouse -> open() ;
    $mouse -> notclick() ;
    ?>

</body>

</html>