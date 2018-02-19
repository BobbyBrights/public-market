<?php if(get_field('table_token', 'option')): $i = 0; ?>
  <?php while(has_sub_field('table_token', 'option')): $i++; ?>


    <div class="table-header">
      <h3><?php the_sub_field('title'); ?></h3>
    </div>

    <?php while(has_sub_field('first_row', 'option')): $i++; ?>
      <div class="first-row">
        <span class="c1"><?php the_sub_field('1cell'); ?></span>
        <span class="c2"><?php the_sub_field('2cell'); ?></span>
        <span class="c3"></span>
      </div>
    <?php endwhile; ?>

    <?php while(has_sub_field('second_row', 'option')): $i++; ?>

      <div class="second-row">
        <?php while(has_sub_field('1_inner_row', 'option')): $i++; ?>
          <div class="inner-row">
            <span class="c1"><?php the_sub_field('1_cell'); ?></span>
            <span class="c2"><?php the_sub_field('2cell'); ?></span>
            <span class="c3"><?php the_sub_field('3cell'); ?></span>
          </div>
        <?php endwhile; ?>
        <?php while(has_sub_field('2_inner_row', 'option')): $i++; ?>
          <div class="inner-row">
            <span class="c1"><?php the_sub_field('1_cell'); ?></span>
            <span class="c2"><?php the_sub_field('2cell'); ?></span>
            <span class="c3"><?php the_sub_field('3cell'); ?></span>
          </div>
        <?php endwhile; ?>
        <?php while(has_sub_field('3_inner_row', 'option')): $i++; ?>
          <div class="inner-row">
            <span class="c1"><?php the_sub_field('1_cell'); ?></span>
            <span class="c2"><?php the_sub_field('2cell'); ?></span>
            <span class="c3"><?php the_sub_field('3cell'); ?></span>
          </div>
        <?php endwhile; ?>
        <?php while(has_sub_field('4_inner_row', 'option')): $i++; ?>
          <div class="inner-row">
            <span class="c1"><?php the_sub_field('1_cell'); ?></span>
            <span class="c2"><?php the_sub_field('2cell'); ?></span>
            <span class="c3"><?php the_sub_field('3cell'); ?></span>
          </div>
        <?php endwhile; ?>
      </div>

    <?php endwhile; ?>


    <div class="third-row">
      <div class="inner-row">
        <span class="c1"><?php the_sub_field('third_row'); ?></span>
      </div>
    </div>

    <?php while(has_sub_field('fourth_row', 'option')): $i++; ?>
      <div class="four-row">
        <div class="inner-row">
          <span class="c1"><?php the_sub_field('1_cell'); ?></span>
          <span class="c2"><?php the_sub_field('2_cell'); ?></span>
        </div>
      </div>
    <?php endwhile; ?>

    <?php while(has_sub_field('fifth_row', 'option')): $i++; ?>
      <div class="five-row">
        <div class="inner-row">
          <span class="c1"><?php the_sub_field('1_cell'); ?></span>
          <span class="c2"><?php the_sub_field('2_cell'); ?></span>
        </div>
      </div>
    <?php endwhile; ?>

    <?php while(has_sub_field('sixth_row', 'option')): $i++; ?>
      <div class="six-row">
        <div class="inner-row">
          <span class="c1"><?php the_sub_field('1_cell'); ?></span>
          <span class="c2"><?php the_sub_field('2_cell'); ?></span>
        </div>
      </div>
    <?php endwhile; ?>

    <div class="footer-table">
    </div>

  <?php endwhile; ?>
<?php endif; ?>
