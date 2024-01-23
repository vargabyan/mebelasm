<?php
include __DIR__ . '/head.php';
?>

<?php
include __DIR__ . '/breadcrumb.php';
breadcrumb([['url' => '', 'name' => 'Корзина']]);
?>

<section class="container-core basket_header-wrapper">
    <h1 class="site-header basket_header">Корзина<span>2</span></h1>
    <button class="basket_btn-clear-basket">Очистить</button>
</section>

<section class="container-core basket">
    <div class="basket_item-wrapper">

        <div class="basket_item">
            <div class="basket_item_content">
                <div class="basket_item_img-wrapper">
                    <img class="basket_item_img" src="images/6488721d1c97c2b22d02f93991769f85.png" alt="">
                </div>
                <div class="basket_item_characteristic-wrapper">
                    <p class="basket_item_characteristic_product-name">Лазурит 5 ст большой диван</p>
                    <p class="basket_item_characteristic_available-date">Доступно для доставки<span>до 23 января</span></p>
                    <p class="basket_item_characteristic_color">Цвет<span style=""></span></p>
                    <p class="basket_item_characteristic_size">Размер<span>Д 180 Ш 200 В 220</span></p>
                </div>
                <div class="basket_item_quantity-wrapper">
                    <button class="basket_item_quantity-btn">-</button>
                    <p class="basket_item_quantity">1</p>
                    <button class="basket_item_quantity-btn">+</button>
                </div>
                <div class="basket_item_prices-wrapper">
                    <p class="basket_item_prices">45 000 ₽<span>60 000 ₽</span></p>
                    <div class="basket_item_action-wrapper">
                        <button class="basket_item_action">В избранное</button>
                        <button class="basket_item_action">Удалить</button>
                    </div>
                </div>
            </div>
            <hr class="basket_item_line">
            <form action="" class="basket_item_form">
                <label class="switch"><input type="checkbox"><span class="slider round"></span></label>
                <label class="switch"><input type="checkbox"><span class="slider round"></span></label>
                <label><input type="file"><span></span></label>
            </form>
        </div>

    </div>
    <div class="basket_pay-for-it">
        <div class="basket_pay-for-it_additionally-wrapper">
            <p class="basket_pay-for-it_additionally">Дополнительно</p>
            <p class="basket_pay-for-it_additionally_item">Сборка Лазурит 5 ст большой диван <span>470 ₽</span></p>
            <p class="basket_pay-for-it_additionally_item">Сборка Лазурит 5 ст большой диван<span>470 ₽</span></p>
            <hr class="basket_pay-for-it_line">
            <p class="basket_pay-for-it_total">Итого<span>90 500 ₽</span></p>
        </div>
        <button class="basket_pay-for-it_btn-check-in green-btn">Оформить заказ</button>
    </div>
</section>

<?php
$catalogData = [
    ['photo' => ['images/xn2sd9oi8sg0qb15dz4we23qm16lwz1v 1.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 41.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 42.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 43.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
];
?>

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

<?php
include __DIR__ . '/footer.php';
?>
