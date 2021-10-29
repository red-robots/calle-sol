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
$order = get_field('order', 'option');

// echo '<pre>';
// print_r($order);
// echo '</pre>';

?>
</head>

<body <?php body_class(); ?>>

	<?php 
$active = get_field('toggle_on', 'option');
$offer = get_field('offer', 'option');
$btnText = get_field('button_text', 'option');
$btnLink = get_field('button_link', 'option');
// echo '<pre>';
// print_r($active);
// echo '</pre>';
 ?>
<!-- Gift Card popup -->
<?php if( $active[0] == 'turnon' && is_front_page() ) { ?>
	<div style="display: none;">
		<div class='ajax popup' >
			<a href="<?php echo $btnLink; ?>" target="_blank">
				<?php echo $offer; ?>
			</a>
		<br>
			<div class="view-btn">
				<a href="<?php echo $btnLink; ?>" target="_blank"><?php echo $btnText; ?></a>
			</div>
		</div>
	</div>
<?php } ?>


<div id="page" class="site cf">
	<a class="skip-link sr" href="#content"><?php esc_html_e( 'Skip to content', 'bellaworks' ); ?></a>

	<header id="masthead" class="site-header " role="banner">
		<div class="wrapper relative">

			<div class="order-rez-wrap desk">
				
				<?php if( $order ) { ?>
					<div class="order-n-delivery ">
						<a class="first" href="#">
							Order
						</a>
						<div class="dropdown">
							<?php foreach( $order as $o ) { ?>
								<div class="drop">
									<a href="<?php echo $o['link']; ?>">
										<div class="img">
											<img src="<?php echo $o['logo']['url']; ?>">
										</div>
										<div class="tesxt"><?php echo $o['text']; ?></div>
									</a>
								</div>
							<?php } ?>
						</div>
					</div>
				<?php } ?>

				<?php if( $rezLink ) { ?>
					<div class="order-n-delivery">
						<a class="first" href="<?php echo $rezLink; ?>" id="resyButton-EzBNcMKpKKfTgMDkZLr6S" >
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
				<?php if( $rezLink ) { ?>
					<div class="center">
				        <div class="order-n-delivery">
							<a  class="first" href="<?php echo $rezLink; ?>" id="resyButton-EzBNcMKpKKfTgMDkZLr6S" >
								<?php echo $rezText; ?>
							</a>
						</div>
					</div>
				<?php } ?>
				<?php if( $order ) { ?>
					<div class="center">
						<div class="order-n-delivery ">
							<a class="first" href="#">
								Order
							</a>
							<div class="dropdown">
								<?php foreach( $order as $o ) { ?>
									<div class="drop">
										<a href="<?php echo $o['link']; ?>">
											<div class="img">
												<img src="<?php echo $o['logo']['url']; ?>">
											</div>
											<div class="tesxt"><?php echo $o['text']; ?></div>
										</a>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php } ?>
				
			</div>
			
	</div><!-- wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content ">
