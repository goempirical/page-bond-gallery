jQuery(function($){
    $('.navbar-nav .search-icon').click(function(e){
        e.preventDefault();
        console.log('search');
        $('.search form').toggleClass('show-form');
    });
});