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
        <?php for ($i = 0; $i < 3; $i++) { ?>
            <div class="basket_item" data-basket-item>
                <button class="basket_item_btn-open-modal-for-delete btn-ellipses mobile-version" data-btn-open-modal-additional-for-mobile></button>
                <div class="basket_item_content">
                    <div class="basket_item_img-wrapper">
                        <img class="basket_item_img" src="images/6488721d1c97c2b22d02f93991769f85.png" alt="">
                    </div>
                    <div class="basket_item_characteristic-wrapper">
                        <p class="basket_item_characteristic_product-name">Лазурит 5 ст большой диван</p>
                        <p class="basket_item_characteristic_available-date">Доступно для доставки<span>до 23 января</span></p>
                        <p class="basket_item_characteristic_color">Цвет<span style=""></span></p>
                        <p class="basket_item_characteristic_size">Размер<span>Д 180 Ш 200 В 220</span></p>
                        <p class="basket_item_prices mobile-version">45 000 ₽<span>60 000 ₽</span></p>
                    </div>
                    <div class="basket_item_quantity-wrapper">
                        <button class="basket_item_quantity-btn" data-basket-item-quantity-btn-decrement>-</button>
                        <p class="basket_item_quantity" data-basket-item-quantity-value>1</p>
                        <button class="basket_item_quantity-btn" data-basket-item-quantity-btn-increment>+</button>
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
                <p class="basket_item_characteristic_available-date mobile-version">Доступно для доставки<span>до 23 января</span></p>
                <div class="basket_item_btn-open-hidden-content" data-basket-item-btn-open-hidden-content>Размер и цвет</div>
                <div class="basket_item_color-wrapper-for-mobile" data-basket-item-content>
                    <p class="basket_item_characteristic_color">Цвет<span style=""></span></p>
                    <p class="basket_item_characteristic_size">Размер<span>Д 180 Ш 200 В 220</span></p>
                </div>
                <div class="basket_item_btn-open-hidden-content" data-basket-item-btn-open-hidden-content>Дополнительные услуги</div>
                <form action="" class="basket_item_form" data-basket-item-content>
                    <div class="basket_item_form_switch-wrapper">
                        <label class="basket_item_form_switch"><input type="checkbox"><span class="basket_item_form_slider"></span></label>
                        Сборка<span>+470 ₽</span>
                    </div>
                    <div class="basket_item_form_switch-wrapper">
                        <label class="basket_item_form_switch"><input type="checkbox" checked><span class="basket_item_form_slider"></span></label>
                        Погрузка / разгрузка<span>+2 000 ₽</span>
                    </div>
                    <button type="button" class="basket_item_form_file-wrapper" data-btn-add-complect>
                        Комплектующие
                    </button>
                </form>
            </div>
        <?php } ?>
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


<section class="container-core basket_we-recommend_header-wrapper">
    <h3 class="basket_we-recommend_header">Мы рекомендуем</h3>
    <a class="basket_we-recommend_see-all" href="">Смотреть все</a>
</section>

<?php
$catalogData = [
    ['photo' => ['images/xn2sd9oi8sg0qb15dz4we23qm16lwz1v 1.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 41.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 42.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 43.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
];
?>

<section class="container-core catalog" data-page-type="basket">
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


<section class="modal-additional-for-mobile" data-modal-additional-for-mobile>
    <div class="modal-additional-for-mobile_content">
        <div class="modal-additional-for-mobile_title-wrapper">
            <p class="modal-additional-for-mobile_title">Действия с товаром</p>
            <button class="modal-additional-for-mobile_btn-close" data-modal-additional-for-mobile-btn-close></button>
        </div>
        <div class="basket_item_action-wrapper">
            <button class="basket_item_action">В избранное</button>
            <button class="basket_item_action">Удалить</button>
        </div>
    </div>
</section>


<section class="modal-additional-wrapper" data-modal-additional-wrapper>
    <div class="modal-additional">
        <div class="modal-additional_title-wrapper">
            <p class="modal-additional_title">Добавить комплектующие</p>
            <button class="modal-additional_btn-close" data-modal-additional-btn-close></button>
        </div>
        <div class="modal-additional_items-wrapper">
            <?php for ($i = 0; $i < 4; $i++) { ?>
                <div class="modal-additional_item" data-modal-additional-item>
                    <img class="modal-additional_item_img" src="images/6488721d1c97c2b22d02f93991769f85.png" alt="">
                    <div class="modal-additional_item_description">
                        <p class="modal-additional_item_name">Флорида большой диван</p>
                        <p class="modal-additional_item_prices">25 990 ₽ <span>34 990 ₽</span></p>
                        <button class="modal-additional_item_btn-add" data-modal-additional-item-btn-add>добавить</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/footer.php';
?>
