<?php get_header(); ?>
<div id="content">
	<?php get_template_part( 'nav', 'above' ); ?>
	<?php while ( have_posts() ) : the_post() ?>
	<?php get_template_part( 'entry' ); ?>
	<?php comments_template(); ?>
	<?php endwhile; ?>
	<?php get_template_part( 'nav', 'below' ); ?>
	<div id="bottom-image">
		<img id="sweets" src="/wordpress/wp-content/themes/blankslate/images/cakepops.png" alt="cake Pops"/>
	</div>
	<div class="clear"></div>
</div>

<?php get_footer(); ?>