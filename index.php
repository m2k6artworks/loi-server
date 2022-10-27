<?php require_once './Components/Layouts/TopHTML.php' ?>
<?php require_once './Components/Layouts/Navbar.php' ?>

<?php require_once './Components/Pages/Index/HeroSection.php' ?>
<?php require_once './Components/Pages/Index/VissionMissionAboutPurposeSection.php' ?>
<?php require_once './Components/Pages/Index/ValueAndPathSection.php' ?>
<?php require_once './Components/Pages/Index/TeamAndPlaceSection.php' ?>
<?php require_once './Components/Pages/Index/DiscoverSection.php' ?>
<?php require_once './Components/Pages/Index/EventSection.php' ?>
<?php require_once './Components/Pages/Index/AudioComponent.php' ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/tsparticles/tsparticles.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-particles"></script>
<script src="./assets/js/script.js?ver=1.2"></script>
<script>
    var ok = $("#particles-js")
        .particles()
        .ajax("assets/js/particles.json", function(container) {
            document.querySelector('.teams canvas').style.position = 'relative';
            document.querySelector('.teams canvas').style.height = 'unset';
            document.querySelector('.teams canvas').classList.add('teams-height');
        });
</script>

<?php require_once './Components/Layouts/Footer.php' ?>
<?php require_once './Components/Layouts/BottomHTML.php' ?>