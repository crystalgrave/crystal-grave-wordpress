<?php
/**
 * Template Name: Front-Page
 */

get_header(); ?>

    <!-- Start of index. Header Ends here -->
    <header>
        <div class="container">
            <h1>Hello!</h1>
            <p>My name is <span class="primary-highlight">Crystal Grave</span></p>
            <p>I <span class="secondary-highlight">design websites</span> for people.</p>
    
            <a class="btn primary-btn" href="<?php echo get_home_url(); ?>/work">View Work</a>
            <a class="btn secondary-btn" href="<?php echo get_home_url(); ?>/contact">Contact Me</a>
			<a href="#about-me" id="down-arrow"><div class="arrow bounce"><i class="fas fa-caret-down fa-2x" aria-hidden="true"></i></div></a>
        </div>
		
    </header>
	<main>
		<section class="about-me" id="about-me">
			<div class="container">
				<h2>What I can do for you</h2>
				<div class="card-container">
					<div class="card">
						<div class="about-heading">
							<img alt="Graphic Design Icon" src="<?php echo get_template_directory_uri(); ?>/img/graphic-design-icon.png">
							<h3>Graphic Design</h3>
						</div>
						<p>Graphic design and web design many times really come together. Check out my design projects that have been used for several small businesses. I focus on creating social media images and designs that have been used on YouTube, Instagram, and Facebook pages.</p>
						<a href="<?php echo get_home_url(); ?>/work/graphic-design/">See More...</a>
						
					</div>
					<div class="card">
						<div class="about-heading">
							<img alt="Web Design Icon" src="<?php echo get_template_directory_uri(); ?>/img/web-design-icon.png">
							<h3>Website Design</h3>
						</div>
						<p>As a Web Designer and Developer, my main focus is to provide a great service to small businesses and to help them gain more exposure in the web world. User Experience is so important to have a successful online presence, and I like to build function and usable sites for my clients.</p>
						<a href="<?php echo get_home_url(); ?>/work/web-design/">See More...</a>
						
					</div>
					<div class="card">
						<div class="about-heading">
							<img alt="Photography Icon" src="<?php echo get_template_directory_uri(); ?>/img/camera-icon.png">
							<h3>Other Stuff</h3>
						</div>
						<p>I like art, design, and photography. My images range from landscape to pet and family photography! I like to do a wide variety of things that you might think are cool! If you want to know more about my hobbies please check it out.</p>
						<a href="<?php echo get_home_url(); ?>/work/photography/">See More...</a>
					</div>
				</div>
			</div>
		</section>
		<section class="portfolio">
			<div class="container">
				<h2>Portfolio</h2>
				<div class="portfolio-container" >

                <?php $question =    array('post_type' => array('web_design', 'graphic_design', 'branding'), 'orderby'=> 'post_modified','order'=> 'desc', 'posts_per_page'  => '6',); 
                $results = new WP_Query($question);
                if ( $results->have_posts() ) : while ( $results->have_posts() ) : $results->the_post();
                ?>

                    <!-- Start .portfolio-items -->
					<div class="portfolio-items">
						<a href="<?php the_permalink() ?>" class="thumb-img">
                            <?php the_post_thumbnail( 'full' , ['class' => 'port-img'] );?>
						</a>
                    </div>
                    <!-- End .portfolio-items -->
                <?php endwhile; else: ?>
                
                <p>Sorry, no posts matched your criteria.</p>
                <?php endif; wp_reset_postdata();?>
                
				</div>
			</div><!-- end container -->
		</section>
		<section class="contact-me">
			<div class="container">
				<h2>Contact Me</h2>
				<p>You can email me at <a href="mailto:crystal@crystalgrave.ca">crystal@crystalgrave.ca</a> reach me at <a href="https://www.facebook.com/crystalgravedesigns/">facebook</a> or <a href="https://twitter.com/crystalgrave1">Twitter</a></p>
			</div>
		</section>
	</main>
    <!-- End of index. Starting Footer below -->

<?php get_footer(); ?>