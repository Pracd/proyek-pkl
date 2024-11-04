<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Tailwind</title>
    <link href="/output.css" rel="stylesheet"> <!-- Pastikan tautan ke CSS output Anda benar -->
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Logo -->
            <a href="#" class="text-white font-bold text-xl">Brand</a>

            <!-- Menu for large screens -->
            <div class="hidden md:flex space-x-6">
                <a href="#" class="text-white hover:text-gray-200">Home</a>
                <a href="#" class="text-white hover:text-gray-200">About</a>
                <a href="#" class="text-white hover:text-gray-200">Services</a>
                <a href="#" class="text-white hover:text-gray-200">Contact</a>
            </div>

            <!-- Hamburger Menu for mobile -->
            <div class="md:hidden">
                <button id="menu-btn" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu (hidden by default) -->
        <div id="mobile-menu" class="hidden md:hidden bg-blue-500">
            <a href="#" class="block text-white hover:bg-blue-600 p-4">Home</a>
            <a href="#" class="block text-white hover:bg-blue-600 p-4">About</a>
            <a href="#" class="block text-white hover:bg-blue-600 p-4">Services</a>
            <a href="#" class="block text-white hover:bg-blue-600 p-4">Contact</a>
        </div>
    </nav>

    <script>
        // Script to toggle the mobile menu
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>

</html>
