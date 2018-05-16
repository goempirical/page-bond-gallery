<?php
/**
 * Template Name: Update Artist CV
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">
					<div class="row justify-content-center">
						<div class="col-md-10">
							<div class="box-stroke adding__padding__top">
							<div class="row">
								<?php 

// update cv file
$artist_pdf = array (
    '6801' => '9440',
    '6802' => '9442',
    '6803' => '9454',
    '6805' => '9434',
    '6806' => '9458',
    '6807' => '9446',
    '6808' => '9450',
    '6809' => '9480',
    '6810' => '9457',
    '6811' => '9469',
    '6814' => '9453',
    '6815' => '9430',
    '6816' => '9460',
    '6818' => '9427',
    '6869' => '9464',
    '6820' => '9444',
    '6821' => '9477',
    '6822' => '9437',
    '6823' => '9429',
    '6824' => '9465',
    '6825' => '9455',
    '6826' => '9466',
    '6827' => '9473',
    '6829' => '9468',
    '6830' => '9433',
    '6831' => '9449',
    '6834' => '9475',
    '6835' => '9471',
    '6837' => '9479',
    '6838' => '9447',
    '6839' => '9436',
    '6840' => '9474',
    '6841' => '9443',
    '6842' => '9461',
    '6895' => '9432',
    '6844' => '9472',
    '6846' => '9451',
    '6847' => '9456',
    '6848' => '9478',
    '6849' => '9431',
    '6850' => '9428',
    '6901' => '9448',
    '6852' => '9463',
    '6854' => '9445',
    '6903' => '9476',
);
                                // foreach ($artist_pdf as $key => $value) {
                                //  if(!add_post_meta( $key, 'artist_content_artist_cv_file', $value, true )){
                                //      update_post_meta( $key, 'artist_content_artist_cv_file', $value);
                                //  }
                                //  add_post_meta( $key, '_artist_content_artist_cv_file', "field_5ac2aa6c6bd15", true );
                                // }
								?>
							</div>
							</div>
						</div>

					</div>
				
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row end -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>