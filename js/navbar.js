$("#navbar-button").click(function () {
    if ($('p,h1,h2,h3,h4,h5').css('visibility') == 'hidden') { // Dropdown was already down
        hideMenu();
    } else {
        showMenu();
    }
});

$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        if ($("p").css('visibility') != "hidden") {
            $(".hide-scroll").fadeOut();
        }
    } else {
        $(".hide-scroll").fadeIn();
    }
});

$(".w3-overlay").click(function () {
    hideMenu();
});

function hideMenu() {
    $(".menu-container").toggleClass("menu-change");
    // $("#temp1").slideToggle("fast");
    $("#navbar-dropdown-content").slideToggle("fast");
    $(".w3-overlay").hide();
    $('p,h1,h2,h3,h4,h5').css('visibility','visible');
    if ($(window).scrollTop() > 100) {
        $(".hide-scroll").fadeOut();
    }
    $("#menu-opened").hide();
    $("#menu-closed").show();
}

function showMenu() {
    $(".menu-container").toggleClass("menu-change");
    // $("#temp1").slideToggle("fast");
    $("#navbar-dropdown-content").slideToggle("fast");
    $(".w3-overlay").fadeIn();
    $('p,h1,h2,h3,h4,h5').css('visibility','hidden');
    $("#menu-closed").hide();
    $("#menu-opened").show();
    $(".hide-scroll").fadeIn();
}
