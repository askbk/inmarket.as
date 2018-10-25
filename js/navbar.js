let menuCounter = 0,
    menuContainer = $(".menu-container"),
    overlay = $(".w3-overlay"),
    dropdown = $("#navbar-dropdown-content"),
    caret = document.getElementById("navbar-about-icon");

$("#navbar-button").click(function () {
    if (menuCounter%2===0) {
        showMenu();
    } else {
        hideMenu();
    }
});

$("#navbar-about-link").mouseenter(function () {
    $(".subnav-content").slideToggle("fast");
    caret.style.transform="rotate(90deg)";
}).mouseleave(function () {
    caret.style.transform="rotate(0deg)";
    $(".subnav-content").slideToggle("fast");
}).click(function () {
    $(".subnav-content").slideToggle("fast");
});

overlay.click(function () {
    hideMenu();
});

function hideMenu() {
    ++menuCounter;
    menuContainer.toggleClass("menu-change");
    dropdown.slideToggle("fast");
    overlay.hide();
}

function showMenu() {
    ++menuCounter;
    menuContainer.toggleClass("menu-change");
    dropdown.slideToggle("fast");
    overlay.fadeIn();
}
