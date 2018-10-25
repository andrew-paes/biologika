<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no"/>

    <title>
		<?php
		global $page, $paged;
		wp_title( '|', true, 'right' );
		?>
    </title>

    <!-- ==============================================
    FAVICON
    =============================================== -->
    <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/img/master/favicon.png">

    <meta name="theme-color" content="#000000">
    <meta name="msapplication-navbutton-color" content="#000000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000000">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- ==============================================
    CSS
    =============================================== -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/styles.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/custom.css">


</head>
<body>

<!-- LOADER -->
<div id="loader-wrapper">
    <div id="loader"></div>
</div>
<!-- LOADER -->
