<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MenuForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_menu')->textInput() ?>

    <?= $form->field($model, 'Url')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'parent_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
