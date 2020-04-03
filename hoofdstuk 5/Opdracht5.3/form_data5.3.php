<?php
/**
 * User: Jeroen van der Vleuten
 * Date: 03-04-2020
 * Time: 11:25
 * File: form_data5.3.php
 */
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Form_data5.3</title>
</head>
<body>
<?php
include "Functions.php"
?>
    <table>
        <tr>
            <td>Vraag</td>
            <th>Antwoord</th>
        </tr>
        <tr>
            <td>Naam</td>
            <td><?php echo $_POST["name"]; ?></td>
        </tr>
        <tr>
            <td>Leeftijd</td>
            <td><?php echo $_POST["age"]; ?></td>
        </tr>
        <tr>
            <td>Gemeente</td>
            <td><?php echo $_POST["township"]; ?></td>
        </tr>
        <tr>
            <td>Inwoners</td>
            <td><?php echo $_POST["citizens"]; ?></td>
        </tr>
        <tr>
            <td>Aantal besmet</td>
            <td><?php echo $_POST["infected2"]; ?></td>
        </tr>
        <tr>
            <td>Kennissen besmet</td>
            <td><?php echo $_POST["infected1"]; ?></td>
        </tr>
        <tr>
            <td>De kans is n realiteit groter omdat je via je eigen netwerk besmet kan raken.</td>
        </tr>
        <tr>
            <td>Kans per ontmoeting op besmetting</td>
            <td><?php echo $_POST[echoKans()];?></td>
        </tr>
        <tr>
            <td>Kans is 1 op</td>
            <td><?php echo $_POST[getKans1Op()];?></td>
        </tr>
        <tr>
            <td>
                <?php echo $_POST[vergelijkOorzaken ()]; ?>
            </td>
        </tr>
    </table>

    <?php
    include "../../Includes/Footer.php"
    ?>
