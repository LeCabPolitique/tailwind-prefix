module.exports = {
    purge: [
        './resources/**/*.blade.php',
    ],
    darkMode: false,
    theme: {
    },
    variants: {
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp'),
    ],
}
