<?php
/* Template Name: Graphic Design Thumb View */
get_header(); ?>

<main>
    <div class="container">
        <h1><a href="<?php echo get_home_url(); ?>/work">Work</a> / <span class="third-highlight"><?php the_title(); ?></span></h1>
        <!-- <p>Graphic Design</p> -->
        
        <section class="portfolio">
                <div class="portfolio-container">
                
                    <?php $question =    array('post_type' => array('branding', 'graphic_design'), 'orderby'=>'rand', 'posts_per_page'  => '6',); 
                $results = new WP_Query($question);
                if ( $results->have_posts() ) : while ( $results->have_posts() ) : $results->the_post();
                ?>

                    <!-- Start .portfolio-items -->
					<div class="portfolio-items">
						<a href=" <?php the_permalink() ?>" class="thumb-img">
                            <?php the_post_thumbnail( 'full' , ['class' => 'port-img'] );?>
						</a>
                    </div>
                    <!-- End .portfolio-items -->
                <?php endwhile; else: ?>
                
                <p>Sorry, no posts matched your criteria.</p>
                <?php endif; wp_reset_postdata();?>
      

                </div>
        </section>
    </div>

</main>



<?php get_footer(); ?>