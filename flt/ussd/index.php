<?php
session_start();
include("../../config/config.inc.php");
include("../inc.php");



$title = "codeussd";
$metaKeywords = "";
$metaDescription = "";

//////////////////////////////// HEAD ////////////////////////////////////////////////////////////////
include("../head.php");
//////////////////////////////// /HEAD ////////////////////////////////////////////////////////////////
$backward = "set";

include("flt_ussd.php");


//////////////////////////////// FOOTER ////////////////////////////////////////////////////////////////
include("../footer.php");
//////////////////////////////// /FOOTER ////////////////////////////////////////////////////////////////
