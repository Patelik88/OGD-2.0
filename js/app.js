var muniArr = [
    //Bezirk Arbon, 11 Gemeinden
    [4436, "Romanshorn", -323100, -30, -323100, "N/A", "N/A", "N/A"],
    [4451, "Uttwil", 110282, 59, "N/A", "N/A", "N/A", "N/A"],
    [4426, "Kesswil", 3619, 4, "N/A", "N/A", "N/A", "N/A"],
    [4441, "Salmsach", -394164, -272, -382556, -11608, "N/A", "N/A"],
    [4411, "Egnach", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4401, "Arbon", -3522272, -247, -427680, -2594592, "N/A", -500000],
    [4421, "Horn", 253403, 97, "N/A", "N/A", "N/A", "N/A"],
    [4431, "Roggwil", 23753, 8, "N/A", "N/A", "N/A", "N/A"],
    [4461, "Amriswil", -2519688, -190, -2307000, -212688, "N/A", "N/A"],
    [4406, "Dozwil", -103089, -142, -103089, "N/A", "N/A", "N/A"],
    [4416, "Hefenhofen", -39776, -32, "N/A", -39776, "N/A", "N/A"],
    [4446, "Sommeri", -194785, -355, -160692, "N/A", -34093, "N/A"],

    //Bezirk Kreuzlingen, 13 Gemeinden
    [4656, "Güttingen", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4641, "Altnau", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4691, "Münsterlingen", 231702, 70, "N/A", "N/A", "N/A", "N/A"],
    [4643, "Bottighofen", 990064, 454, "N/A", "N/A", "N/A", "N/A"],
    [4671, "Kreuzlingen", -1672477, -78, "N/A", -1809108, "N/A", "N/A"],
    [4681, "Langrickenbach", -482950, -378, -284705, -51160, -147085, "N/A"],
    [4683, "Lengwil", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4666, "Kemmental", -315946, -129, "N/A", "N/A", -315946, "N/A"],
    [4696, "Tägerwilen", 187264, 42, "N/A", "N/A", "N/A", "N/A"],
    [4651, "Gottlieben", 84413, 261, "N/A", "N/A", "N/A", "N/A"],
    [4646, "Ermatingen", 421784, 128, "N/A", "N/A", "N/A", "N/A"],
    [4851, "Salenstein", 591712, 460, "N/A", "N/A", "N/A", "N/A"],
    [4846, "Raperswilen", -108463, -277, -9540, "N/A", -98923, "N/A"],
    [4701, "Wäldi", -96600, -92, "N/A", "N/A", -96600, "N/A"],

    //Bezirk Weinfelden, 17 Gemeinden
    [4486, "Hauptwilen-Gottshaus", -310842, -162, -310842, "N/A", "N/A", "N/A"],
    [4511, "Zihlschlacht-Sitterdorf", 557920, 246, "N/A", "N/A", "N/A", "N/A"],
    [4471, "Bischofszell", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4495, "Hohen-Tannen", -233546, -391, -109967, "N/A", -123579, "N/A"],
    [4476, "Erlen", -446683, -123, -446683, "N/A", "N/A", "N/A"],
    [4501, "Kradolf-Schönenberg", -384308, -109, -384308, "N/A", "N/A", "N/A"],
    [4506, "Sulgen", "N/A", 0, "N/A", "N/A", "N/A", "N/A"],
    [4911, "Bürglen", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4901, "Birwinken", -666896, -499, -482390, "N/A", -184506, "N/A"],
    [4891, "Berg", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4791, "Wuppenau", -211701, -187, -65771, "N/A", -145930, "N/A"],
    [4756, "Schönholzerswilen", -374068, -446, -200395, "N/A", -173673, "N/A"],
    [4921, "Bussnang", 17134, 8, "N/A", "N/A", "N/A", "N/A"],
    [4946, "Weinfelden", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4941, "Märstetten", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4711, "Affeltrangen", -255698, -102, -215490, -40208, "N/A", "N/A"],
    [4881, "Amlikon-Bissegg", -239384, -184, "N/A", "N/A", -239384, "N/A"],
    [4951, "Wigoltingen", -126887, -53, -16027, "N/A", -110860, "N/A"],

    //Bezirk Frauenfeld, 22 Gemeinden
    [4606, "Stettfurt", 79101, 66, "N/A", "N/A", "N/A", "N/A"],
    [4591, "Matzingen", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4611, "Thundorf", -164429, -113, "N/A", "N/A", -164429, "N/A"],
    [4566, "Frauenfeld", -297752, -12, "N/A", -801856, "N/A", "N/A"],
    [4571, "Gachnang", 33755, 8, "N/A", "N/A", "N/A", "N/A"],
    [4590, "Hüttlingen", -207074, -247, -137770, "N/A", -69304, "N/A"],
    [4561, "Felben-Wellhausen", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4831, "Müllheim", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4841, "Pfyn", -53044, -27, -8355, "N/A", -44689, "N/A"],
    [4621, "Warth-Weiningen", 374176, 299, "N/A", "N/A", "N/A", "N/A"],
    [4616, "Uessingen-Buch", -110392, -103, "N/A", "N/A", -111263, "N/A"],
    [4601, "Neunforn", 46523, 47, "N/A", "N/A", "N/A", "N/A"],
    [4816, "Homburg", -353510, -230, "N/A", "N/A", -353510, "N/A"],
    [4811, "Herdern", -211761, -207, "N/A", "N/A", -211761, "N/A"],
    [4821, "Hüttwilen", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4801, "Berlingen", 60767, 69, "N/A", "N/A", "N/A", "N/A"],
    [4864, "Steckborn", 0, "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4826, "Mammern", 50755, 78, "N/A", "N/A", "N/A", "N/A"],
    [4806, "Eschenz", -31666, -18, "N/A", "N/A", -31666, "N/A"],
    [4871, "Wagenhausen", -204269, -124, -158619, "N/A", -45650, "N/A"],
    [4545, "Diessenhofen", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4536, "Basadingen-Schlattingen", -121246, -67, -79593, "N/A", -41653, "N/A"],
    [4546, "Schlatt (TG)", -19967, -12, -19967, "N/A", "N/A", "N/A"],

    //Bezirk Münchwilen (TG), 12 Gemeinden
    [4726, "Fischingen", -493120, -184, "N/A", "N/A", -493120, "N/A"],
    [4751, "Rickenbach (TG)", -99648, -36, "N/A", -99648, "N/A", "N/A"],
    [4786, "Wilen (TG)", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4761, "Sirnach", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4724, "Eschlikon", 25544, 6, "N/A", "N/A", "N/A", "N/A"],
    [4721, "Bichelsee-Balterswil (Bi.)", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4746, "Münchwilen (TG)", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4781, "Wängi", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4551, "Aadorf", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"],
    [4723, "Braunau", -14650, -19, -14650, "N/A", "N/A", "N/A"],
    [4776, "Tobel-Tägerschen", -236789, -149, -236789, "N/A", "N/A", "N/A"],
    [4716, "Bettwiesen", -9376, -8, "N/A", -9376, "N/A", "N/A", "N/A"],
    [4741, "Lommis", "N/A", "N/A", "N/A", "N/A", "N/A", "N/A"]
];

var color = [
    [1, "#f9d9cc", "#cffae3"],
    [2, "#f6c7b2", "#b7f8d6"],
    [3, "#f3b499", "#9ff6c8"],
    [4, "#f1a27f", "#87f4bb"],
    [5, "#ee8f66", "#6ff2ad"],
    [6, "#eb7c4c", "#57f09f"],
    [7, "#e86a32", "#3fee92"],
    [8, "#e55719", "#27ec84"],
    [9, "#e34500", "#10ea77"],
    [10, "#cc3e00", "#0ed26b"],
    [11, "#b53700", "#0cbb5f"]
];

var btnP = null;

var max = 0;
for (i = 0; i < muniArr.length; i++) {
    if (max < muniArr[i][2]) {
        max = muniArr[i][2];
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
        case "btn6":
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
