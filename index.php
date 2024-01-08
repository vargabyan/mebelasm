<?php
include __DIR__ . '/head.php';
?>

<?php
$categoryData = [
    ['photo' => 'images/347 копия 1.png', 'title' => 'Премиум <br> мебель'],
    ['photo' => 'images/image 41.png', 'title' => 'Прямые диваны'],
    ['photo' => 'images/image 42.png', 'title' => 'Угловые диваны'],
    ['photo' => 'images/image 43.png', 'title' => 'Модульные диваны'],
    ['photo' => 'images/image 44.png', 'title' => 'Кресла и пуфы'],
    ['photo' => 'images/image 41.png', 'title' => 'Прямые диваны'],
    ['photo' => 'images/image 41.png', 'title' => 'Прямые диваны'],
    ['photo' => 'images/image 42.png', 'title' => 'Угловые диваны'],
    ['photo' => 'images/image 43.png', 'title' => 'Модульные диваны'],
    ['photo' => 'images/image 44.png', 'title' => 'Кресла и пуфы'],
];
?>

<div class="container-core category-and-catalog_header-wrapper">
    <h1 class="category-and-catalog_header">Категории</h1>
    <a class="category-and-catalog_see-all" href="">Смотреть все</a>
</div>

<section class="container-core category" data-page="home">
    <?php foreach ($categoryData as $item) { ?>

        <a class="category_item" href="">
            <img class="category_img" src="<?= $item['photo'] ?>" alt="">
            <p class="category_title"><?= $item['title'] ?></p>
        </a>

    <?php } ?>
</section>


<?php
$catalogData = [
    ['photo' => ['images/xn2sd9oi8sg0qb15dz4we23qm16lwz1v 1.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 41.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 42.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 43.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 41.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 41.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 42.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 43.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
];
?>

<div class="container-core category-and-catalog_header-wrapper">
    <h1 class="category-and-catalog_header">Каталог</h1>
    <a class="category-and-catalog_see-all" href="">Смотреть все</a>
</div>

<section class="container-core catalog">
    <?php foreach ($catalogData as $item) { ?>

        <a class="catalog_item" href="" data-catalog-item>
            <div class="catalog_item_gallery-wrapper">
                <button class="catalog_item_add-to-favorites" data-catalog-item-add-to-favorites></button>
                <div class="catalog_item_slider-wrapper">
                    <div class="swiper catalog-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($item['photo'] as $img) { ?>
                                <div class="swiper-slide">
                                    <div class="swiper-wrapper_item">
                                        <img src="<?= $img ?>" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-wrapper_item">
                                        <img src="<?= $img ?>" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-wrapper_item">
                                        <img src="<?= $img ?>" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-wrapper_item">
                                        <img src="<?= $img ?>" alt="">
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="catalog_item_pagination-wrapper">
                            <p class="catalog_item_status">Черная пятница</p>
                            <div class="catalog-swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog_item_other">
                <div class="catalog_item_characteristic-wrapper">
                    <div class="catalog_item_prices-wrapper">
                        <p class="catalog_item_price">45 000 ₽ <span>60 000 ₽</span></p>
                        <p class="catalog_item_status-price">Цена упала</p>
                    </div>
                    <p class="catalog_item_title">Лазурит 5 ст большой диван</p>
                </div>
                <button class="catalog_item_add-basket" data-catalog-item-add-basket></button>
            </div>
        </a>

    <?php } ?>
</section>


<section class="container-core work-with-business">
    <div class="work-with-business_item">
        <h1 class="work-with-business_header">Работаем с бизнесом</h1>
        <p class="work-with-business_sub-title">Поставляем фабричную мебель со скидкой до 30%</p>
        <a class="work-with-business_link" href="">
            <p class="work-with-business_text">
                Мебель для ресторанов и кафе
                <span>Со скидкой до 40%</span>
            </p>
            <img class="work-with-business_img" src="images/07176f4853cb21ab94de0cdfa1410bdf.jpeg" alt="">
        </a>
    </div>
    <div class="work-with-business_item">
        <a class="work-with-business_link" href="">
            <p class="work-with-business_text">
                Хостелы и отели
                <span>Со скидкой до 40%</span>
            </p>
            <img class="work-with-business_img" src="images/dfb85e788711b6a408aaa624ab7837dc.jpeg" alt="">
        </a>
    </div>
    <div class="work-with-business_item">
        <a class="work-with-business_link" href="">
            <p class="work-with-business_text">
                Офисы и коворки
                <span>Со скидкой до 40%</span>
            </p>
            <img class="work-with-business_img" src="images/92cadcd773070ec0fb23f162d65781e1.jpeg" alt="">
        </a>
    </div>
</section>

<section class=" container-core">

</section>

<?php
include __DIR__ . '/footer.php';
?>
