<div class="slider" id="slider">
    <div class="slider-bottom-shadow"></div>

    <ul class="slider__container">
        <?php foreach($slide as $slider):?>
        <li class="slider__item is-active">
            <figure class="slider__itemImage" style="background-image:url(/img/slider/<?=$slider->photo?>);"></figure>
            <div class="slider__itemText">
                <h2 class="slider__itemTitle"><?=$slider->title?><br>
                    <span><?=$slider->description?></span></h2>
            </div>
        </li>
        <?php endforeach;?>
    </ul>


    <div class="slider__prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="32" viewBox="-1 -1 12 32">
            <path d="M 10,0 0,15 10,30" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>
    <div class="slider__next is-active">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="32" viewBox="-1 -1 12 32">
            <path d="M0 0l10 15L0 30" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>


    <ul class="navThumbs">
        <?php foreach($slide as $slider):?>

        <li class="navThumbs__item is_active" style="background-image:url(/img/slider/<?=$slider->photo?>)"></li>
        <?php endforeach;?>
    </ul>
</div>