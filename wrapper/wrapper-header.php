<?php /* Wrapper Name: Header */ ?>

<?php 
$menuClass = 'cbp-af-header-shrink';
if( is_front_page() ) { 
	$menuClass = '';
} 
?>

<div class="cbp-af-header row header_menu <?php echo $menuClass;?> " >

	<div class="cbp-af-inner " data-motopress-type="static" data-motopress-static-file="static/static-nav.php">
		<div class="menu-wrap" >
			
			<div class="logo-box">
				<a href="/">
					<img src="http://www.law.codegearspro.com/wp-content/uploads/2016/07/Logo_CMYK.png">
				</a>
			</div>
				<?php get_template_part("static/static-nav"); ?>
			
			<!--
			<div class="" data-motopress-type="static" data-motopress-static-file="static/static-search.php">-->
				<?php get_template_part("static/static-search"); ?>
			<!--</div>-->
			<!--
			<div class="" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="header-sidebar">-->
				<div class="header_widget"><?php dynamic_sidebar("header-sidebar"); ?></div>
			<!--</div>-->
			
		</div>

	</div>
</div>

<?php if( is_front_page() ) { ?>
	<div class="row">
		<div class="span8">
			<?php //get_template_part("static/static-slider"); ?>

			<?php layerslider(1) ?>
		</div>
		<div class="span4" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="header-sidebar">
			<div class="header_widget"><?php dynamic_sidebar("header-sidebar"); ?></div>
		</div>
	</div>
<?php } ?>

<!--
<div class="clear"></div>
<div class="spacer"></div>
-->
			