<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vehicle Parking Management System || Home Page</title>

    <!-- Font Awesome Icons -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fadeInUp {
            animation: fadeInUp 1s ease-out;
        }
    </style>
</head>
<body class="font-[Poppins] bg-gradient-to-br from-gray-100 to-gray-300">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-gradient-to-r from-purple-600 to-blue-600 shadow-lg">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <a href="index.php" class="text-white text-2xl font-bold">Vehicle Parking Management System</a>
            <div class="flex space-x-6">
                <a href="admin/index.php" class="text-white hover:text-yellow-300 transition duration-300">Admin</a>
                <a href="users/login.php" class="text-white hover:text-yellow-300 transition duration-300">Users</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="min-h-screen flex items-center justify-center text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('./assets/img/homepage.png')] bg-cover bg-center opacity-30"></div>
    <div class="relative z-10 text-white px-6 animate-fadeInUp">
        <h1 class="text-5xl md:text-7xl font-extrabold leading-tight bg-gradient-to-r from-purple-700 to-blue-700 inline-block text-transparent bg-clip-text">
            Welcome to Our Parking Management System
        </h1>
        <!-- Updated Line -->
        <p class="text-2xl md:text-3xl mt-6 mb-8 font-bold bg-gradient-to-r from-yellow-700 to-red-700 bg-clip-text text-transparent">
            Seamless and efficient parking solutions for smart cities.
        </p>
        <a href="users/login.php" class="px-6 py-3 bg-gradient-to-r from-yellow-700 to-red-700 text-white font-semibold rounded-lg shadow-md hover:opacity-90 transition">
            Get Started
        </a>
    </div>
</header>
    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">Why Choose Us?</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-8 border rounded-lg shadow-md hover:shadow-xl transition">
                    <i class="fas fa-car text-5xl text-blue-500 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Efficient Parking</h3>
                    <p>Streamline your parking experience with our smart management system.</p>
                </div>
                <div class="text-center p-8 border rounded-lg shadow-md hover:shadow-xl transition">
                    <i class="fas fa-shield-alt text-5xl text-green-500 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Secure Environment</h3>
                    <p>We ensure the highest level of security for your vehicles.</p>
                </div>
                <div class="text-center p-8 border rounded-lg shadow-md hover:shadow-xl transition">
                    <i class="fas fa-clock text-5xl text-yellow-500 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">24/7 Support</h3>
                    <p>Our dedicated support team is available round-the-clock for your assistance.</p>
                </div>
            </div>
        </div>
    </section>

  <!-- Footer -->
<footer class="bg-gradient-to-r from-purple-600 to-blue-600 text-white py-8 text-center relative overflow-hidden">
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-purple-500/20 to-transparent blur-3xl"></div>

  <div class="relative z-10">
    <h2 class="text-2xl font-bold mb-2">Engineered with ❤️ by <span class="">IIT ISM Dhanbad</span></h2>
    <p class="text-sm opacity-80">&copy; 2025 Vehicle Parking Management System. All rights reserved.</p>

   

    <!-- Decorative Elements -->
    <div class="absolute bottom-0 left-0 w-32 h-32 bg-purple-500 rounded-full blur-3xl opacity-20"></div>
    <div class="absolute top-0 right-0 w-40 h-40 bg-blue-500 rounded-full blur-3xl opacity-20"></div>
  </div>
</footer>

<!-- FontAwesome Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>