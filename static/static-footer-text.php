<?php /* Static Name: Footer text */ ?>
<div id="footer-text" class="footer-text">
	<?php $myfooter_text = apply_filters( 'cherry_text_translate', of_get_option('footer_text'), 'footer_text' ); ?>

	<?php if($myfooter_text){?>
		<?php echo $myfooter_text; ?>
	<?php } else { ?>

		<strong>
		<!--<a href="<?php echo home_url(); ?>/" class="logo_h logo_h__img">-->
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>">
		<!--</a>-->
		</strong>
		&copy; <?php echo date ('Y'); ?> | <a href="<?php echo home_url(); ?>/privacy-policy/" title="<?php echo theme_locals('privacy_policy'); ?>"><?php echo theme_locals("privacy_policy"); ?></a>

	<?php } ?>
	
</div>