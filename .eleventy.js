const MarkdownItAnchor = require("markdown-it-anchor");

module.exports = (eleventyConfig) => {
  // Copy folders as-is
  eleventyConfig.addPassthroughCopy(".well-known");
  eleventyConfig.addPassthroughCopy("css");
  eleventyConfig.addPassthroughCopy("img");
  // Copy files as-is
  eleventyConfig.addPassthroughCopy(".htaccess");
  eleventyConfig.addPassthroughCopy("favicon.ico");
  eleventyConfig.addPassthroughCopy("favicon.svg");

  // Ignored files
  eleventyConfig.ignores.add("old_news.md");
  eleventyConfig.ignores.add("README.md");

  eleventyConfig.amendLibrary("md", (mdLib) => {
    // https://github.com/valeriangalliat/markdown-it-anchor#usage
    const options = {
      permalink: MarkdownItAnchor.permalink.headerLink()
    };
    mdLib.use(MarkdownItAnchor, options);
  });
};
