<?php
/**
 * Created by PhpStorm.
 * User: Vladymyrlem
 * Date: 23.10.2017
 * Time: 21:17
 */

namespace app\controllers;


use app\models\MenuForm;
use app\models\MenuSearch;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use Yii;

class TaskController extends Controller {
	public $layout = 'basic';


public function actionFirst(){
	$model = new MenuForm();

	return $this->render( 'first', ['model' => $model]);
}

	public function actionSecond()
	{
		$this->view->title = 'Second Task';

		$model = new MenuForm();
		if ($model->load(Yii::$app->request->post())) {
			if ($model->validate()) {
				// form inputs are valid, do something here
				return;
			}
		}
$dataProvider = new ActiveDataProvider();
		return $this->render('second');
	}
public function actionIndex(){
	return $this->render('index');
}

}