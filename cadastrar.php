<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="  background-image: url(Imagens/book.jpg);">
    <div class="container">
        <form action="cadastro-acoes.php" method="POST">
            <div class="cadastro">
                <h2>Cadastro</h2>
                <div class="nome">
                    <p>Nome</p>
                    <input type="text" placeholder="Digite seu nome" name="nome" required>
                </div>

                <div class="email">
                    <p>Email</p>
                    <input type="text" placeholder="Digite seu email" name="email" required>
                </div>

                <div class="senha">
                    <p>Senha</p>
                    <input type="password" placeholder="Digite sua senha" name="senha" required>
                </div>
                <div class="button-cadastro">
                    <button type="submit">Cadastrar</button>
                </div>
                <div>
                    <?php
                        if(isset($_GET["acao"]) && $_GET["acao"] ==1){
                         echo "Usuário que você tentou cadastrar já existe esse email!";
                        }
                    ?>
                </div>

            </div>
                

            </div>
            

        </form>
        

        

    </div>
</body>

</html>