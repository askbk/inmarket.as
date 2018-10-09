$("#navbar-button").click(function () {
    console.log("hey");
    $("#navbar-dropdown").slideToggle("fast");
    if ($('p,h1,h2,h3,h4,h5').css('visibility') == 'hidden') { // Dropdown was already down
        // $("#navbar-dropdown").hide("slow");
        $('p,h1,h2,h3,h4,h5').css('visibility','visible');
        if ($(window).scrollTop() > 100) {
            $(".hide-scroll").fadeOut();
        }
        $("#menu-opened").hide();
        $("#menu-closed").show();
    } else {
        // $("#navbar-dropdown").show("slow");
        $('p,h1,h2,h3,h4,h5').css('visibility','hidden');
        $("#menu-closed").hide();
        $("#menu-opened").show();
        $(".hide-scroll").fadeIn();
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
})
