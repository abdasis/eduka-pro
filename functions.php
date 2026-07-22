<?php
/**
 * Eduka Pro functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Eduka_Pro
 * @since Eduka Pro 1.0
 */

if ( ! function_exists( 'edukapro_post_format_setup' ) ) :
	/**
	 * Dukungan post format untuk blog sekolah.
	 *
	 * @since Eduka Pro 1.0
	 */
	function edukapro_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'edukapro_post_format_setup' );

if ( ! function_exists( 'edukapro_editor_style' ) ) :
	/**
	 * Memuat editor-style.css ke dalam editor blok.
	 *
	 * @since Eduka Pro 1.0
	 */
	function edukapro_editor_style() {
		add_editor_style( 'assets/css/editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'edukapro_editor_style' );

if ( ! function_exists( 'edukapro_enqueue_styles' ) ) :
	/**
	 * Memuat stylesheet tema dengan suffix min saat produksi.
	 *
	 * @since Eduka Pro 1.0
	 */
	function edukapro_enqueue_styles() {
		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		$src    = 'style' . $suffix . '.css';

		wp_enqueue_style(
			'edukapro-style',
			get_theme_file_uri( $src ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
		wp_style_add_data( 'edukapro-style', 'path', get_theme_file_path( $src ) );
	}
endif;
add_action( 'wp_enqueue_scripts', 'edukapro_enqueue_styles' );

if ( ! function_exists( 'edukapro_spmb_overrides' ) ) :
	/**
	 * Override CSS SPMB Pro agar harmonis palet Eduka Pro.
	 * Dimuat setelah stylesheet plugin (dep spmb-public).
	 *
	 * @since Eduka Pro 1.0
	 */
	function edukapro_spmb_overrides() {
		// Abaikan bila plugin SPMB Pro tidak aktif.
		if ( ! class_exists( 'SPMB_Plugin' ) && ! did_action( 'spmb_pro_boot' ) ) {
			return;
		}

		// Handle spmb-public hanya terdaftar saat shortcode SPMB dirender.
		// Pakai dep hanya bila terdaftar agar tidak memicu doing_it_wrong (WP 6.9+).
		$deps = wp_style_is( 'spmb-public', 'registered' ) ? array( 'spmb-public' ) : array();

		wp_enqueue_style(
			'edukapro-spmb-overrides',
			get_theme_file_uri( 'assets/css/spmb-overrides.css' ),
			$deps,
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'edukapro_spmb_overrides' );

if ( ! function_exists( 'edukapro_block_styles' ) ) :
	/**
	 * Daftar gaya blok kustom tema.
	 *
	 * @since Eduka Pro 1.0
	 */
	function edukapro_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'edukapro' ),
				'inline_style' => 'ul.is-style-checkmark-list{list-style-type:"\2713";}ul.is-style-checkmark-list li{padding-inline-start:1ch;}',
			)
		);
	}
endif;
add_action( 'init', 'edukapro_block_styles' );

if ( ! function_exists( 'edukapro_pattern_categories' ) ) :
	/**
	 * Kategori pola kustom Eduka Pro.
	 *
	 * @since Eduka Pro 1.0
	 */
	function edukapro_pattern_categories() {
		$categories = array(
			'edukapro_page'    => __( 'Pages', 'edukapro' ),
			'edukapro_sections'=> __( 'Sections', 'edukapro' ),
			'edukapro_query'   => __( 'Query', 'edukapro' ),
			'edukapro_footer'  => __( 'Footer', 'edukapro' ),
			'edukapro_header'  => __( 'Header', 'edukapro' ),
		);

		foreach ( $categories as $slug => $label ) {
			register_block_pattern_category(
				$slug,
				array(
					'label' => $label,
				)
			);
		}
	}
endif;
add_action( 'init', 'edukapro_pattern_categories' );
