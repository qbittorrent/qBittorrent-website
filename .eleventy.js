import ChildProcess from "node:child_process";
import MarkdownItAnchor from "markdown-it-anchor";
import { promisify } from 'node:util';

export default (eleventyConfig) => {
  const sourceDir = "src";

  // Copy folders as-is
  eleventyConfig.addPassthroughCopy(`${sourceDir}/.well-known`);
  eleventyConfig.addPassthroughCopy(`${sourceDir}/css`);
  eleventyConfig.addPassthroughCopy(`${sourceDir}/img`);
  eleventyConfig.addPassthroughCopy(`${sourceDir}/openapi-demo`);
  // Copy files as-is
  eleventyConfig.addPassthroughCopy(`${sourceDir}/.htaccess`);
  eleventyConfig.addPassthroughCopy(`${sourceDir}/favicon.ico`);
  eleventyConfig.addPassthroughCopy(`${sourceDir}/favicon.svg`);

  // Additional watch targets
  eleventyConfig.addWatchTarget(`${sourceDir}/scripts/*.ts`);

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
  eleventyConfig.on("eleventy.after", async ({ dir }) => {
    const run = (cmd) => {
      const exec = promisify(ChildProcess.exec);
      return exec(cmd).then(
        (result) => { console.log(result.stdout); },
        (result) => { console.error(result.stderr); }
      );
    };

    const compileTS = () => {
      //return run("tsc");
      return run(`swc --out-dir ${dir.output} src/scripts/*.ts`);
    };
    const generateAtomFeed = () => {
      return run(`npm run -w atom_generator generate -- -i ../${dir.output}/news.html -o ../${dir.output}/news_feed.atom`);
    };

    return Promise.allSettled([
      compileTS(),
      generateAtomFeed()
    ]);
  });

  return {
    dir: {
      input: sourceDir
    }
  };
}
