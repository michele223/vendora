<?php
// Démarrage de la session
require("./database/session.php");


// Vérifiez que les variables de session sont définies
if (!isset($_SESSION["user_name"], $_SESSION["user_forname"])) {
    header("errorpage.php");
    exit();
}

// Si l'utilisateur est un administrateur, récupérer la liste des commerçants
$commercants = [];
if ($_SESSION["user_type"] == "admin") {
    $query = "SELECT * FROM commercants";
    $result = $connexion->query($query);

    // Récupérer tous les commerçants dans un tableau
    while ($row = $result->fetch_assoc()) {
        $commercants[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Web</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="flex h-screen">
    <!-- Sidebar -->
    <div class="bg-blue-900 text-white w-[300px] p-4 flex flex-col">
        <div class="text-lg font-bold mb-4">
            <?php
            echo $_SESSION["user_name"] . " " . $_SESSION["user_forname"];
            ?>
        </div>
        <?php if ($_SESSION["user_type"] == "admin"): ?>
            <button class="bg-blue-500 text-white py-2 px-4 rounded mb-2">Costumers</button>
            <button class="bg-blue-500 text-white py-2 px-4 rounded mb-2">History</button>
            <button class="bg-blue-500 text-white py-2 px-4 rounded mb-2"><a href="http://localhost/vendora/signup.php"> add
                    a customer</a> </button>
        <?php endif; ?>
        <button class="bg-blue-500 text-white py-2 px-4 rounded mb-2">Add a product</button>
        <button class="bg-blue-500 text-white py-2 px-4 rounded mb-2">Earnings</button>
        <button class="bg-blue-500 text-white py-2 px-4 rounded mb-2">My products</button>


        <!-- Bouton de déconnexion -->
        <form action="endsession.php" method="POST">
            <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded w-full mt-auto">
                Déconnexion
            </button>
        </form>

        <!-- User Information -->
        <div class="p-4 mt-[300px]">
            <h1 class="text-xl font-bold">Nom :</h1>
            <p class="text-lg"><?php echo ($_SESSION["user_name"]); ?></p>

            <h1 class="text-xl font-bold">Prénom :</h1>
            <p class="text-lg"><?php echo ($_SESSION["user_forname"]); ?></p>

            <h1 class="text-xl font-bold">Téléphone :</h1>
            <p class="text-lg"><?php echo ($_SESSION["user_phone"]); ?></p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <div class="bg-yellow-500 text-center py-2 text-sm font-semibold">
            Authentic • Sustainable • Proudly Cameroonian
        </div>

        <!-- Search and Icons -->
        <div class="flex items-center justify-between p-4">
            <div class="flex items-center">
                <i class="fas fa-bars text-2xl mr-4"></i>
                <div class="relative">
                    <input type="text" class="bg-gray-100 rounded-full pl-10 pr-4 py-2 w-64" placeholder="Search">
                    <i class="fas fa-search absolute left-3 top-2 text-gray-500"></i>
                </div>
            </div>
        </div>

        <!-- Affichage des commerçants pour les admins -->
        <?php if ($_SESSION["user_type"] == "admin"): ?>
            <div class="p-4">
                <h2 class="text-2xl font-bold">Liste des commerçants</h2>
                <table class="table-auto w-full mt-4 border-collapse border border-gray-200">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border">matricule</th>
                            <th class="px-4 py-2 border">Nom</th>
                            <th class="px-4 py-2 border">Prénom</th>
                            <th class="px-4 py-2 border">Email</th>
                            <th class="px-4 py-2 border">Téléphone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($commercants as $commercant): ?>
                            <tr>
                                <td class="px-4 py-2 border"><?php echo ($commercant["commercantId"]); ?></td>
                                <td class="px-4 py-2 border"><?php echo ($commercant["nom"]); ?></td>
                                <td class="px-4 py-2 border"><?php echo ($commercant["prenom"]); ?></td>
                                <td class="px-4 py-2 border"><?php echo ($commercant["email"]); ?></td>
                                <td class="px-4 py-2 border"><?php echo ($commercant["tel"]); ?></td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
            <form action="#" method="post" class="pl-4">
                <p> Entrer un l'identifiant d'un commercant a effacer</p>
                <input type="text" placeholder="id" name="id" class="w-[100px] border rounded-lg px-4 py-2 mb-3" required>
                <input class="w-[100px] bg-red-500 font-semibold text-white rounded-lg py-2" type="submit"
                    value="delete"></input>
            </form>
        <?php endif; ?>
        <form action="database/televersement.php" method="post" enctype="multipart/form-data"
            class="bg-white ml-[20px] w-[300px] ">
            <input type="text" placeholder="nom" name="nom" class="w-full border rounded-lg px-4 py-2 mb-3" required>
            <select name="categorie" id="" class="w-full border rounded-lg px-4 py-2 mb-3">
                <option>jewllwry</option>
                <option>kitchen</option>
                <option>dresses</option>
                <option>furniture</option>
            </select>
            <label for="img">selectionner l'image de l'article</label>
            <input type="file" placeholder="Name" name="img" class="w-full border rounded-lg px-4 py-2 mb-3" required>
            <input type="" placeholder="prix" name="prix" class="w-full border rounded-lg px-4 py-2 mb-3" required>

            <input type="text" placeholder="qte" name="qte" class="w-full border rounded-lg px-4 py-2 mb-3" required>
            <input type="text" placeholder="couleur" name="couleur" class="w-full border rounded-lg px-4 py-2 mb-3"
                required>
            <input class="w-full bg-blue-700 text-white rounded-lg py-2" type="submit" value="ajouter"></input>
        </form>

    </div>


    </div>
</body>

</html>