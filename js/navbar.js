let i = 0,
    menuContainer = $(".menu-container"),
    overlay = $(".w3-overlay"),
    dropdown = $("#navbar-dropdown-content");

$("#navbar-button").click(function () {
    if (i%2===0) {
        showMenu();
    } else {
        hideMenu();
    }
});

overlay.click(function () {
    hideMenu();
});

function hideMenu() {
    ++i;
    menuContainer.toggleClass("menu-change");
    dropdown.slideToggle("fast");
    overlay.hide();
}

function showMenu() {
    ++i;
    menuContainer.toggleClass("menu-change");
    dropdown.slideToggle("fast");
    overlay.fadeIn();
}
