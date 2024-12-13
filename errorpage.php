<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>404 Page</title>
   <script src="https://cdn.tailwindcss.com"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="flex flex-col min-h-screen">
   <!-- Header -->
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
   <main class="flex-grow flex flex-col items-center justify-center text-center p-4">
      <img src="https://placehold.co/400x300" alt="404 Error illustration" class="w-1/2 max-w-md">
      <h1 class="text-2xl font-bold mt-4">Oops! This Page Got Lost in the Market...</h1>
      <p class="mt-2 text-gray-600">The product or page you’re looking for isn’t here anymore. But don’t worry, our
         collections are still packed with unique treasures waiting to be discovered!</p>
      <div class="mt-4 space-x-4">
         <button class="bg-blue-600 text-white px-4 py-2 rounded-full">Go to Home</button>
         <button class="bg-blue-600 text-white px-4 py-2 rounded-full">Our Collections</button>
      </div>
   </main>
   <!-- Footer -->
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