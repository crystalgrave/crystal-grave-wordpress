    <footer>
        <div class="container">
			<ul>
				<li>&copy; <?php echo date("Y"); ?> Crystal Grave Web Design</li>
			</ul>
            <ul class="social-media-links">
				<li><a href="https://twitter.com/crystalgrave1">Twitter</a></li>
                <li><a href="https://github.com/crystalgrave">GitHub</a></li>
				<li><a href="https://www.linkedin.com/in/crystal-grave/">LinkedIn</a></li>
				<li><a href="https://www.facebook.com/crystalgravedesigns">Facebook</a></li>
            </ul>
        </div>
    </footer>

<!--     <script src="js/main.js"></script> -->


	<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Your customer chat code -->
	<!--<div class="fb-customerchat"
		 attribution=setup_tool
		 page_id="1720600741567623"
		 theme_color="#1EB4E7"
		 logged_in_greeting="Hey I see you! Are you looking for something? "
		 logged_out_greeting="Hey! Do you need help with something? ">
	</div>
    -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127195748-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127195748-1');
</script>
<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lightgallery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lg-thumbnail.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lg-fullscreen.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lg-zoom.js"></script>
<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery'), {
    selector: '.portfolio-items',
    thumbnail:true,
    escKey: true,
    download: false,
    counter: true,
    subHtmlSelectorRelative: true,
    zoom: true,
    scale: 1,
    actualSize: true
}); 

</script>
<?php wp_footer(); ?>



</body>

</html>
