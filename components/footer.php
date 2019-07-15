<?php 
if (isset($p_valid)) {
?>
</div>
<footer id="contact">
        <div>
            <div class="inline" id="map_w_marker"></div>
            <address class="inline" style="font-style: normal;">
                <div>
                    <h4 class="d_text highlight_colour" data="addr_h">Adresa</h4>
                    <span class="footer_sec">Vajnorská 1307/19</span>
                    <span class="footer_sec">831 03 Bratislava</span>
                </div>
                <div>

                    <h4 class="d_text highlight_colour" data="c_us">Kontaktuje Nás</h4>
                    <a class="footer_sec" href="mailto:openhousecafebistro@gmail.com">openhousecafebistro@gmail.com</a>
                    <a class="footer_sec" href="tel:0910668331">0910668331</a>
                    <!--<span class="footer_sec">ICO: 9023201 </span>-->
                    <!--<span class="footer_sec">DICO: 3210932</span>-->
                </div>
            </address>
        </div>
        <div class="bottom_line">
                <span style="float: left;">Made with love</span>
                <a target="_blank" rel="noopener noreferrer"
                            href="https://www.facebook.com/Open-House-Cafe-Bistro-2191301447775528/"><i
                                class="fab fa-facebook-f"></i></a>
                                <a target="_blank" rel="noopener noreferrer"
                            href="https://instagram.com/openhousecafebistro?utm_source=ig_profile_share&igshid=fie8ts5vtczd"><i
                                class="fab fa-instagram"></i></a>
                <span style="float: right;">All right reserved by <a href="www.webinara.sk">WEBinara.sk</a></span>
        </div>
</footer>

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
<script src="https://kit.fontawesome.com/1f0627b04f.js"></script>

</body>

</html>

<?php 
}else {
    echo "Error :(";
}
?>