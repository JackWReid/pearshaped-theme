<div class="thumbnail-grid">
<?php while (have_posts()) : the_post();
    $author = get_post_meta($post->ID, 'Author', true);
    echo "<div class='thumbnail-grid__item'><a href='" . get_permalink() . "'>";
    the_post_thumbnail('medium');
    echo "<div class='thumbnail-grid__item__meta'><h3>"; the_title(); echo "</h3>";
    if ($author) { echo "<p>" . $author . "</p></div>"; }
    echo "</a></div>";
endwhile; ?>
</div>