<?php 
/*
 * Template Name: page-default
 */
?>

<div class="page-wrap" id="home">
	<?php include ('template/megamenu.php'); ?>
	<div class="header"> <?php the_post_thumbnail(); ?></div>
	<div class="content">this is page content</div>
	<div class="footer">this is page footer</div>	
</div>