<?php
/**
 * User: Jeroen van der Vleuten
 * Date: 21-02-2020
 * Time: 11:51
 * File: opdracht3.1.php
 */
?>
<meta name="description" content="Jeroen van der Vleuten, Jeroen, Portfolio">
<meta name="keywords" content="Jeroen van der Vleuten, Jeroen, Portfolio">
<meta charset="utf-8">
<link href="opdracht_2-1.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<header>
    <h3><a href="../../index.php">Terug</a></h3>
    <h1>IO1D4</h1>
</header>
<?php
$evenement = "Elfstedentocht";
$fries = "Alvestedêtocht";
$kilometer = "200";
$lang = "schaatstocht";
$ijs = "natuurijs";
$vereniging = "Koninklijke Vereniging De Friesche Elf Steden";
$stad = "Leeuwarden";
$provincie = "Friesland";
$tocht = "Elfstedentocht";
$hoevaak = "15";
$jaar = "1909";
$keer = "1";
$verhaal = "De " . $tocht . " (Fries: " . $fries . " is een " . $kilometer .
    " lange " . $lang . " over " . $ijs . " die wordt georganiseerd door de "
    . $vereniging . ". " . $stad . ", de hoofdstad van " . $provincie . ", is 
start en aankomstplaats. De " . $tocht . " is inmiddels " . $hoevaak . " 
verreden en werd voor het eerst in " . $jaar . " gereden en wordt maximaal "
    . $keer . " per winter gehouden"
?>
<header>

</header>
<aside>
    <p>
        <?php echo $verhaal; ?>
    </p>
</aside>
<main>

</main>