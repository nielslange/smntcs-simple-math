<?php
/**
 * Test suite for SMNTCS Simple Math.
 */

require_once __DIR__ . '/../smntcs-simple-math.php';

test( '2 + 3 = 5', function () {
		$result = add( 2, 3 );
		expect( $result )->toBe( 5 );
	}
);

test( '5 + 3 != 2', function () {
		$result = add( 5, 3 );
		expect( $result )->not->toBe( 2 );
	}
);
