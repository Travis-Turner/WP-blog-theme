<?php get_header(); ?>
      <a id="return-link" href="<?php echo get_home_url(); ?>"><i class="fa fa-caret-left" aria-hidden="true"></i> Go back</a>
		  <?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );
				endwhile; endif;
			?>
<?php get_footer(); ?>
