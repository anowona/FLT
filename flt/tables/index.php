<?php
session_start();
include("../../config/config.inc.php");
include("../inc.php");



$title = "tables";
$metaKeywords = "";
$metaDescription = "";

//////////////////////////////// HEAD ////////////////////////////////////////////////////////////////
include("../head.php");
//////////////////////////////// /HEAD ////////////////////////////////////////////////////////////////
$backward = "set";

include("flt_tables.php");


//////////////////////////////// FOOTER ////////////////////////////////////////////////////////////////
include("../footer.php");
//////////////////////////////// /FOOTER ////////////////////////////////////////////////////////////////
