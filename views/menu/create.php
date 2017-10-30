<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MenuForm */

$this->title = 'Create Menu Form';
$this->params['breadcrumbs'][] = ['label' => 'Menu Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
