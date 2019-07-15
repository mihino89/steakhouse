<?php 
if (isset($p_valid)) {
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />

    <title>Steak-House</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png" />

    <link href="https://fonts.googleapis.com/css?family=Literata:700|Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        var openGallery = null;
        var galleries = {
            interior: ['assets/img/sec_1_1.jpg', 'assets/img/sec_1_1.jpg', 'assets/img/sec_1_1.jpg',
                'assets/img/sec_1_1.jpg', 'assets/img/sec_1_1.jpg'
            ],
            exterior: [],
            food: [],
        };
        $(document).on('click', 'a[href^="#"]', function (event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 500);
        });
        $(document).on('click', '.gallery-option', function (event) {
            openGallery = $(this).attr('data-option');
            loadGallery();
        });
        $(document).on('click', '.close-gallery', function (event) {
            closeGallery();
        });

        function loadGallery() {
            if (openGallery) {
                $('.options').css('display', 'none');
                $('#opened-gallery').css('display', 'block');
                $('#opened-gallery').html(
                    '<div><button class="close-gallery" style="display: block; margin: 20px auto;">späť</button></div>'
                    );
                for (var i = 0; i < galleries[openGallery].length; i++) {
                    var el = '<article><img src="' + galleries[openGallery][i] + '" alt="gallery-image"/></article>'
                    $('#opened-gallery').append(el);
                }
            }
        }

        function closeGallery() {
            $('.options').css('display', 'block');
            $('#opened-gallery').css('display', 'none');
        }
    </script>
</head>

<body>
    <header id="header">
        <div id="banner">
            <div id="banner-content">
                <img id="logo" src="assets/img/logo_white.png" alt="logo" />
                <h1 id="title">STEAK HOUSE</h1>
                <button>týždenné menu</button>
            </div>
        </div>
        <nav id="navigation">
            <a class="scale" href="#">
                <h5 class="title">STEAK HOUSE</h5>
            </a>
            <ul>
                <li>
                    <a class="scale" href="#about">o nás
                    </a>
                </li>
                <li>
                    <a class="scale" href="#gallery">galéria
                    </a>
                </li>
                <li>
                    <a class="scale" href="#food-menu">menu
                    </a>
                </li>
                <li>
                    <a class="scale" href="#contact">kontakt
                    </a>
                </li>
            </ul>
        </nav>
    </header>



    <?php 
}else {
    echo "Error :(";
}
?>