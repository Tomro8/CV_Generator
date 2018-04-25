<?php

//Check for variable existance
if (!isset($_POST['pseudo']) || !isset($_POST['password'])) {
    echo "Input error";
    return;
}
//Check for variable initialization
if ($_POST['pseudo'] == null) {
    echo "You must indicate a pseudo";
}
if ($_POST['password'] == null) {
    echo "You must indicate a password";
}

include 'connectDB.php';

$response = $bdd->query('SELECT * FROM userid');

$donnees = $response->fetch();

