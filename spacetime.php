<!DOCTYPE html>
<meta charset="utf-8">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="http://grants.ulbsibiu.ro/sidpop/blocks/continut_imagine/images/x.png"
          type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/links.css">
    <link rel="stylesheet" href="css/digitalclock.css">
    <script src="js/jquery.min.js"></script>

    <script src="//d3js.org/d3.v3.min.js"></script>
    <script src="//d3js.org/topojson.v1.min.js"></script>

    <script src="js/d3.v3.min.js"></script>
    <script src="js/topojson.v1.min.js"></script>
    <script src="js/digitalclock.js"></script>

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <title>OGD-2.0</title>

</head>
<style>

    body {
        background: #222;
    }

</style>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Luftverschmutzung im Thurgau</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Zeit<span class="sr-only">(current)</span></a
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
<main>

    <button style="font-size:20px" type="button" onclick="buttonShow()"><i class="fa fa-info-circle"></i></button>

    <!-- Und dann die Info-Box -->
    <div id="infoBox"
         style="width: 400px; padding: 5px; background-color: white;text-align: center; border: 2px solid #CCCCCC">
        Das Sie ja nicht die Zeit vergessen, wird auf dieser Seite die Zeit anezeigt. <br>
        Zudem können sehen in welcher Position die Sonne(Gelb) zur Erde(Blau) steht <br>
        und wie die der Mond zur Erde steht.
        <p style="text-align: center; margin-top: 20px">
            <button type="button" onclick="buttonHide()">Schließen</button>
        </p>
    </div>

    <!-- der JavaScript-Code -->
    <script type="text/javascript">
        <!--
        var info = document.getElementById("infoBox");
        info.style.display = "none"; // Box ausblenden
        info.style.position = "absolute";
        info.style.zIndex = 999;
        // Entweder fix auf der Seite platziert
        // info.style.left = "50px";
        // info.style.top = "100px";
        // Oder ein definiertes Stückchen unter dem Knopf
        info.style.marginTop = "10px";

        function buttonShow() {
            // Infobox anzeigen
            info.style.display = "";
        }

        function buttonHide() {
            // Infobox wieder ausblenden
            info.style.display = "none";
        }

        //-->
    </script>
    <div id="time" class="spacetime">

        <script src="http://d3js.org/d3.v3.min.js"></script>
        <script>
            window.onresize = function () {
                location.reload();
            }
            var now = d3.time.year.floor(new Date());

            var spacetime = d3.select('body');
            var width = window.innerWidth,
                height = window.innerHeight / 1.7,
                radius = Math.min(width, height);

            var radii = {
                "sun": radius / 8,
                "earthOrbit": radius / 2.5,
                "earth": radius / 32,
                "moonOrbit": radius / 16,
                "moon": radius / 96
            };

            // Space
            var svg = spacetime.append("svg")
                .attr("width", width)
                .attr("height", height)

                .append("g")
                .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

            // Sun
            svg.append("circle")
                .attr("class", "sun")
                .attr("r", radii.sun)
                .style("fill", "rgba(255, 204, 0, 1.0)");

            // Earth's orbit
            svg.append("circle")
                .attr("class", "earthOrbit")
                .attr("r", radii.earthOrbit)
                .style("fill", "none")
                .style("stroke", "rgba(255, 204, 0, 0.25)");

            // Current position of Earth in its orbit
            var earthOrbitPosition = d3.svg.arc()
                .outerRadius(radii.earthOrbit + 1)
                .innerRadius(radii.earthOrbit - 1)
                .startAngle(0)
                .endAngle(0);
            svg.append("path")
                .attr("class", "earthOrbitPosition")
                .attr("d", earthOrbitPosition)
                .style("fill", "rgba(255, 204, 0, 0.75)");

            // Earth
            svg.append("circle")
                .attr("class", "earth")
                .attr("r", radii.earth)
                .attr("transform", "translate(0," + -radii.earthOrbit + ")")
                .style("fill", "rgba(113, 170, 255, 1.0)");

            // Time of day
            var day = d3.svg.arc()
                .outerRadius(radii.earth)
                .innerRadius(0)
                .startAngle(0)
                .endAngle(0);
            svg.append("path")
                .attr("class", "day")
                .attr("d", day)
                .attr("transform", "translate(0," + -radii.earthOrbit + ")")
                .style("fill", "rgba(53, 110, 195, 1.0)");

            // Moon's orbit
            svg.append("circle")
                .attr("class", "moonOrbit")
                .attr("r", radii.moonOrbit)
                .attr("transform", "translate(0," + -radii.earthOrbit + ")")
                .style("fill", "none")
                .style("stroke", "rgba(113, 170, 255, 0.25)");

            // Current position of the Moon in its orbit
            var moonOrbitPosition = d3.svg.arc()
                .outerRadius(radii.moonOrbit + 1)
                .innerRadius(radii.moonOrbit - 1)
                .startAngle(0)
                .endAngle(0);
            svg.append("path")
                .attr("class", "moonOrbitPosition")
                .attr("d", moonOrbitPosition)
                .attr("transform", "translate(0," + -radii.earthOrbit + ")")
                .style("fill", "rgba(113, 170, 255, 0.75)");

            // Moon
            svg.append("circle")
                .attr("class", "moon")
                .attr("r", radii.moon)
                .attr("transform", "translate(0," + (-radii.earthOrbit + -radii.moonOrbit) + ")")
                .style("fill", "rgba(150, 150, 150, 1.0)");

            // Update the clock every second
            setInterval(function () {
                now = new Date();

                var interpolateEarthOrbitPosition = d3.interpolate(earthOrbitPosition.endAngle()(), (2 * Math.PI * d3.time.hours(d3.time.year.floor(now), now).length / d3.time.hours(d3.time.year.floor(now), d3.time.year.ceil(now)).length));

                var interpolateDay = d3.interpolate(day.endAngle()(), (2 * Math.PI * d3.time.seconds(d3.time.day.floor(now), now).length / d3.time.seconds(d3.time.day.floor(now), d3.time.day.ceil(now)).length));

                var interpolateMoonOrbitPosition = d3.interpolate(moonOrbitPosition.endAngle()(), (2 * Math.PI * d3.time.hours(d3.time.month.floor(now), now).length / d3.time.hours(d3.time.month.floor(now), d3.time.month.ceil(now)).length));

                d3.transition().tween("orbit", function () {
                    return function (t) {
                        // Animate Earth orbit position
                        d3.select(".earthOrbitPosition")
                            .attr("d", earthOrbitPosition.endAngle(interpolateEarthOrbitPosition(t)));

                        // Transition Earth
                        d3.select(".earth")
                            .attr("transform", "translate(" + radii.earthOrbit * Math.sin(interpolateEarthOrbitPosition(t) - earthOrbitPosition.startAngle()()) + "," + -radii.earthOrbit * Math.cos(interpolateEarthOrbitPosition(t) - earthOrbitPosition.startAngle()()) + ")");

                        // Animate day
                        // Transition day
                        d3.select(".day")
                            .attr("d", day.endAngle(interpolateDay(t)))
                            .attr("transform", "translate(" + radii.earthOrbit * Math.sin(interpolateEarthOrbitPosition(t) - earthOrbitPosition.startAngle()()) + "," + -radii.earthOrbit * Math.cos(interpolateEarthOrbitPosition(t) - earthOrbitPosition.startAngle()()) + ")");

                        // Transition Moon orbit
                        d3.select(".moonOrbit")
                            .attr("transform", "translate(" + radii.earthOrbit * Math.sin(interpolateEarthOrbitPosition(t) - earthOrbitPosition.startAngle()()) + "," + -radii.earthOrbit * Math.cos(interpolateEarthOrbitPosition(t) - earthOrbitPosition.startAngle()()) + ")");

                        // Animate Moon orbit position
                        // Transition Moon orbit position
                        d3.select(".moonOrbitPosition")
                            .attr("d", moonOrbitPosition.endAngle(interpolateMoonOrbitPosition(t)))
                            .attr("transform", "translate(" + radii.earthOrbit * Math.sin(interpolateEarthOrbitPosition(t) - earthOrbitPosition.startAngle()()) + "," + -radii.earthOrbit * Math.cos(interpolateEarthOrbitPosition(t) - earthOrbitPosition.startAngle()()) + ")");

                        // Transition Moon
                        d3.select(".moon")
                            .attr("transform", "translate(" + (radii.earthOrbit * Math.sin(interpolateEarthOrbitPosition(t) - earthOrbitPosition.startAngle()()) + radii.moonOrbit * Math.sin(interpolateMoonOrbitPosition(t) - moonOrbitPosition.startAngle()())) + "," + (-radii.earthOrbit * Math.cos(interpolateEarthOrbitPosition(t) - earthOrbitPosition.startAngle()()) + -radii.moonOrbit * Math.cos(interpolateMoonOrbitPosition(t) - moonOrbitPosition.startAngle()())) + ")");
                    };
                });
            }, 1000);

        </script>
    </div>
    <div id="MyClockDisplay" class="clock">
        <script>
            function showTime() {
                var date = new Date();
                var h = date.getHours(); // 0 - 23
                var m = date.getMinutes(); // 0 - 59
                var s = date.getSeconds(); // 0 - 59
                var session = "AM";

                if (h == 0) {
                    h = 12;
                }

                if (h > 12) {
                    h = h - 12;
                    session = "PM";
                }

                h = (h < 10) ? "0" + h : h;
                m = (m < 10) ? "0" + m : m;
                s = (s < 10) ? "0" + s : s;

                var time = h + ":" + m + ":" + s + " " + session;
                document.getElementById("MyClockDisplay").innerText = time;
                document.getElementById("MyClockDisplay").textContent = time;

                setTimeout(showTime, 1000);

            }

            showTime();
        </script>
    </div>


</main>
<div class="wtf"></div>
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
                        <li class="first active"><a href="index.php">Home</a></li>
                        <li><a href="#">Zeit</a></li>
                        <li class="last"><a href="Kontakt.php">Kontakt</a></li>
                        <li><a href="Impressum.php">Impressum</a></li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>
</body>

