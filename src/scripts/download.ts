document.addEventListener("DOMContentLoaded", () => {
    const distroSelect = document.getElementById("distroSelect") as HTMLSelectElement;

    const showOption = (element: HTMLSelectElement) => {
        const hideOptionDivs = (element: HTMLSelectElement) => {
            for (const option of element.options)
                document.getElementById(`${option.value}Div`)?.classList.add("invisible");
        };

        // reset all
        if (element.id === "OSSelect") {
            hideOptionDivs(element);
            distroSelect.value = "emptyDist";
        }
        hideOptionDivs(distroSelect);

        // show selected
        document.getElementById(`${element.value}Div`)?.classList.remove("invisible");
    };

    const osSelect = document.getElementById("OSSelect") as HTMLSelectElement;
    osSelect.addEventListener("change", (_event) => {
        showOption(osSelect);
    });
    osSelect.value = "emptyOS";

    distroSelect.addEventListener("change", (_event) => {
        showOption(distroSelect);
    });
    distroSelect.value = "emptyDist";
});
