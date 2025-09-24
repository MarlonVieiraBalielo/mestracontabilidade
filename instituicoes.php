<?php
$titulo_pagina = "Instituições Financeiras";
$descricao_pagina = "Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria.";
?>
<?php include 'header.php' ?>
<div class="container-curve-alt">
    <main class="container pt-5 pt-lg-8 pb-8 position-relative">
        <h1 class="title-default mb-3"><?= $titulo_pagina ?></h1>

        <?php include 'paginas/instituicoes.php' ?>
    </main>
</div>
<?php include 'footer.php' ?>