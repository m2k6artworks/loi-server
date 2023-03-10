<?php 
    $benefits = json_decode(file_get_contents("assets/data/benefits.json"), true);
?>

<section id="benefit-section">
    <?php foreach($benefits as $benefit) { ?>
        <div class="benefit raleway">
            <img loading="lazy" src="<?= $benefit['image'] ?>" alt="<?= $benefit['title'] ?>" class="mb-3">
            <h4><?= $benefit['title'] ?></h4>
            <p><?= $benefit['description'] ?></p>
        </div>
    <?php } ?>
</section>