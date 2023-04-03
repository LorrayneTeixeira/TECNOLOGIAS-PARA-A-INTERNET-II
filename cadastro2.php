<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="menu-img">
    <img class="imagen" src="Imagens/book.jpg">
    <div class="menu">
      <img class="escola-img" src="Imagens/escola.jpg">
      <div class="arrumar">
        <?php
        session_start();
        $id = $_GET["id"];
        ?>
        <table>
          <tr>
            <td>Nome</td>
            <td>RA</td>
            <td>Curso</td>
            <td>Excluir </td>
          </tr>
          <?php
          foreach ($_SESSION["alunosc"] as $arra) {
          ?>
            <tr>
              <td><?= $arra[0] ?></td>
              <td><?= $arra[1] ?></td>
              <td><?= $arra[2] ?></td>
              <td><button>Excluir</button> </td>
            </tr>

          <?php
          }
          ?>
        </table>
      </div><!--arrumar-->
    </div><!--menu-->
    <div class="menu2">
      <form action="cadastro2-acoes.php" method="POST">
        <div class="alunoc">
          <h1>Olá, seja bem-vindo(a) ao cadastro de alunos.</h1>
          <div>
            <p>Nome</p>
            <input type="text" name="nome-aluno" placeholder="Nome do aluno">
          </div>
          <div>
            <p>RA</p>
            <input type="text" name="ra-aluno" placeholder="RA do aluno">
          </div>
          <div>
            <p>Curso</p>
            <input type="text" name="curso" placeholder="Curso do aluno">
          </div>
          <div class="button-cadastro">
            <button type="submit">Cadastrar</button>
          </div><!--button-cadastro-->
          <div>
            <?php
            if (isset($_GET["valid"]) && $_GET["valid"] == 2) {
              echo "RA já existente;";
            }
            ?>
</body>

</html>
</div>

</div><!--alunoc-->


</form>
</div><!--menu2-->
</div><!--menu-->
</body>

</html>