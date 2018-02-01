<footer>
	<!-- <div class="wrap">
		<a href="<?php echo PW_URL; ?>/request" class="logo">
			<div class="icon1"><img src="<?php echo PW_THEME_URL; ?>assets/img/logo-blue-part1.png"></div>
			<div class="icon2"><img src="<?php echo PW_THEME_URL; ?>assets/img/logo-blue-part2.png"></div>
		</a>
		
		<nav>
			<a href="<?php echo PW_URL; ?>/product">Product</a>
			<a href="<?php echo PW_URL; ?>/why-flow">Why Flow</a>
			<a href="<?php echo PW_URL; ?>/our-company">Our Company</a>
			<a href="<?php echo PW_URL; ?>/request">Request a Demo</a>
		</nav>
	</div> -->
	
	<div class="footer">
		<div class="wrap">
			<p>©2017 Flow. All rights reserved.</p>	

			<div class="social">
                <a href="https://www.flow.io/policies/privacy/" class="priva">Privacy Policy</a>
				<a class="facebook" href="<?php the_field('facebook_link', 'option'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a class="twitter" href="<?php the_field('twitter_link', 'option'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a class="linkedin" href="<?php the_field('linkedin_link', 'option'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77747620-5', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_footer(); ?>
</body>
</html>