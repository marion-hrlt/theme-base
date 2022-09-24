let mix = require("laravel-mix");

mix.setPublicPath("assets/public/");

mix.sass("assets/src/scss/app.scss", "styles").options({
	processCssUrls: false,
	postCss: [require("tailwindcss"), require("postcss-nested")],
});

mix.js("assets/src/js/app.js", "scripts");

// mix
//   .copyDirectory('assets/images', 'public/images')
//   .copyDirectory('assets/fonts', 'public/fonts');

if (!mix.inProduction()) {
	mix.sourceMaps(true, "source-map");
} else {
	mix.version();
}
