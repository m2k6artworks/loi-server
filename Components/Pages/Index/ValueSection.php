<?php 

$values = json_decode(file_get_contents("assets/data/values.json"), true);

?>

<section id="value-section">
    <h2 class="title raleway">Our Values</h2>
    <p class="desc raleway">In a world that is constantly changing, we are discovering a new cultural landscape that can make us legends in changing the world and a better future.</p>
    <div class="values">
        <?php foreach ($values as $value) { ?>
            <div class="value raleway">
                <img src="<?= $value['image'] ?>" alt="<?= $value['title'] ?>">
                <h4><?= $value['title'] ?></h4>
                <p><?= $value['description'] ?></p>
            </div>
        <?php } ?>
    </div>
</section>