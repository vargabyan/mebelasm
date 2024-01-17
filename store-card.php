<?php
include __DIR__ . '/head.php';
?>

<?php
include __DIR__ . '/breadcrumb.php';
breadcrumb([['url' => '', 'name' => 'Малые формы']]);
?>

<section>

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
    ['photo' => ['images/image 43.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'], ['photo' => ['images/image 41.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
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

<section class="container-core pagination-wrapper">
    <button class="btn-show-more">Показать еще</button>

    <div class="pagination">
        <div class="pagination_item-wrapper">
            <button class="pagination_item pagination_btn-prev"></button>
            <ul>
                <li><a class="pagination_item active" href="">1</a></li>
                <li><a class="pagination_item" href="">2</a></li>
                <li><a class="pagination_item" href="">3</a></li>
                <li><a class="pagination_item" href="">4</a></li>
                <li><p class="pagination_item">...</p></li>
                <li><a class="pagination_item" href="">12</a></li>
            </ul>
            <button class="pagination_item pagination_btn-next"></button>
        </div>
        <button class="pagination_btn-show-more">Показывать по 24</button>
    </div>
</section>


<?php
$review_data = [
    ['name' => 'Мария Н.', 'photo' => 'images/9c43ca130cef444d38465c21b41edf2f.png', 'color_product' => 'бежевый', 'date' => '12 июня. 2023', 'comment' => 'Диван аккуратный, удобный, мягкий. Привезли вовремя, менеджеры, сборщики всё молодцы. Нужен был как раз небольшой на кухню.', 'comment_photo' => 'images/04e79e6283bf03913bb8d8ffaef7f40e.png', 'quality' => 5, 'service' => 2, 'correspondence' => 3],
    ['name' => 'Мария Н.', 'photo' => 'images/9c43ca130cef444d38465c21b41edf2f.png', 'color_product' => 'бежевый', 'date' => '12 июня. 2023', 'comment' => 'Диван аккуратный, удобный, мягкий. Привезли вовремя, менеджеры, сборщики всё молодцы. Нужен был как раз небольшой на кухню.', 'comment_photo' => 'images/04e79e6283bf03913bb8d8ffaef7f40e.png', 'quality' => 5, 'service' => 2, 'correspondence' => 3],
]
?>

<div class="container-core card-review" data-page-type="store-card">
    <div class="cart-review_header-wrapper">
        <h3 class="cart-review_header">Отзывы <span>4</span></h3>
        <button class="cart-review_btn-write-review">Написать отзыв</button>
    </div>

    <div class="cart-review_item-wrapper">
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
    <a class="card-review_btn-show-more-review" href="">Показать больше отзывов</a>
</div>


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

<section class="container-core seo show-more" data-seo-wrapper>
    <h3 class="seo_title">Headline for seo-text</h3>
    <div class="seo-tex-wrapper">
        <p class="seo_text close" data-seo-text>Real estate is not just houses, apartments or commercial properties. It is the place where we live,
            work and develop. It is a space that provides comfort, security and coziness for each of us. In this section you
            will find everything related to real estate - from renting apartments to buying mansions, from investing in real
            estate to getting a mortgage loan. We offer you only proven and reliable options so that you can choose exactly
            what is right for you and your family. With us your real estate will become a reality!
        </p>
        <button class="seo_btn-show-all" data-seo-btn-show-all>Show all</button>
    </div>
</section>


<?php
include __DIR__ . '/footer.php';
?>
