jQuery(function($){
    $('.navbar-nav .search-icon').click(function(e){
        e.preventDefault();
        console.log('search');
        $('.search form').toggleClass('show-form');
    });

    // INQUIRE FORM

    if($('.pb-inquire-input')){
      var artworkData = $('#artwork-data').html();

      console.log(artworkData);

      $('.pb-inquire-input textarea').val(artworkData);

    }
});