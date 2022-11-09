	</div><!-- #content -->

	<?php  
	$footlogo = get_field("footlogo","option");
	$address = get_field("address","option");
	$phone = get_field("phone","option");
	$fMessage = get_field("message","option");
	//$email = get_field("email","option");
	// $contacts = array($address,$phone,$fax,$email);
	$facebook = get_field("facebook","option");
	$twitter = get_field("twitter","option");
	$instagram = get_field("instagram","option");
	$footer_logos = get_field("fs_group","option");
	?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-content cf">
				

			<div class="foot-addy">
				<div class="flex">
					<div class="address">
						<?php echo $address; ?>
					</div>
					<div class="social">
						<div class="flex">
							<?php if( $facebook ) {?>
								<a href="<?php echo $facebook; ?>">
									<i class="fab fa-facebook-square"></i>
								</a>
								<?php } ?>
							<?php if( $twitter ) {?>
								<a href="<?php echo $twitter; ?>">
									<i class="fab fa-twitter"></i>
								</a>
								<?php } ?>
							<?php if( $instagram ) {?>
								<a href="<?php echo $instagram; ?>">
									<i class="fab fa-instagram"></i>
								</a>
								<?php } ?>
						</div>
					</div>
				</div>
			</div>

				

			<div class="footcol fcol4 fs-logos">
				<div class="inner">
					<div class="rewards">
						<div class="reward">
							<a target="_blank" href="https://www.toasttab.com/calle-sol-1205-thomas-ave/rewardsSignup">Rewards Signup</a>
						</div>
						<div class="reward">
							<a target="_blank" href="https://www.toasttab.com/calle-sol-1205-thomas-ave/rewards">Check Rewards</a>
						</div>
					</div>
					<div class="foot-message">
						<?php echo $fMessage; ?>
					</div>
					<?php if ($footer_logos) { ?>
					<div class="footlogos">
						<?php foreach ($footer_logos as $f) { 
							$logo = ($f['logo']) ? $f['logo']['url']:'';
							$link = ($f['link']) ? parse_external_url($f['link']):'';
							?>
							<?php if ($logo && $link) { ?>
							<a href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>">
								<img src="<?php echo $logo ?>" alt="<?php echo $f['logo']['title'] ?>" />
							</a>
							<?php } else { ?>
								<?php if ($logo) { ?>
								<img src="<?php echo $logo ?>" alt="<?php echo $f['logo']['title'] ?>" />	
								<?php } ?>
							<?php } ?>	
						<?php } ?>
					</div>	
					<?php } ?>
				</div>

				<div class="siteby">Designed by <a href="https://bellaworksweb.com" target="_blank">BW</a></div>
				
			</div>

				
		</div><!-- wrapper -->
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); 


$active = get_field('toggle_on', 'option');
if( $active[0] == 'turnon' && is_front_page() ) {
?>
<?php if(is_front_page()) { ?>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			// Popup
			$.colorbox({inline:true, href:".ajax"});
		});
	</script>
<?php }} ?>

</body>
</html>
