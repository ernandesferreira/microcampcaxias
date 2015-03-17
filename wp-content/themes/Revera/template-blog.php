<?php
/*
 * The template for displaying Archive pages.

 Template Name: Blog
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package web2feel
 */

get_header(); ?>

<div class="page-head">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3>
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Author: %s', 'web2feel' ), '<span class="vcard">' . get_the_author() . '</span>' );
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'web2feel' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'web2feel' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'web2feel' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'web2feel' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'web2feel');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'web2feel' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'web2feel' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'web2feel' );

						else :
							_e( get_the_title(), 'web2feel' );

						endif;
					?>

				</h3>
				<p> Todas as Notícias </p>
			</div>
			
		</div>
	</div>
</div>










<div class="container">	
	<div class="row">
	<section id="primary" class="content-area col-sm-8">
		<main id="main" class="site-main" role="main">

		<?php

		$port_cat = 'noticias';

		$args = array(
				'post_type' => 'post',
				'category_name' => $port_cat, 
				'posts_per_page' => -1, 
			);

		$q = new WP_Query( $args ); ?>

		<?php   ?>

		<?php if ( $q->have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( $q->have_posts() ) : $q->the_post();

			//echo '<pre>' . print_r( $q, true ) . '</pre>'; 

			$thumb = get_post_thumbnail_id();
			$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
			$image = aq_resize( $img_url, 750, 500, true ); //resize & crop the image
			?>

			<article id="post-83" class="post-83 post type-post status-publish format-standard hentry category-featured category-tutorials">
				<header class="entry-header">
					<div class="entry-meta">
						<span class="posted-on">Postado em 
							<a href="<?php the_permalink(); ?>" title="<?php echo get_the_time(); ?>" rel="bookmark">
								<time class="entry-date published" datetime="<?php echo get_the_date('d/m/Y') ?>"><?php echo get_the_date('d/m/Y') ?></time>
								<time class="updated" datetime="<?php the_modified_date('d/m/Y'); ?>"><?php the_modified_date('d/m/Y'); ?></time>
							</a>
						</span>
					</div><!-- .entry-meta -->
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" class=""><?php the_title(); ?></a></h1>
				</header><!-- .entry-header -->

					<img class="img-responsive" src="<?php echo $image; ?>">

				<div class="entry-summary">
					<p><?php the_excerpt(); ?></p>
				</div><!-- .entry-summary -->
			</article>
			<hr />
			<?php endwhile; ?>

		<?php endif; ?>
			





		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
