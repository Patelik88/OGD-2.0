function init() {

    var docu = document.getElementById('graph');

    var width = docu.clientWidth,
        height = docu.clientHeight,
        centered,
        clickBool = false;


    var path = d3.geo.path()
        .projection(null);

    var svg = d3.select("#graph").append("svg")
        .attr("width", width)
        .attr("height", height);

    var graph = d3.select("#graph").append("div")
        .attr("class", "tooltip")
        .style("opacity", 0);

    svg.append("rect")
        .attr("class", "background")
        .attr("width", width)
        .attr("height", height)
        .on("click", clicked);


    var g = svg.append("g")
        .attr("width", "")
        .attr("height", "");

    d3.json("json/tg-municipalities-lakes.json", function(error, tg) {
        switch (btnP) {

            //case 6 Lastenausgleich Besondere Belastungen

            case "btn6" :
                g.append("g")
                    .attr("id", "municipalities")
                    .selectAll("path")
                    .data(topojson.feature(tg, tg.objects.municipalities).features)
                    .enter().append("path")
                    .attr("d", path)
                    .on("click", clicked)
                    .on("mouseover", mouseover)
                    .on("mouseout", mouseout)
                    .attr("fill", function(d) {
                        var m = getM6(d);
                        if (m > 0) {
                            var a = ((m - (m % Math.round(max / 10))) / Math.round(max / 10));
                            if (a >= 10) {
                                a = a - 1;
                            }
                            console.log(d.id + ", " + m);
                            return color[a][2];
                        }
                        if (m < 0) {
                            var a = 10;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }

                    });

                console.log("go to Population");
                break;

            //case 5 Lastenausgleich Fläche

            case "btn5" :
                g.append("g")
                    .attr("id", "municipalities")
                    .selectAll("path")
                    .data(topojson.feature(tg, tg.objects.municipalities).features)
                    .enter().append("path")
                    .attr("d", path)
                    .on("click", clicked)
                    .on("mouseover", mouseover)
                    .on("mouseout", mouseout)
                    .attr("fill", function(d) {
                        var m = getM5(d);
                        if (m > 0) {
                            var a = ((m - (m % Math.round(max / 10))) / Math.round(max / 10));
                            if (a >= 10) {
                                a = a - 1;
                            }
                            console.log(d.id + ", " + m);
                            return color[a][2];
                        }
                        if (m < 0 && m > -50000) {
                            var a = 1;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -50000 && m > -100000) {
                            var a = 2;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -100000 && m > -150000) {
                            var a = 3;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -150000 && m > -200000) {
                            var a = 4;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -200000 && m > -250000) {
                            var a = 5;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -250000 && m > -300000) {
                            var a = 6;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -300000 && m > -350000) {
                            var a = 7;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -350000 && m > -400000) {
                            var a = 8;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -400000 && m > -450000) {
                            var a = 9;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -450000) {
                            var a = 10;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                    });

                console.log("go to Population");
                break;

            //case 4 Lastenausgleich Sozialhilfe

            case "btn4" :
                g.append("g")
                    .attr("id", "municipalities")
                    .selectAll("path")
                    .data(topojson.feature(tg, tg.objects.municipalities).features)
                    .enter().append("path")
                    .attr("d", path)
                    .on("click", clicked)
                    .on("mouseover", mouseover)
                    .on("mouseout", mouseout)
                    .attr("fill", function(d) {
                        var m = getM4(d);
                        if (m > 0) {
                            var a = ((m - (m % Math.round(max / 10))) / Math.round(max / 10));
                            if (a >= 10) {
                                a = a - 1;
                            }
                            console.log(d.id + ", " + m);
                            return color[a][2];
                        }
                        if (m < 0 && m > -260000) {
                            var a = 1;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -260000 && m > -520000) {
                            var a = 2;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -780000 && m > -1300000) {
                            var a = 3;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -1300000 && m > -1560000) {
                            var a = 4;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -1560000 && m > -1820000) {
                            var a = 5;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -1820000 && m > -2080000) {
                            var a = 6;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -2080000 && m > -2340000) {
                            var a = 7;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -2340000 && m > -2600000) {
                            var a = 8;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -2600000 && m > -2860000) {
                            var a = 9;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -2860000) {
                            var a = 10;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                    });

                console.log("go to Population");
                break;

            //case 3 Auszahlung Mindestausstattung

            case "btn3" :
                g.append("g")
                    .attr("id", "municipalities")
                    .selectAll("path")
                    .data(topojson.feature(tg, tg.objects.municipalities).features)
                    .enter().append("path")
                    .attr("d", path)
                    .on("click", clicked)
                    .on("mouseover", mouseover)
                    .on("mouseout", mouseout)
                    .attr("fill", function(d) {
                        var m = getM3(d);
                        if (m > 0) {
                            var a = ((m - (m % Math.round(max / 10))) / Math.round(max / 10));
                            if (a >= 10) {
                                a = a - 1;
                            }
                            console.log(d.id + ", " + m);
                            return color[a][2];
                        }
                        if (m < 0 && m > -240000) {
                            var a = 1;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -240000 && m > -480000) {
                            var a = 2;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -480000 && m > -720000) {
                            var a = 3;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -720000 && m > -960000) {
                            var a = 4;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -960000 && m > -1200000) {
                            var a = 5;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -1200000 && m > -1440000) {
                            var a = 6;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -1440000 && m > -1680000) {
                            var a = 7;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -1680000 && m > -1920000) {
                            var a = 8;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -1920000 && m > -2160000) {
                            var a = 9;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -2160000) {
                            var a = 10;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                    });

                console.log("go to Population");
                break;

            //case 2 Auszahlung/Abschöpfung pro Person

            case "btn2" :
                g.append("g")
                    .attr("id", "municipalities")
                    .selectAll("path")
                    .data(topojson.feature(tg, tg.objects.municipalities).features)
                    .enter().append("path")
                    .attr("d", path)
                    .on("click", clicked)
                    .on("mouseover", mouseover)
                    .on("mouseout", mouseout)
                    .attr("fill", function(d) {
                        var m = getM2(d);
                        if (m > 0 && m < 50) {
                            var a = 1;
                            console.log(d.id + ", " + m);
                            return color[a][2];
                        }
                        if (m > 50 && m < 100) {
                            var a = 2;
                            console.log(d.id + ", " + m);
                            return color[a][2];
                        }
                        if (m > 100 && m < 150) {
                            var a = 3;
                            console.log(d.id + ", " + m);
                            return color[a][2];
                        }
                        if (m > 150 && m < 200) {
                            var a = 4;
                            console.log(d.id + ", " + m);
                            return color[a][2];
                        }
                        if (m > 200 && m < 250) {
                            var a = 5;
                            console.log(d.id + ", " + m);
                            return color[a][2];
                        }
                        if (m > 250 && m < 300) {
                            var a = 6;
                            console.log(d.id + ", " + m);
                            return color[a][2];
                        }
                        if (m > 300 && m < 350) {
                            var a = 7;
                            console.log(d.id + ", " + m);
                            return color[a][2];
                        }
                        if (m > 350 && m < 400) {
                            var a = 8;
                            console.log(d.id + ", " + m);
                            return color[a][2];
                        }
                        if (m > 450) {
                            var a = 9;
                            console.log(d.id + ", " + m);
                            return color[a][2];
                        }
                        if (m < 0 && m > -50) {
                            var a = 1;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -50 && m > -100) {
                            var a = 2;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -100 && m > -150) {
                            var a = 3;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -150 && m > -200) {
                            var a = 4;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -200 && m > -250) {
                            var a = 5;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -250 && m > -300) {
                            var a = 6;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -300 && m > -350) {
                            var a = 7;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -350 && m > -400) {
                            var a = 8;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -400 && m > -450) {
                            var a = 9;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                        if (m < -500) {
                            var a = 10;
                            console.log(d.id + ", " + m);
                            return color[a][1];
                        }
                    });

                console.log("go to Population");
                break;

                //case 1 Gesamtauszahlung/Abschöpfung

            case "btn1":
                g.append("g")
                    .attr("id", "municipalities")
                    .selectAll("path")
                    .data(topojson.feature(tg, tg.objects.municipalities).features)
                    .enter().append("path")
                    .attr("d", path)
                    .on("click", clicked)
                    .on("mouseover", mouseover)
                    .on("mouseout", mouseout)
                    .attr("fill", function(d) {
                        var m = getMPopulation(d);

                      //  if (m >= slideEvt.value[0] && m <= slideEvt.value[1]) { //FIXME

                            if (m > 0) {
                                var a = ((m - (m % Math.round(max / 10))) / Math.round(max / 10));
                                if (a >= 10) {
                                    a = a - 1;
                                }
                                console.log(d.id + ", " + m);
                                return color[a][2];
                            }
                            if (m < 0 && m > -328000) {
                                var a = 1;
                                console.log(d.id + ", " + m);
                                return color[a][1];
                            }
                            if (m < -328000 && m > -656000) {
                                var a = 2;
                                console.log(d.id + ", " + m);
                                return color[a][1];
                            }
                            if (m < -656000 && m > -984000) {
                                var a = 3;
                                console.log(d.id + ", " + m);
                                return color[a][1];
                            }
                            if (m < -984000 && m > -1312000) {
                                var a = 4;
                                console.log(d.id + ", " + m);
                                return color[a][1];
                            }
                            if (m < -1312000 && m > -1640000) {
                                var a = 5;
                                console.log(d.id + ", " + m);
                                return color[a][1];
                            }
                            if (m < -1640000 && m > -1968000) {
                                var a = 6;
                                console.log(d.id + ", " + m);
                                return color[a][1];
                            }
                            if (m < -1968000 && m > -2296000) {
                                var a = 7;
                                console.log(d.id + ", " + m);
                                return color[a][1];
                            }
                            if (m < -2296000 && m > -2624000) {
                                var a = 8;
                                console.log(d.id + ", " + m);
                                return color[a][1];
                            }
                            if (m < -2624000 && m > -2952000) {
                                var a = 9;
                                console.log(d.id + ", " + m);
                                return color[a][1];
                            }
                            if (m < -2952000) {
                                var a = 10;
                                console.log(d.id + ", " + m);
                                return color[a][1];
                            }
                   //     }
                    });

                console.log("go to Population");
                break;

            default:
                g.append("g")
                    .attr("id", "municipalities")
                    .selectAll("path")
                    .data(topojson.feature(tg, tg.objects.municipalities).features)
                    .enter().append("path")
                    .attr("d", path)
                    .on("click", clicked)
                    .on("mouseover", mouseover)
                    .on("mouseout", mouseout);
                break;

        }

        g.append("g")
            .attr("id", "lakes")
            .selectAll("path")
            .data(topojson.feature(tg, tg.objects.lakes).features)
            .enter().append("path")
            .attr("d", path);

        g.append("path")
            .datum(topojson.mesh(tg, tg.objects.municipalities, function(a, b) { return a !== b; }))
            .attr("id", "border")
            .style("stroke-width", "1px")
            .attr("d", path);
    });

    function clicked(d) {
        var x, y, k;
        if (d && centered !== d) {
            var centroid = path.centroid(d);
            x = centroid[0];
            y = centroid[1];
            k = 4;
            centered = d;

            clickBool = true;

            console.log(d.id + ": Surprise Motherfucker");
        } else {
            x = width / 2;
            y = height / 2;
            k = 1;
            centered = null;

            clickBool = false;

            console.log(d.id + ": bitch I'm out");
        }
        g.selectAll("path")
            .classed("active", centered && function(d) { return d === centered; });
        g.transition()
            .duration(750)
            .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")scale(" + k + ")translate(" + -x + "," + -y + ")")
            .style("stroke-width", 1.5 / k + "px");
    }

    function mouseover(d) {
        switch (btnP) {
            case "btn1":
                graph.style("opacity", .9)
                    .html(getMName(d) + "<br> Auszahlung/Abschöpfung in CHF: " + getMPopulation(d))
                    .style("left", (d3.event.pageX) + "px")
                    .style("top", (d3.event.pageY - 28) + "px");
                break;

            case "btn2":
                graph.style("opacity", .9)
                    .html(getMName(d) + "<br> Auszahlung/Abschöpfung pro Person in CHF: " + getM2(d))
                    .style("left", (d3.event.pageX) + "px")
                    .style("top", (d3.event.pageY - 28) + "px");
                break;$;

            case "btn3":
                graph.style("opacity", .9)
                    .html(getMName(d) + "<br> Auszahlung Mindestausstattung " + getM3(d))
                    .style("left", (d3.event.pageX) + "px")
                    .style("top", (d3.event.pageY - 28) + "px");
                break;
            case "btn4":
                graph.style("opacity", .9)
                    .html(getMName(d) + "<br> Lastenausgleich Sozialhilfe " + getM4(d))
                    .style("left", (d3.event.pageX) + "px")
                    .style("top", (d3.event.pageY - 28) + "px");
                break;
            case "btn5":
                graph.style("opacity", .9)
                    .html(getMName(d) + "<br> Lastenausgleich Fläche " + getM5(d))
                    .style("left", (d3.event.pageX) + "px")
                    .style("top", (d3.event.pageY - 28) + "px");
                break;
            case "btn6":
                graph.style("opacity", .9)
                    .html(getMName(d) + "<br> Lastenausgleich Besondere Belastungen " + getM6(d))
                    .style("left", (d3.event.pageX) + "px")
                    .style("top", (d3.event.pageY - 28) + "px");
                break;

            default:
                graph.style("opacity", .9)
                    .html(getMName(d))
                    .style("left", (d3.event.pageX) + "px")
                    .style("top", (d3.event.pageY - 28) + "px");
                break;
        }
    }

    function mouseout(d) {
        graph.style("opacity", 0)
            .html();
    }

    function getMName(d) {
        for (i = 0; i < muniArr.length; i++) {
            if (d.id === muniArr[i][0]) {
                return muniArr[i][1] || d.id;

            }
        }
    }

    function getMPopulation(d) {
        for (i = 0; i < muniArr.length; i++) {
            if (d.id === muniArr[i][0]) {
                return muniArr[i][2];
                break;
            }
        }
    }

    function getM2(d) {
        for (i = 0; i < muniArr.length; i++) {
            if (d.id === muniArr[i][0]) {
                return muniArr[i][3];
                break;
            }
        }
    }

    function getM3(d) {
        for (i = 0; i < muniArr.length; i++) {
            if (d.id === muniArr[i][0]) {
                return muniArr[i][4];
                break;
            }
        }
    }

    function getM4(d) {
        for (i = 0; i < muniArr.length; i++) {
            if (d.id === muniArr[i][0]) {
                return muniArr[i][5];
                break;
            }
        }
    }

    function getM5(d) {
        for (i = 0; i < muniArr.length; i++) {
            if (d.id === muniArr[i][0]) {
                return muniArr[i][6];
                break;
            }
        }
    }

    function getM6(d) {
        for (i = 0; i < muniArr.length; i++) {
            if (d.id === muniArr[i][0]) {
                return muniArr[i][7];
                break;
            }
        }
    }

    function colM() {
        //d3.select('#municipalities')

    }
}

