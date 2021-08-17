<?php
    $host = 'mysql:host=sql305.epizy.com;dbname=epiz_29457133_db_topbolos';
    $user = 'epiz_29457133';
    $password = 'NGdCpWPv4L1n';

    $con = new pdo($host, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
?>