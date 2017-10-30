<div class="wrap">
    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Task #1</li>
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

		$val     = $_POST['ft_number'];
		$pattern = '/\.$/';
		$calc    = preg_replace( $pattern, '', preg_replace( '/0+$/', '', $val ) );
		?>
        <div id="ft_form_pjax" data-pjax-container="" data-pjax-push-state data-pjax-timeout="1000">

			<?php
			/* @var $form yii\bootstrap\ActiveForm */

			use yii\bootstrap\ActiveForm;

			$form = ActiveForm::begin( [
				'id'      => 'task',
				'options' => [
					'class'     => 'form-horizontal',
					'data-pjax' => true,
					'enctype'   => 'multipart/form-data',
				],
			] );
			?>

            <input type="hidden" name="_csrf"
                   value="mzSJkwaDL_fvL0WW43n82J_zbzMr3ccQrQCYw3JLA4-8dhlyqHVXaU_66nlK_RLctfWCfZyvjncZlA9ArPWWxA==">
            <label for="ft_number">Input number:</label>
            <input type="text" name="ft_number">
            <button type="submit" class="btn btn-success btn-block" name="submit">Submit</button>
            <p><?php echo $calc; ?></p>

			<?php ActiveForm::end(); ?>

        </div>
    </div>
</div>

<?php
//$this->registerJsFile( '/web/assets/jquery.pjax.js', [ 'depends' => [ \yii\web\JqueryAsset::className() ] ] );
//
//$this->registerJsFile( '/web/assets/a0344005/yii.activeForm.js', [ 'depends' => [ \yii\web\JqueryAsset::className() ] ] );
//$script = <<< JS
//   jQuery(document).ready(function () {
//        jQuery('#task').yiiActiveForm([], []);
//        jQuery(document).pjax(
//            "#ft_form_pjax p",
//            {
//                "push": true, "replace": false, "timeout": 1000, "scrollTo": false, "container": "#ft_form_pjax"
//            }
//        );
//        jQuery(document).on("submit", "#ft_form_pjax form[data-pjax]", function (event) {
//            jQuery.pjax.submit(event, {
//                "push": true,
//                "replace": false,
//                "timeout": 1000,
//                "scrollTo": false,
//                "container": "#ft_form_pjax"
//            });
//        });
//}); 
//JS;
//$this->registerJs( $script, yii\web\View::POS_END );
?>