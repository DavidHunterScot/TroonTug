<? include __DIR__ . DIRECTORY_SEPARATOR . 'config.php' ?>
<? if( ! isset( $current_page ) ) $current_page = ""; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><? if( isset( $page_title ) ): ?><?= $page_title ?> &#8211; <? endif ?><?= $site_title ?><? if( ! isset( $page_title ) ): ?> &#8211; Landing Craft and Tug Owner Operators<? endif ?></title>

        <link rel="icon" type="image/x-icon" href="<?= $images_url ?>/favicon.ico">
        
        <? if( isset( $css_urls ) && is_array( $css_urls ) && count( $css_urls ) > 0 ): ?>
            <? foreach( $css_urls as $css_url ): ?>
                <link rel="stylesheet" type="text/css" href="<?= $css_url ?>">
            <? endforeach ?>
        <? endif ?>
    </head>

    <body class="w3-dark-grey">
        <div class="w3-container w3-light-grey w3-text-red w3-padding-large">
            <div class="w3-auto">
                <a href="/">
                    <div class="w3-row">
                        <div class="w3-quarter w3-padding-large w3-center">
                            <img src="<?= $images_url ?>/troontug-logo.PNG" alt="Troon Tug Logo" class="w3-image">
                        </div>

                        <div class="w3-half">
                            <h1 class="w3-center w3-xxlarge"><b>TROON TUG CO LTD</b></h1>
                            <h3 class="w3-center w3-large"><b>Landing Craft and Tug Owner Operators</b></h3>
                        </div>

                        <div class="w3-quarter w3-padding-large w3-center w3-hide-small">
                            <img src="<?= $images_url ?>/troontug-logo.PNG" alt="Troon Tug Logo" class="w3-image">
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <nav class="w3-light-grey w3-border-bottom w3-border-grey w3-center w3-bar">
            <div class="w3-auto">
                <a href="/" class="w3-bar-item w3-button w3-border-left w3-border-right w3-border-top w3-border-grey w3-hover-opacity w3-margin-right <? if( $current_page == "about" ): ?>w3-blue w3-text-white w3-hover-text-light-grey w3-hover-blue<? else: ?>w3-white w3-text-blue w3-hover-text-blue w3-hover-white<? endif ?>" style="display: inline-block; float: none;"><b>About Us</b></a>
                <a href="/contact" class="w3-bar-item w3-button w3-border-left w3-border-right w3-border-top w3-border-grey w3-hover-opacity w3-margin-right <? if( $current_page == "contact" ): ?>w3-blue w3-text-white w3-hover-text-light-grey w3-hover-blue<? else: ?>w3-white w3-text-blue w3-hover-text-blue w3-hover-white<? endif ?>" style="display: inline-block; float: none;"><b>Contact Us</b></a>
                <a href="/vessels" class="w3-bar-item w3-button w3-border-left w3-border-right w3-border-top w3-border-grey w3-hover-opacity w3-margin-right <? if( $current_page == "vessels" ): ?>w3-blue w3-text-white w3-hover-text-light-grey w3-hover-blue<? else: ?>w3-white w3-text-blue w3-hover-text-blue w3-hover-white<? endif ?>" style="display: inline-block; float: none;"><b>Our Vessels</b></a>
                <a href="/gallery" class="w3-bar-item w3-button w3-border-left w3-border-right w3-border-top w3-border-grey w3-hover-opacity w3-margin-right <? if( $current_page == "gallery" ): ?>w3-blue w3-text-white w3-hover-text-light-grey w3-hover-blue<? else: ?>w3-white w3-text-blue w3-hover-text-blue w3-hover-white<? endif ?>" style="display: inline-block; float: none;"><b>Gallery</b></a>
                <a href="/vacancies" class="w3-bar-item w3-button w3-border-left w3-border-right w3-border-top w3-border-grey w3-hover-opacity <? if( $current_page == "vacancies" ): ?>w3-blue w3-text-white w3-hover-text-light-grey w3-hover-blue<? else: ?>w3-white w3-text-blue w3-hover-text-blue w3-hover-white<? endif ?>" style="display: inline-block; float: none;"><b>Vacancies</b></a>
            </div>
        </nav>

        <div class="w3-container w3-red">
            <div class="w3-auto w3-white">
