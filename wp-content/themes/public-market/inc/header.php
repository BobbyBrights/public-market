<header>
  <div class="logo ancor">
    <a href="#hero"><img src="<?php echo PW_THEME_URL; ?>assets/img/logo.png"></a>
  </div>
  <nav>
    <ul>

      <?php if(get_field('menu_header', 'option')): $i = 0; ?>
				<?php while(has_sub_field('menu_header', 'option')): $i++; ?>

          <li class="ancor"><a class="ani" href="<?php the_sub_field('url'); ?>"><?php the_sub_field('label'); ?></a></li>

				<?php endwhile; ?>
			<?php endif; ?>

    </ul>
    <div class="icons-menu">
      <ul>
        <?php if(get_field('icon_menu_header', 'option')): $i = 0; ?>
  				<?php while(has_sub_field('icon_menu_header', 'option')): $i++; ?>

            <li class="li-icons"><a href="<?php the_sub_field('url'); ?>"><img src="<?php the_sub_field('img'); ?>"></a></li>

  				<?php endwhile; ?>
  			<?php endif; ?>
      </ul>
      <span class="tree-dots" href="#">...</span>
    </div>
  </nav>

  <div class="buttons">

    <?php if(get_field('buttons_header', 'option')): $i = 0; ?>
      <?php while(has_sub_field('buttons_header', 'option')): $i++; ?>

        <?php while(has_sub_field('first_button_header', 'option')): $i++; ?>
          <a href="<?php the_sub_field('url'); ?>" class="btn first button button--winona button--border-thin button--text-
thick" data-text="<?php the_sub_field('label'); ?>"><span><?php the_sub_field('label'); ?><span></a>
        <?php endwhile; ?>

        <?php while(has_sub_field('second_button_header', 'option')): $i++; ?>
          <a href="<?php the_sub_field('url'); ?>" class="btn white button button--winona button--text-
thick button--inverted" data-text="<?php the_sub_field('label'); ?>"><span><?php the_sub_field('label'); ?></span></a>
        <?php endwhile; ?>

      <?php endwhile; ?>
    <?php endif; ?>

  </div>

  <div class="flag-box">
    <div class="hamburger-container">
  		<div id="hamburger">
  			<span></span>
  			<span></span>
  			<span></span>
  		</div>
  	</div>

    <a class="border dropdown-button" href="#" data-activates='dropdown-flag'>
      <div class="border-img">
        <img src="<?php echo PW_THEME_URL; ?>./assets/img/eua-flag.jpg">
      </div>
      <span class="badge"><img src="<?php echo PW_THEME_URL; ?>./assets/img/badge.png"></span>
    </a>

    <!-- Dropdown Structure -->
    <ul id='dropdown-flag' class='dropdown-content' style="display: none;">
      <li><a href="#!"><img src="<?php echo PW_THEME_URL; ?>./assets/img/eua-flag.jpg"></a></li>
      <li class="divider"></li>
      <li><a href="#!"><img src="<?php echo PW_THEME_URL; ?>./assets/img/eua-flag.jpg"></a></li>
    </ul>

  </div>

</header>

<div id="hamburger-content">
  <ul>
    <?php if(get_field('menu_header', 'option')): $i = 0; ?>
      <?php while(has_sub_field('menu_header', 'option')): $i++; ?>

        <li class="ancor testl"><a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('label'); ?></a></li>

      <?php endwhile; ?>
    <?php endif; ?>
  </ul>
  <div class="icons-menu">
    <ul>
      <?php if(get_field('icon_menu_header', 'option')): $i = 0; ?>
        <?php while(has_sub_field('icon_menu_header', 'option')): $i++; ?>

          <li><a href="<?php the_sub_field('url'); ?>"><img src="<?php the_sub_field('img'); ?>"></a></li>

        <?php endwhile; ?>
      <?php endif; ?>
  </ul>
  </div>
  <div class="buttons">
    <a href="#" class="btn first">Whitepaper</a>
    <a href="#" class="btn white">join Mailing List</a>
  </div>
</div>
