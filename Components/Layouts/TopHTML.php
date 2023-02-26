<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="title" content="Lion of Informatics">
    <meta name="description" content="We are is a startup that aims to develop a technology ecosystem in Indonesia. We are provides various products & services for the needs of companies.">
    <meta name="keywords" content="web development, jasa pembuatan website, jasa pembuatan aplikasi, aplikasi custom, cms, erp, smartschool, pos, vendor startup, startup technology, jasa design, jasa uiux, website, informatics, informatika, cara membuat website, informatics enginering, website undangan online, viding.co, rizqullah.co, viding, rizqullah, indonesia, teknologi, berita teknologi, pemrograman, belajar ngoding, website murah, desain logo, desain feed instagram, desain">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="revisit-after" content="100 days">
    <meta name="author" content="Lion of Informatics">
    <meta name="language" content="Indonesia">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Volkhov:wght@400;700&display=swap" rel="stylesheet">

    <!-- Icon -->
    <meta name="msapplication-TileColor" content="#FFFFF">
    <meta name="msapplication-config" content="./assets/icons/lionofinformatics.ico">
    <link rel="shortcut icon" href="./assets/icons/lionofinformatics.ico" type="image/x-icon" alt="lionofinformatics">
    <link rel="manifest" href="./assets/icons/lionofinformatics.ico">
    <link rel="shortcut icon" href="./assets/icons/lionofinformatics.ico" type="image/ico" alt="lionofinformatics">
    <link rel="apple-touch-icon" href="./assets/icons/lionofinformatics.ico">
    
    <link rel="stylesheet" href="./assets/styles/style.css?ver=1.3">
    <link rel="stylesheet" href="./assets/styles/reusable.css?ver=1.3">

    <link rel="stylesheet" href="./assets/styles/bootstrap-v5.2.3/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/styles/swiperjs-v9.0.5/swiper-bundle.min.css">
    <script src="./assets/js/swiperjs-v9.0.5/swiper-bundle.min.js"></script>

    <title>Server</title>
    <script>
        async function getData(url) {
            try {
                let res = await fetch(url);
                return await res.json();
            } catch (error) {
                console.log(error);
            }
        }
    </script>
</head>

<body>
    <div id="backToTop" class="position-fixed right-0" style="right: 1.5vw;bottom: 12vh;z-index:10;">
        <button class="btn btn-lg text-dark-blue" onclick="goTop()"><i class="fas fa-chevron-up"></i></button>
    </div>