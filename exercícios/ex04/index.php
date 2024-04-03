<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1 POO</title>
</head>

<body>
    <pre>

        <?php 
        //usuário requer acesso a classe da informação protegida
    require_once 'classPen.php' ; 
        //O usuário solicita um objeto da classe
    $pen = new Pen("BIC","Azul",0.5) ;
       //O setter é o intermediário que dará acesso a informação 
    // $pen -> setModel("BIC") ;
    // $pen -> setTip(0.5) ;
    // echo "eu tenho uma caneta {$pen -> getModel()} de ponta {$pen -> getTip()}" ;
    print_r($pen);
    ?>
    </pre>
</body>

</html>