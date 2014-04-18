<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', 'cedricweb');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
