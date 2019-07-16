<?php
/*
The Work/Services page layout
*/
get_header(); ?>


<main>
    <div class="container">
        <h1><?php the_title(); ?></h1>
        

        <div class="full-row">
            <div class="left-col">
                <h3>Description:</h3>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
                endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
                
            </div>
            <div class="right-col">
                <h3>Services/Skills:</h3>
                <div class="list-item">
                <?php the_field('servicesskills'); ?>

                </div>
                <h3>Client:</h3><p><?php the_field('client'); ?></p>
            </div>
            
        </div> <!-- end full row -->

        <div class="full-row" style="border: 1px solid rgba(0,0,0,0.5);">
            <?php the_field('image_gallery'); ?>
        </div>


        <div class="full-row">
            <?php the_post_thumbnail( 'full' , ['class' => 'img-center'] );?>
        </div>
    </div>

</main>

<?php get_footer(); ?>