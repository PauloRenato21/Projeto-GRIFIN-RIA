<?php
    $host = 'mysql:host=sql205.epizy.com;dbname=epiz_31873051_topBolos';
    $user = 'epiz_31873051';
    $password = 'gdXpe2lmAhVrq7E';

    $con = new pdo($host, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
?>