<?php
$title = "Modelos de Documentos";
$descricao_pagina = "Descrição da página Modelos de Documentos, personalizável conforme necessidade.";
?>

<?php include_once('header.php'); ?>

<div class="container-abas">
    <div class="container py-7 position-relative">
        <h1 class="fw-bolder text-white text-uppercase"><?= $title; ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item" aria-current="page"><?= $title; ?></li>
            </ol>
        </nav>
    </div>
</div>

<div class="container-services bg-white">
    <div class="container py-5 overflow-hidden text-align-justify">
        <?php include_once('paginas/modelos-documentos.php'); ?>
    </div>
</div>

<?php include_once('footer.php'); ?>
