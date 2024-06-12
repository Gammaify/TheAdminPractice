$(document).ready(function(){
    $(".burgerIcon, .closeIcon").click(function(){
        $('.mobileNavContainer').toggleClass('hide show', 500);
    })

    $(".mobileNav li a").click(function(){
        $('.mobileNavContainer').toggleClass('hide show', 500);
    })
});