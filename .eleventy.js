const ChildProcess = require('node:child_process');
const MarkdownItAnchor = require("markdown-it-anchor");

module.exports = (eleventyConfig) => {
  const sourceDir = "src";

  // Copy folders as-is
  eleventyConfig.addPassthroughCopy(`${sourceDir}/.well-known`);
  eleventyConfig.addPassthroughCopy(`${sourceDir}/css`);
  eleventyConfig.addPassthroughCopy(`${sourceDir}/img`);
  eleventyConfig.addPassthroughCopy(`${sourceDir}/scripts`);
  // Copy files as-is
  eleventyConfig.addPassthroughCopy(`${sourceDir}/.htaccess`);
  eleventyConfig.addPassthroughCopy(`${sourceDir}/favicon.ico`);
  eleventyConfig.addPassthroughCopy(`${sourceDir}/favicon.svg`);

  // Ignored files
  eleventyConfig.ignores.add(`${sourceDir}/old_news.md`);

  eleventyConfig.amendLibrary("md", (mdLib) => {
    // https://github.com/valeriangalliat/markdown-it-anchor#usage
    const options = {
      permalink: MarkdownItAnchor.permalink.headerLink()
    };
    mdLib.use(MarkdownItAnchor, options);
  });

  // Run after the build ends
  eleventyConfig.on("eleventy.after", ({ dir }) => {
      // Generate Atom feed
      const generateAtomCmd = `npm run -w atom_generator generate -- -i ../${dir.output}/news.html -o ../${dir.output}/news_feed.atom`;
      ChildProcess.execSync(generateAtomCmd, { stdio: 'inherit' });
    }
  );

  return {
    dir: {
      input: sourceDir
    }
  };
};
