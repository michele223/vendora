<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendora</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="font-sans"> <!-- Header -->
    <!-- Header -->
    <header class="bg-yellow-500 text-center py-2 text-sm text-white">
        Authentic · Sustainable · Proudly Cameroonian
    </header>

    <!-- Navigation -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-2 flex items-center justify-between">
            <!-- Left Section -->
            <div class="flex items-center relative">
                <!-- Dropdown Toggle Button -->
                <button id="menu-toggle" class="text-2xl mr-4">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Dropdown Menu -->
                <div id="dropdown-menu"
                    class="hidden absolute bg-white shadow-lg rounded-lg top-full mt-2 left-0 w-48 z-10">
                    <ul class="py-2">
                        <li><a href="art.php" class="block px-4 py-2 hover:bg-gray-200">Art and Collections</a></li>
                        <li><a href="dresses.php" class="block px-4 py-2 hover:bg-gray-200">Dresses</a></li>
                        <li><a href="jewelry.php" class="block px-4 py-2 hover:bg-gray-200">Jewelry</a></li>
                        <li><a href="kitchen.php" class="block px-4 py-2 hover:bg-gray-200">Kitchen and Dining</a></li>
                        <li><a href="homeacc.php" class="block px-4 py-2 hover:bg-gray-200">Home and Accessories</a>
                        </li>
                        <li><a href="souvenirs.php" class="block px-4 py-2 hover:bg-gray-200">Souvenirs</a></li>
                        <li><a href="footwears.php" class="block px-4 py-2 hover:bg-gray-200">Footwears</a></li>
                        <li><a href="storage.php" class="block px-4 py-2 hover:bg-gray-200">Storage</a></li>
                        <li><a href="furniture.php" class="block px-4 py-2 hover:bg-gray-200">Furniture</a></li>
                    </ul>
                </div>

                <!-- Logo -->
                <a href="home.php"><img src="http://localhost/vendora/images/icone-shopping-saint-valentin (1).png"
                        alt="Vendora logo" class="h-10"></a>
                <a href="home.php"><span class="text-xl font-bold ml-2">Vendora</span></a>
            </div>

            <!-- Right Section -->
            <div class="flex items-center space-x-4">
                <input type="text" placeholder="Search" class="border rounded-full px-4 py-1">
                <a href="login.php" class="text-lg"><i class="fas fa-user"></i> Log In</a>
                <a href="wishlist.php" class="text-lg"><i class="fas fa-heart"></i> Wishlist</a>
                <a href="cart.php" class="text-lg"><i class="fas fa-shopping-cart"></i> Cart</a>
            </div>
        </div>
    </nav>

    <!-- JavaScript -->
    <script>
        // Dropdown toggle functionality
        const menuToggle = document.getElementById('menu-toggle');
        const dropdownMenu = document.getElementById('dropdown-menu');

        menuToggle.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        // Close the dropdown when clicking outside
        document.addEventListener('click', (event) => {
            if (!menuToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script>

    <!-- Tailwind + JavaScript -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const dropdownMenu = document.getElementById('dropdown-menu');

        menuToggle.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        // Optional: Close the menu when clicking outside
        document.addEventListener('click', (event) => {
            if (!menuToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script>
    <!-- Hero Section -->
    <section class="relative"> <img
            src="http://localhost/vendora/images/Fan_Foldable Ankara Fan_African Print Handheld Fan.jpg"
            alt="Colorful fan and hand" class="w-full h-96 object-cover">
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-white text-4xl font-bold">Discover Our Collections</h1>
        </div>
    </section> <!-- Introduction Section -->
    <section class="text-center py-8 px-4">
        <h2 class="text-yellow-500 text-2xl font-bold">Discover the Essence of Cameroonian Craftsmanship</h2>
        <p class="mt-4 text-gray-700">Immerse yourself in a world of unique, handmade treasures that blend tradition and
            modernity. From vibrant wax fabric creations to intricately crafted wooden furniture, each piece in our
            collection is a testament to the rich culture and artistry of Cameroon. Explore our diverse range of
            products and find the perfect addition to your home or wardrobe—crafted with passion, rooted in heritage.
        </p>
    </section> <!-- Collections Section -->
    <section class="bg-white py-5">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-8 text-yellow-500">Explore Our Unique Collections</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-3 gap-2">
                <div class="text-center">
                    <a href="jewelry.php" class="block">
                        <img src="http://localhost/vendora/images/Ndop Bamileke African Print Knot Jewelry Set (Necklace - Bracelets - Earrings).jpg"
                            alt="Jewelry" class="mx-auto mb-2 rounded-lg w-60 h-60">
                        <p class="font-bold text-yellow-500">Jewelry</p>
                    </a>
                </div>
                <div class="text-center">
                    <a href="art.php" class="block">
                        <img src="http://localhost/vendora/images/African Ashanti Comb Ghana Presitge Status Comb.jpg"
                            alt="Art & collectibles" class="mx-auto mb-2 rounded-lg w-60 h-60">
                        <p class="font-bold text-yellow-500">Art & collectibles</p>
                    </a>
                </div>
                <div class="text-center">
                    <a href="furniture.php" class="block">
                        <img src="http://localhost/vendora/images/Hand-carved African Bamileke Throne Chair Decorated With the NDOP Ethnic Textile and Cowries - Etsy.jpg"
                            alt="Art & collectibles" class="mx-auto mb-2 rounded-lg w-60 h-60">
                        <p class="font-bold text-yellow-500">Furniture</p>
                    </a>
                </div>
                <div class="text-center">
                    <a href="dresses.php" class="block">
                        <img src="http://localhost/vendora/images/b8437e9a-1cd8-4152-856b-6967293f96eb.jpg"
                            alt="Art & collectibles" class="mx-auto mb-2 rounded-lg w-60 h-60">
                        <p class="font-bold text-yellow-500">Dresses</p>
                    </a>
                </div>
                <div class="text-center">
                    <a href="homeacc.php" class="block">
                        <img src="http://localhost/vendora/images/Bedding Sets.jpg" alt="Art & collectibles"
                            class="mx-auto mb-2 rounded-lg w-60 h-60">
                        <p class="font-bold text-yellow-500">Home Accessories</p>
                    </a>
                </div>
                <div class="text-center">
                    <a href="footwears.php" class="block">
                        <img src="http://localhost/vendora/images/African Print Block Heel Sandal £69….jpg"
                            alt="Art & collectibles" class="mx-auto mb-2 rounded-lg w-60 h-60">
                        <p class="font-bold text-yellow-500">FootWears</p>
                    </a>
                </div>
                <div class="text-center">
                    <a href="souvenirs.php" class="block">
                        <img src="http://localhost/vendora/images/Authenic Unisex Beaded Bracelet Set _ Color_ Red_Yellow _ Size_ Os.jpg"
                            alt="Art & collectibles" class="mx-auto mb-2 rounded-lg w-60 h-60">
                        <p class="font-bold text-yellow-500">Souvenirs</p>
                    </a>
                </div>
                <div class="text-center">
                    <a href="kitchen.php" class="block">
                        <img src="http://localhost/vendora/images/108729a9-e1ce-4816-a0f3-6cab0799feb3.jpg"
                            alt="Art & collectibles" class="mx-auto mb-2 rounded-lg w-60 h-60">
                        <p class="font-bold text-yellow-500">Kitchen and Dining</p>
                    </a>
                </div>
                <div class="text-center">
                    <a href="storage.php" class="block">
                        <img src="http://localhost/vendora/images/Panier Iringa - Naturel _ M D32X32.jpg"
                            alt="Art & collectibles" class="mx-auto mb-2 rounded-lg w-60 h-60">
                        <p class="font-bold text-yellow-500">Storage</p>
                    </a>
                </div>

            </div>
        </div>
    </section><!-- Footer -->
    <footer class="bg-blue-900 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <h3 class="font-bold mb-2">Help</h3>
                    <ul>
                        <li>
                            <a href="buyonvendora.php" class="hover:underline">How to buy on Vendora</a>
                        </li>
                        <li>
                            <a href="sellonvendora.php" class="hover:underline">How to sell on Vendora</a>
                        </li>
                        <li>
                            <a href="return.php" class="hover:underline">Possibility of return</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-2">Policies</h3>
                    <ul>
                        <li>
                            <a href="generalconditions.php" class="hover:underline">General Conditions</a>
                        </li>
                        <li>
                            <a href="privacypolicy.php" class="hover:underline">Privacy and Sharing</a>
                        </li>
                        <li>
                            <a href="aboutus.php" class="hover:underline">About Us</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-2">Contact Us</h3>
                    <p>000-000-000</p>
                    <p>example@gmail.com</p>
                    <div class="flex space-x-4 mt-2">
                        <a href="facebook.com" class="text-xl"><i class="fab fa-facebook"></i></a>
                        <a href="instagram.com" class="text-xl"><i class="fab fa-instagram"></i></a>
                        <a href="twitter.com" class="text-xl"><i class="fab fa-twitter"></i></a>
                        <a href="whatsapp.com" class="text-xl"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class=" text-center mt-8">
                <p>All rights reserved</p>
            </div>
        </div>
    </footer>
</body>

</html>