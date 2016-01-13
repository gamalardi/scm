<?php 
/*
 * Template Name: page-default2
 */
?>

<?php 
	get_header('home');
	// wp_nav_menu();
?>
<div class="main-wrap" id="">
    <div class="content">
        <div class="main-banner">
            <div class="main featured-image">
                <!-- call this function to display the featured image -->
                <?php
                   if ( wp_is_mobile()) {
                        the_post_thumbnail('sparkling-featured', array( 'class' => 'img-responsive fullwidth'));
                   } else {
                        the_post_thumbnail( 'full', array( 'class' => 'img-responsive fullwidth') ); 
                } ?>
            </div>
        </div>
        <div class="user-content">
            <div class="container spacemar">
                    <h2 class="content-title text-center">about me</h2>
                    <div class="user-post">
                         <!-- call this function to get content from wp -->
                        <?php echo get_post_field('post_content', $post->ID, 'raw'); ?>
                    </div>

                    
                </div>

            </div>
    </div>
</div>

<?php get_footer(); ?>