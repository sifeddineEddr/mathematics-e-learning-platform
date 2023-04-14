const defaultTheme = require("tailwindcss/defaultTheme");
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "brand-red": "#C00005",
                "brand-light-ish-brown": "#FAF2EF",
            },
        },
    },

    plugins: [require("flowbite/plugin")],
};
