<?php
/**
 * @package web2feel
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-meta">
			<?php web2feel_posted_on(); ?>
		</div><!-- .entry-meta -->
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
	
		<?php
			$thumb = get_post_thumbnail_id();
			$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
			$image = aq_resize( $img_url, 780, 400, true ); //resize & crop the image
		?>
					
		<?php if($image) : ?>
		<img class="img-responsive" src="<?php echo $image ?>"/>
		<?php endif; ?>		

	<div class="entry-content">
				
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'web2feel' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

		<footer class="entry-meta">
					<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
						<?php
							/* translators: used between list items, there is a space after the comma */
							$categories_list = get_the_category_list( __( ', ', 'web2feel' ) );
							if ( $categories_list && web2feel_categorized_blog() ) :
						?>
						<span class="cat-links">
							<?php printf( __( 'Postado em %1$s', 'web2feel' ), $categories_list ); ?>
						</span>
						<?php endif; // End if categories ?>
			
						<?php
							/* translators: used between list items, there is a space after the comma */
							$tags_list = get_the_tag_list( '', __( ', ', 'web2feel' ) );
							if ( $tags_list ) :
						?>
						<span class="tags-links">
							<?php printf( __( 'Tags %1$s', 'web2feel' ), $tags_list ); ?>
						</span>
						<?php endif; // End if $tags_list ?>
					<?php endif; // End if 'post' == get_post_type() ?>
			
					<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
					<span class="comments-link"><?php comments_popup_link( __( 'Deixe um comentário', 'web2feel' ), __( '1 Comentário', 'web2feel' ), __( '% Comentários', 'web2feel' ) ); ?></span>
					<?php endif; ?>
			
					<?php edit_post_link( __( 'Editar', 'web2feel' ), '<span class="edit-link">', '</span>' ); ?>
				</footer><!-- .entry-meta -->
</article><!-- #post-## -->
