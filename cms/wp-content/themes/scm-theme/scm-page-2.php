<?php 
/*
 * Template Name: scm-page-2
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
        <div class="page-content container">
            <?php get_template_part('template/content', 'sidebar'); ?>
            <div class="user-content col-xs-12 col-sm-8">
                <div class="">

                    <div class="user-post">
						<?php 
							$title = get_the_title();
							$args = 'category_name='. $title .'&order=ASC';
							query_posts($args);
							while (have_posts()) : the_post();
								the_title('<h2>', '</h2>');
								the_content();
							endwhile;
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>