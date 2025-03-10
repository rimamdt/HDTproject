<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HDT - Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Navigation Link Styling */
        .nav-link {
            position: relative;
            font-weight: 600;
            transition: color 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 1.1rem;
        }

        .nav-link:hover {
            color: #FF9800;
        }

        /* Dropdown Styling */
        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            min-width: 180px;
            z-index: 10;
        }

        .dropdown:hover .dropdown-menu,
        .dropdown:focus-within .dropdown-menu {
            display: block;
        }

        .iconStyle {
            margin-left: 20px;
        }

        .logoContainer {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
        }

        .logoText {
            text-decoration: none;
            font-size: 28px;
            font-weight: 1000;
            color: #660000;
            /* Golden color */
            font-family: sans-serif;
            /* Stylish font */
            text-transform: uppercase;
            letter-spacing: 3px;
            animation: fadeIn 1.5s ease-in-out;
            margin: 1px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .nav-links a {
            text-decoration: none;
            color: black;
            font-size: 18px;
            font-weight: 500;
            transition: color 0.3s ease-in-out;
        }

        .nav-links a:hover {
            text-decoration: none;
            color: #f39c12;
        }

        .mobileView a {
            text-decoration: none;
            color: blue;
        }

        .mobileView a:hover {
            text-decoration: none;
            color: #f39c12;
        }

        .packageBtn {
            color: blue;
        }

        .packageBtn:hover {
            color: #f39c12;
        }

        .packagePop {
            margin: 2px
        }

        .packageDetails {
            text-decoration: none;
        }

        .packageDetailsText {
            color: black;
            font-size: 15px;
            font-weight: 500;
            transition: color 0.3s ease-in-out;
        }
    </style>
</head>

<body class="bg-gray-100">
    <header class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container flex justify-between items-center ">
            <!-- Logo -->
            <div class="logoContainer">
                <video width="60" height="60" autoplay loop muted>
                    <source src="Image/video.mp4" type="video/mp4">
                </video>
                <a href="index.php" class="logoText">HDT</a>
            </div>
            <!-- Navigation Menu -->

            <nav class="bg-white mt-4">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16 items-center">
                        <div class="hidden md:flex space-x-6 nav-links">
                            <a href="index.php" class="nav-link flex items-center">
                                <img src="Image/home.png" class="w-6 h-6 mr-2"> Home
                            </a>
                            <!-- Destination Dropdown -->
                            <div class="relative group">
                                <a class="nav-link flex items-center">
                                    <img src="Image/tur.png" class="w-6 h-6 mr-2"> Destination
                                </a>
                                <div
                                    class="absolute left-0 hidden bg-white shadow-lg rounded-lg w-48 group-hover:flex flex-col p-2">
                                    <a href="dooars.php" class="block px-4 py-2 text-sm hover:bg-gray-100">DOOARS</a>
                                    <a href="dooars.php" class="block px-4 py-2 text-sm hover:bg-gray-100">BHUTAN</a>
                                    <a href="dooars.php"
                                        class="block px-4 py-2 text-sm hover:bg-gray-100">DARJEELING</a>
                                </div>
                            </div>

                            <!-- Packages Dropdown -->
                            <div class="relative group">
                                <a href="packages.php" class="nav-link flex items-center">
                                    <img src="Image/pg.png" class="w-6 h-6 mr-2"> Packages
                                </a>
                                <div
                                    class="absolute left-0 hidden bg-white shadow-lg rounded-lg w-40 group-hover:flex flex-col p-2">
                                    <a href="book_package.php" class="block px-4 py-2 text-sm hover:bg-gray-100">DOOARS
                                        PACKAGES</a>
                                    <a href="book_package.php" class="block px-4 py-2 text-sm hover:bg-gray-100">BHUTAN
                                        PACKAGES</a>
                                    <a href="book_package.php"
                                        class="block px-4 py-2 text-sm hover:bg-gray-100">DARJEELING PACKAGES</a>
                                </div>
                            </div>

                            <a href="hotel.php" class="nav-link flex items-center">
                                <img src="Image/hotel.png" class="w-6 h-6 mr-2"> Hotels
                            </a>
                            <a href="services.php" class="nav-link flex items-center">
                                <img src="Image/service.png" class="w-6 h-6 mr-2"> Services
                            </a>
                            <a href="contact.php" class="nav-link flex items-center">
                                <img src="Image/cont.png" class="w-6 h-6 mr-2"> Contact Us
                            </a>
                            <a href="login.php" class="nav-link flex items-center">
                                <img src="Image/user.png" class="w-6 h-6 mr-2">
                                <p class="fw-bold">Login</p>
                            </a>

                        </div>
                        <div class="md:hidden flex items-center">
                            <button id="menu-toggle" class="text-gray-800 focus:outline-none">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div id="mobile-menu" class="hidden md:hidden bg-white p-4 mobileView">
                    <a href="index.php" class="block py-2">Home</a>
                    <a href="tours.php" class="block py-2">Tours</a>
                    <div class="relative">
                        <button id="dropdown-toggle" class="block py-2 w-full text-left packageBtn">Packages</button>
                        <ul id="dropdown-menu" class="hidden bg-gray-100 rounded-md">
                            <li><a href="adventure.php" class="block px-4 py-2">DOOARS</a></li>
                            <li><a href="beach.php" class="block px-4 py-2">BHUTAN</a></li>
                            <li><a href="historical.php" class="block px-4 py-2">DARJEELING</a></li>
                        </ul>
                    </div>
                    <a href="hotel.php" class="block py-2">Hotels</a>
                    <a href="services.php" class="block py-2">Services</a>
                    <a href="contact.php" class="block py-2">Contact Us</a>
                    <a href="login.php" class="block py-2">Login</a>
                </div>
            </nav>

            <script>
                document.getElementById('menu-toggle').addEventListener('click', function () {
                    document.getElementById('mobile-menu').classList.toggle('hidden');
                });

                document.getElementById('dropdown-toggle').addEventListener('click', function () {
                    document.getElementById('dropdown-menu').classList.toggle('hidden');
                });
            </script>
        </div>
    </header>
</body>

</html>