<div class="row">
    <div class="col s12 m4 l3">
        <?=\frontend\components\Category::widget()?>

        <?=\frontend\components\SidebarProduct::widget()?>
    </div>

    <div class="col s12 m8 l9">

        <h1 class="title-h2" style="color:#373737;">
           Купить <?= $model->name?>
        </h1>

        <p class="text-box">
            <?= $model->description?>
        </p>


            <h2 class="title-h3 text-center" style="color: #CF1F18;font-size: 15px;font-weight: bold;text-decoration: underline;">
             РЕЖИМ РАБОТЫ:ПОНЕДЕЛЬНИК-ПЯТНИЦА С 9.00 ДО 17.00
            </h2>


        <form class="filter-form">
            <div class="row">
            <p class="filter-p col m7 s12" style="padding: 0px">
                <span>
                Сортировка:
                </span>
                <select class="browser-default" id="order" name="order" size="1" onchange="">
                    <option value="1">Название</option>
                    <option value="2">Цена</option>
                    <option value="3">Дата</option>
                    <option value="5">Рейтинг</option>
                    <option value="6">Популярность</option>
                    <option value="4" selected="selected">Предустановленная</option>
                </select>
            </p>

            <p class="filter-p col m5 s12" style="padding: 0px">
                <span>
                Количество:
                </span>
                <select class="browser-default" id="limit" name="limit" size="1" onchange="">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="25">25</option>
                    <option value="50" selected="selected">50</option>
                </select>

            </p>
            </div>
        </form>

        <div class="clearfix"></div>

        <?=\frontend\components\Products::widget()?>

</div><!--row-->