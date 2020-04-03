<?php
/**
 * User: Jeroen van der Vleuten
 * Date: 03-04-2020
 * Time: 11:25
 * File: Opdracht_5.3.php
 */
?>


<?php
include "../../Includes/header.php"
?>
<form action="form_data5.3.php" method="post">


    <label>Corona enquete:</label><br>
    <hr>
    <label>Wat is je naam:</label><input name="name" type="text"><br>
    <label>Wat is je leeftijd:</label><input name="age" type="number"><br>
    <label>Gemeente:</label>
    <select name="township">
        <option value="Den Bosch">Den Bosch</option>
        <option value="Tilburg">Best</option>
        <option value="Someren">Boxtel</option>
        <option value="Hilvarenbeek">Eindhoven</option>
    </select><br>
    <label>Aantal inwoners gemeente:</label><input name="citizens" type="number"><br>
    <label>Zijn er kennisen besmet?</label>
    <input name="infected1" type="radio" value="Ja">Ja</input>
    <input name="infected1" type="radio" value="Nee">Nee</input><br>
    <label>Aantal mensen besmet in je gemeente?</label><input name="infected2" type="number"><br>
    <input type="submit" name="verzenden" value="verzenden"><br>

    <label>* Zie aantallen per gemeente per 100.000 bewoners <a href="https://www.rivm.nl/coronavirus-kaart-van-nederland-per-gemeente">site RIVM</a></label>

</form>

<?php
include "../../Includes/Footer.php"
?>

