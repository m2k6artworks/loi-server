<?php 

$events = json_decode(file_get_contents('assets/data/events.json'), true);

?>

<section id="event" class="container raleway">
    <h3 class="title-event">We’re not the usual office workers. We’re lioners.</h3>
    <p class="desc-event">What we care about is how passionate and brave you are to deliver any impactful actions for everyone connected with Lioners.</p>
    <ul class="tabs-pane">
        <li class="tab-pane active">Employee Engagement</li>
        <li class="tab-pane">Sosial Engagement</li>
    </ul>

    <div class="tab-contents">
        <div class="tab-content" id="employee-engagement">
            <?php foreach($events as $event) { ?>
                <div class="employee-enggagement">
                    <div class="image">
                        <img src="<?= $event['image'] ?>" alt="<?= $event['name'] ?>">
                    </div>
                    <div class="desc poppins">
                        <span class="title"><?= $event['name'] ?></span>
                        <span class="year"><?= $event['year'] ?></span>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>