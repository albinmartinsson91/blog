<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<?php 
				$categories = get_the_category();
				$category_id = $categories[0]->cat_ID; 
			?>

			<h2><?php the_category(); ?></h2>

			<?php global $post;
				$args = array('category' => $category_id );

				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<li>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</li>
			<?php endforeach; 
			wp_reset_postdata();?>

			

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
