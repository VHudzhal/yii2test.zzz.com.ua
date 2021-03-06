<?php

namespace app\models;
use phpDocumentor\Reflection\Types\Null_;
use yii\db\ActiveRecord;
use Yii;
use app\controllers\MenuController;
/**
 * This is the model class for table "yii2db_menu".
 *
 * @property integer $id_menu
 * @property string $Url
 * @property string $Title
 * @property integer $parent_id
 */
class MenuForm extends ActiveRecord {
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'yii2db_menu';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[ [ 'id_menu', 'Url', 'Title', 'parent_id' ], 'required' ],
			[ [ 'Url', 'Title' ], 'string' ],
			[ [ 'parent_id' ], 'string' ],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id_menu'   => 'Id Menu',
			'Url'       => 'Url',
			'Title'     => 'Title',
			'parent_id' => 'Parent ID',
		];
	}

	public function getStructure() {
		$result = MenuForm::find()->asArray()->all();
		if ( ! $result ) {

			return null;

		}

		// $arr будет создаваться массив категорий, где индексы, это parent_id

		$arr = array();


		//В цикле формируем массив

		for ( $i = 0; $i < count( $result ); $i ++ ) {

			$row = $result[ $i ];

			if ( $row['parent_id'] == null ) {
				$row['parent_id'] = 0;
			}

			//Формируем массив, где ключами являются id родительской категории

			if ( empty( $arr[ $row['parent_id'] ] ) ) {

				$arr[ $row['parent_id'] ] = array();

			}

			$arr[ $row['parent_id'] ][] = $row;

		}


// $view_menu - лямда функция для создания массива категорий, который будет передан в отображение

		$view_menu =

			function ( $data, $parent_id = 0 ) use ( & $view_menu ) {

				$result = null;

				if ( empty( $data[ $parent_id ] ) ) {

					return $result;

				}

				$result = array();


				//перебираем в цикле массив и выводим на экран

				for ( $i = 0; $i < count( $data[ $parent_id ] ); $i ++ ) {

					$result[] = [
						'label' => $data[ $parent_id ][ $i ]['name_ru'],

						'url' => 'task/second' . $data[ $parent_id ][ $i ]['id'],

						//можно пометить какой либо пункт как активный     

						'active' => $data[ $parent_id ][ $i ]['id'] == 8,

						'options' => [ 'class' => 'dropdown' ],

						'items' => $view_menu( $data, $data[ $parent_id ][ $i ]['id'] )
					];

					//рекурсия - проверяем нет ли дочерних категорий

				}

				return $result;

			};

		$result = $view_menu( $arr );

		return $result;
	}
public function isAttributeRequired( $attribute ) {
	return parent::isAttributeRequired( $attribute ); // TODO: Change the autogenerated stub
}
}
