/*!
 * Header scroll-aware shrink untuk Eduka Pro.
 * Tambah class `is-scrolled` pada `.edukapro-header-wrap` saat scroll > 8px.
 * Vanilla JS, rAF throttled, passive listener. Tidak ada dependency.
 *
 * @package Eduka_Pro
 * @since Eduka Pro 1.0
 */
(function () {
	'use strict';

	var header = document.querySelector( '.edukapro-header-wrap' );
	if ( ! header ) {
		return;
	}

	var ticking = false;
	var threshold = 8;

	/**
	 * Toggle class berdasarkan posisi scroll.
	 */
	function update() {
		if ( window.scrollY > threshold ) {
			header.classList.add( 'is-scrolled' );
		} else {
			header.classList.remove( 'is-scrolled' );
		}
		ticking = false;
	}

	/**
	 * Throttle via requestAnimationFrame.
	 */
	function onScroll() {
		if ( ! ticking ) {
			window.requestAnimationFrame( update );
			ticking = true;
		}
	}

	window.addEventListener( 'scroll', onScroll, { passive: true } );
	// Inisialisasi state saat load.
	update();
})();