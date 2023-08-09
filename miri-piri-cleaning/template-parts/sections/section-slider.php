<div class="<?php if(esc_attr(get_theme_mod('cleaningmaster_slider_section_width','Full Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('cleaningmaster_slider_section_width','Full Width')) == 'Box Width'){ ?> container <?php }?>">
  <section id="slider">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
      <?php for($p=1; $p<6; $p++) { ?>
        <?php if( get_theme_mod('slider'.$p,false)) { ?>
        <?php $querycolumns = new WP_query('page_id='.get_theme_mod('slider'.$p,true)); ?>
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
          $slider_button1text = esc_attr(get_theme_mod('slider_button1text','Read More'));
          $slider_button2text = esc_attr(get_theme_mod('slider_button2text','Contact Us'));
        ?>
       
        <div class="swiper-slide">
          <div class="slider-content position-relative" style="background-image: url(<?php echo $img; ?>);">
            <div class="position-relative h-100 w-100 d-flex align-items-center justify-content-center" style="z-index: 50;">
              <div class="slider-info">
                <h1 class="slider-title text-white mb-4 animated fadeInDownBig"><?php the_title_attribute(); ?></h1>
                <p class="fs-5 text-white mb-5 animated fadeInLeftBig"><?php echo (get_the_excerpt()); ?></p>
                <div class="d-flex justify-content-center mt-2">
                  <?php if ( apply_filters('cleaningmaster_slider', $slider_button1text) != "") { ?>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" class="btnread fadeInLeft button-slider bg-light fw-bold text-decoration-none rounded-5 text-black" style="border: 4px solid #9cfb3e;">
                      <?php echo apply_filters('cleaningmaster_slider', $slider_button1text); ?>
                    </a>
                  <?php }?>
                  <?php if ( apply_filters('cleaningmaster_slider', $slider_button2text) != "") { ?>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" class="btncont fadeInRight button-slider bg-light fw-bold text-decoration-none rounded-5 text-black" style="border: 4px solid #2d82f5;">
                      <?php echo apply_filters('cleaningmaster_slider', $slider_button2text); ?>
                    </a>
                  <?php }?>
                </div>
              </div>
            </div>
            <div class="layer"></div>
          </div>
        </div>
        <?php endwhile;
           wp_reset_postdata(); ?>
        <?php } } ?>
      </div>
      <div class="swiper-button-next"><svg style="width: 28px; height: 28px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></div>
      <div class="swiper-button-prev"><svg style="width: 28px; height: 28px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
</div>


