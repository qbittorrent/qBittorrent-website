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
 * Replaces an element in the DOM with the HTML obtaining by transforming markdown resolved in the given Promise
 * @param {Promise<Response>} responsePromise Promise resolving to markdown content
 * @param {string} id id of the element in DOM to replace
 */
const transformMarkdownAndReplaceId = async (responsePromise, id) => {
    const response = await responsePromise;
    const text = await response.text();
    const html = markdownToHtml(text);
    const toReplace = document.getElementById(id);
    toReplace.innerHTML = html;
    replaceWithContent(toReplace);
}
