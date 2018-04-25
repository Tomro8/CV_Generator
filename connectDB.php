<?php
/**
 * Created by PhpStorm.
 * User: thoma
 * Date: 24/04/2018
 * Time: 22:18
 */

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=cv generator;charset=utf8', 'root', '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Error : ' . $e->getMessage());
}

echo "Connection à la base de donnée effectuée avec succès";