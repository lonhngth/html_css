// tailwind.config.js

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {},
    },
    plugins: [
        require("@tailwindcss/typography"),
        require("@tailwindcss/forms"),
        require("@tailwindcss/aspect-ratio"),
    ],
    extend: {
        backgroundImage: {
            hero: "url('.public/images/09_Wallpaper_1 (1) 1.png')",
        },
    },
};
