<?php

$project_name = "StaticPHP";

$path_to_latest_code = "https://raw.githubusercontent.com/DavidHunterScot/" . $project_name . "/master/" . $project_name . ".php";
$path_to_local_file = __DIR__ . DIRECTORY_SEPARATOR . $project_name . ".php";

$path_to_source_files = __DIR__ . DIRECTORY_SEPARATOR . "src";
$path_to_public_files = __DIR__ . DIRECTORY_SEPARATOR . "public";

$paths_to_ignore = array( "_inc" );
$friendly_urls = true;

file_put_contents( $path_to_local_file, file_get_contents( $path_to_latest_code ) );

if( is_file( $path_to_local_file ) )
{
    include $path_to_local_file;

    if( class_exists( $project_name ) )
        $project = new $project_name( $path_to_source_files, $path_to_public_files, $paths_to_ignore, $friendly_urls );

    unlink( $path_to_local_file );
}
