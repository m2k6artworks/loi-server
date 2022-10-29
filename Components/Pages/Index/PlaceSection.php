<?php 

$row_places = json_decode(file_get_contents('assets/data/places.json'), true);

?>

<section id="place">
    <?php foreach($row_places as $places) { ?>
        <div class="places">
            <?php foreach($places as $place) { ?>
                <div class="place-card">
                    <img loading="lazy" src="<?= $place['image'] ?>" alt="<?= $place['title'] ?>">
                    <h4 class="title-place raleway"><?= $place['title'] ?></h4>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</section>