<?php $titulo_pagina = "Notícias Empresariais" ?>

<?php
$id = (isset($_GET["id"])) ? $_GET["id"] : 1;
$regiao_url = (isset($_GET["regiao"])) ? $_GET["regiao"] : 'brasil';

if (isset($_GET["p"])):
    if ($_GET["p"] < 1) :
        $p = 1;
    elseif ($_GET["p"] > 10) :
        $p = $max / $limite;
    else :
        $p = $_GET["p"];
    endif;
else :
    $p = 1;
endif;

$url_json = "https://sitecontabil.com.br/json/?db=sc_noticias&id=$id";
$json = json_decode(file_get_contents($url_json));
if (!empty($json) && is_array($json)) {
    $titulo_pagina = $json[0]->titulo;
    $descricao_pagina = $json[0]->descricao;
}
?>

<?php include_once('header.php'); ?>
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
<div class="bg-white">
    <div class="container py-8">
        <?php if (array_key_exists("error", $json)): ?>
            <h1 class="fw-bolder mb-7"><?= $titulo_pagina; ?></h1>
            <p><?= $json->error; ?></p>
        <?php else: ?>
            <?php foreach ($json as $item): ?>
                <div class="row small my-2 text-primary align-items-center mb-4">
                    <div class="col-auto">
                        <p><i class="fas fa-fw fa-calendar mr-1"></i> <?= mostra_data($item->pubdate); ?></p>
                    </div>
                    <div class="col-auto">
                        <p><i class="fas fa-fw fa-map-marker mr-1"></i> <a href="noticias.php?regiao=<?= $item->regiao ?>"><?= $regiao[$item->regiao]; ?></a></p>
                    </div>
                    <div class="col-auto">
                        <p><i class="fas fa-fw fa-newspaper mr-1"></i> <?= $item->fonte; ?></p>
                    </div>
                    <div class="col-auto ms-auto">
                        <div class="dropdown m-0">
                            <a class="btn btn-primary dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-share-alt"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end border">
                                <li><a class="dropdown-item" href="#" onclick="compartilhar('facebook')"><i class="fab fa-facebook me-2"></i> Facebook</a></li>
                                <li><a class="dropdown-item" href="#" onclick="compartilhar('linkedin')"><i class="fab fa-linkedin me-2"></i> LinkedIn</a></li>
                                <li><a class="dropdown-item" href="#" onclick="compartilhar('twitter')"><i class="fab fa-x-twitter me-2"></i> X (Twitter)</a></li>
                                <li><a class="dropdown-item" href="#" onclick="compartilhar('whatsapp')"><i class="fab fa-whatsapp me-2"></i> WhatsApp</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?= html_entity_decode($item->texto) ?>
            <?php endforeach; ?>
            <a href="noticias.php?p=<?= $p ?>&regiao=<?= $regiao_url ?>" class="btn btn-primary rounded-pill mt-5"><i class="fas mr-1 fa-inbox"></i> Voltar para a listagem de notícias</a>
        <?php endif; ?>
    </div>
</div>

<div class="dropdown m-0">
    <a class="btn btn-primary dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-share-alt"></i></a>
    <ul class="dropdown-menu dropdown-menu-end border">
        <li><a class="dropdown-item" href="#" onclick="compartilhar('facebook')"><i class="fab fa-facebook me-2"></i> Facebook</a></li>
        <li><a class="dropdown-item" href="#" onclick="compartilhar('linkedin')"><i class="fab fa-linkedin me-2"></i> LinkedIn</a></li>
        <li><a class="dropdown-item" href="#" onclick="compartilhar('twitter')"><i class="fab fa-x-twitter me-2"></i> X (Twitter)</a></li>
        <li><a class="dropdown-item" href="#" onclick="compartilhar('whatsapp')"><i class="fab fa-whatsapp me-2"></i> WhatsApp</a></li>
    </ul>
</div>

<script>
    function compartilhar(rede) {
        const url = encodeURIComponent(window.location.href);
        const texto = encodeURIComponent(document.title);
        let link = "";

        switch (rede) {
            case 'facebook':
                link = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
                break;
            case 'linkedin':
                link = `https://www.linkedin.com/shareArticle?mini=true&url=${url}&title=${texto}`;
                break;
            case 'twitter':
                link = `https://twitter.com/intent/tweet?url=${url}&text=${texto}`;
                break;
            case 'whatsapp':
                link = `https://wa.me/?text=${texto}%20${url}`;
                break;
            default:
                alert("Esta rede social não permite compartilhamento direto via navegador.");
                return;
        }

        window.open(link, '_blank');
    }
</script>

<?php include_once('footer.php'); ?>