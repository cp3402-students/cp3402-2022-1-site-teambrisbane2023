<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cleaning Master
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blog-item'); ?>>	
	
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	<a href="<?php echo esc_url( get_permalink() ); ?>">
		<div class="blog-image" style="background-image: url('<?php echo $image[0]; ?>')"></div>
	</a>
	<?php else: 
		$img = get_template_directory_uri().'/assets/images/default.png';
		?>
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<div class="blog-image" style="background-image: url('<?php echo $img; ?>')"></div>
		</a>
	<?php endif; ?>
	<div class="blog-content">
	<h6 class="theme-button"><i class="fa fa-calendar-o"></i> <?php echo esc_html(get_the_date('M ')); echo esc_html(get_the_date('j'));?>,<?php echo esc_html(get_the_date(' Y')); ?></h6>

		<?php 
			if ( is_single() ) :
				
			the_title('<h6 class="post-title">', '</h6>' );
			
			else:
			
			the_title( sprintf( '<h6 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h6>' );
			
			endif; 
			
			the_content( 
					sprintf( 
						__( 'Read More', 'cleaning-master' ), 
						'<span class="screen-reader-text">  '.esc_html(get_the_title()).'</span>' 
					) 
				);
		?>
		<a class="btn_blog" href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'More Details', 'cleaning-master' ); ?> <i class="fa-solid fa-right-long"></i></a>
	</div>
	
</div>