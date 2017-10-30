<?php
use app\assets\AppAsset;
use yii\helpers\Html,yii\db\ActiveQuery;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!doctype html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $this->title ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <div class="container">
            <?php
            if (isset($this->blocks['Block1'])){
                echo $this->blocks['Block1'];
            }
            ?>
            <?= $content ?>

        </div>
    </div>


    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>