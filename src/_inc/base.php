---
site_title: Troon Tug Co Ltd
site_description: Landing Craft and Tug Owner Operators
developer_credit_name: David Hunter
developer_credit_url: https://www.dah5.me.uk/davidhunter/
assets_url: /assets
images_url: /assets/images
vessel_images_url: /assets/images/vessels
downloads_url: /assets/downloads
vessel_specs_url: /assets/downloads/vessel-specs
w3css_url: /assets/w3css
webfonts_url: /assets/webfonts
css_url: /assets/css
css_urls: /assets/w3css/4.15/w3.css::/assets/webfonts/poppins/poppins.css::/assets/css/custom.css
content_placeholder: {{ content }}
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php if( isset( $metadata[ 'page_title' ] ) && trim( $metadata[ 'page_title' ] ) ): ?><?php echo trim( $metadata[ 'page_title' ] ); ?> &#8211; <?php endif; ?>--- metadata.site_title ---<?php if( ! isset( $metadata[ 'page_title' ] ) || trim( $metadata[ 'page_title' ] ) === "" ): ?> &#8211; --- metadata.site_description ---<?php endif; ?></title>

        <link rel="icon" type="image/x-icon" href="<?= $images_url ?>/favicon.ico">
        
        <?php if( isset( $metadata[ 'css_urls' ] ) ): ?>
            <?php $css_urls = explode( '::', $metadata[ 'css_urls' ] ); ?>

            <?php foreach( $css_urls as $css_url ): ?>
                <link rel="stylesheet" type="text/css" href="<?php echo $css_url; ?>">
            <?php endforeach; ?>
        <?php endif; ?>
    </head>

    <body class="w3-dark-grey">
        <div class="w3-container w3-light-grey w3-text-red w3-padding-large">
            <div class="w3-auto">
                <a href="/">
                    <div class="w3-row">
                        <div class="w3-quarter w3-padding-large w3-center">
                            <img src="--- metadata.images_url ---/troontug-logo.PNG" alt="Troon Tug Logo" class="w3-image">
                        </div>

                        <div class="w3-half">
                            <h1 class="w3-center w3-xxlarge"><b>TROON TUG CO LTD</b></h1>
                            <h3 class="w3-center w3-large"><b>Landing Craft and Tug Owner Operators</b></h3>
                        </div>

                        <div class="w3-quarter w3-padding-large w3-center w3-hide-small">
                            <img src="--- metadata.images_url ---/troontug-logo.PNG" alt="Troon Tug Logo" class="w3-image">
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <nav class="w3-light-grey w3-border-bottom w3-border-grey w3-center w3-bar">
            <div class="w3-auto">
                <a href="/" class="w3-bar-item w3-button w3-border-left w3-border-right w3-border-top w3-border-grey w3-hover-opacity w3-margin-right <?php if( isset( $metadata[ 'current_page' ] ) && $metadata[ 'current_page' ] == "about" ): ?>w3-blue w3-text-white w3-hover-text-light-grey w3-hover-blue<?php else: ?>w3-white w3-text-blue w3-hover-text-blue w3-hover-white<?php endif; ?>" style="display: inline-block; float: none;"><b>About Us</b></a>
                <a href="/contact" class="w3-bar-item w3-button w3-border-left w3-border-right w3-border-top w3-border-grey w3-hover-opacity w3-margin-right <?php if( isset( $metadata[ 'current_page' ] ) && $metadata[ 'current_page' ] == "contact" ): ?>w3-blue w3-text-white w3-hover-text-light-grey w3-hover-blue<?php else: ?>w3-white w3-text-blue w3-hover-text-blue w3-hover-white<?php endif; ?>" style="display: inline-block; float: none;"><b>Contact Us</b></a>
                <a href="/vessels" class="w3-bar-item w3-button w3-border-left w3-border-right w3-border-top w3-border-grey w3-hover-opacity w3-margin-right <?php if( isset( $metadata[ 'current_page' ] ) && $metadata[ 'current_page' ] == "vessels" ): ?>w3-blue w3-text-white w3-hover-text-light-grey w3-hover-blue<?php else: ?>w3-white w3-text-blue w3-hover-text-blue w3-hover-white<?php endif; ?>" style="display: inline-block; float: none;"><b>Our Vessels</b></a>
                <a href="/gallery" class="w3-bar-item w3-button w3-border-left w3-border-right w3-border-top w3-border-grey w3-hover-opacity w3-margin-right <?php if( isset( $metadata[ 'current_page' ] ) && $metadata[ 'current_page' ] == "gallery" ): ?>w3-blue w3-text-white w3-hover-text-light-grey w3-hover-blue<?php else: ?>w3-white w3-text-blue w3-hover-text-blue w3-hover-white<?php endif; ?>" style="display: inline-block; float: none;"><b>Gallery</b></a>
                <a href="/vacancies" class="w3-bar-item w3-button w3-border-left w3-border-right w3-border-top w3-border-grey w3-hover-opacity <?php if( isset( $metadata[ 'current_page' ] ) && $metadata[ 'current_page' ] == "vacancies" ): ?>w3-blue w3-text-white w3-hover-text-light-grey w3-hover-blue<?php else: ?>w3-white w3-text-blue w3-hover-text-blue w3-hover-white<?php endif; ?>" style="display: inline-block; float: none;"><b>Vacancies</b></a>
            </div>
        </nav>

        <div class="w3-container w3-red">
            <div class="w3-auto w3-white">

                {{ content }}
            
            </div>
        </div>

        <footer class="w3-container w3-padding-32 w3-black">
            <div class="w3-auto">
                <div class="w3-center">
                    <p class="w3-text-grey w3-small">Copyright © --- metadata.site_title ---. Website made by <a href="--- metadata.developer_credit_url ---" target="_blank">--- metadata.developer_credit_name ---</a>.</p>
                </div>
            </div>
        </footer>
    </body>
</html>
