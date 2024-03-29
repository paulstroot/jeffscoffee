/** @type {import('tailwindcss').Config} */
// Set Preflight flag and Tailwind Typography class name based on the build target.
let includePreflight, typographyClassName;
if ('editor' === process.env._TW_TARGET) {
	includePreflight = false;
	typographyClassName = 'block-editor-block-list__layout';
} else {
	includePreflight = true;
	typographyClassName = 'prose';
}

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
    './tailwind/**/*.css',
	],
  // whitelisted tailwind classes
  safelist: [
    'inline',
    'h-full',
    'prose',
    'relative',
    'z-10',
    'pt-0',
    'pb-0',
    'py-0',
    'translate-x-(0|5|full)'
    // {
    //   pattern: /bg-(red|green|blue)-(100|200|300)/,
    //   variants: ['lg', 'hover', 'focus', 'lg:hover'],
    // },
  ],
	theme: {
		container: {
      padding: {
        DEFAULT: '1rem',
        sm: '1rem',
        lg: '2rem',
        xl: '3rem',
      },
      center: true,
    },
    screens: {
      'xxs': '420px',
      'xs': '550px',
      'sm': '640px',
      'md': '782px',
      'mobile': {'max': '781px'},
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    },
    lineHeight: {
      '1': '1em',
      '2': '1.2em',
      '3': '1.3em',
      '4': '1.4em',
    },
		extend: {
      colors: {
        primary: {
          DEFAULT: '#219ebc',
          dark: '#023047',
          light: '#8ecae6'
        },
        secondary: {
          DEFAULT: '#fb8500',
          light: '#ff9560'
        },
        // base: '#ffffff',
        // contrast: '#000000',
        accent: '#ffb703',

        dark: '#3d3d3d',
        mid: '#a8a8a8',
        light: '#CfCfCf',
        info: '#219ebc',
        success: '#479f53',
        warning: '#ffb703',
        error: '#d4302f',


      },
      boxShadow: {
        'filters': '0px 0px 3px #00000029',
      },
      aspectRatio: {
        '5/2': '5 / 2',
      },

      fontFamily: {
        'sans': ["roboto-condensed, arial, sans-serif"],
        'serif': ["\"Berlingske Serif Regular\",Georgia,serif"],
        'mono': ['ui-monospace', 'SFMono-Regular','monospace'],
        'display': ["Montserrat,arial,serif"],
        'body': ["\"Berlingske Serif Regular\",Georgia,serif"],
        'body-bold': ["\"Berlingske Serif ExtraBold\",Georgia,serif"],
      },
      spacing: {
        '8xl': '96rem',
        '9xl': '128rem',
      },

    },

	},
	corePlugins: {
		// Disable Preflight base styles in CSS targeting the editor.
		preflight: includePreflight,
	},

  darkMode: "class",

	plugins: [
		// Add Tailwind Typography.
		require('@tailwindcss/typography')({
			className: typographyClassName,
		}),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require( '@tailwindcss/forms' ),
		// require( '@tailwindcss/aspect-ratio' ),
		// require( '@tailwindcss/line-clamp' ),
		// require( '@tailwindcss/container-queries' ),
	],
};
