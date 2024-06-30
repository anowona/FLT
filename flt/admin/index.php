<?php
session_start();
include("../../config/config.inc.php");
include("../inc.php");

function dividement($un, $deux)
{
    if (($un == 0) or ($deux == 0)) {
        $trois = 0;
    } else {
        $trois = $un / $deux;
    }
    return $trois;
}

if (isset($_POST["insert"])) {

    $codeUSSD = $_POST["codeUSSD"];
    $codeForfait = $_POST["codeForfait"];
    $voix = $_POST["voix"];
    $sms = $_POST["sms"];
    $données = $_POST["données"];
    $prix = $_POST["prix"];
    $validité = $_POST["validité"];
    $disponibilité = $_POST["disponibilité"];

    $rapport_donnéesPrix = dividement($données, $prix);
    $rapport_prixDonnées = dividement($prix, $données);
    $rapport_validitéPrix = dividement($validité, $prix);
    $rapport_prixValidité = dividement($prix, $validité);
    $rapport_validitéDonnées = dividement($validité, $données);
    $rapport_donnéesValidité = dividement($données, $validité);
    $rapport_prixSms = dividement($prix, $sms);
    $rapport_smsPrix = dividement($sms, $prix);
    $rapport_prixVoix = dividement($prix, $voix);
    $rapport_voixPrix = dividement($voix, $prix);
    $rapport_validitéSms = dividement($validité, $sms);
    $rapport_smsValidité = dividement($sms, $validité);
    $rapport_validitéVoix = dividement($validité, $voix);
    $rapport_voixValidité = dividement($voix, $validité);
    $rapport_donnéesSms = dividement($données, $sms);
    $rapport_smsDonnées = dividement($sms, $données);
    $rapport_donnéesVoix = dividement($données, $voix);
    $rapport_voixDonnées = dividement($voix, $données);
    $rapport_smsVoix = dividement($sms, $voix);
    $rapport_voixSms = dividement($voix, $sms);


    $inserta = $bdd->prepare("INSERT INTO togocel (codeUSSD, codeForfait, voix__f_, sms__sms_, données__mo_, prix__fcfa_, validité__j_, disponibilité, rapport_donnéesPrix, rapport_prixDonnées, rapport_validitéPrix, rapport_prixValidité, rapport_validitéDonnées, rapport_donnéesValidité, rapport_prixSms, rapport_smsPrix, rapport_prixVoix, rapport_voixPrix, rapport_validitéSms, rapport_smsValidité, rapport_validitéVoix, rapport_voixValidité, rapport_donnéesSms, rapport_smsDonnées, rapport_donnéesVoix, rapport_voixDonnées, rapport_smsVoix, rapport_voixSms) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $inserta->execute(array($codeUSSD, $codeForfait, $voix, $sms, $données, $prix, $validité, $disponibilité, $rapport_donnéesPrix, $rapport_prixDonnées, $rapport_validitéPrix, $rapport_prixValidité, $rapport_validitéDonnées, $rapport_donnéesValidité, $rapport_prixSms, $rapport_smsPrix, $rapport_prixVoix, $rapport_voixPrix, $rapport_validitéSms, $rapport_smsValidité, $rapport_validitéVoix, $rapport_voixValidité, $rapport_donnéesSms, $rapport_smsDonnées, $rapport_donnéesVoix, $rapport_voixDonnées, $rapport_smsVoix, $rapport_voixSms));
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////:

if (isset($_GET["idForfait"])) {
    $idForfait = $_GET["idForfait"];


    if (isset($_POST["update"])) {

        $codeUSSD = $_POST["codeUSSD"];
        $updateu = $bdd->prepare("UPDATE `togocel` SET `codeUSSD` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($codeUSSD, $idForfait));

        $codeForfait = $_POST["codeForfait"];
        $updateu = $bdd->prepare("UPDATE `togocel` SET `codeForfait` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($codeForfait, $idForfait));

        $voix = $_POST["voix"];
        $updateu = $bdd->prepare("UPDATE `togocel` SET `voix__f_` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($voix, $idForfait));

        $sms = $_POST["sms"];
        $updateu = $bdd->prepare("UPDATE `togocel` SET `sms__sms_` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($sms, $idForfait));

        $données = $_POST["données"];
        $updateu = $bdd->prepare("UPDATE `togocel` SET `données__mo_` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($données, $idForfait));

        $prix = $_POST["prix"];
        $updateu = $bdd->prepare("UPDATE `togocel` SET `prix__fcfa_` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($prix, $idForfait));

        $validité = $_POST["validité"];
        $updateu = $bdd->prepare("UPDATE `togocel` SET `validité__j_` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($validité, $idForfait));

        $disponibilité = $_POST["disponibilité"];
        $updateu = $bdd->prepare("UPDATE `togocel` SET `disponibilité` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($disponibilité, $idForfait));

        /////////////////////

        $rapport_donnéesPrix = dividement($données, $prix);
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_donnéesPrix` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($rapport_donnéesPrix, $idForfait));

        $rapport_prixDonnées = dividement($prix, $données);
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_prixDonnées` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($rapport_prixDonnées, $idForfait));

        $rapport_validitéPrix = dividement($validité, $prix);
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_validitéPrix` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($rapport_validitéPrix, $idForfait));

        $rapport_prixValidité = dividement($prix, $validité);
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_prixValidité` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($rapport_prixValidité, $idForfait));

        $rapport_validitéDonnées = dividement($validité, $données);
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_validitéDonnées` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($rapport_validitéDonnées, $idForfait));

        $rapport_donnéesValidité = dividement($données, $validité);
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_donnéesValidité` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($rapport_donnéesValidité, $idForfait));

        $rapport_prixSms = dividement($prix, $sms);
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_prixSms` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($rapport_prixSms, $idForfait));

        $rapport_smsPrix = dividement($sms, $prix);
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_smsPrix` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($rapport_smsPrix, $idForfait));

        $rapport_prixVoix = dividement($prix, $voix);
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_prixVoix` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($rapport_prixVoix, $idForfait));

        $rapport_voixPrix = dividement($voix, $prix);
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_voixPrix` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($rapport_voixPrix, $idForfait));

        $rapport_validitéSms = dividement($validité, $sms);
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_validitéSms` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($rapport_validitéSms, $idForfait));

        $rapport_smsValidité = dividement($sms, $validité);
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_smsValidité` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($rapport_smsValidité, $idForfait));

        $rapport_validitéVoix = dividement($validité, $voix);
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_validitéVoix` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($rapport_validitéVoix, $idForfait));

        $rapport_voixValidité = dividement($voix, $validité);
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_voixValidité` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($rapport_voixValidité, $idForfait));

        $rapport_donnéesSms = dividement($données, $sms);
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_donnéesSms` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($rapport_donnéesSms, $idForfait));

        $rapport_smsDonnées = dividement($sms, $données);
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_smsDonnées` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($rapport_smsDonnées, $idForfait));

        $rapport_donnéesVoix = dividement($données, $voix);
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_donnéesVoix` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($rapport_donnéesVoix, $idForfait));

        $rapport_voixDonnées = dividement($voix, $données);
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_voixDonnées` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($rapport_voixDonnées, $idForfait));

        $rapport_smsVoix = dividement($sms, $voix);
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_smsVoix` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($rapport_smsVoix, $idForfait));

        $rapport_voixSms = dividement($voix, $sms);
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_voixSms` = ? WHERE `togocel`.`idForfait` = ?");
        $updateu->execute(array($rapport_voixSms, $idForfait));

        $message = "Update executed succefusslly";
    }

    $selectu = $bdd->prepare("SELECT * FROM togocel WHERE idForfait='$idForfait'");
    $selectu->execute();
    $fetchu = $selectu->fetch();

    $codeUSSD = $fetchu["codeUSSD"];
    $codeForfait = $fetchu["codeForfait"];

    $voix = $fetchu["voix__f_"];
    $sms = $fetchu["sms__sms_"];
    $données = $fetchu["données__mo_"];
    $prix = $fetchu["prix__fcfa_"];
    $validité = $fetchu["validité__j_"];

    $disponibilité = $fetchu["disponibilité"];
}

$title = "adminFlT";
$metaKeywords = "";
$metaDescription = "";

//////////////////////////////// HEAD ////////////////////////////////////////////////////////////////
include("../head.php");
//////////////////////////////// /HEAD ////////////////////////////////////////////////////////////////
$backward = "set";

include("./flt_admin.php");


//////////////////////////////// FOOTER ////////////////////////////////////////////////////////////////
include("../footer.php");
//////////////////////////////// /FOOTER ////////////////////////////////////////////////////////////////
