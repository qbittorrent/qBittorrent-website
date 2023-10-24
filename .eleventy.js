module.exports = function(eleventyConfig) {
  // Copy files as-is
  eleventyConfig.addPassthroughCopy("img");
  eleventyConfig.addPassthroughCopy("css");
  eleventyConfig.addPassthroughCopy(".htaccess");
  eleventyConfig.addPassthroughCopy("favicon.ico");
  eleventyConfig.addPassthroughCopy("favicon.svg");

  // Ignore files
  eleventyConfig.ignores.add("README.md");
};
