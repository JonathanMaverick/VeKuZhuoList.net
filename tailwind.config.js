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
                customBlue: "#3054a4",
                customBlack: "#181414",
                grayDark: "#201c1c",
                grayLight: "#383434",
            },
        },
    },
    plugins: [],
};
