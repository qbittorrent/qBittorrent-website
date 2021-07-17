/**
 * Transforms markdown to HTML
 * @param {string} text Markdown
 * @returns {string} HTML
 */
const markdownToHtml = (text) => {
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
 * Replaces an element in the DOM with the HTML obtaining by transforming given markdown
 * @param {string} text Markdown
 * @param {string} id id of the element in DOM to replace
 */
const transformMarkdownAndReplaceId = (text, id) => {
    const html = markdownToHtml(text);
    const toReplace = document.getElementById(id);
    toReplace.innerHTML = html;
    replaceWithContent(toReplace);
}
