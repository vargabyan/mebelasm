<?php
include __DIR__ . '/head.php';
?>

<?php
include __DIR__ . '/breadcrumb.php';
breadcrumb([['url' => '', 'name' => 'Малые формы']]);
?>


<?php
$categoryData = [
    ['photo' => 'images/xn2sd9oi8sg0qb15dz4we23qm16lwz1v%201.png', 'title' => 'Диваны и кресла'],
    ['photo' => 'images/xn2sd9oi8sg0qb15dz4we23qm16lwz1v%201.png', 'title' => 'Прямые диваны'],
    ['photo' => 'images/xn2sd9oi8sg0qb15dz4we23qm16lwz1v%201.png', 'title' => 'Угловые диваны'],
    ['photo' => 'images/xn2sd9oi8sg0qb15dz4we23qm16lwz1v%201.png', 'title' => 'Модульные диваны'],
    ['photo' => 'images/xn2sd9oi8sg0qb15dz4we23qm16lwz1v%201.png', 'title' => 'Кресла'],
];
?>

<h1 class="container-core site-header">Малые формы</h1>

<section class="container-core filter-category" data-page="home">
    <?php foreach ($categoryData as $item) { ?>

        <a class="filter-category_item" href="">
            <div class="filter-category_img-wrapper">
                <img class="filter-category_img" src="<?= $item['photo'] ?>" alt="">
            </div>
            <p class="filter-category_title"><?= $item['title'] ?></p>
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
    ['photo' => ['images/image 43.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'], ['photo' => ['images/image 41.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 41.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 42.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => ['images/image 43.png'], 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
];
?>

<section class="container-core filter-catalog">
    <ul class="filter-catalog_pc">
        <li>
            <button class="filter-catalog_item">Категория</button>
        </li>
        <li>
            <button class="filter-catalog_item">Сначала популярные</button>
        </li>
        <li>
            <button class="filter-catalog_item">Ткань</button>
        </li>
        <li>
            <button class="filter-catalog_item">Цвет</button>
        </li>
        <li>
            <button class="filter-catalog_item">Цена</button>
        </li>
        <li>
            <button class="filter-catalog_item">Размер</button>
        </li>
        <li>
            <button class="filter-catalog_item">Размер</button>
        </li>
        <li>
            <button class="filter-catalog_btn-show-all">Показать все</button>
        </li>
    </ul>
    <ul class="filter-catalog_mobile">
        <li>
            <button class="filter-catalog_item">Категория</button>
        </li>
        <li>
            <button class="filter-catalog_item">По умолчанию</button>
        </li>
        <li>
            <button class="filter-catalog_btn-filter"></button>
        </li>
    </ul>
</section>

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
