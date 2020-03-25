<?php
/**
 * User: Jeroen van der Vleuten
 * Date: 20-03-2020
 * Time: 11:51
 * File: opdracht5.2.php
 */
?>
    <table>
        <tr>
            <td>Voor en Achternaam:</td>
            <td><?php echo $_GET['name']; ?></td>
        </tr>
        <tr>
            <td>Studentnummer:</td>
            <td><?php echo $_GET['number']; ?></td>
        </tr>
        <tr>
            <td>Datum van uitschrijving:</td>
            <td><?php echo $_GET['date']; ?></td>
        </tr>
        <tr>
            <td>Reden van uitschrijven:</td>
            <td><?php echo $_GET['reason']; ?></td>
        </tr>
        <tr>
            <td>Leerjaar:</td>
            <td><?php echo $_GET['year']; ?></td>
        </tr>
        <tr>
            <td>aanmelden bij de succses klas:</td>
            <td><?php echo $_GET['register']; ?></td>
        </tr>
        <tr>
            <td>Verwijder mijn gegevens uit het systeem:</td>
            <td><?php echo $_GET['delete']; ?></td>
        </tr>
        <tr>
            <td>Reden van uitschrijving: </td>
            <td><?php echo $_GET['reason2']; ?></td>
        </tr>
    </table>


