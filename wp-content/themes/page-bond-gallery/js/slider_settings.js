 
 jQuery(document).ready( function () {
    var owl = jQuery('.owl-carousel');
    var toggle_artist = jQuery('.toggle_artist');
    var gallery_item = jQuery('.gallery-image');
    var c_counter = owl.find(".owl-counter").children();

    var stand_obj = {
        items: 1,
        autoplayTimeout: 5000,
        nav: false,
        dots: false,
        autoplayHoverPause: true,
        margin: 200,
        autoHeight: false,
        smartSpeed: 1000,
    };
        
    if ( owl.length === 0 ) return;
  
        if ( owl.hasClass("next") ) {
            var global_count = null;
            var index_count = 1;
            stand_obj["nav"] = true;
            stand_obj["onTranslate"] = onChangePos.bind(stand_obj);
            stand_obj["onInitialized"] = onChangePos.bind(stand_obj);
        } else {
            stand_obj["dots"] = true;
            stand_obj["loop"] = true;
            stand_obj["autoplay"] = true;
            stand_obj["autoHeight"] = false;
        }

        owl.owlCarousel(stand_obj);
    
    function onChangePos( event ) {

        if( !global_count && event.item.count ) global_count = event.item.count;
            
        index_count = (event.item.index % global_count ) + 1;

        jQuery( c_counter[0] ).text( index_count );
        jQuery( c_counter[1] ).text( '/' + global_count );
    }

    toggle_artist.on('click', function(e) {
        e.preventDefault();
        
        var $self = jQuery(this);
        
        var content = jQuery( '.toggle__content' );
        
        $self.toggleClass('active')
        
        $self.text(( $self.hasClass('active') ) ? 
                    'Gallery' : 'Thumbnails');
        jQuery(content[0]).toggleClass('active');
        jQuery(content[1]).toggleClass('active');
    });

    gallery_item.on('click', function(e) {
        e.preventDefault();

        var gallery = jQuery('#gallery-title');
        var $grid_item = jQuery(this).parent();
        var content = jQuery( '.toggle__content' );

        if(gallery.length > 0){
            if(jQuery(window).scrollTop() > 100){
                jQuery('html, body').animate({
                    scrollTop: gallery.offset().top - 50
                }, 500, 'linear');
            }
        }
        
        toggle_artist.toggleClass('active')
        
        toggle_artist.text(( toggle_artist.hasClass('active') ) ? 'Gallery' : 'Thumbnails');

        owl.trigger('to.owl.carousel', [$grid_item.index(), 1]);
        jQuery( c_counter[0] ).text( $grid_item.index() + 1 );
        jQuery(content[0]).toggleClass('active');
        jQuery(content[1]).toggleClass('active');
    });

});
