<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\UserForm */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel app\models\SearchForm */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'User Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-form-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Name',
            'Surname:ntext',
            'Mob_Phone',
            'Email:ntext',
            'Skype_Login:ntext',
            'Reg_Date',
            'HomePhone',
            'Balance',
            'Balance_Sheet',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
