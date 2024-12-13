<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendora Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="flex flex-col min-h-screen"> <!-- Header -->
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
    <!-- Main Content -->
    <?php
    // Example data for the cart (this would normally come from a database or session)
    $cartItems = [
        ['id' => 1, 'title' => 'Title 1', 'description' => 'Description 1', 'price' => 86000, 'quantity' => 1, 'image' => 'http://localhost/vendora/images/Ndop Bamileke African Print Knot Jewelry Set (Necklace - Bracelets - Earrings).jpg'],
        ['id' => 2, 'title' => 'Title 2', 'description' => 'Description 2', 'price' => 72000, 'quantity' => 1, 'image' => 'http://localhost/vendora/images/Fan_Foldable Ankara Fan_African Print Handheld Fan.jpg']
    ];
    ?>
    <main class="flex-grow container mx-auto py-8 px-4">
        <h1 class="text-center text-3xl font-bold text-yellow-500 mb-8">Cart</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border">
                <thead>
                    <tr class="w-full border-b">
                        <th class="py-4 px-6 text-left">Produit</th>
                        <th class="py-4 px-6 text-left">Prix</th>
                        <th class="py-4 px-6 text-left">Quantité</th>
                        <th class="py-4 px-6 text-left">Total</th>
                        <th class="py-4 px-6 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody id="cart-body">
                    <?php foreach ($cartItems as $item): ?>
                        <tr data-id="<?= $item['id'] ?>" class="border-b">
                            <td class="py-4 px-6 flex items-center">
                                <img src="<?= $item['image'] ?>" alt="Product image" class="w-20 h-20 mr-4">
                                <div>
                                    <div class="font-bold"><?= $item['title'] ?></div>
                                    <div class="text-gray-600"><?= $item['description'] ?></div>
                                </div>
                            </td>
                            <td class="py-4 px-6 price">FCFA <?= $item['price'] ?></td>
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <button class="decrement border px-2">-</button>
                                    <input type="text" value="<?= $item['quantity'] ?>"
                                        class="quantity w-12 text-center border-t border-b">
                                    <button class="increment border px-2">+</button>
                                </div>
                            </td>
                            <td class="py-4 px-6 total">FCFA <?= $item['price'] * $item['quantity'] ?></td>
                            <td class="py-4 px-6">
                                <button class="remove text-gray-500 border rounded px-2 py-1">Supprimer</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cartBody = document.getElementById('cart-body');

            // Update total for a row
            const updateRowTotal = (row) => {
                const price = parseFloat(row.querySelector('.price').textContent.replace('FCFA', '').trim());
                const quantity = parseInt(row.querySelector('.quantity').value);
                const totalCell = row.querySelector('.total');
                totalCell.textContent = `FCFA ${price * quantity}`;
            };

            // Increment button functionality
            cartBody.addEventListener('click', (e) => {
                if (e.target.classList.contains('increment')) {
                    const row = e.target.closest('tr');
                    const quantityInput = row.querySelector('.quantity');
                    quantityInput.value = parseInt(quantityInput.value) + 1;
                    updateRowTotal(row);
                }

                // Decrement button functionality
                if (e.target.classList.contains('decrement')) {
                    const row = e.target.closest('tr');
                    const quantityInput = row.querySelector('.quantity');
                    const newValue = parseInt(quantityInput.value) - 1;
                    if (newValue > 0) {
                        quantityInput.value = newValue;
                        updateRowTotal(row);
                    }
                }

                // Remove button functionality
                if (e.target.classList.contains('remove')) {
                    const row = e.target.closest('tr');
                    row.remove();
                }
            });

            // Handle quantity change directly in input
            cartBody.addEventListener('input', (e) => {
                if (e.target.classList.contains('quantity')) {
                    const row = e.target.closest('tr');
                    const newValue = parseInt(e.target.value);
                    if (!isNaN(newValue) && newValue > 0) {
                        updateRowTotal(row);
                    } else {
                        e.target.value = 1;
                        updateRowTotal(row);
                    }
                }
            });
        });
    </script>

    <div class="flex justify-end mt-8">
        <a href="buyinshop.php" class="btn bg-blue-700 text-white py-2 px-6 rounded">Buy</a>
    </div>
    <br>
    <br>
    </main> <!-- Footer -->
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