<?php
include __DIR__ . '/head.php';
?>

<?php
include __DIR__ . '/breadcrumb.php';
breadcrumb([['url' => '', 'name' => 'Каталог'], ['url' => '', 'name' => 'Малые формы'], ['url' => '', 'name' => 'Диваны и кресла'], ['url' => '', 'name' => 'Флорида большой диван']]);
?>

<?php
$images = [
    'images/6488721d1c97c2b22d02f93991769f85.png',
    'images/05db773c1b838a8b292d2bb4efb549a1.png',
    'images/7b5b5eb0daa2fb6dcd454ead6cfd0d34.png',
    'images/8710d63614d98bc494f1e4d7b04bfc58.png',
    'images/333047c1dc9ded55056047c7b6b26fb8.png',
    'images/f33f4a1d7bdacb9fd523319eb39de0e4.png',
]
?>

<h1 class="container-core site-header">Флорида большой диван</h1>

<section class="container-core card-product-wrapper">
    <div class="card-product_grade-wrapper">
        <div class="card-product_grade">
            <div class="card-product_grade_stars">
                <div class="card-product_grade_stars-item active"></div>
                <div class="card-product_grade_stars-item active"></div>
                <div class="card-product_grade_stars-item active"></div>
                <div class="card-product_grade_stars-item active"></div>
                <div class="card-product_grade_stars-item"></div>
                <p class="card-product_grade_stars-value">5.0</p>
            </div>
            <button class="card-product_grade_share">Поделиться</button>
            <button class="card-product_grade_add-favorites">Добавить к сравнению</button>
        </div>
        <p class="card-product_product-code">Артикул товара: 24500000</p>
    </div>

    <div class="card-product">
        <div class="card-product_sliders-wrapper">
            <div class="swiper card-product_thumbsSlider">
                <div class="swiper-wrapper">
                    <?php foreach ($images as $item) { ?>
                        <div class="swiper-slide">
                            <div class="card-product_thumbsSlider_item">
                                <img src="<?= $item ?>" alt=""/>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-product_thumbsSlider_item">
                                <img src="<?= $item ?>" alt=""/>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="swiper card-product_swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($images as $item) { ?>
                        <div class="swiper-slide">
                            <div class="swiper-zoom-container">
                                <div class="card-product_swiper_item">
                                    <img src="<?= $item ?>" alt=""/>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-zoom-container">
                                <div class="card-product_swiper_item">
                                    <img src="<?= $item ?>" alt=""/>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="card-about_card-product">
            <div class="card-about_card-product_size-and-colors">
                <div class="card-about_card-product_size-wrapper">
                    <div class="card-about_card-product_size_text-wrapper">
                        <div class="card-about_card-product_size_text-items">
                            <p class="card-about_card-product_size_text-item">Размер</p>
                            <p class="card-about_card-product_size_text-item">Длина х Ширина х Высота</p>
                        </div>
                        <p class="card-about_card-product_size_text">На картинке</p>
                    </div>
                    <div class="card-about_card-product_size" data-card-about-card-product-size>
                        <div class="card-about_card-product_size_item active" data-card-about-card-product-size-item>160 х 160 х 200</div>
                        <div class="card-about_card-product_size_item" data-card-about-card-product-size-item>180 х 200 х 220</div>
                        <div class="card-about_card-product_size_item" data-card-about-card-product-size-item>160 х 180 х 240</div>
                    </div>
                </div>
                <div class="card-about_card-product_colors">
                    <p class="card-about_card-product_colors_text">Цвет: Оранжевый</p>
                    <div class="card-about_card-product_colors_items" data-card-about-card-product-colors-items>
                        <div class="card-about_card-product_colors_item active" data-card-about-card-product-colors-item></div>
                        <div class="card-about_card-product_colors_item" data-card-about-card-product-colors-item></div>
                        <div class="card-about_card-product_colors_item" data-card-about-card-product-colors-item></div>
                    </div>
                </div>
            </div>
            <div class="card-about_card-product_adds-and-prices">
                <div class="card-about_card-product_prices">
                    <p class="card-about_card-product_prices-with-sber-cart"><span>25 990 ₽</span>С картой</p>
                    <div class="card-about_card-product_prices_without-sber-cart">
                        <p class="card-about_card-product_prices_without">30 990 ₽</p>
                        <p class="card-about_card-product_prices_discount"><span>34 990 ₽</span>Без карты</p>
                    </div>
                </div>
                <div class="card-about_card-product_btn-wrapper">
                    <button class="card-about_card-product_btn-add-basket">Добавить в корзину</button>
                    <button class="card-about_card-product_btn-order">Сделать предзаказ</button>
                    <button class="card-about_card-product_btn-installment-plan">В рассрочку, 0%</button>
                </div>
                <div class="card-about_card-product_btn-other-wrapper">
                    <button class="card-about_card-product_btn-favorite">В избранное</button>
                    <button class="card-about_card-product_btn-get-notifications">Узнать о снижении цены</button>
                </div>
            </div>
            <p class="card-about_card-product_in-stock">В наличии в 2 магазинах</p>
            <div class="card-about_card-product_stores">
                <div class="card-about_card-product_store_item">
                    <p class="card-about_card-product_store_text"><span>АСМ-Мебель</span> Вся мебель из этого магазина
                    </p>
                </div>
            </div>
        </div>

        <?php
        $review_data = [
            ['name' => 'Мария Н.', 'photo' => 'images/9c43ca130cef444d38465c21b41edf2f.png', 'color_product' => 'бежевый', 'date' => '12 июня. 2023', 'comment' => 'Диван аккуратный, удобный, мягкий. Привезли вовремя, менеджеры, сборщики всё молодцы. Нужен был как раз небольшой на кухню.', 'comment_photo' => 'images/04e79e6283bf03913bb8d8ffaef7f40e.png', 'quality' => 5, 'service' => 2, 'correspondence' => 3],
            ['name' => 'Мария Н.', 'photo' => 'images/9c43ca130cef444d38465c21b41edf2f.png', 'color_product' => 'бежевый', 'date' => '12 июня. 2023', 'comment' => 'Диван аккуратный, удобный, мягкий. Привезли вовремя, менеджеры, сборщики всё молодцы. Нужен был как раз небольшой на кухню.', 'comment_photo' => 'images/04e79e6283bf03913bb8d8ffaef7f40e.png', 'quality' => 5, 'service' => 2, 'correspondence' => 3],
        ]
        ?>

        <div class="card-review">
            <div class="cart-review_header-wrapper">
                <h3 class="cart-review_header">Отзывы <span>4</span></h3>
                <button class="cart-review_btn-write-review">Написать отзыв</button>
            </div>

            <?php foreach ($review_data as $review_item) { ?>
                <div class="cart-review_item">
                    <div class="cart-review_grade">

                        <div class="cart-review_grade_item">
                            <p class="cart-review_grade_item_names">Качество<span><?= $review_item['quality'] ?></span>
                            </p>
                            <div class="cart-review_stars">
                                <?php for ($i = 0; $i < 5; $i++) {
                                    if ($i < $review_item['quality']) {
                                        ?>
                                        <div class="cart-review_star active"></div>
                                    <?php } else {
                                        ?>
                                        <div class="cart-review_star"></div>
                                        <?php
                                    }
                                } ?>
                            </div>
                        </div>
                        <div class="cart-review_grade_item">
                            <p class="cart-review_grade_item_names">Сервис<span><?= $review_item['service'] ?></span>
                            </p>
                            <div class="cart-review_stars">
                                <?php for ($i = 0; $i < 5; $i++) {
                                    if ($i < $review_item['service']) {
                                        ?>
                                        <div class="cart-review_star active"></div>
                                    <?php } else {
                                        ?>
                                        <div class="cart-review_star"></div>
                                        <?php
                                    }
                                } ?>
                            </div>
                        </div>
                        <div class="cart-review_grade_item">
                            <p class="cart-review_grade_item_names">
                                Соответствие<span><?= $review_item['correspondence'] ?></span></p>
                            <div class="cart-review_stars">
                                <?php for ($i = 0; $i < 5; $i++) {
                                    if ($i < $review_item['correspondence']) {
                                        ?>
                                        <div class="cart-review_star active"></div>
                                    <?php } else {
                                        ?>
                                        <div class="cart-review_star"></div>
                                        <?php
                                    }
                                } ?>
                            </div>
                        </div>

                    </div>
                    <div class="cart-review_person-data-wrapper">
                        <div class="cart-review_person">
                            <img class="cart-review_person-img" src="<?= $review_item['photo'] ?>" alt="">
                            <p class="cart-review_person-name"><?= $review_item['name'] ?></p>
                        </div>
                        <div class="cart-review_date-wrapper">
                            <p class="cart-review_color-product">Цвет: <?= $review_item['color_product'] ?></p>
                            <p class="cart-review_date"><?= $review_item['date'] ?></p>
                        </div>
                    </div>
                    <div class="cart-review_comment-wrapper">
                        <p class="cart-review_comment"><?= $review_item['comment'] ?></p>
                        <img class="cart-review_photo-product" src="<?= $review_item['comment_photo'] ?>" alt="">
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="card-descriptions" data-card-descriptions-wapper>
            <div class="card-descriptions_btn-wrapper">
                <button class="card-descriptions_btn active" data-description-btn>Описание</button>
                <button class="card-descriptions_btn" data-description-btn>Характеристики</button>
                <button class="card-descriptions_btn" data-description-btn>Наличие</button>
                <button class="card-descriptions_btn" data-description-btn>Оплата и рассрочка</button>
                <button class="card-descriptions_btn" data-description-btn>Доставка и гарантия</button>
            </div>
            <div class="card-descriptions_content">
                <div class="card-descriptions_content_item active" data-content-description-item>
                    <img class="card-descriptions_content_item_video" src="images/62a89cbe61d67fd65d0da30dbc4ffd44.png" alt="">
                    <p class="card-descriptions_content_item_text">
                        Данная модель предусмотрена в первую очередь для небольших помещений, благодаря своим маленьким
                        размерам мебель разместится в любой части квартиры. Диван займет мало место, и при этом выполнит
                        все свои функции.
                        <br>
                        <br>
                        Модель Флорида БД практична, совмещает в себе место для сна и отдыха. В дневное время диван
                        располагает гостей, удобен для просмотра телевизора. А ночью разложив конструкцию, образуется
                        полноценное спальное место.
                        <br>
                        <br>
                        Весомый аргумент - лёгкая трансформация. Разложить диван сможет даже ребенок. Поэтому эта модель
                        популярна и для детских комнат.
                        <br>
                        <br>
                        <span>
                            Товар представлен на сайте через фото-образцы. Все материалы, представленные на сайте, носят
                        справочный характер и не могут в полной мере передавать информацию о характеристиках товара,
                        включая цвета, размеры и формы.
                        </span>
                    </p>
                </div>
                <div class="card-descriptions_content_item" data-content-description-item></div>
                <div class="card-descriptions_content_item" data-content-description-item></div>
                <div class="card-descriptions_content_item" data-content-description-item></div>
                <div class="card-descriptions_content_item" data-content-description-item></div>
            </div>
        </div>

        <div class="card-Cheaper-as-set">
            <div class="card-Cheaper-as-set_header-wrapper">
                <p class="card-Cheaper-as-set_header"> Комплектом дешевле <span>Выгода 30 000 ₽</span></p>
            </div>
            <div class="card-Cheaper-as-set_content">
                <div class="card-Cheaper-as-set_items-wrapper">
                    <?php for ($i = 0; $i < 3; $i++) { ?>
                        <div class="card-Cheaper-as-set_item">
                            <div class="card-Cheaper-as-set_item_img-wrapper">
                                <img class="card-Cheaper-as-set_item_img" src="images/6488721d1c97c2b22d02f93991769f85.png" alt="">
                            </div>
                            <p class="card-Cheaper-as-set_item_text">25 990 ₽ <span>Подушка</span></p>
                        </div>
                    <?php } ?>
                </div>
                <div class="card-Cheaper-as-set_other">
                    <p class="card-Cheaper-as-set_other_price"><span>36 239 ₽</span> 36 990 ₽</p>
                    <button class="card-Cheaper-as-set_btn-add green-btn">Добавить</button>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="container-core type-of-sofas ">
    <a class="type-of-sofas_link" href="">Диван для</a>
    <a class="type-of-sofas_link" href="">Диван угловой</a>
    <a class="type-of-sofas_link" href="">Диван прямой</a>
    <a class="type-of-sofas_link" href="">Пуфик матовый</a>
</section>

<?php
$catalogData = [
    ['photo' => ['images/xn2sd9oi8sg0qb15dz4we23qm16lwz1v 1.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 41.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 42.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 43.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
];
?>

<div class="container-core category-and-catalog_header-wrapper" data-page-type="card-product">
    <h1 class="site-header">Похожие товары</h1>
    <a class="card-product-add-btn" href="">Перейти в каталог</a>
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

<?php
$catalogData = [
    ['photo' => ['images/xn2sd9oi8sg0qb15dz4we23qm16lwz1v 1.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 41.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 42.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 43.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
];
?>

<div class="container-core category-and-catalog_header-wrapper" data-page-type="card-product">
    <h1 class="site-header">Вы недавно смотрели</h1>
    <a class="card-product-add-btn" href="">Добавить все в избранное</a>
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


<?php
$question_and_answer = [
    ['question' => 'Как узнать стоимость мебели?', 'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate delectus distinctio doloribus'],
    ['question' => 'Как узнать стоимость мебели?', 'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate delectus distinctio doloribus'],
    ['question' => 'Как узнать стоимость мебели?', 'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate delectus distinctio doloribus'],
];
?>

<section class="container-core questions-and-answer show-more">
    <?php foreach ($question_and_answer as $item) { ?>
        <div class="questions-and-answer_item" data-questions-and-answer-item>
            <div class="questions-and-answer_item-question" data-questions-and-answer-question><?= $item['question'] ?></div>
            <div class="questions-and-answer_item-answer" data-questions-and-answer-answer><?= $item['answer'] ?></div>
        </div>
    <?php } ?>
    <div class="questions-and-answer_item">
        <button class="questions-and-answer_btn-show-more">Показать больше</button>
    </div>
</section>

<?php
include __DIR__ . '/footer.php';
?>
