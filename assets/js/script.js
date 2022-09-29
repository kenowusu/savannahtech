(function($){
    const mobileNavBurger = $('.js-nav-mobile');
    const primaryNavigation = $('.js-primary-navigation');
    

    mobileNavBurger.click(function(){
        console.log(primaryNavigation)
        $(this).toggleClass('nav-mobile__opened');
        primaryNavigation.toggleClass('main-navigation__opened')
    })


}(jQuery))