<p style="color: black;    display: block;font-weight: bold;margin-bottom: 10px;font-size: 12px;">Оставить отзыв</p>

<form>
    <div class="row">
        <label class="col m3" for="Username">Ваше имя</label>
        <input type="text" class="form-control" id="Username"  style="max-width: 180px;border: 1px solid #ddd;">
    </div>
    <div class="row">
        <label class="col m3" for="Email">Ваш E-mail</label>
        <input type="email" class="form-control" id="Email" style="max-width: 180px;border: 1px solid #ddd;">
    </div>
    <div class="row">
        <label class="col m3" for ="description"> Текст комментария</label>
        <textarea rows="4" cols="40" class="form-control" id="description" style="max-width: 320px;min-height:67px;border: 1px solid #ddd;"></textarea>
    </div>

    <div class="row">
        <p class="col m3" style="font-size: .8rem;color: #9e9e9e;">Оценка для продукта</p>
        <span class="my-rating-9"></span>
        <span class="live-rating"></span>
        <input type="hidden" id="srating" name="rating">
    </div>

    <div class="row">
        <div class="col offset-m3" style="padding: 0px">
            <input type="submit" class="button" value="Отправить">
        </div>
    </div>

</form>