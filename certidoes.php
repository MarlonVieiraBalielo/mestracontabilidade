<?php
$titulo_pagina = "Certidões Negativas";
$descricao_pagina = "Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria.";
?>
<?php include 'header.php' ?>
<div class="container-abas">
    <div class="container py-7 position-relative">
        <h1 class="fw-bolder text-white text-uppercase"><?= $titulo_pagina; ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item" aria-current="page"><?= $titulo_pagina; ?></li>
            </ol>
        </nav>
    </div>
</div>

<div class="container-services bg-white">
    <div class="container py-5 overflow-hidden text-align-justify">
        <?php include_once('paginas/certidoes.php'); ?>
    </div>
</div>
<?php include 'footer.php' ?>