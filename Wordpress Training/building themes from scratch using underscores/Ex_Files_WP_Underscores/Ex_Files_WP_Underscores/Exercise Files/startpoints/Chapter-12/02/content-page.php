<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package my-simone
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php 
    if (has_post_thumbnail()) {
        echo '<div class="single-post-thumbnail clear">';
        echo '<div class="image-shifter">';
        echo the_post_thumbnail('large-thumb');
        echo '</div>';
        echo '</div>';
    }
    ?>
    
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'my-simone' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'my-simone' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
