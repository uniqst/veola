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
                <input type="hidden" value="<?= $_GET['id']?>" name="id">
                <select class="browser-default" id="sort" name="sort" size="1" onchange="this.form.submit()">
                    <option value="name" <?php if($_GET['sort'] == 'name') echo 'selected' ?>>Название</option>
                    <option value="price_asc" <?php if($_GET['sort'] == 'price_asc') echo 'selected' ?>>Цена по убыванию</option>
                     <option value="price_desc" <?php if($_GET['sort'] == 'price_desc') echo 'selected' ?>>Цена по возврастанию</option>
                    <option value="date" <?php if($_GET['sort'] == 'date') echo 'selected' ?>>Дата</option>
                    <option value="rating" <?php if($_GET['sort'] == 'rating') echo 'selected' ?>>Рейтинг</option>
                </select>
            </p>

            <p class="filter-p col m5 s12" style="padding: 0px">
                <span>
                Количество:
                </span>
                <select class="browser-default" id="limit" size="1" onchange="">
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