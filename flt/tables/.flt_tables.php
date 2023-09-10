<?php
if (empty($backward)) {
    header("Location: /");
    exit;
}
//////////////////////////////////main////////////////////////////////////////////////

$orderr = "prix__fcfa_";

if (isset($_GET["order"])) {
    $orderr = $_GET["orderr"];
}

$selectt = $bdd->prepare("select * from togocel order by " . $orderr . " ASC");
$selectt->execute();

$ocodeUSSD = "";
$ocodeForfait = "";
$ovoix = "";
$osms = "";
$odonnees = "";
$oprix = "";
$ovalidite = "";
$odisponibilite = "";
$oprixVoix = "";
$oprixSms = "";
$oprixDonnees = "";

switch ($orderr) {
    case 'codeUSSD':
        $ocodeUSSD = "selected";
        break;
    case 'codeForfait':
        $ocodeForfait = "selected";
        break;
    case 'voix__f_':
        $ovoix = "selected";
        break;
    case 'sms__sms_':
        $osms = "selected";
        break;
    case 'données__mo_':
        $odonnees = "selected";
        break;
    case 'prix__fcfa_':
        $oprix = "selected";
        break;
    case 'validité__j_':
        $ovalidite = "selected";
        break;
    case 'disponibilité':
        $odisponibilite = "selected";
        break;
    case 'rapport_prixVoix':
        $oprixVoix = "selected";
        break;
    case 'rapport_prixSms':
        $oprixSms = "selected";
        break;
    case 'rapport_prixDonnées':
        $oprixDonnees = "selected";
        break;

    default:
        # code...
        break;
}

?>
<form action="" method="GET" id="myOrder">
    <select name="orderr" id="">
        <option value="codeUSSD" <?php echo $ocodeUSSD ?>>codeUSSD</option>
        <option value="codeForfait" <?php echo $ocodeForfait ?>>codeForfait</option>
        <option value="voix__f_" <?php echo $ovoix ?>>voix</option>
        <option value="sms__sms_" <?php echo $osms ?>>sms</option>
        <option value="données__mo_" <?php echo $odonnees ?>>données</option>
        <option value="prix__fcfa_" <?php echo $oprix ?>>prix</option>
        <option value="validité__j_" <?php echo $ovalidite ?>>validité</option>
        <option value="disponibilité" <?php echo $odisponibilite ?>>disponibilité</option>
        <option value="rapport_prixVoix" <?php echo $oprixVoix ?>>RAPPORT prix/Voix</option>
        <option value="rapport_prixSms" <?php echo $oprixSms ?>>RAPPORT prix/Sms</option>
        <option value="rapport_prixDonnées" <?php echo $oprixDonnees ?>>RAPPORT prix/Données</option>
    </select>
    <input type="submit" value="ORDER" name="order">
</form>
<br>
<table>
    <tr id="tablehead">
        <th>codeUSSD</th>
        <th>codeForfait</th>
        <th>voix</th>
        <th>sms</th>
        <th>données</th>
        <th>prix</th>
        <th>validité</th>
        <th>disponibilité</th>
        <th>RAPPORT prix/Voix</th>
        <th>RAPPORT prix/Sms</th>
        <th>RAPPORT prix/Données</th>

    </tr>
    <?php while ($fetcht = $selectt->fetch()) { ?>
        <tr>
            <td> <?php echo $fetcht["codeUSSD"] ?> </td>
            <td> <?php echo $fetcht["codeForfait"] ?> </td>
            <td> <?php echo $fetcht["voix__f_"] ?> f </td>
            <td> <?php echo $fetcht["sms__sms_"] ?> sms </td>
            <td> <?php echo $fetcht["données__mo_"] ?> mo </td>
            <td> <?php echo $fetcht["prix__fcfa_"] ?> fcfa </td>
            <td> <?php echo $fetcht["validité__j_"] ?> j </td>
            <td> <?php echo $fetcht["disponibilité"] ?> </td>
            <td> <?php echo $fetcht["rapport_prixVoix"] ?> </td>
            <td> <?php echo $fetcht["rapport_prixSms"] ?> </td>
            <td> <?php echo $fetcht["rapport_prixDonnées"] ?> </td>
        </tr>
    <?php } ?>

</table>