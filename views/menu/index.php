<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menu Forms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-form-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Menu Form', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_menu',
            'Url:ntext',
            'Title:ntext',
            'parent_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
