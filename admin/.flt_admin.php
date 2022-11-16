<?php
//////////////////////////////////////////////////////////////////////////////////

if (isset($_POST["update"])) {

    $selectu = $bdd->prepare("select * from togocel");
    $selectu->execute();

    while ($fetchu = $selectu->fetch()) {

        $codeUSSD = $fetchu["codeUSSD"];

        $voix = $fetchu["voix__f_"];
        $sms = $fetchu["sms__sms_"];
        $données = $fetchu["données__mo_"];
        $prix = $fetchu["prix__fcfa_"];
        $validité = $fetchu["validité__j_"];


        $rapport_donnéesPrix = $données / $prix;
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_donnéesPrix` = ? WHERE `togocel`.`codeUSSD` = ?");
        $updateu->execute(array($rapport_donnéesPrix, $codeUSSD));

        $rapport_prixDonnées = $prix / $données;
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_prixDonnées` = ? WHERE `togocel`.`codeUSSD` = ?");
        $updateu->execute(array($rapport_prixDonnées, $codeUSSD));

        $rapport_validitéPrix = $validité / $prix;
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_validitéPrix` = ? WHERE `togocel`.`codeUSSD` = ?");
        $updateu->execute(array($rapport_validitéPrix, $codeUSSD));

        $rapport_prixValidité = $prix / $validité;
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_prixValidité` = ? WHERE `togocel`.`codeUSSD` = ?");
        $updateu->execute(array($rapport_prixValidité, $codeUSSD));

        $rapport_validitéDonnées = $validité / $données;
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_validitéDonnées` = ? WHERE `togocel`.`codeUSSD` = ?");
        $updateu->execute(array($rapport_validitéDonnées, $codeUSSD));

        $rapport_donnéesValidité = $données / $validité;
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_donnéesValidité` = ? WHERE `togocel`.`codeUSSD` = ?");
        $updateu->execute(array($rapport_donnéesValidité, $codeUSSD));

        $rapport_prixSms = $prix / $sms;
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_prixSms` = ? WHERE `togocel`.`codeUSSD` = ?");
        $updateu->execute(array($rapport_prixSms, $codeUSSD));

        $rapport_smsPrix = $sms / $prix;
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_smsPrix` = ? WHERE `togocel`.`codeUSSD` = ?");
        $updateu->execute(array($rapport_smsPrix, $codeUSSD));

        $rapport_prixVoix = $prix / $voix;
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_prixVoix` = ? WHERE `togocel`.`codeUSSD` = ?");
        $updateu->execute(array($rapport_prixVoix, $codeUSSD));

        $rapport_voixPrix = $voix / $prix;
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_voixPrix` = ? WHERE `togocel`.`codeUSSD` = ?");
        $updateu->execute(array($rapport_voixPrix, $codeUSSD));

        $rapport_validitéSms = $validité / $sms;
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_validitéSms` = ? WHERE `togocel`.`codeUSSD` = ?");
        $updateu->execute(array($rapport_validitéSms, $codeUSSD));

        $rapport_smsValidité = $sms / $validité;
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_smsValidité` = ? WHERE `togocel`.`codeUSSD` = ?");
        $updateu->execute(array($rapport_smsValidité, $codeUSSD));

        $rapport_validitéVoix = $validité / $voix;
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_validitéVoix` = ? WHERE `togocel`.`codeUSSD` = ?");
        $updateu->execute(array($rapport_validitéVoix, $codeUSSD));

        $rapport_voixValidité = $voix / $validité;
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_voixValidité` = ? WHERE `togocel`.`codeUSSD` = ?");
        $updateu->execute(array($rapport_voixValidité, $codeUSSD));

        $rapport_donnéesSms = $données / $sms;
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_donnéesSms` = ? WHERE `togocel`.`codeUSSD` = ?");
        $updateu->execute(array($rapport_donnéesSms, $codeUSSD));

        $rapport_smsDonnées = $sms / $données;
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_smsDonnées` = ? WHERE `togocel`.`codeUSSD` = ?");
        $updateu->execute(array($rapport_smsDonnées, $codeUSSD));

        $rapport_donnéesVoix = $données / $voix;
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_donnéesVoix` = ? WHERE `togocel`.`codeUSSD` = ?");
        $updateu->execute(array($rapport_donnéesVoix, $codeUSSD));

        $rapport_voixDonnées = $voix / $données;
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_voixDonnées` = ? WHERE `togocel`.`codeUSSD` = ?");
        $updateu->execute(array($rapport_voixDonnées, $codeUSSD));

        $rapport_smsVoix = $sms / $voix;
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_smsVoix` = ? WHERE `togocel`.`codeUSSD` = ?");
        $updateu->execute(array($rapport_smsVoix, $codeUSSD));

        $rapport_voixSms = $voix / $sms;
        $updateu = $bdd->prepare("UPDATE `togocel` SET `rapport_voixSms` = ? WHERE `togocel`.`codeUSSD` = ?");
        $updateu->execute(array($rapport_voixSms, $codeUSSD));
    }
}

?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="text" name="codeUSSD" placeholder="codeUSSD"><br>
    <input type="text" name="codeForfait" placeholder="codeForfait"><br>
    <input type="text" name="voix" placeholder="voix__f_"><br>
    <input type="text" name="sms" placeholder="sms__sms_"><br>
    <input type="text" name="données" placeholder="données__mo_"><br>
    <input type="text" name="prix" placeholder="prix__fcfa_"><br>
    <input type="text" name="validité" placeholder="validité__j_"><br>
    <input type="text" name="disponibilité" placeholder="disponibilité"><br>

    <input type="submit" value="insert" name="insert">
</form>




<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="submit" value="update" name="update">
</form>