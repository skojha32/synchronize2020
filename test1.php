<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__.'/SimpleXLSX.php';

if ( $xlsx = SimpleXLSX::parse('first_years.xlsx')) {

	$dim = $xlsx->dimension();
	$num_cols = $dim[0];
	$num_rows = $dim[1];
	echo '<table border=1>';
	foreach ( $xlsx->rows( 1 ) as $r ) {
		echo '<tr>';
			echo '<td>' . $r[ 0 ] . '</td>';
		echo '</tr>';
	}
	echo '</table>';

	echo '</td><td valign="top">';

	// output worsheet 2

	
} else {
	echo SimpleXLSX::parseError();
}
?>