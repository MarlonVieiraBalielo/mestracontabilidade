<?php $json = json_decode(file_get_contents("https://sitecontabil.com.br/json/?db=sc_notasfiscais&limite=-1")); ?>

<?php if(array_key_exists("error", $json)): ?>
    <p><?= $json->error; ?></p>
<?php else: ?>
    <?php foreach ($json as $item): ?>
        <h2><?= $item->titulo; ?></h2>
        <?= html_entity_decode($item->texto); ?>
    <?php endforeach; ?>
<?php endif; ?>