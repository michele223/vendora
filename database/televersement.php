<?php
$_FILES["img"]["name"];
$tmp_dir = $_FILES["img"]["tmp_name"];
$file_name = basename($_FILES["img"]["name"]);
$img_dir = "C:/xamp/htdocs/img/" . $file_name;
move_uploaded_file($tmp_dir, $img_dir);
$img_links = "http://localhost:80/img/" . $file_name;

if (isset($_POST["nom"], $_POST["category"], $_POST["prix"], $_POST["qte"], $_POST["couleur"], $img_links, $_SESSION["user_id"])) {
    $nom = $_POST["nom"];
    $category = $_POST["category"];
    $prix = $_POST["prix"];
    $qte = $_POST["qte"];
    $couleur = $_POST["couleur"];
    $userid = $_SESSION["user_id"];



    // creer un user
    $query_insert_articles = "INSERT INTO articles  VALUES('$userid','$nom','$category','$img_links','$qte','$prix')";
    $result = $connexion->query($query_insert_articles);
}

$query_articles = "SELECT $img_links FROM commercants ";
$result_commercants = $connexion->query($query_commercants);

// Si un commerçant est trouvé
if ($result_commercants->num_rows > 0) {
    while ($rows = $result_commercants->fetch_assoc()) {
        if ($rows["email"] == $email && $rows["sellerPassword"] == $password) {
            // Stocker les informations du commerçant dans la session
            $_SESSION["user_name"] = $rows["nom"];
            $_SESSION["user_forname"] = $rows["prenom"];
            $_SESSION["user_phone"] = $rows["tel"];
            $_SESSION["user_id"] = $rows["commercantId"];
            $_SESSION["user_type"] = 'commercant'; // Indiquer que l'utilisateur est un commerçant
            

?>