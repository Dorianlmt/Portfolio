<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Introuvable</title>
    <link rel="icon" href="./images/bzh.png" type="image/x-icon">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            overflow: hidden; /* Empêche le défilement */
        }

        .bouncing-text {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .game-area {
            position: relative;
            width: 100%;
            height: 50vh;
            background-color: #f9fafb;
            overflow: hidden;
        }

        .game-square {
            width: 50px;
            height: 50px;
            background-color: #3b82f6;
            border-radius: 10px;
            position: absolute;
            top: calc(50% - 25px);
            left: calc(50% - 25px);
            cursor: pointer;
            transition: transform 0.1s ease-in-out;
        }

        .game-square:hover {
            transform: scale(1.2);
        }

        .game-square:active {
            background-color: #1e40af;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col items-center justify-center h-screen font-sans">
    <!-- Header -->
    <div class="text-center">
        <h1 class="text-5xl font-bold text-blue-600 bouncing-text">404</h1>
        <p class="text-2xl mt-4 text-gray-700">Oups ! La page que vous recherchez est introuvable.</p>
        <p class="text-lg text-gray-500 mt-2">Mais ne partez pas ! Amusez-vous un peu en jouant - Cliquez sur le carré !</p>
    </div>

    <!-- Game Area -->
    <div class="game-area mt-10">
        <div id="game-square" class="game-square"></div>
    </div>

    <!-- Buttons -->
    <div class="mt-6 flex space-x-4">
        <a href="/" class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-blue-600 transition">
            Retour à l'accueil
        </a>
        <a href="#contact" class="bg-gray-300 text-gray-800 px-6 py-3 rounded-lg hover:bg-gray-400 transition">
            Contactez-moi
        </a>
    </div>

    <!-- Script for Interactivity -->
    <script>
        const square = document.getElementById("game-square");
        const gameArea = document.querySelector(".game-area");

        // On click, move the square to a random position within the game area
        square.addEventListener("click", () => {
            const areaWidth = gameArea.clientWidth - 50; // Subtract square size
            const areaHeight = gameArea.clientHeight - 50; // Subtract square size

            const randomX = Math.random() * areaWidth;
            const randomY = Math.random() * areaHeight;

            square.style.left = `${randomX}px`;
            square.style.top = `${randomY}px`;
        });
    </script>
</body>
</html>
