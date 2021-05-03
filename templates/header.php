<?php

    //* ======================
    //* === cachear página ===
    //* ======================

    // Definir un nombre para cachear
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);

    // Definir archivo para cachear (puede ser .php también)
    if(isset($_GET['id'])) {
        $archivoCache = 'cache/'.$pagina."-".$_GET['id'].'.html';
    } else {
        $archivoCache = 'cache/'.$pagina.'.html';
    }
	

	// Cuanto tiempo deberá estar este archivo almacenado
	$tiempo = 36000;

	// Checar que el archivo exista, el tiempo sea el adecuado y muestralo
	if (file_exists($archivoCache) && time() - $tiempo < filemtime($archivoCache)) {
   	include($archivoCache);
    	exit;
	}

	// Si el archivo no existe, o el tiempo de cacheo ya se venció genera uno nuevo
	ob_start();
?>

<!-- ============== -->
<!-- === header === -->
<!-- ============== -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Italianno|Lato:400,700,900|Raleway:400,700,900" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css">
<title><?php echo $titulo ?> | CarolinaSpa</title>
</head>
<body>

<header class="encabezado-sitio container">
    <div class="row justify-content-md-between align-items-center">
        <div class="col-lg-4">
            <a href="index.php">
            <img src="img/logo.svg" class="img-fluid mx-auto d-block pt-4 pb-4">
            </a>
        </div>
        <div class="col-lg-4">
            <nav class="sociales text-center text-lg-right">
            <ul>
                <li>
                <a href="http://facebook.com"> 
                    <span class="sr-only"> Facebook</span>
                </a>
                </li>
                <li>
                <a href="http://twitter.com"> 
                    <span class="sr-only"> Twitter</span>
                </a>
                </li>
                <li>
                <a href="http://instagram.com">
                    <span class="sr-only"> Instagram</span>
                </a>
                </li>
                <li>
                <a href="http://pinterest.com"> 
                    <span class="sr-only"> Pinterest</span>
                </a>
                </li>
                <li>
                <a href="http://youtube.com"> 
                    <span class="sr-only"> YouTube</span>
                </a>
                </li>
            </ul>
            </nav>
        </div>
    </div>
</header>