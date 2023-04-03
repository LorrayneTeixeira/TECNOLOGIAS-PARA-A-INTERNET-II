<?php
session_start();

if (!isset($_SESSION["alunosc"])) {
    $_SESSION["alunosc"] = array();
}
$arra = array();
$arra[] = $_POST["nome-aluno"];
$arra[] = $_POST["ra-aluno"];
$arra[] = $_POST["curso-aluno"];

$cont = 0;
$parar = false;

while ($cont < sizeof($_SESSION["alunosc"]) && $parar == false) {
    $arrausu = $_SESSION["alunosc"];
    $alunosc = $arrausu[$cont];

    if ($alunosc[1] == $arra[1]) {
        $parar = true;
    }
    $cont++;
}

if ($parar == false) {
    $_SESSION["alunosc"][] = $arra;
    header("Location: cadastro2.php?valid=2");
} else {
    header("Location: cadastro2.php?id=" . $cont);
}
?>