<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="expires" content="-1">
    <title>The Gothic Roulette</title>
    <meta name="description" content="Exercice with Factoria 5">
    <meta name="author" content="Ninja coders">
    <meta name="copyright" content="Ninja coders">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="./jquery-3.4.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
</head>

<body>
    <header>


        <p><a href="">
                The Wheel of Doom
            </a></p>
        <div>
            <button class="button2" onclick="reseleccionar()">NEXT DOOMED</button>
            <button class="button" onclick="reload()">RESET GAME</button>
        </div>

    </header>

    <div class="escenario">

        <img class="bg_scenario" src="img/mazmorra_sin_texto.jpg" alt="Imagen mazmorra">
        <div id="marco">
            <img src="img/marco.png" alt="Imagen de un marco estilo mazmorra">
        </div>
        <div id="rejilla">
            <div class="overhidden">
                <img src="img/rejas.png" alt="Imagen de unas rejas estilo mazmorra">
            </div>
        </div>
        <div id="muertos">
            <h2>You are out:</h2>
            <ul id="nombresLista">

            </ul>
        </div>


    </div>



    <footer>
        <h3>
            NinjaCoders2019
        </h3>
    </footer>
    <a href='functions/Personas.php?caracol=1'>test</a>
    <div id="colocar"></div>
    <script src="javascript.js"></script>



</body>

</html>