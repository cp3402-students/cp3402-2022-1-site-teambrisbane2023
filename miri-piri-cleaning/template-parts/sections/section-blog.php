<?php  
	$cleaningmaster_hs_blog 			= esc_attr(get_theme_mod('hs_blog','1'));
	$cleaningmaster_blog_title 		= esc_attr(get_theme_mod('blog_title'));
	$cleaningmaster_blog_subtitle		= esc_attr(get_theme_mod('blog_subtitle')); 
	$cleaningmaster_blog_description	= esc_attr(get_theme_mod('blog_description'));
	$cleaningmaster_blog_num			= esc_attr(get_theme_mod('blog_display_num','4'));
	if($cleaningmaster_hs_blog=='1'):
?>

<section id="blog">
	
<?php  

$blog_section_heading = esc_attr(get_theme_mod('blog_section_heading','Our Trending Blog'));
$blog_section_subheading = esc_attr(get_theme_mod('blog_section_subheading','We understand your business schedule and we are just a phone call away'));


?>
    <div class="<?php if(esc_attr(get_theme_mod('cleaningmaster_blog_section_width','Box Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('cleaningmaster_blog_section_width','Box Width')) == 'Box Width'){ ?> container <?php }?>">

    <div class="mb-5">
      <div class="text-center">
        <?php if ( apply_filters('cleaningmaster_blog', $blog_section_heading) != "") { ?>
        	<h1 class="blog-heading fw-bolder pb-4 mb-4"><?php echo apply_filters('cleaningmaster_blog', $blog_section_heading); ?></h1>
        <?php }?>

        <p class="blog-textw-100 w-md-50 w-lg-50 mx-auto text-black-50"><?php echo apply_filters('cleaningmaster_blog', $blog_section_subheading); ?></p>
      </div>
    </div>
    <div class="c">
      <div class="row">
	  <?php 	
		$cleaningmaster_blogs_args = array( 'post_type' => 'post', 'posts_per_page' => $cleaningmaster_blog_num,'post__not_in'=>get_option("sticky_posts")) ; 	
		$cleaningmaster_blog_wp_query = new WP_Query($cleaningmaster_blogs_args);
		if($cleaningmaster_blog_wp_query)
		{	
		while($cleaningmaster_blog_wp_query->have_posts()):$cleaningmaster_blog_wp_query->the_post(); ?>
        
		<div class="col-lg-3 col-md-6 col-sm-12 px-2 mb-4 wow zoomIn" data-wow-duration="2s">
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<div class="blog-image position-relative" style="background-image: url(<?php echo $image[0]; ?>);">
            	<div class="blog-date position-absolute text-white px-3 py-2 fs-6"><i class="fa fa-calendar-o"></i> <?php echo esc_html(get_the_date('M ')); echo esc_html(get_the_date('j'));?>,<?php echo esc_html(get_the_date(' Y')); ?></div>
         	 </div>
		</a>
		<?php else: 
			$img = get_template_directory_uri().'/assets/images/default.png';
			?>
			<a href="<?php echo esc_url( get_permalink() ); ?>">
				<div class="blog-image position-relative" style="background-image: url(<?php echo $img ?>);">
					<div class="blog-date position-absolute text-white px-3 py-2 fs-6"><i class="fa fa-calendar-o"></i> <?php echo esc_html(get_the_date('M ')); echo esc_html(get_the_date('j'));?>,<?php echo esc_html(get_the_date(' Y')); ?></div>
				</div>
			</a>
		<?php endif; ?>
			<div class="content top p-3 py-2"style=" border-bottom: 1px solid #898989;">
			<ul class="d-flex justify-content-between">
				<li><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>" class="fs-6 text-uppercase fw-normal text-decoration-none" style="color:#1f1f1f;"><i class="fa fa-user fw-bold" style="color:#2b82f4;"></i>  <?php esc_html_e('By','cleaning-master'); ?> <?php echo esc_html(the_author()); ?></a></li>
				<li><a href="javascript:void(0);" class="fs-6 text-uppercase fw-normal text-decoration-none" style="color:#1f1f1f;"><i class="fa fa-comment fw-bold" style="color:#2b82f4;"></i> Comment (<?php echo esc_html(get_comments_number($post->ID)); ?>)</a></li>
			</ul>	
			</div>
          <div class="content p-3">
		  <?php 
				if ( is_single() ) :
					
				the_title('<h5 class="text-uppercase fw-bold mb-2>', '</h5>' );
				
				else:
				
				the_title( sprintf( '<h5 class="text-uppercase fw-semibold><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' );
				
				endif; 
				?> 
				<p class="text-black-50 mt-2 mb-2">
					<?php echo wp_trim_words(get_the_content(), 15);	?>
				</p>
            	<a  href="<?php echo esc_url( get_permalink() ); ?>" class="blog-link text-decoration-none"><?php esc_html_e( 'Read More', 'cleaning-master' ); ?></a>
          </div>
        </div>
        
		<?php endwhile; 
			}
			wp_reset_postdata();
		?>
      </div>
    </div>
  </div>
  </section>
<?php endif; ?>