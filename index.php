<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="main.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="skeleton.css" type="text/css">

    <title>Steak-House</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script>
    $(document).ready(function() {

        $("#interior-box").click(function() {
            $(this).toggleClass("open");
        });
    });
    </script>
</head>

<body>
    <header>
        <nav id="main_menu">
            <ul>
                <li>Home
                </li>
                <li>Drinks
                </li>
                <li class="title">
                    STEAK<br />HOUSE
                    <img src="logo.png" />
                </li>
                <li>Menu</li>
                <li>Gallery</li>
            </ul>
        </nav>
        <article class="dark">

            <p class="absolute_center">Vítame vás v našej štýlovej reštaurácií, zameranej na grilované
                jedlá z hovädzej sviečkovej, diviny, hydiny a rýb.
                Reštaurácia STEAK HOUSE je situovaná v širšom centre hlavného mesta s desatročnou tradíciou.
                Počas pracovných dní sa u nás podávaju tri druhy obedového menu.
                Naša reštaurácia je členitá, k dispozicií máme salónik,
                ktorý je možné rezervovať pre uzavretú spoločnosť.
                Pred reštauráciou v letných mesiacoch máme terasu a malé parkovisko. </p>
        </article>
    </header>

    <main>
        <section id="opening_hours" class="vanilla nopadd">
            <div>
                <img class="absolute_center" src="sec_1_1.jpg" />
                <span class="absolute_center">
                    <h5>Otváracie Hodiny</h5>
                    Pondelok - Piatok: whatevs <br />
                    Sobota - Nedeľa: aaa <br />
                </span>
            </div>
            <div class="hoverable"><img src="sec_1_2.jpg" />
            </div>
            <div class="hoverable"><img src="sec_1_3.jpg" /></div>
        </section>
        <section id="reviews" class="dark">
        </section>

        <?php include('gallery.php') ?>

        <section id="menus" class="dark">
        </section>
    </main>
    <?php
    $p_valid = 'x';
    include('footer.php');
    ?>
</body>

</html>