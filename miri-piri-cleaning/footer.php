</div>
<footer class="footer-area">  
	<div class="footer-top">
		<div class="container"> 
			<div class="py-5 px-5" style="background: #171717;">
				<?php do_action('cleaningmaster_footer_above'); 
				if ( is_active_sidebar( 'cleaningmaster-footer-widget-area' ) ) { ?>	
					<div class="row footer-row"> 
						<?php  dynamic_sidebar( 'cleaningmaster-footer-widget-area' ); ?>
					</div>  
				<?php } ?>
			</div>
		 </div>
	</div>
	
	<?php 
		$footer_copyright = get_theme_mod('footer_copyright','Copyright &copy; [current_year] [site_title] | Developed by [theme_author]');
	?>
	<div class="copy-right"> 
		<div class="container"> 
			<?php 
			if ( ! empty( $footer_copyright ) ): ?>
			<?php 	
				$cleaningmaster_copyright_allowed_tags = array(
					'[current_year]' => date_i18n('Y'),
					'[site_title]'   => get_bloginfo('name'),
					'[theme_author]' => sprintf(__('<a href="#">TeamBrisbane</a>', 'cleaning-master')),
				);
			?>                          
			<p class="copyright-text">
				<?php
					echo apply_filters('cleaningmaster_footer_copyright', wp_kses_post(cleaningmaster_str_replace_assoc($cleaningmaster_copyright_allowed_tags, $footer_copyright)));
				?>
			</p>
			<?php endif; ?>
		</div>
	</div>
</footer>
<!-- End Footer Area  -->
<button class="scroll-top" >
<svg style="width: 25px; height: 25px; color: black;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
</button>

</div>		
<?php wp_footer(); ?>
</body>
</html>

