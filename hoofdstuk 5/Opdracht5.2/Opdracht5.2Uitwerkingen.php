<?php
/**
 * User: Jeroen van der Vleuten
 * Date: 20-03-2020
 * Time: 11:51
 * File: opdracht5.1.php
 */
include "../../includes/header.php";
?>
<br><br>
<h1>Uitschrijvingsfurmulier KW1C</h1>
<hr>
<div class="uitschrijven">
    <form action="Opdracht5.2.php" method="get">
        <label>Voor en Achternaam: </label>
        <input name="name" type="text"><br>

        <label>Studentnummer: </label>
        <input name="number" type="number"><br>

        <label>Datum van uitschrijving: </label>
        <input name="date" type="date"><br><br>

        <label>Reden van uitschrijven: </label>
        <select name="reason">
            <option value="Andere opleiding leuker">Andere opleiding leuker</option>
            <option value="Geen zin in school">Geen zin in school</option>
            <option value="Te cool voor school">Te cool voor school</option>
            <option value="Gepest worden door docenten">Gepest worden door docenten</option>
        </select><br><br>

        <label>Leerjaar:</label><br>
        <input name="year" type="radio" value="Leerjaar 1">Leerjaar 1<br>
        <input name="year" type="radio" value="Leerjaar 2">Leerjaar 2<br>
        <input name="year" type="radio" value="Leerjaar 3">Leerjaar 3<br>
        </fieldset><br><br>

        <input type="checkbox" name="register" value="Ja">Ik wil me aanmelden bij de succses klas.</input><br>
        <input type="checkbox" name="delete" value="Ja">Verwijder mijn gegevens uit het systeem.</input><br><br>

        <label>Geef hieronder de reden van je uitschrijving op: </label><br>
        <input name="reason2" type="text"><br><br>

        <input type="submit" name="Verzend" value="versturen">
    </form>
</div>
    <br><br>
<?php
include "../../includes/Footer.php";
?>