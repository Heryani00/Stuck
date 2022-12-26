/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/views/*.blade.php",
        "./resources/views/dashboard/**/*.blade.php",
        "./resources/views/dashboard/layouts/*.blade.php",
        "./resources/views/dashboard/profile/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require("@tailwindcss/typography"),
        require("@tailwindcss/forms"),
    ],
};
