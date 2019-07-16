<?php
/* Template Name: Work Template */
get_header(); ?>








<main>
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <p>Feel free to take a look at all the work I have done in design, web development, and even some photography.</p>
        <div class="work-grid">
            <div class="work-grid-items">
                <a href="<?php echo get_home_url(); ?>/work/graphic-design">
                    <h2>Graphic Design</h2>
                </a>
            </div>
            <div class="work-grid-items">
                <a href="<?php echo get_home_url(); ?>/work/web-design">
                    <h2>Web Design</h2>
                </a>
            </div>
            <div class="work-grid-items">
                <a href="<?php echo get_home_url(); ?>/work/photography">
                    <h2>Other Stuff</h2>
                </a>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>