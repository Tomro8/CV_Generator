<?php

include 'connectDB.php';

$reponse = $bdd->query('SELECT * FROM userid');

while ($donnee = $reponse->fetch()) {
    echo "<br/>".$donnee['pseudo'];
}

