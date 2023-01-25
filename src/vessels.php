<?php

include __DIR__ . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'config.php';

$current_page = 'vessels';
$page_title = 'Our Vessels';

$red_baroness['name'] = 'Red Baroness';
$red_baroness['description'] = 'Ro-Ro Twin Screw Landing Craft';
$red_baroness['spec_sheet_url'] = $vessel_specs_url . '/RED-BARONESS-spec-sheet.pdf';
$red_baroness['images_url'] = $vessel_images_url . '/red-baroness';
$red_baroness['image_url'] = $red_baroness['images_url'] . '/IMG_2210.JPG';
$red_baroness['gallery_id'] = 'vessel_gallery_' . str_replace( ' ', '_', strtolower( $red_baroness['name'] ) );
$red_baroness['gallery'][] = $red_baroness['image_url'];
$red_baroness['gallery'][] = $red_baroness['images_url'] . '/IMG_2423_650x650.jpg';
$red_baroness['gallery'][] = $red_baroness['images_url'] . '/IMG_2533_650x485.jpg';
$red_baroness['gallery'][] = $red_baroness['images_url'] . '/IMG_3003_650x485.jpg';
$red_baroness['gallery'][] = $red_baroness['images_url'] . '/IMG_6840_650x867.jpg';
$vessels[] = $red_baroness;

$red_countess['name'] = 'Red Countess';
$red_countess['description'] = '(Replacement Vessel Coming Soon)';
$red_countess['image_url'] = $images_url . '/troontug-logo.PNG';
$vessels[] = $red_countess;

include __DIR__ . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'header.php';

?>

<div class="w3-padding-32">
    <?php for( $v = 0; $v < count( $vessels ); $v++ ): ?>
        <?php $vessel = $vessels[ $v ]; ?>
        <div class="w3-row">
            <div class="w3-half<?php if( $v % 2 === 1 ) echo ' w3-show-small w3-hide-medium w3-hide-large'; ?>" style="background-image: url( '<?php echo $vessel['image_url']; ?>' ); background-size: cover; background-position: center; background-repeat: no-repeat; aspect-ratio: 16 / 10;">
                
            </div>

            <div class="w3-half w3-padding-32 w3-center">
                <h2 class="w3-xxlarge w3-wide"><b><?php echo strtoupper( $vessel['name'] ); ?></b></h2>
                <p><?php echo $vessel['description']; ?></p>
                <?php if( isset( $vessel['spec_sheet_url'] ) ): ?>
                    <p><a href="<?php echo $vessel['spec_sheet_url']; ?>" class="w3-button w3-dark-gray w3-hover-dark-gray w3-round-xlarge" target="_blank">View/Download Vessel Spec</a></p>
                <?php endif; ?>

                <?php if( isset( $vessel['gallery_id'] ) ): ?>
                    <p><label for="<?php echo $vessel['gallery_id'] . '_toggle'; ?>"  class="w3-button w3-light-gray w3-hover-light-gray w3-round-xlarge">View Images</label></p>
                <?php endif; ?>
            </div>

            <?php if( $v % 2 === 1 ): ?>
            <div class="w3-half w3-hide-small w3-show-medium w3-show-large" style="background-image: url( '<?php echo $vessel['image_url']; ?>' ); background-size: cover; background-position: center; background-repeat: no-repeat; aspect-ratio: 16 / 10;">
                
            </div>
            <?php endif; ?>
        </div>
    <?php endfor; ?>
</div>

<style>
    .gallery_toggle:checked ~ .gallery-modal
    {
        display: block;
    }

    .gallery .image,
    .gallery .thumbnail img
    {
        vertical-align: top;
        max-width: 100%;
    }

    .gallery
    {
        display: flex;
        margin: 10px auto;
        max-width: 600px;
        position: relative;
        padding-top: 66.6666666667%;
    }

    @media screen and (min-width: 600px)
    {
        .gallery
        {
            padding-top: 400px;
        }
    }

    .gallery .image
    {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
        width: 600px;
        height: 400px;
    }

    .gallery .thumbnail
    {
        padding-top: 6px;
        margin: 6px;
        display: block;
    }

    .gallery .thumbnail img
    {
        width: 150px;
        height: 100px;
    }

    .gallery .selector
    {
        position: absolute;
        opacity: 0;
        visibility: hidden;
    }

    .gallery .selector:checked + .image
    {
        opacity: 1;
    }

    .gallery .selector:checked ~ .thumbnail > img
    {
        box-shadow: 0 0 0 3px red;
    }
</style>

<?php foreach( $vessels as $vessel ): ?>
    <?php if( ! isset( $vessel[ 'gallery' ] ) ) continue; ?>
    <input type="checkbox" class="w3-hide gallery_toggle" id="<?php echo $vessel[ 'gallery_id' ] . '_toggle'; ?>" name="<?php echo $vessel['gallery_id'] . '_toggle'; ?>">
    <div class="w3-modal gallery-modal">
        <div class="w3-modal-content">
            <div class="w3-container">
                <label class="w3-button w3-display-topright w3-xlarge w3-red" for="<?php echo $vessel['gallery_id'] . '_toggle'; ?>">&times;</label>

                <h2 class="w3-center"><b><?php echo strtoupper( $vessel[ 'name' ] ); ?></b></h2>
                <p class="w3-center"><?php echo $vessel[ 'description' ] ?></p>

                <div class="gallery">
                    <?php for( $vgi = 0; $vgi < count( $vessel[ 'gallery' ] ); $vgi++ ): ?>
                        <?php $vessel_gallery_image_url = $vessel[ 'gallery' ][ $vgi ]; ?>
                        <div class="item">
                            <input type="radio" name="<?php echo $vessel['gallery_id'] ?>" id="<?php echo $vessel['gallery_id'] . '_' . $vgi; ?>" class="selector"<?php if( $vgi == 0 ) echo ' checked'; ?>>
                            <img class="image" src="<?php echo $vessel_gallery_image_url; ?>">
                            <label class="thumbnail" for="<?php echo $vessel['gallery_id'] . '_' . $vgi; ?>">
                                <img src="<?php echo $vessel_gallery_image_url; ?>">
                            </label>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php include __DIR__ . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'footer.php'; ?>
