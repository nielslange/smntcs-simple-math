<?php
/**
 * Plugin Name: SMNTCS Simple Math
 * Plugin URI: https://github.com/nielslange/smntcs-simple-math
 *
 * @package smntcs-simple-math
 */

// Exit if accessed directly.
// defined( 'ABSPATH' ) || exit;

/**
 * Adds two integers.
 *
 * @param int $summand_1 First summand.
 * @param int $summand_2 Second summand.
 * @return int|TypeError
 */
function add( $summand_1, $summand_2 ) {
	if ( is_int( $summand_1 ) && is_int( $summand_2 ) ) {
		return $summand_1 + $summand_2;
	} else {
		return new TypeError( 'Both arguments must be integers.' );
	}
}
