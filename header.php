<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://use.typekit.net/pii4rtl.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">
<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>

<script src="https://widgets.resy.com/embed.js"></script>
<script>
    resyWidget.addButton(document.getElementById('resyButton-EzBNcMKpKKfTgMDkZLr6S'), {"venueId":52538,"apiKey":"dXWgaznMclQwQSDir6Ln0Aw75SuBhTbO","replace":true,});
</script>


<?php 
wp_head(); 
$ordDeli = get_field('order_&_delivery', 'option');
$ordDeliText = get_field('order_text', 'option');
$rezLink = get_field('reservations_link', 'option');
$rezText = get_field('reservations_text', 'option');
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site cf">
	<a class="skip-link sr" href="#content"><?php esc_html_e( 'Skip to content', 'bellaworks' ); ?></a>

	<header id="masthead" class="site-header " role="banner">
		<div class="wrapper relative">

			<div class="order-rez-wrap desk">
				<?php if( $ordDeli ) { ?>
					<div class="order-n-delivery ">
						<a href="<?php echo $ordDeli; ?>">
							<?php echo $ordDeliText; ?>
						</a>
					</div>
				<?php } ?>
				<?php if( $ordDeli ) { ?>
					<div class="order-n-delivery">
						<a href="<?php echo $rezLink; ?>" id="resyButton-EzBNcMKpKKfTgMDkZLr6S" >
							<?php echo $rezText; ?>
						</a>
					</div>
				<?php } ?>
			</div>
			
			<?php if( is_front_page() ) { ?>
	             <h1 class="logo">
		            <a href="<?php bloginfo('url'); ?>">
		            	<img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" alt="Calle Sole">
		            </a>
	            </h1>
	        <?php } else { ?>
	            <div class="logo">
	            	<a href="<?php bloginfo('url'); ?>">
		            	<img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" alt="Calle Sole">
		            </a>
	            </div>
	        <?php } ?>


	        <?php get_template_part('inc/nav'); ?>

			<div class="order-rez-wrap mobile">
				<?php if( $ordDeli ) { ?>
					<div class="center">
				        <div class="order-n-delivery">
							<a href="<?php echo $ordDeli; ?>">
								<?php echo $ordDeliText; ?>
							</a>
						</div>
					</div>
				<?php } ?>
				<?php if( $ordDeli ) { ?>
					<div class="center">
				        <div class="order-n-delivery">
							<a href="<?php echo $rezLink; ?>" id="resyButton-EzBNcMKpKKfTgMDkZLr6S" >
								<?php echo $rezText; ?>
							</a>
						</div>
					</div>
				<?php } ?>
			</div>
			
	</div><!-- wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content ">
