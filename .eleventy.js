const markdownItAnchor = require("markdown-it-anchor");

module.exports = (eleventyConfig) => {
  // Copy files as-is
  eleventyConfig.addPassthroughCopy("img");
  eleventyConfig.addPassthroughCopy("css");
  eleventyConfig.addPassthroughCopy(".htaccess");
  eleventyConfig.addPassthroughCopy("favicon.ico");
  eleventyConfig.addPassthroughCopy("favicon.svg");

  // Ignored files
  eleventyConfig.ignores.add("README.md");

  eleventyConfig.amendLibrary("md", (mdLib) => {
      // https://github.com/valeriangalliat/markdown-it-anchor#usage
      const options = {
        permalink: markdownItAnchor.permalink.headerLink()
      };
      mdLib.use(markdownItAnchor, options);
  });
};
