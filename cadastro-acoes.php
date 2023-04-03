<?php
session_start();

if(!isset($_SESSION["alunos"])){
    $_SESSION["alunos"]=array();
}

$dados=array();
$dados[]= $_POST["nome"];
$dados[] = $_POST["email"];
$dados[] = $_POST["senha"];

$cont = 0;
$parar = false;

while($cont<sizeof($_SESSION["alunos"]) && $parar == false){
    $dadosusu = $_SESSION["alunos"];
    $alunos = $dadosusu[$cont];

    if($alunos[1]== $dados[1]){
        $parar = true;
    }
    $cont++;
}

if($parar== false){
    $_SESSION["alunos"][]=$dados;
    header("Location: index.php?acao=1");
}else{
    header("Location: cadastrar.php?acao=1");
}
?>