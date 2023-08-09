<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif;  ?>
<!-- Header Area -->

	<?php 

		// header
	  	
    $topheader_contacttext = esc_attr(get_theme_mod('topheader_contacttext',"Let's Talk"));
		$topheader_contactnumber = esc_attr(get_theme_mod('topheader_contactnumber','982-6743-911'));
		$stickyheader = esc_attr(cleaningmaster_sticky_menu());
	?>

	
<header id="header" class="main-header site-header <?php echo esc_attr(cleaningmaster_sticky_menu()); ?> position-absolute w-100" style="z-index: 50;">
    <div class="container">
      <div class="header-content bg-light px-5">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="logo position-relative">
            <?php
              if(has_custom_logo())
                {	
                  the_custom_logo();
                }
                else { 
                ?>
                <a class="site-title fs-5 text-decoration-none fw-bold text-black" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php 
                      echo esc_html(bloginfo('name'));
                    ?>
                </a>	
                <?php
								$cleaningmaster_site_desc = get_bloginfo( 'description');
								if ($cleaningmaster_site_desc) : ?>
									<p class="site-description"><?php echo esc_html($cleaningmaster_site_desc); ?></p>
								<?php endif; ?>
              <?php 						
                }
              ?>
            </div>
          </div>
          <div class="col-lg-6 col-md-4 col-sm-12 d-flex justify-content-center">

            <nav class="navbar navbar-expand-lg navbaroffcanvase">
              <div class="navbar-menubar">
                <!-- Small Divice Menu-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','cleaning-master'); ?>"> 
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse navbar-menu">
                  <button class="navbar-toggler navbar-toggler-close" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','cleaning-master'); ?>"> 
                      <i class="fa fa-times"></i>
                  </button> 
                  <?php 
                    wp_nav_menu( 
                      array(  
                        'theme_location' => 'primary_menu',
                        'container'  => '',
                        'container_id'    => '',
                        'menu_class' => 'navbar-nav main-nav',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker()
                         ) 
                      );
                  ?>
                </div>
              </div>
            </nav>

          </div>
          
          <?php if ( apply_filters('cleaningmaster_header', $topheader_contactnumber) != "") { ?>
            <div class="col-lg-3 col-md-4 col-sm-12 ph">
              <div class="d-flex justify-content-end">
                <div class="phone-icon d-flex align-items-center justify-content-center align-content-center rounded-circle" style="background-color: #dde9fd;">
                  <svg style="width: 25px;height:25px;color: #2c83f4;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                </div>
                <!-- <div> -->
                  <a class="text-decoration-none tel-link" href="tel:<?php echo apply_filters('cleaningmaster_header', $topheader_contactnumber); ?>">                  <p class="mb-0 fw-semibold phntxt"><?php echo apply_filters('cleaningmaster_header', $topheader_contacttext); ?></p>
<p class="mb-0 fw-semibold phnno"><?php echo apply_filters('cleaningmaster_header', $topheader_contactnumber); ?></p></a>
                <!-- </div> -->
              </div>
              
            </div>
          <?php }?>

        </div>
      </div>
    </div>
  </header>
