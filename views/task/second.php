<div class = "col-lg-3">
    <ul class="breadcrumb">
        <li class=""><a href="/task/index">Home</a></li>
        <li class="active">Task №2</li>
    </ul>
    <h1>Task№2</h1>
    <p>2. Нужно написать простенькое приложение для управления древовидным меню (пусть будет дерево категорий)</p>
    <hr>
    <a href="/web/menu/index" class="btn btn-success">Index</a>
    <a href="/web/menu/create" class="btn-success btn">Create</a>
    <hr>
        <div>
            <ul class="catalog">
		        <?= \app\components\MenuTree::widget(['tpl' => 'menu']); ?>
            </ul>
        </div>
</div>
