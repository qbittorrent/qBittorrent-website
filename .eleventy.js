module.exports = function(eleventyConfig) {
  // Copy files as-is
  eleventyConfig.addPassthroughCopy("img");
  eleventyConfig.addPassthroughCopy("css");
  eleventyConfig.addPassthroughCopy(".htaccess");
  eleventyConfig.addPassthroughCopy("favicon.ico");
  
  // Ignore files
  eleventyConfig.ignores.add("README.md");
};