<?php
/**
 * Created by PhpStorm.
 * User: Vladymyrlem
 * Date: 25.10.2017
 * Time: 13:43
 */

namespace app\models;


use yii\data\ActiveDataProvider;

class MenuSearch extends MenuForm {

	public function rules() {
		return parent::rules();
	}

	public function scenarios() {
		return parent::scenarios();
	}

	public function search($params){
		$query = MenuForm::find();

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		$this->load($params);

		if (!$this->validate()) {
			return $dataProvider;
		}

		$query->andFilterWhere([
			'id_menu' => $this->id,
			'parent_id' => $this->parent,
		]);

		return $dataProvider;
	}
}