<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="http://grants.ulbsibiu.ro/sidpop/blocks/continut_imagine/images/x.png"
          type="image/x-icon"/>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="css/index.css">

    <script src="js/jquery.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
          integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
          crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
            integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
            crossorigin=""></script>

    <!--    <script src="//d3js.org/d3.v3.min.js"></script>-->
    <!--    <script src="//d3js.org/topojson.v1.min.js"></script>-->
    <!---->
    <!--    <script src="js/d3.v3.min.js"></script>-->
    <!--    <script src="js/topojson.v1.min.js"></script>-->

    <title>OGD-2.0</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Luftverschmutzung im Thurgau</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="spacetime.php">Zeit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Kontakt.php">Kontakt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Impressum.php">Impressum</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid my-4">
    <div class="btn-group btn-group-lg" role="group">
        <button type="button" id="btn2010" class="btn btn-secondary">2010</button>
        <button type="button" id="btn2015" class="btn btn-secondary">2015</button>
        <button type="button" id="btn2020" class="btn btn-secondary">2020</button>
    </div>
</div>

<div class="container-fluid my-4">
    <div class="btn-group btn-group" role="group">
        <button type="button" id="btnPM10" class="btn btn-primary">PM10</button>
        <button type="button" id="btnNO2" class="btn btn-primary">NO2</button>
    </div>
</div>

<div id="container">
    <div id="graph"></div>
</div>

<footer>
    <div class="footer">
        <div class="footertext">
        <div class="row">

            <div class="col-md-4">
                <h4>Kontakt</h4>
                <ul class="contact">
                    <li>Unternehmensnetzwerk Frauenfeld</li>
                    <li>Rolf Müller c/o Printimo AG</li>
                    <li>Frauenfelderstrasse 21 A</li>
                    <li>8404 Winterthur</li>
                    <li>+41 79 359 94 00</li>
                    <li><span id="_emoaddrId2"><span class="emo_address">Bitte Javascript aktivieren!</span></span></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h4>Partnerlinks</h4>
                <ul class="partner">
                    <li><a target="_blank" href="http://www.frauenfeld.ch">» Frauenfeld</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h4>Sitemap</h4>
                <ul class="sitemap">
                    <li class="first active"><a href="/" >Home</a></li><li><a href="netzwerk/" >Netzwerk</a></li><li><a href="ueber-uns/unser-ursprung.html" >Über uns</a></li><li><a href="mitglieder/" >Mitglieder</a></li><li><a href="events2/veranstaltungsuebersicht/" >Events</a></li><li><a href="aktuell/" >Aktuelles</a></li><li class="last"><a href="kontakt.html" >Kontakt</a></li>
                </ul>
            </div>
        </div>
        </div>
    </div>
</footer>

<!--<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>-->
<!--<script src="js/main.js"></script>-->
<script src="js/app.js"></script>
<script src="js/leaflet.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>
