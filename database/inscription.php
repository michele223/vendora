<?php
// Démarrage de la session
session_start();

include("connexionDatabase.php");

// Vérification des données POST
if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Vérifier si l'utilisateur existe dans la table des commerçants
    $query_commercants = "SELECT * FROM commercants WHERE email = '$email'";
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
                
                // Redirection vers le tableau de bord du commerçant
                header("Location: http://localhost/vendora/dashboard.php");
                exit();  // Arrêter l'exécution du script après la redirection
            }
        }
    } 
    // Si l'utilisateur n'est pas trouvé dans les commerçants, vérifier dans les administrateurs
    else {
        $query_admins = "SELECT * FROM admin ";
        $result_admins = $connexion->query($query_admins);
        
        // Si un administrateur est trouvé
        if ($result_admins->num_rows > 0) {
            while ($rows = $result_admins->fetch_assoc()) {
                if ($rows["email"] == $email && $rows["adminPassword"] == $password) {
                    // Stocker les informations de l'administrateur dans la session
                    $_SESSION["user_name"] = $rows["nomAdmin"];
                    $_SESSION["user_forname"] = $rows["prenomAdmin"];
                    $_SESSION["user_id"] = $rows["adminId"];
                    $_SESSION["user_phone"]="unkowm";
                    $_SESSION["user_type"] = 'admin'; // Indiquer que l'utilisateur est un administrateur
                    
                    // Redirection vers le tableau de bord de l'administrateur
                    header("Location: http://localhost/vendora/dashboard.php");
                    exit();  // Arrêter l'exécution du script après la redirection
                }
            }
        }
    }
    
    // Si aucun utilisateur n'est trouvé ou le mot de passe est incorrect
    echo "Identifiants incorrects";
}

// connexion et creation



?>
