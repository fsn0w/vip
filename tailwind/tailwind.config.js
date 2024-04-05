// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			fontFamily: {
				manrope: ['Manrope', 'sans-serif'],
				mono: ['DM Mono', 'monospace'],
				worksans: ['Work Sans', 'sans-serif']
			},
			fontSize: {
				'xs': ['.6rem','1em'],
				'sm': ['.75rem', '1em'],
				'base': ['.9rem', '1.5em'],
				'3xl': ['1.3rem', '1.2em'],
				'4xl': ['2rem', '1.2em'],
				'5xl': ['3rem', '1.2em'],
			},
			colors: {
				'prima': {
					'red': '#D9472D',
					'gray': '#F5F4F0',
					'black': '#000000',
					'white': '#FFFFFF',
				  },
			},
			gridTemplateColumns: {
				'footer': 'auto 1fr 1fr',
			  }
		},
		container: {
			padding: {
			  DEFAULT: '2rem',
			  sm: '4rem',
			  lg: '6rem',
			  xl: '7rem',
			  '2xl': '10rem',
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
