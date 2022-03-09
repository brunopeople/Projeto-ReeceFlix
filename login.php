<?php 

// realizando um if se ao clickar no botão chamar o método post
// para submeter os dados no form. 
    if(isset($_POST["submitButton"])){
        echo "Form was submitted";
    }
?>

<!DOCTYPE  html>
<html>
    <head>
        <>Bem Vindo ao Reeceflix</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    </head>
    <body>
        <div class="signInContainer">
            <div class="column">

                <div class="header">
                    <img src="assets/images/logo.png" title="Logo" alt="Logo do Site" />
                    <h3> Assina Aqui! </h3>
                    <span> Para Continuar no Reeceflix</span>
                </div>

                <form method="POST">
                    <input type="text" name="username" placeholder="Usuário" required>
                    <input type="password" name="passwrod" placeholder="Senha" required>
                </form>

                <a href="register.php" class="signInMessage">Necessita de uma Conta? Assine aqui</a>

            </div>
        </div>
    </body>
</html>