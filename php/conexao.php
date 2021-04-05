<?php
    $host = 'mysql:host=grifnoria.mysql.dbaas.com.br;dbname=grifnoria';
    $user = 'grifnoria';
    $password = 'qwe123qwe';

    $con = new pdo($host, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
?>