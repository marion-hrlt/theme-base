module.exports = {
	darkMode: "class",
	purge: {
		content: ["./core/**/*.php", "./views/**/*.twig"],
	},
	theme: {
		extend: {
			colors: {},
			transitionProperty: {
				radius: "border-radius",
			},
		},
	},
	variants: {
		extend: {},
	},
};
