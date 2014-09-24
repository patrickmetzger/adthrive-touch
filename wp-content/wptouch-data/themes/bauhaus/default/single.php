<?php get_header(); ?>
	<div id="content">
		<?php while ( wptouch_have_posts() ) { ?>

			<?php wptouch_the_post(); ?>

			<div class="<?php wptouch_post_classes(); ?>">
				<div class="post-page-head-area bauhaus">
					<span class="post-date-comments">
						<?php if ( bauhaus_should_show_date() ) { ?>
							<?php wptouch_the_time(); ?>
						<?php } ?>
						<?php if ( bauhaus_should_show_comment_bubbles() ) { ?>
							<?php if ( bauhaus_should_show_date() && ( comments_open() || wptouch_have_comments() ) ) echo '&harr;'; ?>
							<?php if ( comments_open() || wptouch_have_comments() ) comments_number( __( 'no comments', 'wptouch-pro' ), __( '1 comment', 'wptouch-pro' ), __( '% comments', 'wptouch-pro' ) ); ?>
						<?php } ?>
					</span>
					<h2 class="post-title heading-font"><?php wptouch_the_title(); ?></h2>
					<?php if ( bauhaus_should_show_author() ) { ?>
						<span class="post-author"><?php the_author(); ?></span>
					<?php } ?>
				</div>

				<div class="post-page-content">
					<!-- this is the post featured image -->
          <?php /* ?>
          <?php if ( bauhaus_should_show_thumbnail() && wptouch_has_post_thumbnail() ) { ?>
						<div class="post-page-thumbnail">
							<?php the_post_thumbnail('large', array( 'class' => 'post-thumbnail wp-post-image' ) ); ?>
						</div>
					<?php } ?>
          <? */ ?>
          
					<?php wptouch_the_content(); ?>
					<?php if ( bauhaus_should_show_taxonomy() ) { ?>
						<?php if ( wptouch_has_categories() || wptouch_has_tags() ) { ?>
							<div class="cat-tags">
								<?php if ( wptouch_has_categories() ) { ?>
									<?php _e( 'Categories', 'wptouch-pro' ); ?>: <?php wptouch_the_categories(); ?><br />
								<?php } ?>
								<?php if ( wptouch_has_tags() ) { ?>
									<?php _e( 'Tags', 'wptouch-pro' ); ?>: <?php wptouch_the_tags(); ?>
								<?php } ?>
							</div>
						<?php } ?>

						<?php if ( wptouch_has_tags() ) { ?>
						<?php } ?>
					<?php } ?>
				</div>
			</div>

		<?php } ?>
	</div> <!-- content -->

	<?php get_template_part( 'nav-bar' ); ?>
	<?php if ( comments_open() || wptouch_have_comments() ) { ?>
  <div id="view-comments"><a><span class="comment-view"></span> Comments</a></div>
		<div id="comments">
			<?php comments_template(); ?>
		</div>
	<?php } ?>
  
  <ul>
  <?php
  $args = array( 'posts_per_page' => 50);

  $myposts = get_posts( $args );
  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    <li>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </li>
  <?php endforeach; 
  wp_reset_postdata();?>

  </ul>
  
  
  <?php exit(); ?>
  
  <?php $query = new WP_Query( $query_string . '&post_type=' . $post_type . '&max_num_pages=10&posts_per_page='. foundation_number_of_posts_to_show() .'' ); 
    var_dump($query_string);
    if ( $query->have_posts() ) { while ( $query->have_posts() ) { 
      $query->the_post(); ?>
  <div>alkjflkdsjf</div>
			<?php get_template_part( 'post-loop' ); ?>

			<?php } // $query ?>
  <?php } ?>
  
<?php get_footer(); ?>