"use strict";

function setIdClassAttr(id, value) {
    const element = document.getElementById(id);
    if (!element)
        return;
    element.className = value;
}

function showOption(element) {
    const resetClassAttr = (id, value) => {
        const options = document.getElementById(id).options;
        for (const option of options)
            setIdClassAttr(`${option.value}Div`, value);
    };

    // reset all
    if (element.id === "OSSelect") {
        resetClassAttr("OSSelect", "invisible");
        distroSelect.value = "emptyDist";
    }
    resetClassAttr("distroSelect", "invisible");

    setIdClassAttr(`${element.value}Div`, ""); // display selected element
}

document.addEventListener("DOMContentLoaded", () => {
    const osSelect = document.getElementById("OSSelect");
    osSelect.addEventListener("change", (event) => {
        showOption(event.target);
    });
    osSelect.value = "emptyOS";

    const distroSelect = document.getElementById("distroSelect");
    distroSelect.addEventListener("change", (event) => {
        showOption(event.target);
    });
    distroSelect.value = "emptyDist";
});
