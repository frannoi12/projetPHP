/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './src/Views/**/*.php', // Chemin vers tes vues PHP
    './src/Controllers/**/*.php', // Chemin vers tes contrôleurs PHP, si tu souhaites que Tailwind traite ces fichiers aussi
    './index.php' // Si tu as du code HTML dans index.php
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
