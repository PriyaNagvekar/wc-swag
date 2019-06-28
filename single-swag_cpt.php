<?php get_header(); ?>
<div id="primary" class="content-area full-width">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="image-title-container">
					<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
					<div class="blog-feature-image">
						<?php wc_swag_post_thumbnail(); ?>		
					</div>

					<div class="cruise-header">
						<h3 class="post-title"><?php echo get_the_title(); ?></h3>
					</div>
				</div>

				<div class="entry-content">
					<?php if ( get_post()->post_content ):
						printf( __( '<p><strong>Link: </strong>%s</p>', 'wc-swag' ), get_the_content() ); 
					endif ?>

					<?php
					$wordcamp_name = wp_get_post_terms( $post->ID, 'wordcamp_name_tax', array( "fields" => "all" ) );

					if($wordcamp_name) {
						printf( __( '<p><strong>Wordcamp: </strong>%s</p>', 'wc-swag' ), $wordcamp_name[0]->name ); 
					}
					?>

					<?php
					$year = wp_get_post_terms( $post->ID, 'year_tax', array( "fields" => "all" ) );
					
					if($year) {
						printf( __( '<p><strong>Year: </strong>%s</p>', 'wc-swag' ), $year[0]->name ); 
					}
					?>

					<?php
					$country = wp_get_post_terms( $post->ID, 'country_tax', array( "fields" => "all" ) );
					
					if($country) {
						printf( __( '<p><strong>Country: </strong>%s</p>', 'wc-swag' ), $country[0]->name ); 
					}
					?>

					<?php
					$city = wp_get_post_terms( $post->ID, 'city_tax', array( "fields" => "all" ) );
					
					if($city) {
						printf( __( '<p><strong>City: </strong>%s</p>', 'wc-swag' ), $city[0]->name ); 
					}
					?>

					<?php
					$type = wp_get_post_terms( $post->ID, 'swag_type_tax', array( "fields" => "all" ) );
					
					if($type) {
						printf( __( '<p><strong>Type: </strong>%s</p>', 'wc-swag' ), $type[0]->name ); 
					}
					?>
				</div>
			</article><!-- #post-<?php the_ID(); ?> -->

			<?php
			// the_post_navigation();

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>