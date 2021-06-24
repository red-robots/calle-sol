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
			$blue_title = get_field('blue_title');
			$description = get_field('description');
			$link = get_field('link');
			$link_text = get_field('link_text');
			$newTab = get_field('open_in_new_tab');



		
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
	<section class="brown home">
		<?php the_content(); 
		// echo '</pre>';
		// 	print_r($newTab);
		// 	echo '</pre>';
			?>
		
		<div class="special-wrap">
			<div class="special-widget">
				
				<div class="right">
					<?php if( $blue_title ) { ?>
						<div class="blue-title">
							<?php echo $blue_title; ?>
						</div>
					<?php } ?>
					<div class="right-right">
						<?php if( $description ) { ?>
							<div class="text"><?php echo $description; ?></div>
						<?php } ?>
						<?php if( $link_text && $link ) { ?>
							<div class="btn">
								<a href="<?php echo $link; ?>" <?php if($newTab){ echo 'target="_blank"';} ?>><?php echo $link_text; ?></a>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div><!-- #primary -->
<?php
wp_reset_postdata();
get_footer();
