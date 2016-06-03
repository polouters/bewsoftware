<!DOCTYPE html>
<html>
<head>
    <?php
        $archivo_actual = basename($_SERVER['PHP_SELF']);

        switch($archivo_actual){
            case "index.php": echo "<title>Vitoria-Tecnologia</title>";

                break;

            default: echo "<title>Vitoria-Tecnologia</title>";
        }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="title" content="ColorssPalette">
    <meta name="DC.Title" content="ColorssPalette">
    <meta http-equiv="title" content="ColorssPalette">
    <meta name="DC.Creator" content="www.altas-buscadores.com">
    <meta name="keywords" content="color,colores,paleta,colors,palette, css, html5,development,desarrollo,desarrolladores,colorsspalette,colorspalete,web">
    <meta http-equiv="keywords" content="color,colores,paleta,colors,palette, css, html5,development,desarrollo,desarrolladores,colorsspalette,colorspalete,web">
    <meta name="description" content="Utilidad para desarrolladores y diseñadores, que necesiten poner muchos colores en su dia a dia, te explicamos todo en la web. ">
    <meta http-equiv="description" content="Utilidad para desarrolladores y diseñadores, que necesiten poner muchos colores en su dia a dia, te explicamos todo en la web. ">
    <meta http-equiv="DC.Description" content="Utilidad para desarrolladores y diseñadores, que necesiten poner muchos colores en su dia a dia, te explicamos todo en la web. ">
    <meta name="author" content="ColorssPalette ">
    <meta name="DC.Creator" content="ColorssPalette ">
    <meta name="vw96.objectype" content="Document">
    <meta name="resource-type" content="Document">
    <meta http-equiv="Content-Type" content="ISO-8859-1">
    <meta name="distribution" content="all">
    <meta name="robots" content="all">
    <meta name="revisit" content="30 days">
    <link rel="icon" type="image/png" href="<?php echo url::getRaiz()?>/img/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo url::getRaiz()?>/img/apple-touch-icon.png">
    <link rel="stylesheet" type="text/css" href="<?php echo url::getRaiz()?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url::getRaiz()?>/css/colorsspalette.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url::getRaiz()?>/css/style.css">

</head>
<body>
<div class="wrap">

