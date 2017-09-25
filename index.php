<?php get_header(); ?>

<?php
$postId = get_option('page_for_posts');
$pageTitle = get_post_meta($postId,'show_page_title',true);
?>
<section id="blogContent" class="blogPosts subpage " >
	<div class="container">
		<div class="row">
			<main class="col col-12 col-md-12">
				<?php
				while ( have_posts() ) : the_post();
					echo '<article class="clearfix articlespacing">';
					echo '<div class="date">';
					echo '<span>'.get_the_time('F').' </span>';
					echo '<span>'.get_the_time('d').', </span>';
					echo '<span>'.get_the_time('Y').'</span>';
					echo '</div>';
					echo '<h2><a title="'.get_the_title().'"  class="blogtitle" href="'.get_permalink().'">'.get_the_title().'</a></h2>';

					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}

					the_excerpt();
					echo '<p><a title="'.get_the_title().'" href="'.get_permalink().'" class="button">Read More »</a></p>';
					echo '</article>';
				endwhile;
				?>
				<div class="nav-next left"><?php previous_posts_link( 'Newer posts' ); ?></div>
				<div class="nav-previous right"><?php next_posts_link( 'Older posts' ); ?></div>
			</main>
		</div>
	</div>
</section>

<?php get_footer(); ?>
