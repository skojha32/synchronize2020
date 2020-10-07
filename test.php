<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__.'/SimpleXLSX.php';

echo '<h1>Parse books.xslx</h1><pre>';
if ( $xlsx = SimpleXLSX::parse('first_years.xlsx') ) {
	print_r( $xlsx->rows(1) );
} else {
	echo SimpleXLSX::parseError();
}
echo '<pre>';