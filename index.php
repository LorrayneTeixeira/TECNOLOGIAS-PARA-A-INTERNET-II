<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body style="  background-image: url(Imagens/book.jpg);">
    <div class="container">
        <form action="login-acoes.php" method="POST">
            <div class="login">
                <h1 class="">Login</h1>
                <div class="email">
                    <p>Email</p>
                    <div class="entrada-email">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        <input type="text" placeholder="Digite seu email" name="email" required>
                    </div>
                    <hr>

                </div>
                <div class="senha">
                    <p>Senha</p>
                    <div class="entrada-senha">
                        <ion-icon name="lock-closed"></ion-icon>
                        <input type="password" placeholder="Digite sua senha" name="senha" required>
                    </div>
                </div>

                <div class="button-login">
                    <button type="submit">Login</button>
                </div>



                <div class="registrar">
                    <span>Ainda não tem conta?</span>
                    <a href="cadastrar.php">Cadastra-se</a>
                </div>
                <div>
                    <?php 
                        if(isset($_GET["acao"]) && $_GET["acao"] ==1){
                            echo "Cadastrado com sucesso!";
                        }else if(isset($_GET["acao"]) && $_GET["acao"] ==2){
                            echo "Usuário e senha inválido!";
                        }
                    ?>
                </div>

            </div>
        </form>

    </div>
    
</body>

</html>