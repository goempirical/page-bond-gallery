 
 jQuery(document).ready( function () {
    var owl = jQuery('.owl-carousel');
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
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
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
});
