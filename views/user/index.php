<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchForm */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Forms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-form-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Form', ['create'], ['class' => 'btn btn-success']) ?>
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
            'Reg_Date:date',
            'HomePhone',
            'Balance',
            'Balance_Sheet',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
