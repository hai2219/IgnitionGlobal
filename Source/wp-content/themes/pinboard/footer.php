
		<div id="footer">
		<div class="footer-content">
		<div class="bottom-menu">
		<div class="links subject">Links</div>
		<div class="group group1">
		<div class="item"><a href="<?php bloginfo('home')?>">Career</a></div>
		<div class="item"><a href="<?php bloginfo('home')?>">Partnerships</a></div>
		<div class="item"><a href="<?php bloginfo('home')?>">Press and Media</a></div>
		
		</div>
		
		</div>
		<div class="bottom-join">
		<div class="join">
		<div class="contact subject">Contact us</div>
		<div id="phone">T: +65 65343770</div>
		<div id="phone">E: admin@ignition.com</div>
		<div id="phone">A: Ignition Global Pte Ltd
SINGAPORE 050531</div>
		</div>
		<div class="copyright">&copy; 2014 Ignition Global Pte Ltd. All Rights Reserved.</div>
		</div>
		<div class="bottom-social">
		<div class="contact subject">Connect with Us</div>
		<div class="social-btn">
		<!--
		<a><img src="<?php print get_template_directory_uri() ?>/images/fb.jpg" /> </a>
		<a><img src="<?php print get_template_directory_uri() ?>/images/twitter.jpg" /> </a>
		<a><img src="<?php print get_template_directory_uri() ?>/images/youtube.jpg" /> </a>
		<a><img src="<?php print get_template_directory_uri() ?>/images/instagram.jpg" /> </a>
		-->
		<?php dynamic_sidebar(6); ?>
		</div>
		
		</div>
		</div>
		</div><!-- #footer -->
	</div><!-- #wrapper -->
<?php wp_footer(); ?>
</body>
</html>