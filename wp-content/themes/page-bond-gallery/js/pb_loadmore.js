jQuery(function($){
    $('.loadmore_artists').click(function(e){
        e.preventDefault();
        
        var button = $(this),
            data = {
            'action': 'artists',
            'query': posts_artists, // that's how we get params from wp_localize_script() function
            'page' : current_page_artists
        };
 
        $.ajax({
            url : pb_loadmore.ajaxurl, // AJAX handler
            data : data,
            type : 'POST',
            beforeSend : function ( xhr ) {
                button.text('Loading...'); // change the button text, you can also add a preloader image
            },
            success : function( data ){
                if( data ) { 
                    $('#artist-grid').append(data);
                    button.text( 'More Artists' ); // insert new posts
                    current_page_artists++;
 
                    if ( current_page_artists == max_page_artists ) 
                        button.remove(); // if last page, remove the button

                } else {
                    button.remove(); // if no data, remove the button as well
                }
            }
        });
    });
});