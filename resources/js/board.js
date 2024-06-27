document.addEventListener("DOMContentLoaded", function () {
    updateMenu();
    updateListNavegation();
    updateBreadcrumbsClass();

    document
        .getElementById("menu-button")
        .addEventListener("change", function () {
            updateMenu();
            updateListNavegation();
        });

    window.addEventListener("resize", function () {
        updateListNavegation();
        updateBreadcrumbsClass();
    });
});

function updateMenu() {
    const menu = document.getElementById("menu");
    const menu_button = document.getElementById("menu-button");

    if (menu_button.checked) {
        menu.classList.remove("left-0");
        menu.classList.add("-left-52");
    } else {
        menu.classList.remove("-left-52");
        menu.classList.add("left-0");
    }
}

function updateListNavegation() {
    const navigation_list = document.getElementById("navigation-list");
    const menu_section = document.getElementById("menu-section");
    const menu_button = document.getElementById("menu-button");
    const isNarrowScreen = window.innerWidth < 640;

    if (menu_button.checked) {
        if (isNarrowScreen) {
            menu_section.classList.add("w-auto");
            menu_section.classList.remove("w-52", "w-[4.25rem]");
        } else {
            menu_section.classList.add("w-[4.25rem]");
            menu_section.classList.remove("w-52", "w-auto");
        }
        navigation_list.classList.remove("px-6");
    } else {
        if (isNarrowScreen) {
            menu_section.classList.add("w-auto");
            menu_section.classList.remove("w-52", "w-[4.25rem]");
            navigation_list.classList.remove("px-6");
        } else {
            menu_section.classList.add("w-52");
            menu_section.classList.remove("w-[4.25rem]", "w-auto");
            navigation_list.classList.add("px-6");
        }
    }
}

function updateBreadcrumbsClass() {
    const navigation_list = document.getElementById("navigation-path");

    if (window.innerWidth <= 768) {
        navigation_list.classList.remove("breadcrumbs");
    } else {
        navigation_list.classList.add("breadcrumbs");
    }
}
