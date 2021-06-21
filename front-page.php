<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main home" role="main">

		<?php 
		$pageID = get_option('page_on_front');
		// echo $pageID;
		// specific post ID you want to pull
		$post = get_post( $pageID ); 
		setup_postdata( $post );

			//get_template_part( 'parts/content', 'page' );
			$hero = get_field('hero_image');

		
		?>

		<div class="hero">
			<div class="wrapper">
				<?php if( $hero ) { ?>
					<img src="<?php echo $hero['url']; ?>" alt="<?php echo $hero['alt']; ?>">
				<?php } ?>
			</div>
		</div>
		<div class="diamonds"></div>
	</main><!-- #main -->
	<section class="brown">
		<?php the_content(); ?>
		
		<div class="special-wrap">
			<div class="special-widget">
				
				<div class="right">
					<div class="blue-title">
						Lorem Ipsum dolor
					</div>
					<div class="right-right">
						<div class="text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
						</div>
						<div class="btn">
							<a href="#">Go To Menu</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div><!-- #primary -->
<?php
wp_reset_postdata();
get_footer();
