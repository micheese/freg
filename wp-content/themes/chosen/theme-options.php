<?php

function ct_chosen_register_theme_page() {
	add_theme_page( sprintf( esc_html__( '%s Dashboard', 'chosen' ), wp_get_theme() ), sprintf( esc_html__( '%s Dashboard', 'chosen' ), wp_get_theme() ), 'edit_theme_options', 'chosen-options', 'ct_chosen_options_content', 'ct_chosen_options_content' );
}
add_action( 'admin_menu', 'ct_chosen_register_theme_page' );

function ct_chosen_options_content() {

	$customizer_url = add_query_arg(
		array(
			'url'    => get_home_url(),
			'return' => add_query_arg( 'page', 'chosen-options', admin_url( 'themes.php' ) )
		),
		admin_url( 'customize.php' )
	);
	?>
	<div id="chosen-dashboard-wrap" class="wrap">
		<h2><?php printf( esc_html__( '%s Dashboard', 'chosen' ), wp_get_theme() ); ?></h2>
		<?php do_action( 'theme_options_before' ); ?>
		<div class="content-boxes">
			<div class="content content-support">
				<h3><?php esc_html_e( 'Get Started', 'chosen' ); ?></h3>
				<p><?php printf( __( 'Not sure where to start? The <strong>%1$s Getting Started Guide</strong> will take you step-by-step through every feature in %1$s.', 'chosen' ), wp_get_theme( get_template() ) ); ?></p>
				<p>
					<a target="_blank" class="button-primary"
					   href="https://www.competethemes.com/help/getting-started-chosen/"><?php esc_html_e( 'View Guide', 'chosen' ); ?></a>
				</p>
			</div>
			<?php if ( !function_exists( 'ct_chosen_pro_init' ) ) : ?>
				<div class="content content-premium-upgrade">
					<h3><?php printf( esc_html__( '%s Pro', 'chosen' ), wp_get_theme( get_template() ) ); ?></h3>
					<p><?php printf( esc_html__( 'Download the %s Pro plugin and unlock custom colors, new layouts, sliders, and more', 'chosen' ), wp_get_theme( get_template() ) ); ?>...</p>
					<p>
						<a target="_blank" class="button-primary"
						   href="https://www.competethemes.com/chosen-pro/"><?php esc_html_e( 'See Full Feature List', 'chosen' ); ?></a>
					</p>
				</div>
			<?php endif; ?>
			<div class="content content-review">
				<h3><?php esc_html_e( 'Leave a Review', 'chosen' ); ?></h3>
				<p><?php printf( esc_html__( 'Help others find %s by leaving a review on wordpress.org.', 'chosen' ), wp_get_theme() ); ?></p>
				<a target="_blank" class="button-primary" href="https://wordpress.org/support/theme/<?php echo sanitize_title(wp_get_theme()); ?>/reviews/"><?php esc_html_e( 'Leave a Review', 'chosen' ); ?></a>
			</div>
			<div class="content content-presspad">
				<h3><?php printf( esc_html__( 'Turn %s into a Mobile App', 'chosen' ), wp_get_theme() ); ?></h3>
				<p><?php printf( esc_html__( '%s can be converted into a mobile app and listed on the App Store and Google Play Store with the help of PressPad News. Read our tutorial to learn more.', 'chosen' ), wp_get_theme() ); ?></p>
				<a target="_blank" class="button-primary" href="https://www.competethemes.com/help/convert-mobile-app-chosen/"><?php esc_html_e( 'Read Tutorial', 'chosen' ); ?></a>
			</div>
			<div class="content content-delete-settings">
				<h3><?php esc_html_e( 'Reset Customizer Settings', 'chosen' ); ?></h3>
				<p>
					<?php printf( __( '<strong>Warning:</strong> Clicking this button will erase the %2$s theme\'s current settings in the <a href="%1$s">Customizer</a>.', 'chosen' ), esc_url( $customizer_url ), wp_get_theme() ); ?>
				</p>
				<form method="post">
					<input type="hidden" name="chosen_reset_customizer" value="chosen_reset_customizer_settings"/>
					<p>
						<?php wp_nonce_field( 'chosen_reset_customizer_nonce', 'chosen_reset_customizer_nonce' ); ?>
						<?php submit_button( esc_html__( 'Reset Customizer Settings', 'chosen' ), 'delete', 'delete', false ); ?>
					</p>
				</form>
			</div>
		</div>
		<?php do_action( 'theme_options_after' ); ?>
	</div>
<?php }