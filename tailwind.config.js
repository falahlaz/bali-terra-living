/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                sage: '#8B9D83',
                cream: '#F5F3EF',
                earth: '#6B5D52',
                gold: '#C9A961',
            },
            fontFamily: {
                serif: ['Cinzel', 'serif'],
                sans: ['Lato', 'sans-serif'],
            },
            boxShadow: {
                soft: '0 10px 25px -10px rgba(0,0,0,0.08)',
            },
        },
    },
    plugins: [],
}
