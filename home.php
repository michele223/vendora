<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendora</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100">
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
    <section class="bg-blue-100 py-8">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <!-- Text Section -->
            <div class="md:w-1/2">
                <div id="carousel-text">
                    <h1 class="text-3xl md:text-4xl font-bold mb-4">Handcrafted with Heart, Inspired by Cameroon’s Rich
                        Culture</h1>
                </div>
                <a href="shopnow.php" class="btn bg-blue-600 text-white px-6 py-2 rounded-full">SHOP NOW</a>
            </div>

            <!-- Image Section -->
            <div class="md:w-1/2 flex justify-center">
                <img id="carousel-image" class="w-80 h-80 rounded-lg"
                    src="http://localhost/vendora/images/fbca54d2-30c3-4246-8fdd-5c2043a7632f-removebg-preview.png"
                    alt="Colorful handcrafted chair">
            </div>
        </div>
    </section>

    <script>
        // Carousel content
        const carouselData = [
            {
                text: "Handcrafted with Heart, Inspired by Cameroon’s Rich Culture",
                image: "http://localhost/vendora/images/fbca54d2-30c3-4246-8fdd-5c2043a7632f-removebg-preview.png"
            },
            {
                text: "Discover Unique Pieces that Tell a Story",
                image: "http://localhost/vendora/images/rb_115519.png"
            },
            {
                text: "Elevate Your Space with Authentic Cameroonian Artistry",
                image: "http://localhost/vendora/images/hand-bag-layout-with-place-text-women-s-accessories-jewellery-background-mockup-banner-fashion-accessories.png"
            }
        ];

        let currentIndex = 0;

        // DOM elements
        const carouselText = document.getElementById("carousel-text");
        const carouselImage = document.getElementById("carousel-image");

        // Update carousel content
        function updateCarousel() {
            carouselText.innerHTML = `
            <h1 class="text-3xl md:text-4xl font-bold mb-4">${carouselData[currentIndex].text}</h1>
        `;
            carouselImage.src = carouselData[currentIndex].image;
        }

        // Automatically switch slides
        function startCarousel() {
            setInterval(() => {
                currentIndex = (currentIndex + 1) % carouselData.length;
                updateCarousel();
            }, 5000); // Change slide every 5 seconds
        }

        // Initialize carousel
        updateCarousel();
        startCarousel();
    </script>

    <!-- Features Section -->
    <section class="bg-white py-8">
        <div class="container mx-auto px-4 flex flex-wrap justify-around text-center">
            <!-- LOCAL PRODUCT -->
            <div class="w-1/3 md:w-1/4 p-4 animate-hidden" data-animate="fade-in-up">
                <img src="http://localhost/vendora/images/en-bonne-sante (1).png" alt="Local product icon"
                    class="mx-auto mb-2 w-40 h-40">
                <p class="font-bold">LOCAL PRODUCT</p>
                <p>Our Favorites local products Handpicked for You</p>
            </div>

            <!-- HANDMADE PRODUCTS -->
            <div class="w-1/3 md:w-1/4 p-4 animate-hidden" data-animate="fade-in-up" data-delay="0.1s">
                <img src="http://localhost/vendora/images/etoiles.png" alt="Handmade products icon"
                    class="mx-auto mb-2 w-40 h-40">
                <p class="font-bold">Handmade Products</p>
                <p>Transform Your Home with a large collection of Authentic Handmade Products</p>
            </div>

            <!-- SPECIAL PRICES -->
            <div class="w-1/3 md:w-1/4 p-4 animate-hidden" data-animate="fade-in-up" data-delay="0.2s">
                <img src="http://localhost/vendora/images/etiquette-de-reduction.png" alt="Special prices icon"
                    class="mx-auto mb-2 w-40 h-40">
                <p class="font-bold">Special Prices</p>
                <p>Limited-Time Offer: Discover Cameroon’s Finest at Special Prices!</p>
            </div>
        </div>
    </section>

    <!-- Add this CSS to your styles -->
    <style>
        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-hidden {
            opacity: 0;
            transform: translateY(20px);
        }

        .animate-visible {
            animation: fade-in-up 1s ease-out forwards;
        }
    </style>

    <!-- Add this JavaScript -->
    <script>
        // Observe elements with Intersection Observer API
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const animation = target.getAttribute('data-animate');
                    const delay = target.getAttribute('data-delay') || '0s';

                    // Add animation class with delay
                    target.style.animationDelay = delay;
                    target.classList.add('animate-visible');
                    target.classList.remove('animate-hidden');

                    // Stop observing once animation is triggered
                    observer.unobserve(target);
                }
            });
        }, {
            threshold: 0.1, // Trigger when 10% of the element is visible
        });

        // Attach observer to elements with "animate-hidden" class
        document.querySelectorAll('.animate-hidden').forEach(element => {
            observer.observe(element);
        });
    </script>


    <!-- Add this CSS to your styles -->
    <style>
        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fade-in-up 1s ease-out forwards;
            opacity: 0;
            /* Ensures hidden before animation starts */
        }

        .animation-delay-100 {
            animation-delay: 0.1s;
        }

        .animation-delay-200 {
            animation-delay: 0.2s;
        }
    </style>

    <!-- Collections Section -->
    <section class="bg-white py-5">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-8 text-yellow-500">Explore Our Unique Collections</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-3 gap-6">
                <div class="text-center group">
                    <a href="jewelry.php" class="block">
                        <div class="relative">
                            <img src="http://localhost/vendora/images/Ndop Bamileke African Print Knot Jewelry Set (Necklace - Bracelets - Earrings).jpg"
                                alt="Jewelry"
                                class="mx-auto mb-2 rounded-full w-60 h-60 transition-transform duration-300 group-hover:scale-105 group-hover:shadow-lg">
                        </div>
                        <p class="font-bold text-yellow-500 group-hover:text-blue-600 transition-colors duration-300">
                            Jewelry
                        </p>
                    </a>
                </div>
                <div class="text-center group">
                    <a href="art.php" class="block">
                        <div class="relative">
                            <img src="http://localhost/vendora/images/African Ashanti Comb Ghana Presitge Status Comb.jpg"
                                alt="Art & collectibles"
                                class="mx-auto mb-2 rounded-full w-60 h-60 transition-transform duration-300 group-hover:scale-105 group-hover:shadow-lg">
                        </div>
                        <p class="font-bold text-yellow-500 group-hover:text-blue-600 transition-colors duration-300">
                            Art & collectibles
                        </p>
                    </a>
                </div>
                <div class="text-center group">
                    <a href="furniture.php" class="block">
                        <div class="relative">
                            <img src="http://localhost/vendora/images/Hand-carved African Bamileke Throne Chair Decorated With the NDOP Ethnic Textile and Cowries - Etsy.jpg"
                                alt="Furniture"
                                class="mx-auto mb-2 rounded-full w-60 h-60 transition-transform duration-300 group-hover:scale-105 group-hover:shadow-lg">
                        </div>
                        <p class="font-bold text-yellow-500 group-hover:text-blue-600 transition-colors duration-300">
                            Furniture
                        </p>
                    </a>
                </div>
                <div class="text-center group">
                    <a href="dresses.php" class="block">
                        <div class="relative">
                            <img src="http://localhost/vendora/images/b8437e9a-1cd8-4152-856b-6967293f96eb.jpg"
                                alt="Dresses"
                                class="mx-auto mb-2 rounded-full w-60 h-60 transition-transform duration-300 group-hover:scale-105 group-hover:shadow-lg">
                        </div>
                        <p class="font-bold text-yellow-500 group-hover:text-blue-600 transition-colors duration-300">
                            Dresses
                        </p>
                    </a>
                </div>
                <div class="text-center group">
                    <a href="homeacc.php" class="block">
                        <div class="relative">
                            <img src="http://localhost/vendora/images/Bedding Sets.jpg" alt="Home Accessories"
                                class="mx-auto mb-2 rounded-full w-60 h-60 transition-transform duration-300 group-hover:scale-105 group-hover:shadow-lg">
                        </div>
                        <p class="font-bold text-yellow-500 group-hover:text-blue-600 transition-colors duration-300">
                            Home Accessories
                        </p>
                    </a>
                </div>
                <div class="text-center group">
                    <a href="footwears.php" class="block">
                        <div class="relative">
                            <img src="http://localhost/vendora/images/African Print Block Heel Sandal £69….jpg"
                                alt="Footwears"
                                class="mx-auto mb-2 rounded-full w-60 h-60 transition-transform duration-300 group-hover:scale-105 group-hover:shadow-lg">
                        </div>
                        <p class="font-bold text-yellow-500 group-hover:text-blue-600 transition-colors duration-300">
                            Footwears
                        </p>
                    </a>
                </div>
                <div class="text-center group">
                    <a href="souvenirs.php" class="block">
                        <div class="relative">
                            <img src="http://localhost/vendora/images/Authenic Unisex Beaded Bracelet Set _ Color_ Red_Yellow _ Size_ Os.jpg"
                                alt="Souvenirs"
                                class="mx-auto mb-2 rounded-full w-60 h-60 transition-transform duration-300 group-hover:scale-105 group-hover:shadow-lg">
                        </div>
                        <p class="font-bold text-yellow-500 group-hover:text-blue-600 transition-colors duration-300">
                            Souvenirs
                        </p>
                    </a>
                </div>
                <div class="text-center group">
                    <a href="kitchen.php" class="block">
                        <div class="relative">
                            <img src="http://localhost/vendora/images/108729a9-e1ce-4816-a0f3-6cab0799feb3.jpg"
                                alt="Kitchen and Dining"
                                class="mx-auto mb-2 rounded-full w-60 h-60 transition-transform duration-300 group-hover:scale-105 group-hover:shadow-lg">
                        </div>
                        <p class="font-bold text-yellow-500 group-hover:text-blue-600 transition-colors duration-300">
                            Kitchen and Dining
                        </p>
                    </a>
                </div>
                <div class="text-center group">
                    <a href="storage.php" class="block">
                        <div class="relative">
                            <img src="http://localhost/vendora/images/Panier Iringa - Naturel _ M D32X32.jpg"
                                alt="Storage"
                                class="mx-auto mb-2 rounded-full w-60 h-60 transition-transform duration-300 group-hover:scale-105 group-hover:shadow-lg">
                        </div>
                        <p class="font-bold text-yellow-500 group-hover:text-blue-600 transition-colors duration-300">
                            Storage
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Sell on Vendora Section -->
    <section class="bg-gray-100 py-10">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 text-center md:text-left mb-4 md:mb-0">
                <h2 class="text-2xl font-bold text-yellow-500">SELL ON VENDORA</h2>
                <p class="mt-2">Do you craft unique, handmade products? Join our growing community of artisans and
                    showcase your creations to a global audience. Selling on [Your Website Name] is simple, rewarding,
                    and helps you connect with customers who value authenticity and quality. Let us help you grow your
                    business.</p>
            </div>
            <div style="width: 2px; height: 120px; background-color: black;"></div>

            <div class="md:w-1/2 flex justify-center">
                <a href="sellonvendora.php" class="btn bg-blue-600 text-white px-6 py-2 rounded-lg">START</a>

            </div>
        </div>
    </section>
    <!-- Try This Section -->
    <section class="bg-white py-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-8">TRY THIS</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="text-center">
                    <img src="http://localhost/vendora/images/Bohemian Home Decor (1).jpg" alt="Bomenbian cori baskets"
                        class="mx-auto mb-2 w-44 h-44">
                    <p class="font-bold">Bomenbian cori baskets</p>
                    <p>FCFA 25200 <span class="line-through">FCFA 34500</span></p>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-full">ADD TO CART</button>
                </div>
                <div class="text-center">
                    <a href="detailArticle.php"> <img
                            src="http://localhost/vendora/images/Product Photography for Maadili Collective.jpg"
                            alt="Bomenbian cori baskets" class="mx-auto mb-2 w-44 h-44"></a>
                    <p class="font-bold">Bomenbian cori baskets</p>
                    <p>FCFA 25200 <span class="line-through">FCFA 34500</span></p>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-full">ADD TO CART</button>
                </div>
                <div class="text-center">
                    <img src="http://localhost/vendora/images/2765d7a4-eea4-4a3b-94b7-ba708d491173.jpg"
                        alt="Bomenbian cori baskets" class="mx-auto mb-2 w-44 h-44">
                    <p class="font-bold">Bomenbian cori baskets</p>
                    <p>FCFA 25200 <span class="line-through">FCFA 34500</span></p>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-full ">ADD TO CART</button>
                </div>
            </div>
            <br>
            <a href="shopnow.php" class=" text-blue-600  px-4 py-2 rounded-full ml-80">See More +</a>
            <br>
        </div>
    </section>
    <!-- Customer Reviews Section -->
    <section class="bg-gray-100 py-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-8">Customers Reviews</h2>
            <div class="flex justify-center mb-4">
                <button class="text-2xl mx-2"><i class="fas fa-chevron-left"></i></button>
                <button class="text-2xl mx-2"><i class="fas fa-chevron-right"></i></button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded shadow-md">
                    <p class="font-bold">Zaolefack Maelle, Mbouda</p>
                    <p class="text-sm">This website is wonderful</p>
                    <p class="mt-2">I love how every item feels unique and authentic. The wooden decor I purchased adds
                        so much character to my home.</p>
                </div>
                <div class="bg-white p-4 rounded shadow-md">
                    <p class="font-bold">Yota Yann, Yaoundé</p>
                    <p class="text-sm">Excellent Quality</p>
                    <p class="mt-2">The craftsmanship is unmatched! My handcrafted wax chair is both stunning and
                        durable. Thank you for bringing Cameroonian artistry to the world.</p>
                </div>
            </div>
        </div>
    </section>
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