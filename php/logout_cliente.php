<?php
    session_start();

    $_SESSION['login_cliente'] = false;
    
    Header('Location: ../index.php');
?>