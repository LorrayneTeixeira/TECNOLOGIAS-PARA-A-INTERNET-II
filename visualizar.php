<?php
session_start();
$id = $_GET["id"];
?>

<html>
    <body>
        <h1>Olá <?= $_SESSION["alunos"][$id][0] ?></h1>
        <table>
        <tr>
                <td>Nome</td>
                <td>RA</td>
                <td>Curso</td>
                <td>Excluir </td>
            </tr>
            <?php
            foreach ($_SESSION["alunos"] as $usu){
            ?>
              <tr>
                <td><?=$usu[0]?></td>
                <td><?=$usu[2] ?></td>
                


                <td><button>Excluir</button> </td>
            </tr>
            
            <?php
            }
            ?>
        </table>
    </body>
</html>