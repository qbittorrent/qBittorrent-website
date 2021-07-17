/**
 * Reads markdown from the given URL and tranforms it into HTML
 * @param {string} filePath URL to fetch the markdown from
 * @returns {string} HTML
 */
const readMarkdown = async (filePath) => {
    const response = await fetch(filePath);
    const text = await response.text();
    marked.setOptions({
        headerIds: false,
    });
    return marked(text);
}

/**
 * Replaces an Element in the DOM with its children
 * @param {Element} element 
 */
const replaceWithContent = (element) => {
    element.childNodes.forEach(childNode => {
        element.parentElement.insertBefore(childNode, element);
    });
    element.remove();
}

/**
 * Replaces an element in the DOM with the HTML obtaining by transforming markdown fetched from the given URL
 * @param {string} filePath URL to fetch the markdown from
 * @param {string} id id of the element in DOM to replace
 */
const fetchMarkdownAndReplaceId = async (filePath, id) => {
    const text = await readMarkdown(filePath);
    const toReplace = document.getElementById(id);
    toReplace.innerHTML = marked(text);
    replaceWithContent(toReplace);
}
