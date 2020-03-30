<br>
<footer>
<?php
include("includes/variabelen.php");

date_default_timezone_set("Europe/Amsterdam");
$uur = date("H");

if ($uur >= 0 and $uur <= 5)
    {
echo"Goedennacht";
    }
elseif ($uur >= 5 and $uur <= 12)
{
    echo"Goedenochtend";
}
elseif ($uur >= 12 and $uur <= 17)
{
    echo"Goedenmiddag";
}
elseif ($uur >= 17 and $uur <= 24)
{
    echo"Goedenavond";
}

echo("<div class='footer'>");
echo("&copy; $year ");
echo("$name</div>");

?>
</footer>
<style>
    footer{
        background-color: gray;
        margin: 0px;
    }
    header{
        background-color: darkgrey;
        margin: 0px;
    }


</style>
</body>
</html>
