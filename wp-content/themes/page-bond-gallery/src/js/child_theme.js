jQuery(function($){
    $('.navbar-nav .search-icon').click(function(e){
        e.preventDefault();
        console.log('search');
        $('.search form').toggleClass('show-form');
    });

    // INQUIRE FORM

    if($('.pb-inquire-input')){
      $('#artwork-data p').each( function() {
      	var artworkData = $(this).html();
      	var inputVal = $('.pb-inquire-input textarea').val();
      	console.log(artworkData);

      	$('.pb-inquire-input textarea').val( inputVal + artworkData + "\n");

      });
    }
});