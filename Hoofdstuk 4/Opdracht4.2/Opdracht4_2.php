<?php
/**
 * User: Jeroen van der Vleuten
 * Date: 06-03-2020
 * Time: 11:51
 * File: opdracht4.2.php
 */
include "../../includes/header.php";
include "../../includes/Variabelen.php";


$courseName = "Nederlands";
$teacherName = "";

switch ($courseName)
{
    case    "PHP":
            $teacherName = "Meneer Saebu";
        break;

    case    "Nederlands":
            $teacherName = "Meneer van de Ende";
        break;

    case    "Engels":
            $teacherName = "Meneer Giessen";
        break;

    case    "SQL":
            $teacherName = "Meneer van de Wetering";
        break;

    case    "Javascript":
            $teacherName = "Meneer Evers";
        break;

    case    "ASP":
            $teacherName = "Meneer van Meer";
        break;

    case    "ComputerTekenen":
            $teacherName = "Meneer van de Berg";
        break;

    case    "Burgerschap":
            $teacherName = "Mevrouw de Ruiter";
        break;

    case    "DigitaleVaardigheden":
            $teacherName = "Mevrouw Pielage";
        break;

    case    "Modelleren":
            $teacherName = "Meneer van Bijnen";
        break;
}

echo ("Voor het vak " . $courseName . " heb je de docent: " . $teacherName . ".");

include "../../includes/Footer.php";
?>
<!--
Nederlands              Meneer van de Ende
Engels                  Meneer Giessen
Rekenen                 Meneer van de Wetering
Javascript              Meneer Evers
PHP                     Meneer Saebu
ASP                     Meneer van Meer
SQL                     Meneer van de Wetering
ComputerTekenen         Meneer van de Berg
Burgerschap             Mevrouw de Ruiter
DigitaleVaardigheden    Mevrouw Pielage
Modelleren              Meneer van Bijnen
-->


