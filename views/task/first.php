<div class="wrap">
    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Task №1</li>
    </ul>
    <div class="about">
        <h1>Task №1</h1>
        <p>1. С использованием функции preg_replace убрать все "лишние" нули после точки</p>
        <hr>

        <pre>
    $calc = preg_replace( $pattern, '',preg_replace( '/0+$/', '', $val)
 );
</pre>
        <hr>
		<?php
		/* @var $form yii\bootstrap\ActiveForm */

		use yii\bootstrap\ActiveForm;
		use yii\widgets\Pjax;
		use yii\helpers\Html;

		Pjax::begin( [ 'id' => 'ft' ] );

		$form = ActiveForm::begin( [
			'id'      => 'task',
			'options' => [
				'class'   => 'form-horizontal',
				'data'    => [ 'pjax' => true ],
				'enctype' => 'multipart/form-data',
			],
		] );
		?>
		<?php
		$val     = $_POST['ft_number'];
		$pattern = '/\.$/';
		$calc    = preg_replace( $pattern, '', preg_replace( '/0+$/', '', $val ) );
		?>
		<?= Html::beginForm( [ '/web/task/first' ], 'post', [ 'class' => 'form-inline', 'name' => 'form' ] ); ?>
		<?= Html::label( 'Input Number:', 'ft_num', [] ) ?>
		<?= Html::input( 'text', 'ft_number', Yii::$app->request->post( 'string' ), [] ) ?>
		<?= Html::submitButton( 'Replace', [ 'class' => 'btn btn-lg btn-success' ] ) ?>
        <h5><?php echo $calc; ?></h5>
		<?= Html::endForm() ?>
		<?php ActiveForm::end(); ?>
		<?php Pjax::end();
		?>
    </div>
</div>
