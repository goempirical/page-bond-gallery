<?php
/**
 * Partial template for content in get_template_part
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

			<div class="row justify-content-center">

				<div class="col-md-11 main-content-area">

						<?php //echo print_r( wp_get_nav_menu_object('')->count ); 
							wp_nav_menu( 
								array( 'menu' => 'contact_menu', 
									   'menu_class' => 'menu box-stroke__bottom',
									   'container_class' => 'menu-side-container'  ) );
						?> 

					<div class="row">

						<div class="col-md-4 grid-item">

							<?php the_content(); ?>

						</div>

						<div class="col-md-8 grid-item">

							<?php $location = get_field('contact_map'); ?>
								<div class="acf-map">
									<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
								</div>
						    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfUJ2B05OTiOmiPpaGLNK8_BaXeFXiATA"></script>
							
						<script type="text/javascript">
							(function($) {

							/*
							*  new_map
							*
							*  This function will render a Google Map onto the selected jQuery element
							*
							*  @type	function
							*  @date	8/11/2013
							*  @since	4.3.0
							*
							*  @param	$el (jQuery element)
							*  @return	n/a
							*/

							function new_map( $el ) {
								
								// var
								var $markers = $el.find('.marker');
								
								
								// vars
								var args = {
									zoom		: 18,
									center		: new google.maps.LatLng(0, 0),
									mapTypeId	: google.maps.MapTypeId.ROADMAP,
									styles: [
									  {
									    elementType: "geometry",
									    stylers: [
									      {
									        color: "#f5f5f5"
									      }
									    ]
									  },
									  {
									    elementType: "labels.icon",
									    stylers: [
									      {
									        visibility: "off"
									      }
									    ]
									  },
									  {
									    elementType: "labels.text.fill",
									    stylers: [
									      {
									        color: "#616161"
									      }
									    ]
									  },
									  {
									    elementType: "labels.text.stroke",
									    stylers: [
									      {
									        color: "#f5f5f5"
									      }
									    ]
									  },
									  {
									    featureType: "administrative.land_parcel",
									    elementType: "labels.text.fill",
									    stylers: [
									      {
									        color: "#bdbdbd"
									      }
									    ]
									  },
									  {
									    featureType: "poi",
									    elementType: "geometry",
									    stylers: [
									      {
									        color: "#eeeeee"
									      }
									    ]
									  },
									  {
									    featureType: "poi",
									    elementType: "labels.text.fill",
									    stylers: [
									      {
									        color: "#757575"
									      }
									    ]
									  },
									  {
									    featureType: "poi.park",
									    elementType: "geometry",
									    stylers: [
									      {
									        color: "#e5e5e5"
									      }
									    ]
									  },
									  {
									    featureType: "poi.park",
									    elementType: "labels.text.fill",
									    stylers: [
									      {
									        color: "#9e9e9e"
									      }
									    ]
									  },
									  {
									    featureType: "road",
									    elementType: "geometry",
									    stylers: [
									      {
									        color: "#ffffff"
									      }
									    ]
									  },
									  {
									    featureType: "road.arterial",
									    elementType: "labels.text.fill",
									    stylers: [
									      {
									        color: "#757575"
									      }
									    ]
									  },
									  {
									    featureType: "road.highway",
									    elementType: "geometry",
									    stylers: [
									      {
									        color: "#dadada"
									      }
									    ]
									  },
									  {
									    featureType: "road.highway",
									    elementType: "labels.text.fill",
									    stylers: [
									      {
									        color: "#616161"
									      }
									    ]
									  },
									  {
									    featureType: "road.local",
									    elementType: "labels.text.fill",
									    stylers: [
									      {
									        color: "#9e9e9e"
									      }
									    ]
									  },
									  {
									    featureType: "transit.line",
									    elementType: "geometry",
									    stylers: [
									      {
									        color: "#e5e5e5"
									      }
									    ]
									  },
									  {
									    featureType: "transit.station",
									    elementType: "geometry",
									    stylers: [
									      {
									        color: "#eeeeee"
									      }
									    ]
									  },
									  {
									    featureType: "water",
									    elementType: "geometry",
									    stylers: [
									      {
									        color: "#c9c9c9"
									      }
									    ]
									  },
									  {
									    featureType: "water",
									    elementType: "labels.text.fill",
									    stylers: [
									      {
									        color: "#9e9e9e"
									      }
									    ]
									  }
									]
				        };
								
								
								// create map	        	
								var map = new google.maps.Map( $el[0], args);
								
								
								// add a markers reference
								map.markers = [];
								
								
								// add markers
								$markers.each(function(){
									
							    	add_marker( $(this), map );
									
								});
								
								
								// center map
								center_map( map );
								
								
								// return
								return map;
								
							}

							/*
							*  add_marker
							*
							*  This function will add a marker to the selected Google Map
							*
							*  @type	function
							*  @date	8/11/2013
							*  @since	4.3.0
							*
							*  @param	$marker (jQuery element)
							*  @param	map (Google Map object)
							*  @return	n/a
							*/

							function add_marker( $marker, map ) {

								// var
								var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

								// create marker
								var marker = new google.maps.Marker({
									position	: latlng,
									map			: map
								});

								// add to array
								map.markers.push( marker );

								// if marker contains HTML, add it to an infoWindow
								if( $marker.html() )
								{
									// create info window
									var infowindow = new google.maps.InfoWindow({
										content		: $marker.html()
									});

									// show info window when marker is clicked
									google.maps.event.addListener(marker, 'click', function() {

										infowindow.open( map, marker );

									});
								}

							}

							/*
							*  center_map
							*
							*  This function will center the map, showing all markers attached to this map
							*
							*  @type	function
							*  @date	8/11/2013
							*  @since	4.3.0
							*
							*  @param	map (Google Map object)
							*  @return	n/a
							*/

							function center_map( map ) {

								// vars
								var bounds = new google.maps.LatLngBounds();

								// loop through all markers and create bounds
								$.each( map.markers, function( i, marker ){

									var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

									bounds.extend( latlng );

								});

								// only 1 marker?
								if( map.markers.length == 1 )
								{
									// set center of map
								    map.setCenter( bounds.getCenter() );
								    map.setZoom( 16 );
								}
								else
								{
									// fit to bounds
									map.fitBounds( bounds );
								}

							}

							/*
							*  document ready
							*
							*  This function will render each map when the document is ready (page has loaded)
							*
							*  @type	function
							*  @date	8/11/2013
							*  @since	5.0.0
							*
							*  @param	n/a
							*  @return	n/a
							*/
							// global var
							var map = null;

							$(document).ready(function(){

								$('.acf-map').each(function(){

									// create map
									map = new_map( $(this) );

								});

							});

							})(jQuery);
							</script>
							<?php
								wp_link_pages( array(	
									'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
									'after'  => '</div>',
								) );
							?>
						
						</div>

					</div>
					
				<div class="box-stroke policy-section">

					<?php echo get_field('contact_policy'); ?>

				</div>

			</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php //edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
