<?php
include __DIR__ . '/head.php';
?>

<section class="container-core home-core-slider-wrapper">
    <div class="home-core-slider_pc">
        <div class="home-core-slider_offer">
            <p class="home-core-slider_offer_text">
                Скидки до 50% <br> на диваны
                <span>Новогодняя распродажа</span>
            </p>
            <a class="home-core-slider_offer_detail" href="">Подробнее</a>
        </div>
        <div class="swiper home-core-slider_swiper">
            <div class="swiper-wrapper">
                <?php for($i = 0; $i < 5; $i++) { ?>
                    <div class="swiper-slide">
                        <div class="home-core-slider-item">
                            <img src="/images/40ffc326f5a1c0f4f8cb5141d439db0c.jpeg" alt="">
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="home-core-slider_btn-and-pagination-wrapper">
                <div class="home-core-slider_prev"></div>
                <div class="swiper-pagination"></div>
                <div class="home-core-slider_next"></div>
            </div>
        </div>
    </div>
    <div class="home-core-slider_mobile">
        <?php for($i = 0; $i < 5; $i++) { ?>
            <a class="home-core-slider_mobile_item-wrapper" href="">
                <div class="home-core-slider_mobile_item">
                    <div class="home-core-slider_mobile_img-wrapper">
                        <img src="/images/40ffc326f5a1c0f4f8cb5141d439db0c.jpeg" alt="">
                    </div>
                    <p class="home-core-slider_mobile_text">
                        Скидки до 50% на диваны
                        <span>Новогодняя распродажа</span>
                    </p>
                </div>
            </a>
        <?php } ?>
    </div>
</section>

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

<div class="container-core category-and-catalog_header-wrapper" data-page-type="home">
    <h1 class="category-and-catalog_header">Категории</h1>
    <a class="category-and-catalog_see-all" href="/store-card.php">Смотреть все</a>
</div>

<section class="container-core category" data-page-type="home">
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
    <a class="category-and-catalog_see-all" href="/category.php">Смотреть все</a>
</div>

<section class="container-core catalog">
    <?php foreach ($catalogData as $item) { ?>

        <a class="catalog_item" href="/card-product.php" data-catalog-item>
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

<?php
$we_offer = [
    ['title' => 'Гарантия до 18 месяцев', 'image' => '/images/free-icon-shield-8307847 1.png'],
    ['title' => 'Гибкая система <br> скидок', 'image' => '/images/free-icon-percentage-1055214 1.png'],
    ['title' => 'Собственное <br> производство', 'image' => '/images/free-icon-sofa-2887417 1.png'],
    ['title' => 'Мебель <br> по ГОСТУ', 'image' => '/images/layer.png"'],
]
?>

<section class="container-core we-offer">
    <?php foreach ($we_offer as $item) { ?>
        <div class="we-offer_item">
            <p class="we-offer_title"><?= $item['title'] ?></p>
            <img class="we-offer_img" src="<?= $item['image'] ?>" alt="">
        </div>
    <?php } ?>
</section>



<section class="container-core map-wrapper " data-map-wrapper>
    <h1 class="map_header site-header">Наши магазины</h1>
    <div class="map">
        <div class="map-and-list">
            <button class="map-and-list_item active" data-select-map><span>На карте</span></button>
            <button class="map-and-list_item" data-select-list><span>Списком</span></button>
        </div>
        <div class="map_cities-and-other-wrapper">
            <div class="map_cities_pc">
                <a class="map_cities_pc_item active" href="">Екатеринбург</a>
                <a class="map_cities_pc_item" href="">Нижневартовск</a>
                <a class="map_cities_pc_item" href="">Ханты-Мансийск</a>
                <a class="map_cities_pc_item" href="">Челябинск</a>
            </div>
            <label class="map_cities_mobile" data-selection-city-wrapper-label>
                <span data-selection-city-label-value>
                    Екатеринбург
                </span>
                <select class="map_cities_mobile_items-wrapper" name="" id="" data-selection-city>
                    <option value="">Екатеринбург</option>
                    <option value="">Нижневартовск</option>
                    <option value="">Ханты-Мансийск</option>
                    <option value="">Челябинск</option>
                </select>
            </label>
            <div class="map_chart-wrapper active" data-content-map>
                <section class="map-store-item-container" data-map-store-item-container>
                    <div class="map-store-item-wrapper">
                        <button class="map-store-item_btn-open" data-map-store-item-btn-open></button>
                        <div class="map-store-item" data-map-store-item>
                            <img class="map-store-item_img" src="/images/Component%2041.png" alt="">
                            <div class="map-store-item_content">
                                <div class="map-store-item_head-wrapper">
                                    <div class="map-store-item_title-wrapper">
                                        <h1 class="map-store-item_title">Асм-мебель</h1>
                                        <button class="map-store-item_btn-cancel" data-map-store-item-btn-cancel></button>
                                    </div>
                                    <p class="map-store-item_subtitle">
                                        ТРЦ «Сургут Сити Молл», Югорский тракт, 38, Сургут
                                    </p>
                                </div>
                                <div class="map-store-item_btn-wrapper">
                                    <a class="map-store-item_btn" href="">Подробнее</a>
                                    <a class="map-store-item_btn" href="">Каталог</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <iframe class="map_chart" src="https://yandex.ru/map-widget/v1/?um=constructor%3A10eef986681734feab3b80015657da25d13c89ec382418a3a4980545fc42e8a5&amp;source=constructor"
                        width="100%" height="800" frameborder="0"></iframe>
            </div>
            <div class="map_list-wrapper" data-content-city-list>
                <?php for ($i = 0; $i < 12; $i++) { ?>
                <div class="map_list_item">
                    <img class="map_list_item_img" src="/images/Component%2041.png" alt="">
                    <div class="map_list_item_description">
                        <p class="map_list_item_title">ТД «РИМ», ул. Окружная 5</p>
                        <div class="map_list_item_other">
                            <p class="map_list_item_grade">5.0</p>
                            <p class="map_list_item_user-selection">Выбор пользователей</p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/footer.php';
?>
