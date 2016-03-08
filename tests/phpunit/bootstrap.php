<?php # -*- coding: utf-8 -*-

$root_directory = dirname( dirname( __DIR__ ) );
$autoload_file  = $root_directory . '/vendor/autoload.php';

if ( file_exists( $autoload_file ) ) {
	require_once $autoload_file;

	return;
}

// in case this package resides inside the vendor/ directory of another project
$project_vendor_dir = dirname( // vendor/
	dirname( // five-o/
		$root_directory // hackaton/
	)
);
$autoload_file = $project_vendor_dir . '/autoload.php';
if ( file_exists( $autoload_file ) ) {
	require_once $autoload_file;
}