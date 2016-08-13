<?php
/**
* Template Name: Full image Page
*/

get_header(); ?>
<?php cherry_setPostViews(get_the_ID()); ?>

<?php if(has_post_thumbnail()) {
			$thumb   = get_post_thumbnail_id();
			$img_url = wp_get_attachment_url( $thumb,'thumbnail'); //get img URL
			$image   = $img_url;//aq_resize( $img_url, 120, 120, true ); //resize & crop img
		?>
		<figure class="featured-thumbnail">
			<img src="<?php echo $image ?>" alt="<?php the_title(); ?>" />
			<div class="page-header">
				<span class="page-title"><?php the_title(); ?></span>
				<?php if ( isset($teampos) ) { ?>
					<span class="page-desc"><?php echo esc_html( $teampos ); ?></span>
				<?php } ?>
			</div>
		</figure>
		<?php } ?>


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