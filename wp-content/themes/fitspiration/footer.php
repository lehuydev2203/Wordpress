			<footer class="footer" role="contentinfo">
				<?php if ( shortcode_exists( 'instagram-feed' ) ) { echo do_shortcode('[instagram-feed num=12 cols=6 imagepadding=0 showheader=false  showfollow=false showbutton=false]'); } ?>
				<div id="inner-footer" class="wrap cf">
					<div class="source-org copyright">
						&#169; <?php echo date_i18n(__('Y','fitspiration')) . ' '; bloginfo( 'name' ); ?>
						<span><?php if(is_home()): ?>
							- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'fitspiration' ) ); ?>"><?php printf( __( 'Powered by %s', 'fitspiration' ), 'WordPress' ); ?></a> <span><?php _e('and','fitspiration'); ?></span> <a href="<?php echo esc_url( __( 'http://fitnessthemes.net', 'fitspiration' ) ); ?>"><?php printf( esc_html( '%s', 'fitspiration' ), 'Fitness Themes' ); ?></a>
						<?php endif; ?>
						</span>
					</div>

					<div class="social-icons footer-social">
		           		<?php echo fitspiration_social_icons(); ?>
                	</div> <!-- social-icons-->

				</div>

			</footer>
			<a href="#" class="scrollToTop"><span class="fa fa-chevron-circle-up"></span></a>
		</div>

		<?php wp_footer(); ?>
	</body>

</html> <!-- end of site. what a ride! -->