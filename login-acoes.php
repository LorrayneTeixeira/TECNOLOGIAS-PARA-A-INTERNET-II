<?php
session_start();
$dadosUsu = $_SESSION["alunos"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cont = 0;
$parar = false;
while ($cont < sizeof($_SESSION["alunos"]) && $parar == false) {
  $dadosusu = $_SESSION["alunos"];
  $alunos = $dadosusu[$cont];

  if ($alunos[1] == $email && $alunos[2] == $senha) {
    $parar = true;
  } else {
    $cont++;
  }
}


if ($parar == false) {

  header("Location: index.php?acao=2");
} else {
  header("Location: cadastro2.php");
}

?>