<?php 
/*
 * Template Name: scm-page-template
 */
?>

<?php 
	get_header();
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
        <div class="user-content" id="<?php echo strtolower(get_the_title()); ?>">
            <div class="container spacemar">
                    <!-- <h2 class="content-title text-center"><?php echo get_the_title(); ?></h2> -->
                    <div class="user-post">
                         <!-- call this function to get content from wp -->
                        <?php echo get_post_field('post_content', $post->ID, 'raw'); ?>
                    </div>

                    
                </div>

            </div>
    </div>
</div>

<?php get_footer(); ?>