<?php

echo "Let us compute your form\n";

//Uploaded and no Errors
if (isset($_FILES["image"]) AND !($_FILES["image"]["error"])) {

    //JPG, JPEG, GIF, PNG
    $infosfichier = pathinfo($_FILES['image']['name']);
    $extension_upload = $infosfichier['extension'];
    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

    if (in_array($extension_upload, $extensions_autorisees)) {

        // Store file
        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . basename($_FILES['image']['name']));
        echo "Upload was successful";
    }
}
