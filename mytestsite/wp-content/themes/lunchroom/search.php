<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Lunchroom
 */

get_header(); ?>

<div class="content-area">
    <div class="middle-align content_sidebar">
        <div class="site-main" id="sitemain">
			<?php if ( have_posts() ) : ?>
                <header>
                    <h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'lunchroom' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'search' ); ?>
                <?php endwhile; ?>
                 <?php the_posts_pagination( array(
						'mid_size' => 5,
						'prev_text' => __( 'Prev', 'lunchroom' ),
						'next_text' => __( 'Next', 'lunchroom' ),
				) ); ?>
            <?php else : ?>
                <?php get_template_part( 'no-results', 'search' ); ?>
            <?php endif; ?>
        </div>
        <?php get_sidebar();?>
        <div class="clear"></div>
    </div>
</div>

<?php get_footer(); ?>