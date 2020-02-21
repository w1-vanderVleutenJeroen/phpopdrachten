<?php
/**
 * User: Jeroen van der Vleuten
 * Date: 21-02-2020
 * Time: 11:51
 * File: opdracht3.1.php
 */
?>
<!DOCTYPE html>
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
    $trafficLightColor = "Green";
    $ambulanceComing = false;

    if ($trafficLightColor == "Red")
    {
        $driveOn = false;
    }
    elseif($trafficLightColor == "Orange")
    {
        $driveOn = false;
    }
    elseif($ambulanceComing == true)
    {
        $driveOn = false;
    }
    else
    {
        $driveOn = true;
    }

    if ($driveOn == false)
    {
        echo "<p id='stop'>U mag niet door rijden</p>";
    }

    else
    {
        echo "<p id='door'>U kunt door rijden</p>";
    }

    ?>
    <br><br><br><br>
    <?php
    $countryName = "Zweden";
    $currentAge = 19;


    echo("<p>Je woont in ". $countryName . " en je bent " . $currentAge . " jaar oud.</p>");



    if($countryName == "België" and $currentAge >= 16 && $currentAge <= 18)
    {
        echo("<p>Je mag hier zwakke alcohol drinken.</p>");
    }
    else if($countryName == "België" and $currentAge >= 18)
    {
        echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
    }
    else if($countryName == "België" and $currentAge < 16)
    {
        echo("<p>hier mag je geen alcohol drinken.</p>");
    }



    if($countryName == "Bulgarije" and $currentAge >= 18)
    {
        echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
    }
    else if($countryName == "Cyprus" and $currentAge < 17)
    {
        echo("<p>Hier mag je geen alcohol drinken.</p>");
    }



    if($countryName == "Cyprus" and $currentAge >= 17)
    {
        echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
    }
    else if($countryName == "Cyprus" and $currentAge < 17)
    {
        echo("<p>Hier mag je geen alcohol drinken.</p>");
    }



    if($countryName == "Nederland" and $currentAge >= 18)
    {
        echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
    }
    else if($countryName == "Nederland" and $currentAge < 18)
    {
        echo("<p>Hier mag je geen alcohol drinken.</p>");
    }



    if($countryName == "Zweden" and $currentAge >= 18 && $currentAge <= 19)
    {
        echo("<p>Je mag hier zwakke alcohol drinken.</p>");
    }
    else if($countryName == "Zweden" and $currentAge >= 20)
    {
        echo("<p>Hier mag je sterke en zwakke alcohol drinken.</p>");
    }
    else if($countryName == "Zweden" and $currentAge < 18)
    {
        echo("<p>Hier mag je geen alcohol drinken.</p>");
    }

    ?>
</body>
