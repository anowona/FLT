<p>
    <?php if (isset($message)) {
        echo $message;
    } ?>
</p>

<form method="POST" action="">
    <label for="codeUSSD">codeUSSD</label>
    <input type="text" name="codeUSSD" id="codeUSSD" value="<?php if (isset($_GET["idForfait"])) {
                                                                echo $codeUSSD;
                                                            } ?>"><br>
    <label for="codeForfait">codeForfait</label>
    <input type="text" name="codeForfait" id="codeForfait" value="<?php if (isset($_GET["idForfait"])) {
                                                                        echo $codeForfait;
                                                                    } ?>"><br>
    <label for="voix__f_">voix__f_</label>
    <input type="number" name="voix" id="voix__f_" value="<?php if (isset($_GET["idForfait"])) {
                                                                echo $voix;
                                                            } ?>"><br>
    <label for="sms__sms_">sms__sms_</label>
    <input type="number" name="sms" id="sms__sms_" value="<?php if (isset($_GET["idForfait"])) {
                                                                echo $sms;
                                                            } ?>"><br>
    <label for="données__mo_">données__mo_</label>
    <input type="number" name="données" id="données__mo_" value="<?php if (isset($_GET["idForfait"])) {
                                                                        echo $données;
                                                                    } ?>"><br>
    <label for="prix__fcfa_">prix__fcfa_</label>
    <input type="number" name="prix" id="prix__fcfa_" value="<?php if (isset($_GET["idForfait"])) {
                                                                    echo $prix;
                                                                } ?>"><br>
    <label for="validité__j_">validité__j_</label>
    <input type="number" name="validité" id="validité__j_" value="<?php if (isset($_GET["idForfait"])) {
                                                                        echo $validité;
                                                                    } ?>"><br>
    <label for="disponibilité">disponibilité</label>
    <input type="text" name="disponibilité" id="disponibilité" value="<?php if (isset($_GET["idForfait"])) {
                                                                            echo $disponibilité;
                                                                        } ?>"><br>

    <?php if (!isset($_GET["idForfait"])) { ?>
        <input type="submit" value="insert" name="insert">
    <?php } else { ?>
        <input type="submit" value="update" name="update">
    <?php } ?>
</form>