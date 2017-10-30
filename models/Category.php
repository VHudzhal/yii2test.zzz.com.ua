<?php
/**
 * Created by PhpStorm.
 * User: Vladymyrlem
 * Date: 25.10.2017
 * Time: 20:59
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
	public static function tableName()
	{
		return 'yii2db_menu';
	}
	//одна категория-> множество продуктов
	public function getCategory(){
		return $this->hasMany(MenuForm::className(), ['parent_id' => 'id_menu']);
	}
}