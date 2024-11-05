<?php 
require_once "config.php";


$id = filter_input(INPUT_GET, 'id');
if ($id) {
    $sql = $pdo->prepare("DELETE FROM users WHERE idusers = :ID;");
    $sql->bindValue(":ID", $id);
    $sql->execute();


}
    header("Location: index.php");
    exit;

?>