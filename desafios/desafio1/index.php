<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1> Gil Bank </h1>
        <form action="<?=$_SERVER ['PHP_SELF'] ?>" method="get">
            <input type="text" name="owner" id="owner" placeholder="Usuário">
            <input type="number" name="numberAccount" id="numberAccount" placeholder="Número da conta" value="">
            <button type="submit">Enviar</button>
        </form>
    </main>
    <section>
        <div class="Instructions">

            <h1>Como funciona?</h1>
            <p>Na Gil Bank temos duas contas: <br> Jubileo e Creuza</p>
            <ol type="I">

                <li>Para Jubileo considerar:</li>
                <ul>
                    <li>username: Jubileo</li>
                    <li>número da conta: 1234</li>
                </ul>
                <li>Para Creuza considerar:</li>
                <ul>
                    <li>Username: Creuza</li>
                    <li>Número da conta: 4321</li>
                </ul>

            </ol>
        </div>
        <?php 
    require_once "classBank.php" ;
    $jubileo = new Account(1234,"CC","Jubileo",5000,true) ;
    $creuza = new Account(4321,"CP","Creuza",1200,false) ;
    if (isset($_GET['owner']) && isset ($_GET['numberAccount'])) {

        $numberAcount = $_GET['numberAccount'] ;
        $owner = $_GET['owner'] ;
    
    if ($owner ==='')    
        
    }
    ?>
    </section>
</body>

</html>