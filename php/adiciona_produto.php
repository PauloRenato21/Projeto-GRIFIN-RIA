<?php
    include_once "conexao.php";
    session_start();

    $valido = true;
    $dir_new_bolos = 'Imagens/Promocoes_Bolos/';
    $dir_bolos = '../Imagens/Promocoes_Bolos/';
    $uploadOk = 1;

    $produtos = array("bolo", "preco");
    foreach ($produtos as $campo){
        if (empty($_POST[$campo]) || empty($_FILES['fileToUpload']['name'])){
            $valido = false;
            $_SESSION['produto'] = true;
            header('location:../admin_cadastro.php');
        } 
    }

    if($valido){
        $bolo = $_POST['bolo'];
        $preco = $_POST['preco'];
        
        $file = $dir_bolos . basename($_FILES["fileToUpload"]["name"]);
        $file_BD = $dir_new_bolos . basename($_FILES["fileToUpload"]["name"]);

        $file_type = strtolower(pathinfo($file,PATHINFO_EXTENSION));
    
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }
        }
    
        if (file_exists($file)) {
            $uploadOk = 0;
        }
    
        if($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $uploadOk = 0;
        }
    
        if ($uploadOk == 0) {

            $_SESSION['produto'] = true;
            header('location:../admin_cadastro.php');

            
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file)) {

                $sql = 'insert into produto(nome, preço, foto) values("'. $bolo .' "," ' . $preco .' "," '. $file_BD .'")';

                $res = $con->exec($sql);

                $_SESSION['produto'] = false;

                header('location:../admin_cadastro.php');

            } else {

                $_SESSION['produto'] = true;
                header('location:../admin_cadastro.php');
            }
        }
    }

    session_write_close();
?>