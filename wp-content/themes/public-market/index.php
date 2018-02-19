<?php get_header(); ?>

<?php get_template_part('inc/header');	?>

<section id="hero" class="hero" style="background: url(<?php the_field('background_hero', 'option'); ?>) top right;">
  <div class="wrap">
    <div class="col-1-2">
      <h1><?php the_field('title_hero', 'option'); ?></h1>
      <h3><?php the_field('sub_title_hero', 'option'); ?></h3>
      <form>
        <input type="text" placeholder="Enter your email" class="email">
				<a href="#!" class="button btn pink-btn">Subscribe Now</a>
	    </form>
    </div>
  </div>

  <div class="social-box">
    <ul>
      <?php if(get_field('floating_social_hero', 'option')): $i = 0; ?>
				<?php while(has_sub_field('floating_social_hero', 'option')): $i++; ?>

          <li><a href="<?php the_sub_field('url'); ?>" target="_blank"><img src="<?php the_sub_field('img'); ?>"></a></li>

				<?php endwhile; ?>
			<?php endif; ?>
    </ul>
  </div>

<div class="mask"></div>

</section>

<section id="angle-box" class="angle-box">

  <div class="wrap">

	  <div class="angle">
      <div class="angle-wrap">
        <?php if(get_field('logos_angle', 'option')): $i = 0; ?>
  				<?php while(has_sub_field('logos_angle', 'option')): $i++; ?>

      	    <div class="col img-wrap"><a href="<?php the_sub_field('url'); ?>"><img src="<?php the_sub_field('img'); ?>"></a></div>

  				<?php endwhile; ?>
  			<?php endif; ?>
      </div>
	  </div>

	</div>

</section>

<section id="overview" class="overview">
  <div class="header-text">
    <h1><span>01</span><?php the_field('title_overview', 'option'); ?></h1>
  </div>

  <ul class="tabs">
    <?php if(get_field('overwiews', 'option')): $i = 0; ?>
      <?php while(has_sub_field('overwiews', 'option')): $i++; ?>

        <li class="tab col s3"><a href="#over-<?php echo $i; ?>"><?php the_sub_field('title'); ?></a></li>


      <?php endwhile; ?>
    <?php endif; ?>
  </ul>

	<div class="wrap">

    <?php if(get_field('overwiews', 'option')): $i = 0; ?>
      <?php while(has_sub_field('overwiews', 'option')): $i++; ?>

        <article id="over-<?php echo $i; ?>">
      	  <div class="col-1-2 img-box">

            <img src="<?php the_sub_field('img'); ?>">

      	  </div>

      	  <div class="col-1-2 text">
      	    <h2 class="header-title"><?php the_sub_field('title'); ?></h2>

      	    <p>
      	      <?php the_sub_field('text'); ?>
      	    </p>

      	  </div>
        </article>


      <?php endwhile; ?>
    <?php endif; ?>

	</div>
</section>

<section id="token-basics" class="token-basics">
  <div class="header-text">
    <h1><span>02</span><?php the_field('02_tokens', 'option'); ?></h1>
  </div>

  <div class="wrap">
    <article>

      <?php if(get_field('columns_tokens', 'option')): $i = 0; ?>
        <?php while(has_sub_field('columns_tokens', 'option')): $i++; ?>

          <object class="col-md-4 topic">
    				<figure class="icon">
    					<img src="<?php the_sub_field('img'); ?>">
    				</figure>
    				<h3><?php the_sub_field('title'); ?></h3>
            <p><?php the_sub_field('text'); ?>            </p>
    			</object>

        <?php endwhile; ?>
      <?php endif; ?>


		</article>

  </div>

</section>

<section id="how-it-works" class="how-it-works">

  <div class="header-text">
    <h1><span>03</span><?php the_field('how_works_title', 'option'); ?></h1>
  </div>

  <div class="wrap graphs-how-it-works">

    <?php if(get_field('first_circle', 'option')): $i = 0; ?>
      <?php while(has_sub_field('first_circle', 'option')): $i++; ?>

        <object class="icon-outer ctop">
          <span class="ball"></span>
          <div class="inner">
            <img src="<?php the_sub_field('img'); ?>">
            <p><?php the_sub_field('title'); ?></p>
          </div>
        </object>

      <?php endwhile; ?>
    <?php endif; ?>

    <?php if(get_field('second_circle', 'option')): $i = 0; ?>
      <?php while(has_sub_field('second_circle', 'option')): $i++; ?>

        <object class="icon-outer cleft">
          <span class="ball"></span>
          <div class="inner">
            <img src="<?php the_sub_field('img'); ?>">
            <p><?php the_sub_field('title'); ?></p>
          </div>
        </object>

      <?php endwhile; ?>
    <?php endif; ?>

    <?php if(get_field('third_circle', 'option')): $i = 0; ?>
      <?php while(has_sub_field('third_circle', 'option')): $i++; ?>

        <object class="icon-outer cright">
          <span class="ball"></span>
          <div class="inner">
            <img src="<?php the_sub_field('img'); ?>">
            <p><?php the_sub_field('title'); ?></p>
          </div>
        </object>

      <?php endwhile; ?>
    <?php endif; ?>


    <img class="logo" src="<?php echo PW_THEME_URL; ?>./assets/img/logo-circle.png">
  </div>

  <?php if(get_field('how_works_btn', 'option')): $i = 0; ?>
    <?php while(has_sub_field('how_works_btn', 'option')): $i++; ?>

      <a href="<?php the_sub_field('url'); ?>" class="btn cyan-btn"><?php the_sub_field('label'); ?></a>

    <?php endwhile; ?>
  <?php endif; ?>

</section>

<section id="roadmap" class="roadmap">
  <div class="header-text">
    <h1><span>04</span><?php the_field('title_roadmap', 'option'); ?></h1>
    <h3><?php the_field('sub_title_roadmap', 'option'); ?></h3>
  </div>

  <h1 class="floating-words">
    Our<br>
    Product<br>
    Roadmap
  </h1>


  <img class="timeline desktop" src="<?php echo PW_THEME_URL; ?>./assets/img/roadmap.jpg">
  <img class="timeline mobile" src="<?php echo PW_THEME_URL; ?>./assets/img/roadmap-mobile.jpg">

  <div class="header-text">
    <h1><?php the_field('second_title_roadmap', 'option'); ?></h1>
    <h3><?php the_field('second_sub_title_roadmap', 'option'); ?></h3>
  </div>

   <article class="wrap">

     <?php if(get_field('tokens_roadmap', 'option')): $i = 0; ?>
       <?php while(has_sub_field('tokens_roadmap', 'option')): $i++; ?>
         <object class="col-md-4 topic">
    				<figure class="icon">
    					<img src="<?php the_sub_field('img'); ?>">
    				</figure>
            <div class="info">
      				<h3><?php the_sub_field('title'); ?></h3>
              <p><?php the_sub_field('text'); ?></p>
            </div>
    			</object>
       <?php endwhile; ?>
     <?php endif; ?>

		</article>

</section>

<section id="token-distribution" class="token-distribution">
  <div class="header-text">
    <h1><span>05</span><?php the_field('title_token_distribution', 'option'); ?></h1>
  </div>
  <div class="header-text">
    <h3><?php the_field('sub_title_token_distribution', 'option'); ?></h3>
  </div>

  <div class="wrap">
    <div class="graphs-box col-md-5">
      <h3>Token Distribution</h3>
      <img src="<?php echo PW_THEME_URL; ?>./assets/img/token-distribution.png">
    </div>
    <div class="table-box col-md-7">

      <?php get_template_part('inc/table');	?>

    </div>
  </div>
</section>

<section id="whitepaper" class="whitepaper">
  <div class="wrap">
    <div class="whitepaper-box">
      <div class="whitepaper-content">
        <div class="header-text">
          <h1><span>06</span><?php the_field('title_whitepaper', 'option'); ?></h1>
          <h3><?php the_field('text_whitepaper', 'option'); ?></h3>
        </div>

        <?php if(get_field('buttons_whitepaper', 'option')): $i = 0; ?>
          <?php while(has_sub_field('buttons_whitepaper', 'option')): $i++; ?>

            <?php while(has_sub_field('first_button', 'option')): $i++; ?>

              <a href="<?php the_sub_field('url'); ?>" class="yellow-btn btn"><?php the_sub_field('label'); ?></a>

            <?php endwhile; ?>

            <?php while(has_sub_field('second_button', 'option')): $i++; ?>

              <a href="<?php the_sub_field('url'); ?>" class="white-btn btn"><?php the_sub_field('label'); ?></a>

            <?php endwhile; ?>

          <?php endwhile; ?>
        <?php endif; ?>

      </div>
      <img class="ipad" src="<?php echo PW_THEME_URL; ?>./assets/img/ipad.png">
    </div>
  </div>
</section>


<section id="team" class="team">
  <div class="header-text">  
    <h1><span>07</span>Meet the Team</h1>
  </div>
  <div class="swiper-container">
    <div class="wrap big-slide">
      <div class="swiper-wrapper">

        <?php if(get_field('first_slide', 'option')): $i = 0; ?>
          <?php while(has_sub_field('first_slide', 'option')): $i++; ?>

            <div class="swiper-slide">
              <div class="header">
                <div class="img-wrap">
                  <img src="<?php the_sub_field('img'); ?>">
                </div>
                <div class="info">
                  <div class="text">
                    <h3><?php the_sub_field('name'); ?></h3>
                    <p><?php the_sub_field('job_role'); ?></p>
                  </div>
                  <div class="socials">
                    <?php while(has_sub_field('social_networks', 'option')): $i++; ?>

                      <a href="<?php the_sub_field('url'); ?>"><img src="<?php the_sub_field('img'); ?>"></a>

                    <?php endwhile; ?>
                  </div>
                </div>
              </div>
              <div class="content">
                <p><?php the_sub_field('text'); ?></p>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next big"></div>
    <div class="swiper-button-prev big"></div>
  </div>

  <div class="swiper-container">

    <div class="wrap small-slide">
      <div class="swiper-wrapper">

        <?php if(get_field('second_slide', 'option')): $i = 0; ?>
          <?php while(has_sub_field('second_slide', 'option')): $i++; ?>

            <div class="swiper-slide">
              <div class="header">
                <div class="img-wrap">
                  <img src="<?php the_sub_field('img'); ?>">
                </div>
                <div class="info">
                  <div class="text">
                    <h3><?php the_sub_field('name'); ?></h3>
                    <p><?php the_sub_field('job_role'); ?></p>
                  </div>
                  <div class="socials">
                    <?php while(has_sub_field('social_networks', 'option')): $i++; ?>

                      <a href="<?php the_sub_field('url'); ?>"><img src="<?php the_sub_field('img'); ?>"></a>

                    <?php endwhile; ?>
                  </div>
                </div>
              </div>
              <div class="content">
                <p><?php the_sub_field('text'); ?></p>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next small"></div>
    <div class="swiper-button-prev small"></div>
  </div>

</section>

<section id="logos-footer" class="logos-footer">
  <div class="wrap">
    <?php if(get_field('logos_footer', 'option')): $i = 0; ?>
      <?php while(has_sub_field('logos_footer', 'option')): $i++; ?>

        <div class="col img-wrap"><a href="<?php the_sub_field('url'); ?>"><img src="<?php the_sub_field('img'); ?>"></a></div>

      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
