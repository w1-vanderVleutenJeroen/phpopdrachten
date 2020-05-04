<?php
$authUsers = Array(
    "Jeroen" => "Jeroen123",
    "Roy" => "Roy123",
    "Stan" => "Stan123",
    "Sophie" => "Sophie123",
    "Nicky" => "Nicky123",
    "Thijs" => "Thijs123"
);
?>

<?php
foreach($authUsers as $user => $password) {

    if ($_POST['username'] == $user && $_POST['password'] == $password) {
        session_start();
        $_SESSION['username'] = $_POST['username'];
        header('location: welkom.php');
    } else{
        $message = "Ongeldige username/wachtwoord, probeer het nog eens.";
    }
}
include "Opdracht_6.1.php";

?>