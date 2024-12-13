<?php 
include"connexionDatabase.php";
global $result;
if (isset($_POST["email"], $_POST["password"], $_POST["name"], $_POST["surname"], $_POST["tel"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $surname = $_POST["surname"];
    $adminId = 1;
    if (is_null($email)&&is_null($password)){
        $result=false;
    }else{

    // creer un user
    $query_insert_commercants = "INSERT INTO commercants  VALUES('$name','$surname','$tel','$password','',1,'$email','null')";
    $result = $connexion->query($query_insert_commercants);
    }
    

}

?>