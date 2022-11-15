<?php

try {
    $bdd = new PDO($url, $login, $password);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
