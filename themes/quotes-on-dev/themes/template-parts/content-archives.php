<?php
/**
 * Template part for displaying page content in page-archives.php.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
        <div class="quote-authors">
            <h2>Quote Authors</h2>
            <ul>
                <?php $args = array(
                        'posts_per_page'   => -1,
                    );
                ?>
                <?php 
                    $authors = get_posts($args);
                    foreach($authors as $author) {
                        echo '<li><a href="' . get_the_permalink($author->ID) . '">' . $author->post_title . '</a></li>';
                    }
                ?>
            </ul>
        </div>

        <div class="categories">
            <h2>Categories</h2>
            <ul>
                <?php 
                    $categories = get_categories();
                    foreach($categories as $category) {
                        echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                    }
                ?>
            </ul>
        </div>

        <div class="tags">
            <h2>Tags</h2>
            <ul>
                <?php 
                    $tags = get_tags();
                    foreach($tags as $tag) {
                        echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
                    }
                ?>
            </ul>
        </div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
