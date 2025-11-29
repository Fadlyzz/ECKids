/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                // Palet Warna Baru Client
                "brand-brown": "#7E262E", // 🟤 Coklat Tua (Main Text/Footer)
                "brand-orange": "#F58633", // 🟠 Orange (Buttons/Highlights)
                "brand-terra": "#B54D34", // 🟤 Terracotta (Accents)
                "brand-red": "#ED3338", // 🔴 Red (Urgent/Call to Action)
            },
            fontFamily: {
                // Ganti ke Montserrat
                sans: ["Montserrat", "sans-serif"],
            },
        },
    },
    plugins: [],
};
