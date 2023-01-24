<?php

$current_page = 'vacancies';
$page_title = 'Vacancies';

include __DIR__ . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'header.php';

?>

<div class="w3-padding-large w3-padding-32 w3-large" style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; color: white; text-shadow: 2px 2px black; background-image: linear-gradient( rgba( 0, 0, 0, 0.5 ), rgba( 0, 0, 0, 0.5 ) ), url( '<?php echo $images_url; ?>/vacancies-800x598-optimised.jpg' ); background-size: cover; background-position: center; aspect-ratio: 16 / 9;">
    <p class="w3-xlarge">Occasionally vacancies come up, so if you are interested in working for a small friendly Scottish company, based in Troon, operating on the West Coast please send in your CV.</p>
</div>

<?php include __DIR__ . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'footer.php'; ?>
