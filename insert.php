<?php 
require_once "config.php";
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email) {


    $sql = $pdo->prepare("SELECT * FROM usuers WHERE email = :email");
    $sql->bindParam(':email', $email);
    $sql->execute();

    if($sql->rowCount() === 0){
        $sql = $pdo->prepare("INSERT INTO crud_pdo.users (`name`, `email`) VALUES (:name, :email)");
        $sql->bindParam(':name', $name);
        $sql->bindParam(':email', $email);
        $sql->execute();
       
       
        header("Location: index.php");
       
        exit;
    } 
    
    else {

    header("Location: add.php");
    exit;
}

}else {
    header("Location: add.php");
    exit;
}



?>