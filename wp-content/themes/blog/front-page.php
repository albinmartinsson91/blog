<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="front-page__hero clearfix">
			

			<?php /* Get Categories for front page */ ?>
			<?php $categories = get_categories( array(
			    'orderby' => 'name',
			    'parent'  => 0
			) ); ?>
			 
			<div class="front-page__categories col col-12 sm-col-8">
				<?php foreach ( $categories as $category ) : ?>
					<h2 class="h1 my3 py1">
						<a href="<?php echo get_category_link( $category->term_id ) ?>"><?php echo $category->name; ?></a>
					</h2>
				<?php endforeach ?>
			</div>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php /* Get Categories for front page */ ?>
				<div class="front-page__intro col col-12 sm-col-4">
					<?php the_content(); ?>
				</div>
			<?php endwhile; endif; ?>

		</section>


		<section class="post-section py5">
			<?php $args = array(
				'category'         => '',
				'category_name'    => 'design',
				'orderby'          => 'date',
				'order'            => 'DESC',
				'include'          => '',
				'exclude'          => '',
				'meta_key'         => '',
				'meta_value'       => '',
				'post_type'        => 'post',
				'post_mime_type'   => '',
				'post_parent'      => '',
				'author'	   => '',
				'author_name'	   => '',
				'post_status'      => 'publish',
				'suppress_filters' => true 
			);
			$posts_array = get_posts( $args ); ?>
			
			<div class="slider">
			<?php foreach ( $posts_array as $post ) : ?>
				<article class="card inline-block">
					<div class="card__img-container">
						<img src="<?php the_post_thumbnail_url( 'card-thumbnail' ); ?>" alt="" class="card__img">
					</div>
					<h4 class="card__title my2"><?php the_title();?></h4>
					<a class="card__link" href="<?php the_permalink(); ?>">Läs mer</a>
				</article>
			<?php endforeach ?>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
