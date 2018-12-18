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
    <link rel="stylesheet" href="css/footer.css">

    <script src="js/jquery.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
          integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
          crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
            integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
            crossorigin=""></script>

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
    <div class="btn-group mb-2">
        <button class="btn btn-success btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
            Feinstaub - PM10
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" id="Immissionen_PM10_2005" onclick="changeLayer(this.id), hideno2()"
               href="#">2005</a>
            <a class="dropdown-item" id="Immissionen_PM10_2010" onclick="changeLayer(this.id), hideno2()"
               href="#">2010</a>
            <a class="dropdown-item" id="Immissionen_PM10_2015" onclick="changeLayer(this.id), hideno2()"
               href="#">2015</a>
            <a class="dropdown-item" id="Immissionen_PM10_2020" onclick="changeLayer(this.id), hideno2()"
               href="#">2020</a>
            <a class="dropdown-item" id="Immissionen_PM10_2030" onclick="changeLayer(this.id), hideno2()"
               href="#">2030</a>
        </div>
    </div>
    <div class="btn-group mb-2">
        <button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
            Stickstoffdioxid - NO2
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" id="Immissionen_NO2_2005" onclick="changeLayer(this.id), hidepm10()"
               href="#">2005</a>
            <a class="dropdown-item" id="Immissionen_NO2_2010" onclick="changeLayer(this.id), hidepm10()"
               href="#">2010</a>
            <a class="dropdown-item" id="Immissionen_NO2_2015" onclick="changeLayer(this.id), hidepm10()"
               href="#">2015</a>
            <a class="dropdown-item" id="Immissionen_NO2_2020" onclick="changeLayer(this.id), hidepm10()"
               href="#">2020</a>
            <a class="dropdown-item" id="Immissionen_NO2_2030" onclick="changeLayer(this.id), hidepm10()"
               href="#">2030</a>
        </div>
    </div>
    <div class="btn-group mb-2">
        <button class="btn btn-dark btn-lg" type="button"
                onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
            Legende
        </button>
    </div>
</div>

<div id="container">
    <div id="id01" class="modal">
        <form class="modal-content animate" action="/index.php">
            <div class="modalcontainer container">
                <p id="infotext" class="text-center">Wählen Sie die Daten aus!</p>
                <img id="imgpm10" class="legendimg img-fluid rounded float-left"
                     src="img/luftbelastung-stickstoff-pm10.png"
                     alt="PM10">
                <img id="imgno2" class="legendimg img-fluid rounded float-left"
                     src="img/luftbelastung-stickstoff-no2.png"
                     alt="NO2">
            </div>
            <div class="container" style="width: 300px; border-radius: 5px">
                <button type="button" onclick="document.getElementById('id01').style.display='none'"
                        class="cancelbtn btn btn-danger">
                    Cancel
                </button>
            </div>
        </form>
    </div>
    <div id="graph">
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<footer>
    <div class="footer">
        <div class="footertext">
            <div class="row">
                <div class="col-md-4">
                    <h4>Kontakt</h4>
                    <ul class="contact">
                        <li>Informatikmittelschule Frauenfeld</li>
                        <li>Ringstrasse 10</li>
                        <li>8500 Frauenfeld</li>
                        <li>+41 555 66 77</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Partnerlinks</h4>
                    <ul class="partner">
                        <li><a target="_blank" href="https://www.kanti-frauenfeld.ch">» Kantonschule Frauenfeld</a></li>
                        <li><a target="_blank" href="https://www.tg.ch">» Kanton Thurgau</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Sitemap</h4>
                    <ul class="sitemap">
                        <li class="first active"><a href="#">Home</a></li>
                        <li><a href="spacetime.php">Zeit</a></li>
                        <li class="last"><a href="Kontakt.php">Kontakt</a></li>
                        <li><a href="Impressum.php">Impressum</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="js/app.js"></script>
<script src="js/leaflet.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>
</html>
