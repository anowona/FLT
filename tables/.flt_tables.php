<?php
if (empty($backward)) {
    header("Location: /");
    exit;
}
//////////////////////////////////main////////////////////////////////////////////////

$selectt = $bdd->prepare("select * from togocel");
$selectt->execute();

?>

<table>
    <tr id="tablehead">
        <th>codeUSSD</th>
        <th>codeForfait</th>
        <th>voix</th>
        <th>sms</th>
        <th>données</th>
        <th>prix</th>
        <th>validité</th>
        <th>rapport_prixDonnées</th>
        <th>rapport_prixSms</th>
        <th>rapport_prixVoix</th>
    </tr>
    <?php while ($fetcht = $selectt->fetch()) { ?>
        <tr>
            <td> <?php echo $fetcht["codeUSSD"] ?> </td>
            <td> <?php echo $fetcht["codeForfait"] ?> </td>
            <td> <?php echo $fetcht["voix__f_"] ?> </td>
            <td> <?php echo $fetcht["sms__sms_"] ?> </td>
            <td> <?php echo $fetcht["données__mo_"] ?> </td>
            <td> <?php echo $fetcht["prix__fcfa_"] ?> </td>
            <td title="<?php echo $fetcht["disponibilité"] ?>"> <?php echo $fetcht["validité__j_"] ?> </td>
            <td> <?php echo $fetcht["rapport_prixDonnées"] ?> </td>
            <td> <?php echo $fetcht["rapport_prixSms"] ?> </td>
            <td> <?php echo $fetcht["rapport_prixVoix"] ?> </td>
        </tr>
    <?php } ?>

</table>