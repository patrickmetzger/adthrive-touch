<!-- post loop -->

<a href="<?php wptouch_the_permalink(); ?>" class="loop-link tappable clearfix <?php if ( !bauhaus_should_show_thumbnail() ) { echo 'no-thumbs'; } ?>">

  <?php /* ?>
	<?php if ( wptouch_get_comment_count() > 0 && ( comments_open() || wptouch_have_comments() ) ) { ?>
		<div class="comments">
			<span><?php wptouch_the_comment_count(); ?></span>
		</div>
	<?php } ?>
  <?php */ ?>
	<div class="post-text-photo aligncenter">
    <?php if ( bauhaus_should_show_thumbnail() && wptouch_has_post_thumbnail() ) { ?>
    <div class="post-photo">
      <img src="<?php wptouch_the_post_thumbnail( 'thumbnail' ); ?>" alt="thumbnail" class="" height="250" width="300" />
    </div>
    <?php } else if ( bauhaus_should_show_thumbnail() && !wptouch_has_post_thumbnail() ) { ?>
    <div class="post-photo">
      <div class="date-circle">
        <span class="month"><?php wptouch_the_time( 'M' ); ?></span>
        <span class="day"><?php wptouch_the_time( 'j' ); ?></span>
      </div>
    </div>
    <?php } ?>

    <div class="post-text">
      <?php if ( bauhaus_should_show_date() || bauhaus_should_show_author() ) { ?>
        <span class="post-date-author body-font">
          <?php if ( bauhaus_should_show_date() ) { wptouch_the_time(); } ?>
          <?php if ( bauhaus_should_show_author() ) { ?>
            <?php if ( bauhaus_should_show_date() ) echo '&bull;'; ?> <?php _e( 'by', 'wptouch-pro' ); ?> <?php the_author(); ?>
          <?php } ?>
         </span>
       <?php } ?>

      <h2 class="post-title heading-font"><?php the_title(); ?></h2>
    </div>
  </div>
	<?php if ( wptouch_should_load_rtl() ) { ?>
		<!--<i class="arrow icon-angle-left"></i>-->
	<?php } else { ?>
		<!--<i class="arrow icon-angle-right"></i>-->
	<?php } ?>
	<!--<span class="bottom-border"></span>--><!--css border-->
</a>