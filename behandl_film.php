<?php
include("opendb.php");

//echo "Der er hul igennem til behandl_film.php";

$titel = $_POST['titel'];
$instruktor = $_POST['instruktor'];
$spilletid = $_POST['spilletid'];
$aarstal = $_POST['aarstal'];
$beskrivelse = $_POST['beskrivelse'];
$genre = $_POST['genre'];
$sprog = $_POST['sprog'];
$imdbrank = $_POST['imdbrank'];
$budget = $_POST['budget'];
$indtjening = $_POST['indtjening'];

$errorsFound = [];
if (empty($titel)) {
    $errorsFound['titel'] = 'Angiv en titel på filmen';
}
if (empty($instruktor)) {
    $errorsFound['instruktor'] = 'Angiv filmens instruktør';
}
if (empty($spilletid)) {
    $errorsFound['spilletid'] = 'Angiv spilletid i minutter';
}
if (empty($aarstal)) {
    $errorsFound['aarstal'] = 'Angiv filmens udgivelsesår';
}
if (empty($beskrivelse)) {
    $errorsFound['beskrivelse'] = 'Angiv et resumé af filmen';
}
if (empty($sprog)) {
    $errorsFound['sprog'] = 'Angiv filmens sprog';
}
if (empty($imdbrank)) {
    $errorsFound['imdbrank'] = 'Angiv filmens IMDB rank';
}
if (empty($budget)) {
    $errorsFound['budget'] = 'Angiv filmens budget';
}
if (empty($indtjening)) {
    $errorsFound['indtjening'] = 'Angiv filmens indtjening';
}

$_SESSION['formErrors'] = $errorsFound;
$_SESSION['lastInput'] = $_POST;

if (!empty($errorsFound)) {
    header('Location: index.php');
}
else {

    $sql = "INSERT INTO filmdatabase (titel, instruktor, spilletid, aarstal, beskrivelse, genre, sprog, imdbrank, budget, indtjening) VALUES ('".$titel."', '".$instruktor."', '".$spilletid."', '".$aarstal."', '".$beskrivelse."', '".$genre."', '".$sprog."', '".$imdbrank."', '".$budget."', '".$indtjening."')"; 

    echo("SQL: " . $sql);

    if ($conn->query($sql) === TRUE) {
        //echo "Gemt i databasen<br>";
    } else {
        //echo "Fejl: " . $sql . "<br>" . $conn->error . "<br>";
        echo "Der er sket en fejl<br>";
    }

    $conn->close(); //databaseforbindelsen lukkes
    header('Location: index.php');
}
?>
