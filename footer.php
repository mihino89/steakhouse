<?php 
if (isset($p_valid)) {
?>
</div>
<footer>
    <section data-jarallax data-speed="0.6" id="contact" class="jarallax body_sec body_sec_overlay">
        <img class="jarallax-img" src="ffooter1.jpg" alt="footer-img">
        <div class="footer_body row">
            <section class="columns six nopadd">
                <div id="map_w_marker"></div>

            </section>
            <address style="font-style: normal;">
                <div class="box columns three">
                    <h4 class="d_text" data="addr_h">Adresa</h4>
                    <span class="footer_sec">Vajnorská 1307/19</span>
                    <span class="footer_sec">831 03 Bratislava</span>
                </div>
                <div class="box columns three">

                    <h4 class="d_text" data="c_us">Kontaktuje Nás</h4>
                    <a class="footer_sec" href="mailto:openhousecafebistro@gmail.com">openhousecafebistro@gmail.com</a>
                    <a class="footer_sec" href="tel:0910668331">0910668331</a>
                    <!--<span class="footer_sec">ICO: 9023201 </span>-->
                    <!--<span class="footer_sec">DICO: 3210932</span>-->
                </div>
            </address>
        </div>
        <div class="pre_footer_body">
            <div class="sec_5 columns four" style="padding-bottom: 20px;">
                <span>Made with love</span>
            </div>
            <div class="social columns four">
                <ul class="social_list row">
                    <!-- Social icons menu  -->
                    <li class="columns six"><a target="_blank" rel="noopener noreferrer"
                            href="https://www.facebook.com/Open-House-Cafe-Bistro-2191301447775528/"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <!-- <li class="columns three"><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                    <li class="columns six"><a target="_blank" rel="noopener noreferrer"
                            href="https://instagram.com/openhousecafebistro?utm_source=ig_profile_share&igshid=fie8ts5vtczd"><i
                                class="fab fa-instagram"></i></a></li>
                    <!-- <li class="columns three"><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
                </ul>
            </div>
            <div class="sec_6 columns four">
                <span>All right reserved by <a href="www.webinara.sk">WEBinara.sk</a></span>
            </div>
        </div>
    </section>
</footer>

<!-- Jarallax -->
<script src="https://unpkg.com/jarallax@1.10/dist/jarallax.min.js"></script>
<script src="https://kit.fontawesome.com/1f0627b04f.js"></script>
<!--<script src="assets/js/parallax.min.js"></script>-->

<script>
// Initialize and add the map
function initMap() {
    // The location of Uluru
    var envea = {
        lat: 48.1609167,
        lng: 17.1302256
    };
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map_w_marker'), {
            zoom: 18,
            center: envea
        });
    // The marker, positioned at Uluru

    var marker = new google.maps.Marker({
        position: envea,
        map: map
    });
}
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlxYcJqVMHqVQX5U6i6DEmhyFQkg_w4R0&callback=initMap">
</script>

</body>

</html>

<?php 
}else {
    echo "Error :(";
}
?>