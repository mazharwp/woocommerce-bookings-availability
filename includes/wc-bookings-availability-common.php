<?php
/**
 * Helper functions.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Generate default block parameters.
 *
 * @since 1.0.0
 */
function wc_bookings_availability_default_block_parameters() {
	return apply_filters( 'woocommerce_bookings_availability_block_parameters', array(
		'nonces'        => array(
			'add_booking_to_cart' => wp_create_nonce( 'add-booking-to-cart' ),
		),
		'ajax_url'            => WC_AJAX::get_endpoint(),
		'checkout_url'        => wc_get_page_permalink( 'checkout' ),
		'start_of_week'       => get_option( 'start_of_week' ),
		'timezone_conversion' => wc_should_convert_timezone(),
		'server_timezone'     => wc_booking_get_timezone_string(),
		'time_format_moment'  => wc_bookings_convert_to_moment_format( get_option( 'time_format' ) ),
		'time_format'         => get_option( 'time_format' ),
	) );
}
