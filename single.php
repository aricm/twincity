<?php get_header(); ?>

<?php
$postId = get_option('page_for_posts');
$pageTitle = get_post_meta($postId,'show_page_title',true);


?>

<section id="pageContent" class="innerWrapper clearfix blogPosts subpage">

	<div class="container">
		<div class="row">
			<?php
			while ( have_posts() ) : the_post();

			?>
			<main class="clearfix col col-12 col-md-12">
				<?php
				echo '<article>';
				if($pageTitle == 1){
					echo '<div class="post_title"><h1>'.get_the_title().'</h1></div>';
				}
				if ( has_post_thumbnail() ) {
					echo '<div id="postThumbnail">';
					the_post_thumbnail();
					echo '</div>';
				}

				if($pageTitle != 1){
					echo '<h2>'.get_the_title().'</h2>';
				}

				the_content();
				echo '</article>';
				?>
			</main>
		</div>
	</div>

</section>

<?php endwhile; ?>

<?php get_footer(); ?>
