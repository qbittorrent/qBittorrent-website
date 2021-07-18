import marked from "marked";
import { readdir, readFile, writeFile } from "fs/promises";
import { join } from "path";

const mdDirPath = "markdown";

const genPartialsPath = "handlebars/partials/gen";

marked.setOptions({
    headerIds: false,
});

const fileNames = await readdir(mdDirPath);
fileNames.forEach(async fileName => {
    const md = await readFile(join(mdDirPath, fileName), "utf8");
    const html = marked(md);
    writeFile(join(genPartialsPath, fileName.replace("md", "hbs")), html);
});
