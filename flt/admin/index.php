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

    $inserta = $bdd->prepare("insert into togocel (codeUSSD, codeForfait, voix__f_, sms__sms_, données__mo_, prix__fcfa_, validité__j_, disponibilité, rapport_donnéesPrix, rapport_prixDonnées, rapport_validitéPrix, rapport_prixValidité, rapport_validitéDonnées, rapport_donnéesValidité, rapport_prixSms, rapport_smsPrix, rapport_prixVoix, rapport_voixPrix, rapport_validitéSms, rapport_smsValidité, rapport_validitéVoix, rapport_voixValidité, rapport_donnéesSms, rapport_smsDonnées, rapport_donnéesVoix, rapport_voixDonnées, rapport_smsVoix, rapport_voixSms) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $inserta->execute(array($codeUSSD, $codeForfait, $voix, $sms, $données, $prix, $validité, $disponibilité, $rapport_donnéesPrix, $rapport_prixDonnées, $rapport_validitéPrix, $rapport_prixValidité, $rapport_validitéDonnées, $rapport_donnéesValidité, $rapport_prixSms, $rapport_smsPrix, $rapport_prixVoix, $rapport_voixPrix, $rapport_validitéSms, $rapport_smsValidité, $rapport_validitéVoix, $rapport_voixValidité, $rapport_donnéesSms, $rapport_smsDonnées, $rapport_donnéesVoix, $rapport_voixDonnées, $rapport_smsVoix, $rapport_voixSms));
}



$title = "adminFlT";
$metaKeywords = "";
$metaDescription = "";

//////////////////////////////// HEAD ////////////////////////////////////////////////////////////////
include("../head.php");
//////////////////////////////// /HEAD ////////////////////////////////////////////////////////////////
$backward = "set";

include("./.flt_admin.php");


//////////////////////////////// FOOTER ////////////////////////////////////////////////////////////////
include("../footer.php");
//////////////////////////////// /FOOTER ////////////////////////////////////////////////////////////////
