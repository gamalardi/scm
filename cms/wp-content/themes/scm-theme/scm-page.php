<?php 
/*
 * Template Name: scm-page-template
 */
?>

<?php 
	get_header();
?>

<div class="main-wrap" id="<?php echo strtolower(get_the_title()); ?>">
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
        <div class="page-content container-fluid">
            <?php scm_sidebar();?>
            <div class="user-content col-xs-12">
                <div class="">
                    <div class="user-post">
                        <?php echo get_post_field('post_content', $post->ID, 'raw'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>