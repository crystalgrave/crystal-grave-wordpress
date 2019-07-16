<?php
/*
The Default page layout
*/
get_header(); ?>

<main>
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <div class="column-container">
            <div class="col-left">
                <?php the_post_thumbnail( 'full' , ['class' => 'img-center'] );?>
            </div>
            <div class="col-right">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
                endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>


                

                
            </div>
        </div>
    </div>

</main>


<?php get_footer(); ?>