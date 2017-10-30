<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'Surname') ?>

    <?= $form->field($model, 'MobPhone') ?>

    <?= $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'Skype_Login') ?>

    <?php // echo $form->field($model, 'Reg_Date') ?>

    <?php // echo $form->field($model, 'HomePhone') ?>

    <?php // echo $form->field($model, 'Balance') ?>

    <?php // echo $form->field($model, 'Balance_Sheet') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
