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

    var toggle_artist = $('.toggle_artist');
    var gallery_item = $('.gallery-image');
    var owl = jQuery('.owl-carousel');
    var c_counter = owl.find(".owl-counter").children();

    toggle_artist.on('click', function(e) {
        e.preventDefault();
        
        var $self = $(this);
        
        var content = $( '.toggle__content' );
        
        $self.text(( $self.text() == 'Thumbnails' ) ? 'Slideshow' : 'Thumbnails');
        $(content[0]).toggleClass('active');
        $(content[1]).toggleClass('active');
    });

    gallery_item.on('click', function(e) {
        e.preventDefault();

        var gallery = $('#gallery-title');
        var $grid_item_index = $(this).parent().index();
        var $active_owl_index = $('.owl-carousel .active').index();
        var content = $( '.toggle__content' );

        if(gallery.length > 0){
            if($(window).scrollTop() > 100){
                $('html, body').animate({
                    scrollTop: gallery.offset().top - 50
                }, 500, 'linear');
            }
        }
        
        toggle_artist.text( ( toggle_artist.text() == 'Thumbnails' ) ? 'Slideshow' : 'Thumbnails');
        $('.owl-carousel .active').addClass('first-view');

        owl.trigger('to.owl.carousel', [$grid_item_index, 1]);
        $( c_counter[0] ).text( $grid_item_index + 1 );
        $(content).toggleClass('active');

        var timeout = $grid_item_index === $active_owl_index ? 1 : 1000;

        setTimeout(function(){ 
            $('.first-view').removeClass('first-view');
        }, timeout);
    });

});