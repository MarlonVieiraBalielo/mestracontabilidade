<?php
$id = (isset($_GET["id"])) ? $_GET["id"] : 0;
?>
<?php $json = json_decode(file_get_contents("https://sitecontabil.com.br/json/?db=sc_mod_documentos")); ?>
<?php $json_ler = json_decode(file_get_contents("https://sitecontabil.com.br/json/?db=sc_mod_documentos&id=$id")); ?>

<?php if(array_key_exists("error", $json)): ?>
    <p><?= $json->error; ?></p>
<?php else: ?>
    <div class="mb-2">
        <?php foreach ($json as $item): ?>
            <a href="modelos-documentos-ler.php?id=<?= $item->id; ?>" class="btn btn-primary"><?= $item->titulo; ?></a>
        <?php endforeach; ?>
    </div>
    <?php if(array_key_exists("error", $json_ler)): ?>
        <p><?= $json_ler->error; ?></p>
    <?php else: ?>
        <?php foreach($json_ler as $ler): ?>
            <h2><?= $ler->titulo; ?></h2>
            <?= html_entity_decode($ler->texto) ?>
        <?php endforeach; ?>
    <?php endif; ?>
<?php endif; ?>