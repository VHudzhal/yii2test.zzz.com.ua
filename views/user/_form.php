<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\UserForm */
/* @var $form yii\widgets\ActiveForm */
use app\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use kartik\datetime\DateTimePicker;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->title ?></title>
    <?= Html::csrfMetaTags()?>
    <?php $this->head() ?>
    <link rel="stylesheet" type="text/css" href="../../web/css/style.css">
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'TestWork',
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    echo Nav::widget(
        [
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Пользователи', 'url' => ['user/update']],
                ['label' => 'Cоздать', 'url' => ['user/create']],
            ]
        ]
    );
    NavBar::end();
    ?>
    <?= $content ?>

</div>

<?php $form = ActiveForm::begin(['id' => 'create_form', 'method' => 'POST',
    'action' => '', 'options' => ['style' => 'width: 100%;']]); ?>
    <form name="create_form" method="post" id="create" action="index">
    <div class="main" style="">
        <table style="border: double; width: 15%;">
            <tr>
                <td><img src="../../web/activity.png" alt=""></td>
                <td style="color: #0000aa; font-family: Calibri"><h4><b>Основая информация</b></h4></td>
            </tr>
        </table>
    </div>

        <div class="table">

                <table width="100%">
                    <tr id="initials" class="list-group">

                        <td><?= $form->field($model, 'Name')->textInput(['rows' => 6]) ?></td>
                        <td><?= $form->field($model, 'Surname')->textInput(['rows' => 6]) ?></td>
                        <td><?= $form->field($model, 'Reg_Date')->textInput() ?></td>
                        <td>
<!--                            --><?php //DateTimePicker::widget([
//                                'name' => 'dp_1',
//                                'type' => DateTimePicker::TYPE_INPUT,
//                                'value' => '23-Feb-1982 10:10',
//                                'pluginOptions' => [
//                                    'autoclose'=>true,
//                                    'format' => 'dd-M-yyyy hh:ii'
//                                ]
//                            ]);;?>
                        </td>
                    </tr>
                </table>

                <table class="table" width="100%">
                    <tr class="list-group">
                        <td><?= $form->field($model, 'Balance')->textInput() ?></td>
                        <td><?= $form->field($model, 'Balance_Sheet')->textInput() ?></td>
                    </tr>


                </table>
<table class="table" width="100%">
    <tr id="" class="list-group">
        <td><?= $form->field($model, 'Mob_Phone')->textInput(['maxlength' => true, 'method' => 'post']) ?></td>
        <td><?= $form->field($model, 'Email')->textInput(['rows' => 6]) ?></td>
        <td><?= $form->field($model, 'Skype_Login')->textInput(['rows' => 6]) ?></td>
    </tr>
</table>


            </div>
            <div>
                <table class="table">
                    <tr id="checkbox" class="list-group">
                        <?= Html::beginTag('div'); ?>
                        <td>
                            <?= Html::label('Уведомление по СМС', 'Notification'); ?>
                            <?= Html::checkbox('Notification') ?></td>
                        <td>
                            <?= Html::label('Уведомление по E-mail') ?>
                            <?= Html::checkbox('Email') ?></td>
                        <td>
                            <?= Html::label('Подписка на новости') ?>
                            <?= Html::checkbox('News') ?></td>
                        <td>
                            <?= Html::label('Адрес в Европе') ?>
                            <?= Html::checkbox('Address') ?></td>
                        <td>
                            <?= Html::label('Адрес в Европе') ?>
                            <?= Html::checkbox('Skype') ?></td>
                        <?= Html::endTag('/div') ?>
                    </tr>
                </table>
                <table class="table">
                    <tr>
                        <th><h4>Привилегии</h4></th>
                        <th><h4>--</h4></th>
                        <th><h4>--</h4></th>
                        <th><h4>--</h4></th>
                        <th><h4>--</h4></th>
                    </tr>
                    <tr>
                        <th>Скидка на фотографию</th>
                        <th>Скидка на проверку</th>
                        <th>Скидка на консолидацию</th>
                        <th>Минимальная коммиссия</th>
                        <th>Процентная коммиссия</th>
                    </tr>
                    <tr>
                        <td>
                            <select>
                                <?php
                                for ($i = 0; $i <= 100; $i++) {
                                    echo "<option>" . $i . "%" . "\n" . "</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <select class="ui-selectable-helper">
                                <?php
                                for ($i = 0; $i <= 100; $i++) {
                                    echo "<option>" . $i . "%" . "\n" . "</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <select>
                                <?php
                                for ($i = 0; $i <= 100; $i++){
                                    echo "<option>" . $i. "%" ."\n" . "</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td><?= Html::textInput('Min_commission') ?></td>
                        <td><?= Html::textInput('Proc_commission') ?></td>
                    </tr>
                </table>
            </div>
<?= Html::submitInput($model->isNewRecord ? '' : 'Create', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</form>

<?php $this->endBody() ?>
</body>
</html>


<?php $this->endPage() ?>

