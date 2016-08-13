<?php /* Wrapper Name: Footer */ ?>
<div class="footer-widgets">
	<div class="row">
		<div class="span4 footer-panel logo" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1">
			<img src="http://www.law.codegearspro.com/wp-content/uploads/2016/07/Logo_WHITE.png" />

		</div>
	</div>
</div>


<div class="footer-widgets">
	<div class="row">
		<div class="span3 footer-panel" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1">
			<?php dynamic_sidebar("footer-sidebar-1"); ?>
		</div>

		<div class="span3 footer-panel" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-2">
			<?php dynamic_sidebar("footer-sidebar-2"); ?>
		</div>

		<div class="span3 footer-panel" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-3">
			<?php //dynamic_sidebar("footer-sidebar-3"); ?>
			<div class="visible-all-devices footer_3" id="themegrill_social_icons-3"><h4>Keep Connected</h4>		
				<ul class="social-icons-lists show-icons-label icons-background-none">

					
						<li class="social-icons-list-item">
							<a class="social-icon" target="_blank" href="http://facebook.com/AskVenturaLaw">
								<span style="font-size: 24px" class="socicon socicon-facebook"></span>

															<span class="social-icons-list-label">Facebook</span>
													</a>
						</li>

					
						<li class="social-icons-list-item">
							<a class="social-icon" target="_blank" href="http://twitter.com/AskVenturaLaw">
								<span style="font-size: 24px" class="socicon socicon-twitter"></span>

															<span class="social-icons-list-label">Twitter</span>
													</a>
						</li>

					
						<li class="social-icons-list-item">
							<a class="social-icon" target="_blank" href="https://www.youtube.com/channel/UCPDJ_470u1ZX-YqfLd1ttMw">
								<span style="font-size: 24px" class="socicon socicon-youtube"></span>

															<span class="social-icons-list-label">YouTube</span>
													</a>
						</li>

					
						<li class="social-icons-list-item">
							<a class="social-icon" target="_blank" href="https://www.linkedin.com">
								<span style="font-size: 24px" class="socicon socicon-linkedin"></span>

															<span class="social-icons-list-label">LikendIn</span>
													</a>
						</li>

					
				</ul>

			</div>
		</div>

		<div class="span3 footer-panel" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-4">
			<?php dynamic_sidebar("footer-sidebar-4"); ?>
		</div>
	</div>
</div>

<div class="copyright">
	<div class="row">
		<div class="span4" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
			<?php get_template_part("static/static-footer-text"); ?>
		</div>

	</div>
</div>



<link rel="stylesheet" type="text/css" media="all" href="http://www.law.codegearspro.com/wp-content/themes/vrslaw/law.css" />
<?php


if( is_front_page() ) { 
	//modernizr.custom.js
	wp_enqueue_script( 
		'modernizr-scripts', 
		get_stylesheet_directory_uri().'/js/modernizr.custom.js');


	wp_enqueue_script( 
		'classie-scripts', 
		get_stylesheet_directory_uri().'/js/classie.js');

	wp_enqueue_script( 
		'cbpAnimatedHeader-scripts', 
		get_stylesheet_directory_uri().'/js/cbpAnimatedHeader.js');

} else {
	?>
<style>
.header .schedule_text .langs {
	visibility: hidden;
}
</style>
	<?php
}



			
?>

