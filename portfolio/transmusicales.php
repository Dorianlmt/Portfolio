<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transmusicales - Dorian LE BLEIS</title>
    <link rel="icon" href="./images/bzh.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-thumb {
            background-color: #3b82f6; /* Bleu clair */
            border-radius: 4px;
        }
        ::-webkit-scrollbar-track {
            background-color: #f7fafc; /* Gris clair */
        }

        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background-color: #2563eb;
            margin: 10px auto;
        }
    </style>
</head>
<body class="font-sans bg-gray-50 text-gray-800">
    <!-- Header -->
    <header class="sticky top-0 z-50 bg-gray-900 text-white shadow-lg opacity-80">
        <nav class="container mx-auto flex justify-center gap-6 py-4">
            <a href="./" class="hover:text-blue-400">Accueil</a>
            <a href="./#about" class="hover:text-blue-400">À propos</a>
            <a href="./#projects" class="hover:text-blue-400">Projets</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="relative h-72 bg-cover bg-center text-white text-center bg-gray-800">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 flex flex-col justify-center items-center h-full">
            <h1 class="text-4xl font-bold mb-4">Projet Transmusicales</h1>
            <p class="text-lg">Un challenge de 48h pour repenser le site web du festival</p>
        </div>
    </section>

    <!-- Project Section -->
    <section id="project" class="py-20 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="section-title text-3xl font-bold text-center mb-10">Le Projet</h2>
            <p class="text-lg text-gray-700 mb-8">
                Dans le cadre de ce projet de 48 heures, nous avons travaillé à la refonte du site des **Transmusicales de Rennes**. 
                L'objectif était de rendre le site plus attractif pour un public jeune en utilisant des designs modernes et des fonctionnalités interactives.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <img src="images/trans.jpg" alt="Transmusicales 1" class="w-full h-48 object-cover rounded-lg mb-4">
                    <p class="text-gray-600">Image 1 - L'esprit du festival capturé dans un nouveau design.</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <img src="images/trans2.jpg" alt="Transmusicales 2" class="w-full h-48 object-cover rounded-lg mb-4">
                    <p class="text-gray-600">Image 2 - Localisation précise du festival</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <img src="images/trans3.jpg" alt="Transmusicales 3" class="w-full h-48 object-cover rounded-lg mb-4">
                    <p class="text-gray-600">Image 3 - La possibilité de se connecter à Spotify pour avoir une playlist du festival</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <img src="images/trans4.jpg" alt="Transmusicales 4" class="w-full h-48 object-cover rounded-lg mb-4">
                    <p class="text-gray-600">Image 4 - Une palette de couleurs vibrante pour refléter l'énergie du festival.</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <img src="images/trans5.jpg" alt="Transmusicales 5" class="w-full h-48 object-cover rounded-lg mb-4">
                    <p class="text-gray-600">Image 5 - Un plan interactif pour une meilleur naviguation sur place</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <img src="images/trans6.jpg" alt="Transmusicales 6" class="w-full h-48 object-cover rounded-lg mb-4">
                    <p class="text-gray-600">Image 6 - Mise en avant des artistes et des événements phares.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Dorian LE BLEIS--MICHAUD-THOMIN - Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>
