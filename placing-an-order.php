<?php
include __DIR__ . '/head.php';
?>

<section class="container-core placing-an-order">
    <div class="placing-an-order_breadcrumb-wrapper">
        <?php
        include __DIR__ . '/breadcrumb.php';
        breadcrumb([['url' => '/basket', 'name' => 'Корзина'], ['url' => '', 'name' => 'Оформление заказа']]);
        ?>
        <div class="placing-an-order_header-wrapper">
            <h1 class="site-header">Оформление заказа</h1>
            <a class="placing-an-order_go-to-back-in-the-basket" href="">Вернуться в корзину</a>
        </div>
    </div>

    <form class="placing-an-order_form" action="">
        <div class="placing-an-order_conditions-wrapper">
            <div class="placing-an-order_conditions">
                <h3 class="placing-an-order_conditions_title">Условия доставки</h3>

                <div class="placing-an-order_conditions_item-wrapper" data-placing-an-order-conditions-item-wrapper>
                    <div class="placing-an-order_conditions_item active" data-placing-an-order-conditions-item>
                        <div class="placing-an-order_conditions_item_radio-wrapper">
                            <label class="placing-an-order_conditions_radio-container">
                                <input type="radio" checked="checked" name="radio-delivery" data-placing-an-order-conditions-radio-container-input>
                                <span class="placing-an-order_conditions_checkmark"></span>
                            </label>
                            <p class="placing-an-order_conditions_item_actions">Самовывоз<span>Сегодня</span></p>
                            <p class="placing-an-order_conditions_item_price">Бесплатно</p>
                        </div>
                        <div class="placing-an-order_conditions_item_address-wrapper">
                            <p class="placing-an-order_conditions_item_address">ТРЦ «Сургут Сити Молл», Югорский тракт, 38, Сургут</p>
                            <button type="button" class="placing-an-order_conditions_item_change-address" data-placing-an-order-map-btn-open>Изменить</button>
                        </div>
                    </div>
                    <div class="placing-an-order_conditions_item" data-placing-an-order-conditions-item>
                        <div class="placing-an-order_conditions_item_radio-wrapper">
                            <label class="placing-an-order_conditions_radio-container">
                                <input type="radio" name="radio-delivery" data-placing-an-order-conditions-radio-container-input>
                                <span class="placing-an-order_conditions_checkmark"></span>
                            </label>
                            <p class="placing-an-order_conditions_item_actions">Доставка<span>С 23 сентября</span></p>
                            <p class="placing-an-order_conditions_item_price"> от 750 ₽ </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="map-wrapper" data-page-type="placing-an-order" data-placing-an-order-map-btn-open-map-wrapper>
                <h3 class="map_header placing-an-order_conditions_title">Выберите магазин</h3>
                <div class="map">
                    <div class="map_cities-and-other-wrapper">
                        <div class="map_cities_pc">
                            <a class="map_cities_pc_item active" href="">Екатеринбург</a>
                            <a class="map_cities_pc_item" href="">Нижневартовск</a>
                            <a class="map_cities_pc_item" href="">Ханты-Мансийск</a>
                            <a class="map_cities_pc_item" href="">Челябинск</a>
                        </div>
                        <div class="placing-an-order_map_mobile-header-wrapper">
                            <div class="placing-an-order_map_mobile-btn-wrapper">
                                <h3 class="placing-an-order_map_mobile-header">Выберите магазин</h3>
                                <button type="button" class="placing-an-order_map_mobile-btn-close modal-additional-for-mobile_btn-close" data-placing-an-order-map-btn-close></button>
                            </div>
                            <p class="placing-an-order_map_text">В этом магазине забронируется товар до вашего получения</p>
                        </div>
                        <div class="map_chart-wrapper" data-content-map>
                            <iframe class="map_chart" src="https://yandex.ru/map-widget/v1/?um=constructor%3A10eef986681734feab3b80015657da25d13c89ec382418a3a4980545fc42e8a5&amp;source=constructor"
                                    width="100%" height="800" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="placing-an-order_conditions">
                <h3 class="placing-an-order_conditions_title">Оплата</h3>
                <div class="placing-an-order_conditions_item-wrapper" data-placing-an-order-conditions-item-wrapper>
                    <div class="placing-an-order_conditions_item active" data-placing-an-order-conditions-item>
                        <div class="placing-an-order_conditions_item_radio-wrapper">
                            <label class="placing-an-order_conditions_radio-container">
                                <input type="radio" checked="checked" name="radio-payment" data-placing-an-order-conditions-radio-container-input>
                                <span class="placing-an-order_conditions_checkmark"></span>
                            </label>
                            <p class="placing-an-order_conditions_item_actions">Наличные<span>При получении</span></p>
                        </div>
                    </div>
                    <div class="placing-an-order_conditions_item" data-placing-an-order-conditions-item>
                        <div class="placing-an-order_conditions_item_radio-wrapper">
                            <label class="placing-an-order_conditions_radio-container">
                                <input type="radio" name="radio-payment" data-placing-an-order-conditions-radio-container-input>
                                <span class="placing-an-order_conditions_checkmark"></span>
                            </label>
                            <p class="placing-an-order_conditions_item_actions">По карте</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="placing-an-order_conditions_buyer-data">
                <h3 class="placing-an-order_conditions_title">Покупатель</h3>
                <div class="placing-an-order_conditions_buyer-data_input-wrapper">
                    <label><input type="text" placeholder="Имя"></label>
                    <label><input type="text" placeholder="Телефон"></label>
                    <label><input type="text" placeholder="Почта (для электронного чека)"></label>
                </div>
            </div>
        </div>

        <div class="placing-an-order_goods-at-the-basket">
            <div class="placing-an-order_goods-at-the-basket_item-wrapper">
                <p class="placing-an-order_goods-at-the-basket_header">Товары в корзине</p>

                <div class="placing-an-order_goods-at-the-basket_item">
                    <img class="placing-an-order_goods-at-the-basket_item_img" src="" alt="">
                    <p class="placing-an-order_goods-at-the-basket_item_price">45 000 ₽<span>60 000 ₽</span></p>
                </div>
                <div class="placing-an-order_goods-at-the-basket_item">
                    <img class="placing-an-order_goods-at-the-basket_item_img" src="" alt="">
                    <p class="placing-an-order_goods-at-the-basket_item_price">45 000 ₽<span>60 000 ₽</span></p>
                </div>
                <div class="placing-an-order_goods-at-the-basket_item">
                    <img class="placing-an-order_goods-at-the-basket_item_img" src="" alt="">
                    <p class="placing-an-order_goods-at-the-basket_item_price">45 000 ₽<span>60 000 ₽</span></p>
                </div>

            </div>
            <hr class="placing-an-order_goods-at-the-basket_line">
            <p class="placing-an-order_total-prices">Итого<span>90 500 ₽</span></p>
            <label>
                <input class="placing-an-order_btn-submit green-btn" disabled type="submit" value="Оформить заказ">
            </label>
        </div>
    </form>
</section>

<?php
include __DIR__ . '/footer.php';
?>
