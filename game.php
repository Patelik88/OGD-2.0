<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>game</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel='stylesheet' href='stylesheets/style.css' />
    <link rel='stylesheet' href='stylesheets/main.css' />
    <link rel='stylesheet' href='stylesheets/game.css' />
</head>
<body>


<div class="container dark">
    <div class="toolbar">
        <div class="color-theme">
        </div>

        <div id="score" class="element">
            <svg width="80" height="50"></svg>
            <div class="caption">score</div>
        </div>

        <div id="timer" class="element">
            <svg width="80" height="50"></svg>
            <div class="caption">time</div>
        </div>

        <div id="destroyed" class="element">
            <svg width="80" height="50"></svg>
            <div class="caption">destroyed</div>
        </div>

        <div id="accuracy" class="element">
            <svg width="80" height="50"></svg>
            <div class="caption">accuracy</div>
        </div>

        <div class="healthbar">
            <svg width="400" height="50"></svg>
        </div>
    </div>

    <div class="modal">
        <button>Start</button>
        <p>
            Simple shooter game implemented using fabulous
            <a target="_blank" href="http://d3js.org/">d3.js</a> library.
        </p>

        <table>
            <tr>
                <td>
                    <span class="hotkey">mouse</span>
                </td>
                <td>
                    rotate
                </td>
            </tr>
            <tr>
                <td>
                    <span class="hotkey">LM click</span>
                </td>
                <td>
                    fire
                </td>
            </tr>
            <tr>
                <td>
                    <span class="hotkey">a</span>
                </td>
                <td>
                    left
                </td>
            </tr>
            <tr>
                <td>
                    <span class="hotkey">d</span>
                </td>
                <td>
                    right
                </td>
            </tr>
            <tr>
                <td>
                    <span class="hotkey">w</span>
                </td>
                <td>
                    up
                </td>
            </tr>
            <tr>
                <td>
                    <span class="hotkey">s</span>
                </td>
                <td>
                    down
                </td>
            </tr>

        </table>

        <div class="footer">
            by <a target="_blank" href="https://www.linkedin.com/pub/nikolay-smirnov/22/ba7/5a1">Nikolay Smirnov</a>
        </div>
    </div>

</div>


</body>
<script type="text/javascript" src="javascripts/g_analytics.js"></script>
<script type="text/javascript" src="javascripts/d3.js"></script>
<script type="text/javascript" src="javascripts/constants.js"></script>
<script type="text/javascript" src="javascripts/cannon.js"></script>
<script type="text/javascript" src="javascripts/enemy.js"></script>
<script type="text/javascript" src="javascripts/game.js"></script>
<script type="text/javascript" >
var game = new Shooter();
</script>

</html>