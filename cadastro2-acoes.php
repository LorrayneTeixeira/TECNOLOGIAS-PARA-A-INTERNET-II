<?php
session_start();

if(!isset($_SESSION['alunos'])){
    $_SESSION['alunos']=array();
}

$arra=array();
$arra=$_POST["nome-aluno"];
$arra=$_POST["ra-aluno"];
$arra=$_POST["curso-aluno"];

$cont=0;
$parar=false;

while($cont<sizeof($_SESSION['alunos']) && $parar==false){
    $arrausu= $_SESSION['alunos'];
    $alunos=$arrausu[$cont];

    if($alunos[1]==$arra[1]){
        $parar=true;
    }
    $cont++;
}

if($parar==false){
    $_SESSION['alunos'][]=$arra;
    header("Location: cadastro2.php?valid=2");

}else{
    header("Location: visualizar.php?id=".$cont);
}
?>