<?php
session_start();
include_once "conexao.php";
$login = $_POST['username'];
$senha = $_POST['password'];
$sql = "select * from fornecedor where login = '$login' and senha = '$senha'";
$resultado = $con->query($sql);

if ($resultado->rowCount()){
    $_SESSION['erro_admin'] = false;
    Header('Location: ../pedidos.html');
}
else {
    header('Location: ../admin.php');
    $_SESSION['erro_admin'] = true;
}
session_write_close();
?>