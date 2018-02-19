<footer>

	<div class="footer1">
		<div class="wrap">
			<div class="logo">
				<img src="<?php echo PW_THEME_URL; ?>./assets/img/logo-footer.png">
			</div>
			<div class="subscribe-box">
				<div class="subs-content">
					<h3>Subscribe to stay updated on our token sale!</h3>
					<form>
						<input type="text" placeholder="Enter your email" class="email">
						<a href="#!" class="button btn blue-btn">Subscribe Now</a>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="footer2">
		<div class="wrap">
			<div class="menu menu_1">
				<span class="title">Company</span>
				<div class="columns">
					<ul>
						<?php if(get_field('company_menu', 'option')): $i = 0; ?>
							<?php while(has_sub_field('company_menu', 'option')): $i++; ?>

								<li><a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('label'); ?></a></li>

							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>

			<div class="menu menu_2">
				<span class="title">Social</span>
				<div class="columns">
					<ul>
						<?php if(get_field('social_menu', 'option')): $i = 0; ?>
							<?php while(has_sub_field('social_menu', 'option')): $i++; ?>

								<li><a href="<?php the_sub_field('url'); ?>"><figure><img src="<?php the_sub_field('img'); ?>"></figure><span><?php the_sub_field('label'); ?></span></a></li>

							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>

			<div class="menu menu_3">
				<span class="title">Community</span>
				<div class="columns">
					<ul>
						<?php if(get_field('community_menu', 'option')): $i = 0; ?>
							<?php while(has_sub_field('community_menu', 'option')): $i++; ?>

								<li><a href="<?php the_sub_field('url'); ?>"><figure><img src="<?php the_sub_field('img'); ?>"></figure><span><?php the_sub_field('label'); ?></span></a></li>

							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>

			<div class="menu menu_4">
				<span class="title">Resouces</span>
				<div class="columns">
					<ul>
						<?php if(get_field('resoucers_menu', 'option')): $i = 0; ?>
							<?php while(has_sub_field('resoucers_menu', 'option')): $i++; ?>

								<li><a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('label'); ?></a></li>

							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="footer3">
		<div class="wrap">
			<div class="logo-gabriel">
				<p>Desing by</p>
				<a href="http://gabrieldegennaro.com/">
					<img src="<?php echo PW_THEME_URL; ?>./assets/img/logo-gabriel.png">
				</a>
			</div>
			<span class="copy">All rights reserved © Public Market 2018</span>
		</div>
	</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
