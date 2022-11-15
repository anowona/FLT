<?php
//////////////////////////////////////////////////////////////////////////////////


?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="text" name="codeUSSD" placeholder="codeUSSD"><br>
    <input type="text" name="codeForfait" placeholder="codeForfait"><br>
    <input type="text" name="voix" placeholder="voix__f_"><br>
    <input type="text" name="sms" placeholder="sms__sms_"><br>
    <input type="text" name="données" placeholder="données__mo_"><br>
    <input type="text" name="prix" placeholder="prix__fcfa_"><br>
    <input type="text" name="validité" placeholder="validé"><br>

    <input type="submit" value="sub" name="insert">
</form>




<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <select name="" id=""><?php
                            $selecta = $bdd->prepare("select * from togocel order by codeUSSD ASC");
                            $selecta->execute();
                            while ($fetcha = $selecta->fetch()) {
                            ?>
            <option name="" id=""><?php echo $fetcha["codeUSSD"] . " " . $fetcha["codeForfait"]; ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="sub" name="update">
</form>