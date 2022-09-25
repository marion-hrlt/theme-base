<?php
/**
 * Functions related to theme.
 *
 * @package ThemeBasis
 * @since ThemeBasis 1.0
 */


if ( ! function_exists( 'theme_basis_setup' ) ) {
	/**
	 * Sets up theme defaults.
     * 
	 * @since ThemeBasis 1.0
	 * @return void
	 */
	function theme_basis_setup() {

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Menu principal', 'theme-basis' ),
				'footer'  => esc_html__( 'Menu secondaire', 'theme-basis' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'theme_basis_setup' );


if ( ! function_exists( 'home_redirect_after_logout' ) ) {
	/**
	 * Home redirection after logout admin
	 * @since ThemeBasis 1.0
	 * @return void
	 */
	function home_redirect_after_logout()
	{
		wp_safe_redirect(home_url('/'));
		exit();
	}
}
add_action('wp_logout', 'home_redirect_after_logout');