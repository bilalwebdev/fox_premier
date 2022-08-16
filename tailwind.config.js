const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily:  {
               'adventpro' : "'Advent Pro', sans-serif",
               'abel': "'Abel', sans-serif"
            },
            backgroundImage: theme =>( {
                'home': "url('http://cdn.home-designing.com/wp-content/uploads/2016/06/dark-and-sophisticated-interior-ideas.jpg')",
        }),
    },

    plugins: [require('@tailwindcss/forms')],
},
}
