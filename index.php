<!DOCTYPE html>
<html>

<head>
    <link href="main.css" rel="stylesheet" type="text/css" />
    <link href="footer.css" rel="stylesheet" type="text/css" />
    
    
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
        <article>
        
        <p class="promo_text">Vítame vás v našej štýlovej reštaurácií, zameranej na grilované
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
            <div><img src="sec_1_1.jpg" /></div>
            <div class="hoverable"><img src="sec_1_2.jpg" /></div>
            <div class="hoverable"><img src="sec_1_3.jpg" /></div>
        </section>
        <section id="reviews" class="dark">
            <div class="button_body">
                <a href="#" class="button">Galeria</a>
            </div>
        </section>

        <section id="interior" class="vanilla nopadd">
            <article id="interior-box" class="upperlower">
                <div style="padding-top: 5%">
                    <h3 class="o_hours">Otvaracie hodiny</h3>
                </div>
                <div class="o_hours_wrapper">
                    <p>Pondelok - Piatok:   11:00-22:00</p>
                    <p>Sobota & Nedela:     12:00-22:00</p>
                </div>
            </article>
        </section>
        <section id="menus" class="dark">
        </section>
    </main>
    <?php
    $p_valid = 'x';
    include('footer.php');
    ?>
</body>

</html>