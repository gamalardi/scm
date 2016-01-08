<?php include('header.php') ?>
	<?php wp_nav_menu(); ?>
	<div class="page-wrap">
		<div class="header">
			<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('full', array('class' => 'img-responsive'));
					echo 'there is thumbnails';
				};
			?>
		</div>
		<div class="content">
			<?php echo get_post_field('post_content', $post->ID, 'raw'); ?>
		</div>
		<div class="footer"></div>
	</div>

<?php include('footer.php') ?>
