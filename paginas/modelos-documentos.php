<?php $json = json_decode(file_get_contents("https://sitecontabil.com.br/json/?db=sc_mod_documentos")); ?>
<?php if(array_key_exists("error", $json)): ?>
    <p><?= $json->error; ?></p>
<?php else: ?>
    <div class="mb-2">
        <?php foreach ($json as $item): ?>
            <a href="modelos-documentos-ler.php?id=<?= $item->id; ?>" class="btn btn-primary"><?= $item->titulo; ?></a>
        <?php endforeach; ?>
    </div>
    <?php $counter = 0; ?>
    <?php do { ?>
        <h2><?= $json[$counter]->titulo; ?></h2>
        <?= html_entity_decode($json[$counter]->texto); ?>
        <?php $counter++; ?>
    <?php } while($counter == 0); ?>
<?php endif; ?>