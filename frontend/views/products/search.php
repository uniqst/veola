<div class="container">
    <div class="row">
        <div class="col l3 hide-on-med-and-down">
            <?=\frontend\components\Category::widget()?>
        </div>
        <div class="col s12 m12 l9">

            <form class="filter-form">
            <div class="row">
                <input type="hidden" name="cat_id" value="<?=$_GET['cat_id']?>" >
                <input type="hidden" name="s" value="<?=$_GET['s']?>" >
            <p class="filter-p col m7 s12" style="padding: 0px">
                <span>
                Сортировка:
                </span>
                <select class="browser-default" id="sort" name="sort" size="1" onchange="this.form.submit()" style="width: 150px;">
                    <option value="name" <?php if($_GET['sort'] == 'name') echo 'selected' ?>>Название</option>

                    <option value="-standart" <?php if($_GET['sort'] == '-standart') echo 'selected' ?>>Стандатрные</option>
                    <option value="-promo" <?php if($_GET['sort'] == '-promo') echo 'selected' ?>>Акционные</option>
                    <option value="-sale" <?php if($_GET['sort'] == '-sale') echo 'selected' ?>>Распродажа</option>
                    <option value="-prepared" <?php if($_GET['sort'] == '-prepared') echo 'selected' ?>>Ожидаются</option>
                    <option value="-new" <?php if($_GET['sort'] == '-new') echo 'selected' ?>>Новые</option>

                    <option value="-price" <?php if($_GET['sort'] == '-price') echo 'selected' ?>>Цена по убыванию</option>
                     <option value="price" <?php if($_GET['sort'] == 'price') echo 'selected' ?>>Цена по возврастанию</option>
                    <option value="date" <?php if($_GET['sort'] == 'date' or !$_GET['sort']) echo 'selected' ?>>Дата</option>
                    <option value="-rating" <?php if($_GET['sort'] == '-rating') echo 'selected' ?>>Рейтинг</option>
                </select>
            </p>

            </div>
        </form>
<?= \frontend\components\Products::widget();?>

        </div>
    </div>
</div>