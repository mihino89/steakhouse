<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="main.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="skeleton.css" type="text/css">

    <title>Steak-House</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script>
        $(document).ready(function () {

            $("#interior-box").click(function () {
                $(this).toggleClass("open");
            });
        });
    </script>
</head>

<body>
    <header>
        <nav id="main_menu">
            <ul>
                <a href="#">
                    <li>Home
                    </li>
                </a>
                <a href="#">
                    <li>Drinks
                    </li>
                </a>
                <a href="#">
                    <li class="title">
                        STEAK<br />HOUSE
                        <img src="logo.png" />
                    </li>
                </a>
                <a href="#">
                    <li>Menu</li>
                </a>
                <a href="#">
                    <li>Gallery</li>
                </a>
            </ul>
        </nav>
        <article class="vanilla">
            <div class="absolute_center" style="width: 70%; padding: 35px; box-sizing: border-box;">
            <p>Vítame vás v našej štýlovej reštaurácií, zameranej na grilované
                jedlá z hovädzej sviečkovej, diviny, hydiny a rýb.
                Reštaurácia STEAK HOUSE je situovaná v širšom centre hlavného mesta s desatročnou tradíciou.
                Počas pracovných dní sa u nás podávaju tri druhy obedového menu.
                Pred reštauráciou v letných mesiacoch máme terasu a malé parkovisko.
                </p>
    </div>
        </article>
    </header>

    <main>
        <section id="opening_hours" class="vanilla nopadd">
            <div class="columns four">
                <img class="absolute_center" src="sec_1_1.jpg" />
                <span class="absolute_center">
                    <h4>Otváracie Hodiny</h4>
                    <p>
                    Pondelok - Piatok: whatevs <br />
                    Sobota - Nedeľa: aaa <br />
    </p>
                </span>
            </div>
            <div class="columns four">
                <img src="sec_1_2.jpg" />
                <span class="absolute_center align_left">
                    <h4>Lorem Ipsum</h4>
                    <p>Fugiat aliquip elit enim tempor incididunt magna fugiat cillum. Lorem aliquip sit excepteur Lorem fugiat et ad exercitation anim ipsum aliquip officia nisi cupidatat. Nostrud qui mollit ipsum commodo deserunt adipisicing ad. Anim eu commodo esse minim aliqua amet ad.</p>
                </span>
            </div>
            <div class="columns four">
                <img src="sec_1_3.jpg" />

                <span class="absolute_center align_left">
                    <h4>Lorem Ipsum</h4>
                    <p>Fugiat aliquip elit enim tempor incididunt magna fugiat cillum. Lorem aliquip sit excepteur Lorem fugiat et ad exercitation anim ipsum aliquip officia nisi cupidatat. Nostrud qui mollit ipsum commodo deserunt adipisicing ad. Anim eu commodo esse minim aliqua amet ad.</p>
                </span>
            </div>
        </section>
        <section id="reviews" class="dark">
            <h1>RECENZIE</h1>
        </section>

        <?php include('gallery.php') ?>

        <section id="menus" class="dark">
            <h1>DENNÉ MENU</h1>
        </section>
    </main>
    <?php
    $p_valid = 'x';
    include('footer.php');
    ?>
</body>

</html>