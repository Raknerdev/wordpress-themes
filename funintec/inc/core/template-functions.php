<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Funintec Rdev
 */

/**
 * Add customizer default values.
 *
 * @param array $default_options
 * @return array
 */
function funintec_ve_customizer_add_defaults( $default_options) {
	$defaults = array(
		// Excerpt Options
		'funintec_ve_excerpt_length'    => 30,
	);


	$updated_defaults = wp_parse_args( $defaults, $default_options );

	return $updated_defaults;
}
add_filter( 'funintec_ve_customizer_defaults', 'funintec_ve_customizer_add_defaults' );

/**
 * Returns theme mod value saved for option merging with default option if available.
 * @since 1.0
 */
function funintec_ve_gtm( $option ) {
	// Get our Customizer defaults
	$defaults = apply_filters( 'funintec_ve_customizer_defaults', true );

	return isset( $defaults[ $option ] ) ? get_theme_mod( $option, $defaults[ $option ] ) : get_theme_mod( $option );
}

if ( ! function_exists( 'funintec_ve_excerpt_length' ) ) :
	/**
	 * Sets the post excerpt length to n words.
	 *
	 * function tied to the excerpt_length filter hook.
	 * @uses filter excerpt_length
	 */
	function funintec_ve_excerpt_length( $length ) {
		if ( is_admin() ) {
			return $length;
		}

		// Getting data from Theme Options
		$length	= funintec_ve_gtm( 'funintec_ve_excerpt_length' );

		return absint( $length );
	} // funintec_ve_excerpt_length.
endif;
add_filter( 'excerpt_length', 'funintec_ve_excerpt_length', 999 );

if ( ! function_exists( 'funintec_ve_footer_copyright' ) ){

    /**
     * Footer Copyright Information
     *
     * @since 1.0.0
     */
    function funintec_ve_footer_copyright() {

        echo esc_html( apply_filters( 'funintec_ve_copyright_text', $content = esc_html__('Copyright  &copy; ','funintec') . date( 'Y' ) . ' ' . get_bloginfo( 'name' ) .' - ' ) );

         printf( ' WordPress Theme by: %1$s', '<a href=" ' . esc_url('https://github.com/raknerdev/') . ' " rel="designer" target="_blank">'.esc_html__('Raknerdev','funintec').'</a>' );
    }
}
add_action( 'funintec_ve_footer_copyright', 'funintec_ve_footer_copyright', 5 );
