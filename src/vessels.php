<?php

include __DIR__ . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'config.php';

$current_page = 'vessels';
$page_title = 'Our Vessels';

$vessels[] = [
    'name' => 'Red Baroness',
    'description' => 'Ro-Ro Twin Screw Landing Craft',
    'image_url' => $vessel_images_url . '/red-baroness/IMG_2210.JPG',
    'spec_sheet_url' => $vessel_specs_url . '/RED-BARONESS-spec-sheet.pdf'
];

$vessels[] = [
    'name' => 'Red Countess',
    'description' => '(Replacement Vessel Coming Soon)',
    'image_url' => $images_url . '/troontug-logo.PNG'
];

include __DIR__ . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'header.php';

?>

<div class="w3-padding-32">
    <?php for( $v = 0; $v < count( $vessels ); $v++ ): ?>
        <?php $vessel = $vessels[ $v ]; ?>
        <div class="w3-row">
            <?php $vessel_image = function( $vessel ) { ?>
            <div class="w3-half" style="background-image: url( '<?php echo $vessel['image_url']; ?>' ); background-size: cover; background-position: center; background-repeat: no-repeat; aspect-ratio: 16 / 10;">
                
            </div>
            <?php } ?>

            <?php if( $v % 2 === 0 ) $vessel_image( $vessel ); ?>

            <div class="w3-half w3-padding-32 w3-center">
                <h2 class="w3-xxlarge w3-wide"><b><?php echo strtoupper( $vessel['name'] ); ?></b></h2>
                <p><?php echo $vessel['description']; ?></p>
                <?php if( isset( $vessel['spec_sheet_url'] ) ): ?>
                    <p><a href="<?php echo $vessel['spec_sheet_url']; ?>" class="w3-button w3-dark-gray w3-hover-dark-gray w3-round-xlarge" target="_blank">View/Download Vessel Spec</a></p>
                <?php endif; ?>
            </div>

            <?php if( $v % 2 === 1 ) $vessel_image( $vessel ); ?>
        </div>
    <?php endfor; ?>
</div>

<?php include __DIR__ . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'footer.php'; ?>
