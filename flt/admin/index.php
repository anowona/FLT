<?php
session_start();
include("../../config/config.inc.php");
include("../inc.php");



if (isset($_POST["insert"])) {

    $codeUSSD = $_POST["codeUSSD"];
    $codeForfait = $_POST["codeForfait"];
    $voix = $_POST["voix"];
    $sms = $_POST["sms"];
    $données = $_POST["données"];
    $prix = $_POST["prix"];
    $validité = $_POST["validité"];
    $disponibilité = $_POST["disponibilité"];

    $rapport_donnéesPrix = $données / $prix;
    $rapport_prixDonnées = $prix / $données;
    $rapport_validitéPrix = $validité / $prix;
    $rapport_prixValidité = $prix / $validité;
    $rapport_validitéDonnées = $validité / $données;
    $rapport_donnéesValidité = $données / $validité;
    $rapport_prixSms = $prix / $sms;
    $rapport_smsPrix = $sms / $prix;
    $rapport_prixVoix = $prix / $voix;
    $rapport_voixPrix = $voix / $prix;
    $rapport_validitéSms = $validité / $sms;
    $rapport_smsValidité = $sms / $validité;
    $rapport_validitéVoix = $validité / $voix;
    $rapport_voixValidité = $voix / $validité;
    $rapport_donnéesSms = $données / $sms;
    $rapport_smsDonnées = $sms / $données;
    $rapport_donnéesVoix = $données / $voix;
    $rapport_voixDonnées = $voix / $données;
    $rapport_smsVoix = $sms / $voix;
    $rapport_voixSms = $voix / $sms;

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
