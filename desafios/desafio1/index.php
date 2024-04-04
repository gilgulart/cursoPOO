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
        <form action="<?=$_SERVER ['PHP_SELF'] ?>" method="post">
            <input type="text" name="owner" id="owner" placeholder="Usuário">
            <input type="number" name="numberAccount" id="numberAccount" placeholder="Número da conta"
                value="<?=$numberAccount?>">
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
         $jubileo = new Account(1234,"Corrente","Jubileo",5000,true) ;
         $creuza = new Account(4321,"Poupança","Creuza",1200,false) ;
         function renderDepositForm($accountType) {
            echo "<form action='{$_SERVER['PHP_SELF']}' method='post'>" ;
            echo "<input type='hidden' name='accountType' value='$accountType'>" ;
            echo "<input type='number' name='depositAmount' placeholder='Valor a depositar'>";
            echo "<button type='submit'>Depositar</button>";
            echo "</form>";
        }
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['owner']) && isset($_POST['numberAccount'])) {
            $numberAccount = $_POST['numberAccount'];
            $owner = $_POST['owner'];
            if ($owner === "Jubileo" && $numberAccount == $jubileo->numberAccount) {
                $jubileo->activateAccount();
                echo "<p>Senhor Jubileo, sua conta {$jubileo->getType()} número {$jubileo->numberAccount} tem saldo: R$ {$jubileo->getBalance()}</p>";
                renderDepositForm("Jubileo");
             } elseif ($owner === "Creuza" && $numberAccount == $creuza->numberAccount) {
                $creuza->activateAccount();
                echo "<p>Senhora Creuza, sua Conta {$creuza->getType()} número {$creuza->numberAccount} tem saldo: R$ {$creuza->getBalance()}</p>";
                renderDepositForm("Creuza");
             } else {
                echo "<p>Usuário ou número de conta inválido</p>";
             }
        }
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['depositAmount'])) {
            $selectedAccount = $_POST['accountType'];
            $depositAmount = $_POST['depositAmount'];
            if ($selectedAccount === "Jubileo") {
                $jubileo->deposit($depositAmount);
             } else{
                $creuza->deposit($depositAmount);
             }
        }
    ?>

    </section>
</body>

</html>