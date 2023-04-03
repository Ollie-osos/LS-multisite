<?php
/**
 * Customizer settings for this theme.
 *
 * @package WordPress
 * @subpackage Laurence_Simons
 * @since Laurence Simons 1.0
 */

if ( ! class_exists( 'lss_Customize' ) ) {
	/**
	 * CUSTOMIZER SETTINGS
	 *
	 * @since Laurence Simons 1.0
	 */
	class lss_Customize {

		/**
		 * Register customizer options.
		 *
		 * @since Laurence Simons 1.0
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 */
		public static function register( $wp_customize ) {

			/**
			 * Site Title & Description.
			 * */
			$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
			$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

			$wp_customize->selective_refresh->add_partial(
				'blogname',
				array(
					'selector'        => '.site-title a',
					'render_callback' => 'lss_customize_partial_blogname',
				)
			);

			$wp_customize->selective_refresh->add_partial(
				'blogdescription',
				array(
					'selector'        => '.site-description',
					'render_callback' => 'lss_customize_partial_blogdescription',
				)
			);

			$wp_customize->selective_refresh->add_partial(
				'custom_logo',
				array(
					'selector'            => '.header-titles [class*=site-]:not(.site-description)',
					'render_callback'     => 'lss_customize_partial_site_logo',
					'container_inclusive' => true,
				)
			);

			$wp_customize->selective_refresh->add_partial(
				'retina_logo',
				array(
					'selector'        => '.header-titles [class*=site-]:not(.site-description)',
					'render_callback' => 'lss_customize_partial_site_logo',
				)
			);

			/**
			 * Site Identity
			 *//**
			 * Site Identity
			 */

			/* 2X Header Logo ---------------- */
			$wp_customize->add_setting(
				'retina_logo',
				array(
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ),
					'transport'         => 'postMessage',
				)
			);

			$wp_customize->add_control(
				'retina_logo',
				array(
					'type'        => 'checkbox',
					'section'     => 'title_tagline',
					'priority'    => 10,
					'label'       => __( 'Retina logo', 'lss' ),
					'description' => __( 'Scales the logo to half its uploaded size, making it sharp on high-res screens.', 'lss' ),
				)
			);

			
			/**
			 * Theme Options
			 */
			$wp_customize->add_section(
				'options',
				array(
					'title'      => __( 'Background Image', 'lss' ),
					'priority'   => 80,
					'capability' => 'background_image',
				)
			);



			/**
			 * Theme Options
			 */
			$wp_customize->add_section(
				'options',
				array(
					'title'      => __( 'Theme Options', 'lss' ),
					'priority'   => 40,
					'capability' => 'edit_theme_options',
				)
			);

			/* Enable Header Search ----------------------------------------------- */
			$wp_customize->add_setting(
				'enable_header_search',
				array(
					'capability'        => 'edit_theme_options',
					'default'           => true,
					'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ),
				)
			);

			$wp_customize->add_control(
				'enable_header_search',
				array(
					'type'     => 'checkbox',
					'section'  => 'options',
					'priority' => 10,
					'label'    => __( 'Show search in header', 'lss' ),
				)
			);

            /* Enable Contact CTA ----------------------------------------------- */
            $wp_customize->add_setting(
                'enable_header_contact_CTA',
                array(
                    'capability'        => 'edit_theme_options',
                    'default'           => true,
                    'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ),
                )
            );

            $wp_customize->add_control(
                'enable_header_contact_CTA',
                array(
                    'type'     => 'checkbox',
                    'section'  => 'options',
                    'priority' => 10,
                    'label'    => __( 'Show a contact CTA in header', 'lss' ),
                )
            );

            $wp_customize->add_setting(
                'get_header_contact_email',
                array(
                    'capability'        => 'edit_theme_options',
                    'default'           => 'london@laurencesimons.com',
                    'sanitize_callback' => array( __CLASS__, 'sanitize_text_field' ),
                )
            );

            $wp_customize->add_control(
                'get_header_contact_email',
                array(
                    'type'     => 'text',
                    'section'  => 'options',
                    'priority' => 10,
                    'label'    => __( 'Contact', 'lss' ),
                    'description'    => __( 'Add the main email address you would like people to contact', 'lss' ),
                )
            );



            /* Enable Navigation CTA ----------------------------------------------- */
            $wp_customize->add_setting(
                'enable_header_navigation',
                array(
                    'capability'        => 'edit_theme_options',
                    'default'           => true,
                    'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ),
                )
            );

            $wp_customize->add_control(
                'enable_header_navigation',
                array(
                    'type'     => 'checkbox',
                    'section'  => 'options',
                    'priority' => 10,
                    'label'    => __( 'Show navigation in header', 'lss' ),
                )
            );


		}

		/**
		 * Sanitization callback for the "accent_accessible_colors" setting.
		 *
		 * @since Laurence Simons 1.0
		 *
		 * @param array $value The value we want to sanitize.
		 * @return array Returns sanitized value. Each item in the array gets sanitized separately.
		 */
		public static function sanitize_accent_accessible_colors( $value ) {

			// Make sure the value is an array. Do not typecast, use empty array as fallback.
			$value = is_array( $value ) ? $value : array();

			// Loop values.
			foreach ( $value as $area => $values ) {
				foreach ( $values as $context => $color_val ) {
					$value[ $area ][ $context ] = sanitize_hex_color( $color_val );
				}
			}

			return $value;
		}

		/**
		 * Sanitize select.
		 *
		 * @since Laurence Simons 1.0
		 *
		 * @param string $input   The input from the setting.
		 * @param object $setting The selected setting.
		 * @return string The input from the setting or the default setting.
		 */
		public static function sanitize_select( $input, $setting ) {
			$input   = sanitize_key( $input );
			$choices = $setting->manager->get_control( $setting->id )->choices;
			return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
		}

		/**
		 * Sanitize boolean for checkbox.
		 *
		 * @since Laurence Simons 1.0
		 *
		 * @param bool $checked Whether or not a box is checked.
		 * @return bool
		 */
		public static function sanitize_checkbox( $checked ) {
			return ( ( isset( $checked ) && true === $checked ) ? true : false );
		}

	}

	// Setup the Theme Customizer settings and controls.
	add_action( 'customize_register', array( 'lss_Customize', 'register' ) );

}

/**
 * PARTIAL REFRESH FUNCTIONS
 * */
if ( ! function_exists( 'lss_customize_partial_blogname' ) ) {
	/**
	 * Render the site title for the selective refresh partial.
	 *
	 * @since Laurence Simons 1.0
	 */
	function lss_customize_partial_blogname() {
		bloginfo( 'name' );
	}
}

if ( ! function_exists( 'lss_customize_partial_blogdescription' ) ) {
	/**
	 * Render the site description for the selective refresh partial.
	 *
	 * @since Laurence Simons 1.0
	 */
	function lss_customize_partial_blogdescription() {
		bloginfo( 'description' );
	}
}

if ( ! function_exists( 'lss_customize_partial_site_logo' ) ) {
	/**
	 * Render the site logo for the selective refresh partial.
	 *
	 * Doing it this way so we don't have issues with `render_callback`'s arguments.
	 *
	 * @since Laurence Simons 1.0
	 */
	function lss_customize_partial_site_logo() {
		lss_site_logo();
	}
}
