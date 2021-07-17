const readMarkdown = async (filePath) => {
    const response = await fetch(filePath);
    const text = await response.text();
    marked.setOptions({
        headerIds: false,
    });
    return marked(text);
}

const replaceWithContent = (element) => {
    element.childNodes.forEach(childNode => {
        element.parentElement.insertBefore(childNode, element);
    });
    element.remove();
}

const fetchMarkdownAndReplaceId = async (filePath, id) => {
    const text = await readMarkdown(filePath);
    const toReplace = document.getElementById(id);
    toReplace.innerHTML = marked(text);
    replaceWithContent(toReplace);
}