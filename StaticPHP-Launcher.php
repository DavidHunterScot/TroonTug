<?php

/*
    Welcome to the StaticPHP Launcher!

    Most of this file is to remain unchanged to allow for the successful
    operation and usage of StaticPHP, but there are some configurable options.
*/

// CONFIGURABLE OPTIONS

// Set this to the path where you have put your source files.
$path_to_source_files = __DIR__ . DIRECTORY_SEPARATOR . "src";
// Set this to the path where you wish your generated output files.
$path_to_public_files = __DIR__ . DIRECTORY_SEPARATOR . "public";

// Modify this array to include elements that will form parts of paths you wish to ignore.
// Any path that matches any of the elements of this array will not be processed at all.
// Such as PHP includes will still be converted as part of where they are included, but ignored as individual files.
$paths_to_ignore = array( "_inc" );

/*
    Setting friendly URLs to false will turn PHP files into their respective HTML files.
    e.g. index.php will produce index.html and about.php will produce about.html
    About page URL example: https://website.tld/about.html

    Setting friendly URLs to true will turn PHP files into their respective directories with an index.html file inside.
    e.g. index.php will produce index.html, but about.php will produce about/index.html
    About page URL example: https://website.tld/about/
*/
$friendly_urls = true;

// END OF CONFIGURABLE OPTIONS

/*
    PLEASE DO NOT EDIT BELOW THIS LINE!
*/

$project_name = "StaticPHP";
$project_author_username = "DavidHunterScot";
$project_branch = "master";

$path_to_latest_code = "https://raw.githubusercontent.com/" . $project_author_username . "/" . $project_name . "/" . $project_branch . "/" . $project_name . ".php";
$path_to_local_file = __DIR__ . DIRECTORY_SEPARATOR . $project_name . ".php";

echo "Welcome to the " . $project_name . " Launcher!\n\n";
echo "Setting source directory path to: " . $path_to_source_files . "\n";
echo "Setting public files directory path to: " . $path_to_public_files . "\n";

if( count( $paths_to_ignore ) > 0 )
    echo "Setting paths to ignore to: " . join( ", ", $paths_to_ignore ) . "\n";

echo "\nFetching latest " . $project_name . " from " . $path_to_latest_code . "\n";
$latest_code = file_get_contents( $path_to_latest_code );

echo "Saving to local path " . $path_to_local_file . "\n";
file_put_contents( $path_to_local_file, $latest_code );

echo "Verifying local file...\n";
if( is_file( $path_to_local_file ) && file_get_contents( $path_to_local_file ) == $latest_code )
{
    echo "Loading " . $project_name . "...\n";
    include $path_to_local_file;

    if( class_exists( $project_name ) )
    {
        echo "Running " . $project_name . "...\n\n";
        $project = new $project_name( $path_to_source_files, $path_to_public_files, $paths_to_ignore, $friendly_urls );
    }

    echo "\n\nRemoving local " . $project_name . " file...\n";
    unlink( $path_to_local_file );

    echo "\nThank you for using the " . $project_name . " Launcher!\n\n";

    exit;
}

echo "Local file check failed!\n\n";
