<?php
/**
* Template Name: Fullwidth Page
*/

get_header(); ?>

<div class="motopress-wrapper content-holder clearfix">
	<div class="container">
		<div class="row">
			<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="single-team.php" data-motopress-wrapper-type="content">
				<div class="row">
					<div class="<?php echo cherry_get_layout_class( 'content' ); ?> <?php echo of_get_option('blog_sidebar_pos'); ?> col-center-block" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-single-team.php">
						<?php get_template_part("loop/loop-single-team"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>