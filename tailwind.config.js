const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            width: {
                '450': '450px',
                '320': '320px',
                '100': '100px',
            },
            height:{
                '450': '450px',
                '320': '320px',
                '100': '100px',
            },
            maxWidth:{
                
            },
            maxHeight:{

            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            borderWidth: ['hover'],
            borderColor: ['hover', 'active'],
            backgroundColor: ['hover', 'active'],

        },
    },

    plugins: [require('@tailwindcss/forms')],
};
