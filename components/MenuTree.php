<?php
/**
 * Created by PhpStorm.
 * User: Vladymyrlem
 * Date: 25.10.2017
 * Time: 19:02
 */

namespace app\components;

use app\models\Category;

use yii\base\Widget;

class MenuTree extends Widget {

//свойство шаблона
	public $tpl;
	//свойство хранения всех записей категорий из БД(массив категорий)
	public $data;

	//свойство результата работы data, помогающее увидеть какая категория в какую вложена
	public $tree;
	//свойство хранения Html-кода в зависимости от созданного шаблона
	public $menuHtml;

	public function init()
	{
		parent::init();
		if ($this->tpl === null){
			$this->tpl = 'menu';
		}
		$this->tpl .= '.php';
	}
	public function run()
	{
		$this->data = Category::find()->indexBy('id_menu')->asArray()->all();
		$this->tree = $this->getTree();
		$this->menuHtml = $this->getMenuHtml($this->tree);
		return $this->menuHtml;

	}

	protected function getTree(){
		$tree = [];
		foreach ($this->data as $id=>&$node) {
			if (!$node['parent_id'])
				$tree[$id] = &$node;
			else
				$this->data[$node['parent_id']]['childs'][$node['id_menu']] = &$node;
		}
		return $tree;
	}

	protected function getMenuHtml($tree){
		$str = '';
		foreach ($tree as $category) {
			$str .= $this->catToTemplate($category);
		}
		return $str;
	}

	protected function catToTemplate($category){
		ob_start();
		include __DIR__ . '/tpl/' . $this->tpl;
		return ob_get_clean();
	}
}
