<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MenuForm */

$this->title = 'Update Menu: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Menu', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'id' => $model->id_menu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="menu-form-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
