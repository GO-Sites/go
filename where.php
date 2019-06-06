<?php include "header.php"; ?>

<div class="cursor d-sm-none d-md-block"></div>

<section class="where">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 local localization">
                <div class="row localization">
                    <div class="col-2 state">
                        <h1 class="state-label">CE</h1>
                    </div>
                    <div class="col-10 label">
                        <h6>Ed. One Tower</h6>
                        <p class="label-street">Av. Senador Virgílio Távora, 1500 - Sala 106</p>
                        <p class="label-street">Dionísio Torres, Fortaleza/CE</p>
                    </div>
                </div>
                <div class="row localization">
                    <div class="offset-2 col-10 label">
                        <h6><i class="fas fa-phone"></i> (85) 4002-8922</h6>
                        <h6><i class="fas fa-envelope"></i> contato@heyholetsgo.com.br</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6 local">
                <div id="map"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 local">
                <div id="map2"></div>
            </div>
            <div class="col-md-6 local localization">
                <div class="row">
                    <div class="col-2 state">
                        <h1 class="state-label">SP</h1>
                    </div>
                    <div class="col-10 label">
                        <h6>COLAB Coworking</h6>
                        <p class="label-street">R. Fradique Coutinho, 160</p>
                        <p class="label-street">Pinheiros, São Paulo/SP</p>
                    </div>
                </div>
                <div class="row localization">
                    <div class="offset-2 col-10 label">
                        <h6><i class="fas fa-phone"></i> (11) 0000-0000</h6>
                        <h6><i class="fas fa-envelope"></i> contato@heyholetsgo.com.br</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        var fortaleza = {lat: -3.738989, lng: -38.494255};
        var sao_paulo = {lat: -23.564952, lng: -46.684987};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 18, center: fortaleza});
        var map2 = new google.maps.Map(
            document.getElementById('map2'), {zoom: 18, center: sao_paulo});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: fortaleza, map: map});
        var marker2 = new google.maps.Marker({position: sao_paulo, map: map2});
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcvxgY8T-aataNJr9-_7kkjC4dYgB5n2A&callback=initMap" async defer></script>
<?php include "footer.php"; ?>