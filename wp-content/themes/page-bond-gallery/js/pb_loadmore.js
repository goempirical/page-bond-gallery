jQuery(function($){
    var $lmButton = $('.loadmore_artists');

    var pbLoadMore = function() {
        
        var data = {
            'action': 'artists',
            'query': posts_artists, // that's how we get params from wp_localize_script() function
            'page' : current_page_artists
        };
 
        $.ajax({
            url : pb_loadmore.ajaxurl, // AJAX handler
            data : data,
            type : 'POST',
            beforeSend : function ( xhr ) {
                //$lmButton.text('Loading...'); // change the button text, you can also add a preloader image
            },
            success : function( data ){
                if( data ) { 
                    $('#artist-grid').append(data);
                    //$lmButton.text( 'More Artists' ); // insert new posts
                    current_page_artists++;
                    pbLoadMore();
                } else {
                    $lmButton.remove(); // if no data, remove the button as well
                }
            }
        });
    };

    if($lmButton.length){
        pbLoadMore();
    }
});