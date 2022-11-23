<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("css.flt.htm") ?>
    <title><?php echo $title ?> -forfaitsletogo</title>
    <meta name="keywords" content="<?php echo $metaKeywords ?>">
    <meta name="description" content="<?php echo $metaDescription ?>">
    <?php
    //////////////////////////////////////////////////////////////////////// 
    ?>
    <?php if ($_SERVER["HTTP_HOST"] == "localhost") { ?>
        <link rel="icon" type="image/x-icon" href="/flt/favicono.ico">
    <?php } else if ($_SERVER["HTTP_HOST"] == "forfaitsletogo.detailsenvrac.com") { ?>
        <link rel="icon" type="image/x-icon" href="/flt/faviconi.ico">
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-2DTN606FDD"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-2DTN606FDD');
        </script>
    <?php } ?>
</head>

<body>

    <header id="banner">
        <a href="/">
            <h1>forfaits le togo</h1>
        </a>
    </header>