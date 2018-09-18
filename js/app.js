var muniArr = [
    //Bezirk Arbon, 11 Gemeinden
    [4436, "Romanshorn", 10927],
    [4451, "Uttwil", 1852],
    [4426, "Kesswil", 999],
    [4441, "Salmsach", 1411],
    [4411, "Egnach", 1692],
    [4401, "Arbon", 14430],
    [4421, "Horn", 2737],
    [4431, "Roggwil", 3056],
    [4461, "Amriswil", 13382],
    [4406, "Dozwil", 704],
    [4416, "Hefenhofen", 1187],
    [4446, "Sommeri", 565],

    //Bezirk Kreuzlingen, 13 Gemeinden
    [4656, "Güttingen", 1604],
    [4641, "Altnau", 2206],
    [4691, "Münsterlingen", 3444],
    [4643, "Bottighofen", 2164],
    [4671, "Kreuzlingen", 21795],
    [4681, "Langrickenbach", 1307],
    [4683, "Lengwil", 1709],
    [4666, "Kemmental", 2482],
    [4696, "Tägerwilen", 4602],
    [4651, "Gottlieben", 348],
    [4646, "Ermatingen", 3371],
    [4851, "Salenstein", 1271],
    [4846, "Raperswilen", 394],
    [4701, "Wäldi", 1049],

    //Bezirk Weinfelden, 17 Gemeinden
    [4486, "Hauptwilen-Gottshaus", 1938],
    [4511, "Zihlschlacht-Sitterdorf", 2357],
    [4471, "Bischofszell", 5974],
    [4495, "Hohen-Tannen", 602],
    [4476, "Erlen", 3664],
    [4501, "Kradolf-Schönenberg", 3559],
    [4506, "Sulgen", 3744],
    [4911, "Bürglen", 3775],
    [4901, "Birwinken", 1350],
    [4891, "Berg", 3321],
    [4791, "Wuppenau", 1127],
    [4756, "Schönholzerswilen", 848],
    [4921, "Bussnang", 2313],
    [4946, "Weinfelden", 11338],
    [4941, "Märstetten", 2808],
    [4711, "Affeltrangen", 2558],
    [4881, "Amlikon-Bissegg",1328],
    [4951, "Wigoltingen", 2429],

    //Bezirk Frauenfeld, 22 Gemeinden
    [4606, "Stettfurt", 1213],
    [4591, "Matzingen", 2840],
    [4611, "Thundorf", 1451],
    [4566, "Frauenfeld", 25297],
    [4571, "Gachnang", 4269],
    [4590, "Hüttlingen", 834],
    [4561, "Felben-Wellhausen", 2790],
    [4831, "Müllheim", 2964],
    [4841, "Pfyn", 1992],
    [4621, "Warth-Weiningen", 1311],
    [4616, "Uessingen-Buch", 1092],
    [4601, "Neunforn", 1004],
    [4816, "Homburg", 1531],
    [4811, "Herdern", 1028],
    [4821, "Hüttwilen", 1709],
    [4801, "Berlingen", 907],
    [4864, "Steckborn", 3765],
    [4826, "Mammern", 648],
    [4806, "Eschenz", 1754],
    [4871, "Wagenhausen", 1647],
    [4545, "Diessenhofen", 3889],
    [4536, "Basadingen-Schlattingen", 1807],
    [4546, "Schlatt (TG)", 1669],

    //Bezirk Münchwilen (TG), 12 Gemeinden
    [4726, "Fischingen", 2690],
    [4751, "Rickenbach (TG)", 2771],
    [4786, "Wilen (TG)", 2496],
    [4761, "Sirnach", 7703],
    [4724, "Eschlikon", 4300],
    [4721, "Bichelsee-Balterswil (Bi.)", 2835],
    [4746, "Münchwilen (TG)", 5538],
    [4781, "Wängi", 4648],
    [4551, "Aadorf", 8843],
    [4723, "Braunau", 770],
    [4776, "Tobel-Tägerschen", 1592],
    [4716, "Bettwiesen", 1239],
    [4741, "Lommis", 1223]
];
var sechArr = [
    //Bezirk Arbon, 11 Gemeinden
    [4436, "Romanshorn", 10770],
    [4451, "Uttwil", 1885],
    [4426, "Kesswil", 992],
    [4441, "Salmsach", 1451],
    [4411, "Egnach", 4861],
    [4401, "Arbon", 14256],
    [4421, "Horn", 2600],
    [4431, "Roggwil", 3050],
    [4461, "Amriswil", 13293],
    [4406, "Dozwil", 727],
    [4416, "Hefenhofen", 1243],
    [4446, "Sommeri", 549],

    //Bezirk Kreuzlingen, 13 Gemeinden
    [4656, "Güttingen", 1560],
    [4641, "Altnau", 2161],
    [4691, "Münsterlingen", 3328],
    [4643, "Bottighofen", 2180],
    [4671, "Kreuzlingen", 21537],
    [4681, "Langrickenbach", 1279],
    [4683, "Lengwil", 1682],
    [4666, "Kemmental", 2453],
    [4696, "Tägerwilen", 4510],
    [4651, "Gottlieben", 323],
    [4646, "Ermatingen", 3302],
    [4851, "Salenstein", 1285],
    [4846, "Raperswilen", 391],
    [4701, "Wäldi", 1050],

    //Bezirk Weinfelden, 17 Gemeinden
    [4486, "Hauptwilen-Gottshaus", 1917],
    [4511, "Zihlschlacht-Sitterdorf", 2267],
    [4471, "Bischofszell", 5923],
    [4495, "Hohen-Tannen", 597],
    [4476, "Erlen", 3636],
    [4501, "Kradolf-Schönenberg", 3529],
    [4506, "Sulgen", 3703],
    [4911, "Bürglen", 3741],
    [4901, "Birwinken", 1337],
    [4891, "Berg", 3301],
    [4791, "Wuppenau", 1133],
    [4756, "Schönholzerswilen", 839],
    [4921, "Bussnang", 2261],
    [4946, "Weinfelden", 11241],
    [4941, "Märstetten", 2784],
    [4711, "Affeltrangen", 2513],
    [4881, "Amlikon-Bissegg", 1301],
    [4951, "Wigoltingen", 2410],

    //Bezirk Frauenfeld, 22 Gemeinden
    [4606, "Stettfurt", 1201],
    [4591, "Matzingen", 2675],
    [4611, "Thundorf", 1459],
    [4566, "Frauenfeld", 25058],
    [4571, "Gachnang", 4211],
    [4590, "Hüttlingen", 837],
    [4561, "Felben-Wellhausen", 2743],
    [4831, "Müllheim", 2930],
    [4841, "Pfyn", 1943],
    [4621, "Warth-Weiningen", 1252],
    [4616, "Uessingen-Buch", 1075],
    [4601, "Neunforn", 986],
    [4816, "Homburg", 1537],
    [4811, "Herdern", 1023],
    [4821, "Hüttwilen", 1701],
    [4801, "Berlingen", 887],
    [4864, "Steckborn", 3740],
    [4826, "Mammern", 650],
    [4806, "Eschenz", 1721],
    [4871, "Wagenhausen", 1654],
    [4545, "Diessenhofen", 3745],
    [4536, "Basadingen-Schlattingen", 1811],
    [4546, "Schlatt (TG)", 1657],

    //Bezirk Münchwilen (TG), 12 Gemeinden
    [4726, "Fischingen", 2680],
    [4751, "Rickenbach (TG)", 2768],
    [4786, "Wilen (TG)", 2482],
    [4761, "Sirnach", 7697],
    [4724, "Eschlikon", 4296],
    [4721, "Bichelsee-Balterswil (Bi.)", 2820],
    [4746, "Münchwilen (TG)", 5353],
    [4781, "Wängi", 4614],
    [4551, "Aadorf", 8838],
    [4723, "Braunau", 765],
    [4776, "Tobel-Tägerschen", 1594],
    [4716, "Bettwiesen", 1172],
    [4741, "Lommis", 1215]
];
var fuenfArr = [
    //Bezirk Arbon, 11 Gemeinden
    [4436, "Romanshorn", 10708],
    [4451, "Uttwil", 1830],
    [4426, "Kesswil", 997],
    [4441, "Salmsach", 1402],
    [4411, "Egnach", 4562],
    [4401, "Arbon", 14184],
    [4421, "Horn", 2592],
    [4431, "Roggwil", 2947],
    [4461, "Amriswil", 13047],
    [4406, "Dozwil", 681],
    [4416, "Hefenhofen", 1230],
    [4446, "Sommeri", 520],

    //Bezirk Kreuzlingen, 13 Gemeinden
    [4656, "Güttingen", 1574],
    [4641, "Altnau", 2148],
    [4691, "Münsterlingen", 3187],
    [4643, "Bottighofen", 2166],
    [4671, "Kreuzlingen", 21499],
    [4681, "Langrickenbach", 1274],
    [4683, "Lengwil", 1653],
    [4666, "Kemmental", 2385],
    [4696, "Tägerwilen", 4377],
    [4651, "Gottlieben", 320],
    [4646, "Ermatingen", 3199],
    [4851, "Salenstein", 1281],
    [4846, "Raperswilen", 396],
    [4701, "Wäldi", 1037],

    //Bezirk Weinfelden, 17 Gemeinden
    [4486, "Hauptwilen-Gottshaus", 1910],
    [4511, "Zihlschlacht-Sitterdorf", 2247],
    [4471, "Bischofszell", 5861],
    [4495, "Hohen-Tannen", 612],
    [4476, "Erlen", 3608],
    [4501, "Kradolf-Schönenberg", 3551],
    [4506, "Sulgen", 3676],
    [4911, "Bürglen", 3679],
    [4901, "Birwinken", 1354],
    [4891, "Berg", 3299],
    [4791, "Wuppenau", 1120],
    [4756, "Schönholzerswilen", 804],
    [4921, "Bussnang", 2262],
    [4946, "Weinfelden", 11147],
    [4941, "Märstetten", 2744],
    [4711, "Affeltrangen", 2481],
    [4881, "Amlikon-Bissegg", 1320],
    [4951, "Wigoltingen", 2369],

    //Bezirk Frauenfeld, 22 Gemeinden
    [4606, "Stettfurt", 1165],
    [4591, "Matzingen", 2618],
    [4611, "Thundorf", 1427],
    [4566, "Frauenfeld", 24733],
    [4571, "Gachnang", 3978],
    [4590, "Hüttlingen", 829],
    [4561, "Felben-Wellhausen", 2686],
    [4831, "Müllheim", 2879],
    [4841, "Pfyn", 1932],
    [4621, "Warth-Weiningen", 1238],
    [4616, "Uessingen-Buch", 1086],
    [4601, "Neunforn", 957],
    [4816, "Homburg", 1510],
    [4811, "Herdern", 1011],
    [4821, "Hüttwilen", 1665],
    [4801, "Berlingen", 863],
    [4864, "Steckborn", 3716],
    [4826, "Mammern", 625],
    [4806, "Eschenz", 1719],
    [4871, "Wagenhausen", 1672],
    [4545, "Diessenhofen", 3646],
    [4536, "Basadingen-Schlattingen", 1807],
    [4546, "Schlatt (TG)", 1647],

    //Bezirk Münchwilen (TG), 12 Gemeinden
    [4726, "Fischingen", 2638],
    [4751, "Rickenbach (TG)", 2766],
    [4786, "Wilen (TG)", 2456],
    [4761, "Sirnach", 7642],
    [4724, "Eschlikon", 4267],
    [4721, "Bichelsee-Balterswil (Bi.)", 2790],
    [4746, "Münchwilen (TG)", 5252],
    [4781, "Wängi", 4576],
    [4551, "Aadorf", 8793],
    [4723, "Braunau", 753],
    [4776, "Tobel-Tägerschen", 1551],
    [4716, "Bettwiesen", 1153],
    [4741, "Lommis", 1225]
];

var color = [
    [1, "#cffae3", "#f9d9cc" ],
    [2, "#b7f8d6", "#f6c7b2"],
    [3, "#9ff6c8", "#f3b499"],
    [4, "#87f4bb", "#f1a27f"],
    [5,  "#6ff2ad", "#ee8f66"],
    [6, "#57f09f", "#eb7c4c"],
    [7, "#3fee92", "#e86a32"],
    [8,  "#27ec84", "#e55719"],
    [9, "#10ea77", "#e34500"],
    [10, "#0ed26b", "#cc3e00" ],
    [11, "#0cbb5f", "#b53700",]
];

var btnP = null;

var max = 0;
for (i = 0; i < muniArr.length; i++) {
    if (max < muniArr[i][2]) {
        max = muniArr[i][2];
    }
}


var dax = 0;
for (i = 0; i < fuenfArr.length; i++) {
    if (dax < fuenfArr[i][2]) {
        dax = fuenfArr[i][2];
    }
}

var lax = 0;
for (i = 0; i < sechArr.length; i++) {
    if (lax < sechArr[i][2]) {
        lax = sechArr[i][2];
    }
}

init();




$("button").click(function () {
    switch (this.id) {
        case "btn1":
            $('#graph').empty();
            btnP = this.id;
            init();
            break;
        case "btn2":
            $('#graph').empty();
            btnP = this.id;
            init();
            break;
        case "btn3":
            $('#graph').empty();
            btnP = this.id;
            init();
            break;
        case "btn4":
            $('#graph').empty();
            btnP = this.id;
            init();
            break;
        case "btn5":
            $('#graph').empty();
            btnP = this.id;
            init();
            break;
        default:
            $('#graph').empty();
            btnP = null;
            init();
            break;
    }
});








