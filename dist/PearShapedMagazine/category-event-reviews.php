<?php get_header(); ?>
<div class="section-header">
	<h1 class="section-header__title">Events</h1>
	<ul class="category-toggle">
		<li class="category-toggle__button"><a href="<?php echo site_url(); ?>/category/listings">Listings</a></li>
		<li class="category-toggle__button"><a href="<?php echo site_url(); ?>/category/event-previews">Upcoming</a></li>
		<li class="category-toggle__button_active"><a href="<?php echo site_url(); ?>/category/event-reviews">Reviews</a></li>
	</ul>
</div>
<div class="preview-stream">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="preview-stream__item row">
	<a href="<?php the_permalink(); ?>">
		<div class="four columns">
			<?php the_post_thumbnail('medium') ?>
		</div>
		<div class="eight columns">
			<h1 class="preview-stream__item__title"><?php the_title(); ?></h1>
			<h3 class="preview-stream__item__author">
				<?php 
				    $author = get_post_meta($post->ID, 'Author', true); 

					if ($author) {
					    echo $author;
					}
				?>
			</h3>
			<div class="preview-stream__item__content">
				<?php the_content(); ?>
			</div>
		</div>
		</a>
	</div>
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>