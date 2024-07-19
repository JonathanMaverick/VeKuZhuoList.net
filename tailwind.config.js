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
                customBlueLight: "#abc4ed",
                customBlack: "#181414",
                grayDark: "#201c1c",
                grayLight: "#383434",
                grayMid: "#282424",
                border: "#272727",
                borderLight: "#414141",
                lightFont: "#a3a3a3",
            },
        },
    },
    plugins: [],
};
