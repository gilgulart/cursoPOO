<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    require_once "class.php" ;
    $jubileo = new Acount(1234,"CC","Jubileo",5000,true) ;
    var_dump($jubileo) ;
    echo "A sua conta {$jubileo -> getType()}" ;
    
    


    ?>
</body>

</html>