const mapObject = obj => fn => Object.keys(obj).map(key => fn(obj[key], key));

module.exports = {
	browserSyncPort: 3000, // The port on which the server browserSync will be launched
	browserSyncOpen: true, // Auto open browserSync URL in browser
	browserSyncTarget: "https://ayon.dev/", // URL of your server prestashop (example: "http://localhost:8080/ps/" or "http://remote-server.com")
	themeFolderName: 'ayon', // folder name your theme

	outputFolderName: 'assets/js',
	get publicPath(){
		return `https://localhost:${this.browserSyncPort}/themes/${this.themeFolderName}/${this.outputFolderName}/`;
		// check public path to 'outputFolderName'
		// if you use next 'browserSyncTarget'
		// browserSyncTarget: "http://localhost:8080/ps/"
		// That publicPath will be such
		// `http://localhost:${this.browserSyncPort}/ps/themes/${this.themeFolderName}/${this.outputFolderName}/`
	},
	DEV: process.env.NODE_ENV !== "production",

	addHotMiddleware(entry) {
		const newEntry = {};

		mapObject(entry)((val, name) => {
			val = (Array.isArray(val) ? val : [val]).slice();
			val.unshift("webpack/hot/dev-server", "webpack-hot-middleware/client");
			newEntry[name] = val;
		});
		return newEntry;
	}
};
