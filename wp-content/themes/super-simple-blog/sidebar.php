<div id="sidebar__container">
  <div id="about">
      <p><?php the_author_meta( 'description' ); ?> </p>
    </div>
  <div id="archives">
    <h4>Archives</h4>
    <ol class="list-unstyled">
	     <?php wp_get_archives( 'type=monthly' ); ?>
    </ol>
  </div>
</div>
