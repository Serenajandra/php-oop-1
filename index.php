<?php

require_once __DIR__ . "/Models/Movie.php";

$LaMummia = new Movie("The Mummy", 1999);
$LaMummia->genere = "Azione avventura fanstasy";
$LaMummia->attoriProtagonisti = "Brendan Fraser, Rachel Weisz, John Hannah";
$LaMummia->poster = "";
$LaMummia->regista = "Stephen Sommers";
$LaMummia->produttore =  "Sean Daniel, James Jacks";
$LaMummia->trama = "In uno scavo archeologico nell'antica città di Hamunaptra, un americano nella legione straniera francese sveglia accidentalmente una mummia che comincia a creare scompiglio mentre cerca la reincarnazione del suo amore perduto.";
$LaMummia->MovieAge($releaseDate);
var_dump($LaMummia);

$Troll = new Movie("Troll", 2022);
$Troll->genere = "Azione avventura fanstasy";
$Troll->attoriProtagonisti = "Ine Marie Wilmann, Kim S. Falck-Jorgensen, Mads Sjogard Pettersen";
$Troll->poster = "";
$Troll->regista = "Roar Uthag";
$Troll->produttore = "Espen Horn,
Kristian Strand Sinkerud";
$Troll->trama = "Quando un'esplosione nelle montagne norvegesi risveglia un antico troll, i funzionari pubblici assoldano una coraggiosa paleontologa per scongiurare la catastrofe.";
$Troll->MovieAge($releaseDate);

var_dump($Troll);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <Main>
        <h2>
            <? echo $LaMummia->titoloOriginale; ?>
        </h2>
        <ul>
            <li>Genere:
                <?php echo $LaMummia->genere; ?>
            </li>
            <li>Attori:
                <?php echo $LaMummia->attoriProtagonisti; ?></li>
            <li> Regista:
                <?php echo $LaMummia->regista; ?></li>
            <li> Produttori:
                <?php echo $LaMummia->produttore; ?></li>
            <li> Trama:
                <?php echo $LaMummia->trama; ?>
            </li>
        </ul>
    </Main>
</body>

</html>