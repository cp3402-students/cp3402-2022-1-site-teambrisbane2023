<div class="<?php if(esc_attr(get_theme_mod('cleaningmaster_service_section_width','Box Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('cleaningmaster_service_section_width','Box Width')) == 'Box Width'){ ?> container <?php }?>">
<section id="services">
	<?php 
	$service_section_heading = esc_attr(get_theme_mod('service_section_heading','Why Choose Us'));
	$service_section_subheading = esc_attr(get_theme_mod('service_section_subheading','Cleanmate operates in Ottawa and provides a variety of cleaning services. Choose us because of our reputation for excellence.'));
	?>
    <div class="mb-5">
      <div class="text-center">
      	
        <?php if ( apply_filters('cleaningmaster_services', $service_section_heading) != "") { ?>
        	<h1 class="services-heading fw-bolder pb-4 mb-4"><?php echo apply_filters('cleaningmaster_services', $service_section_heading); ?></h1>
        <?php }?>

        <p class="services-text w-100 w-md-50 w-lg-50 mx-auto text-black-50"><?php echo apply_filters('cleaningmaster_services', $service_section_subheading); ?></p>
      </div>
    </div>
    <div class="content">
      <div class="row align-items-center justify-content-between">
	  	
        <div class="col-lg-3 col-md-12 col-sm-12">
		<?php for($p=1; $p<3; $p++) { ?>
		<?php if( get_theme_mod('Service'.$p,false)) { ?>
		<?php $querycolumns = new WP_query('page_id='.get_theme_mod('Service'.$p,true)); ?>
		<?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
			$image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>
		<?php 
			if(has_post_thumbnail()){
			$img = esc_url($image[0]);
			}
			if(empty($image)){
			$img = get_template_directory_uri().'/assets/images/default.png';
			}
		?>
		<?php 
			$icon = get_theme_mod('service_icon'.$p,'fa fa-hand-paper-o');
		?>
          <div class="mb-5 mt-2 text-lg-end text-md-center text-sm-center wow zoomIn" data-wow-duration="2s">
			<i class="<?php echo $icon; ?>" aria-hidden="true"></i>
            <h4 class="fw-bolder servicesbox-heading mb-3"><?php the_title_attribute(); ?></h4>
            <p class="servicesbox-text text-black-50 fs-6 fw-normal">
			<?php echo (get_the_excerpt()); ?>
            </p>
          </div>
		<?php endwhile;
			wp_reset_postdata(); ?>
		<?php } } ?>
        </div>
		

        <div class="col-lg-5 col-md-12 col-sm-12 px-0">
          <div class="service-image">
		  <?php 
				$service_center_image = get_theme_mod('service_center_image');
				if(!empty($service_center_image)){
					echo '<div class="service-img w-100 h-100" style="background-image: url('.esc_url($service_center_image).');"></div>';
				}else{
					echo '<div class="service-img w-100 h-100" style="background-image: url('.get_template_directory_uri().'/assets/images/default.png);"></div>';
				}
			?>
          </div>
        </div>

        <div class="col-lg-3 col-md-12 col-sm-12">
		<?php for($p=3; $p<6; $p++) { ?>
		<?php if( get_theme_mod('Service'.$p,false)) { ?>
		<?php $querycolumns = new WP_query('page_id='.get_theme_mod('Service'.$p,true)); ?>
		<?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
		$image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>
		<?php 
		if(has_post_thumbnail()){
			$img = esc_url($image[0]);
		}
		if(empty($image)){
			$img = get_template_directory_uri().'/assets/images/default.png';
		}
		?>

		<?php 
			$icon = get_theme_mod('service_icon'.$p,'fa fa-hand-paper-o');
		?>
          <div class="mb-5 mt-2 text-lg-start text-md-center text-sm-center wow zoomIn" data-wow-duration="2s">
		  	<i class="<?php echo $icon; ?>" aria-hidden="true"></i>
            <h4 class="fw-bolder servicesbox-heading mb-3"><?php the_title_attribute(); ?></h4>
            <p class="servicesbox-text text-black-50 fs-6 fw-normal">
			<?php echo (get_the_excerpt()); ?>
            </p>
          </div>
			<?php endwhile;
			wp_reset_postdata(); ?>
			<?php } } ?>
        </div>
      </div>
    </div>
  </section>
</div>