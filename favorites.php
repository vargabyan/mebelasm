<?php
include __DIR__ . '/head.php';
?>

<?php
include __DIR__ . '/breadcrumb.php';
breadcrumb([['url' => '', 'name' => 'Избранное']]);
?>

<h1 class="container-core site-header">Избранное</h1>

<?php
$catalogData = [
    ['photo' => 'images/xn2sd9oi8sg0qb15dz4we23qm16lwz1v 1.png', 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => 'images/image 41.png', 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => 'images/image 42.png', 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => 'images/image 43.png', 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => 'images/image 41.png', 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => 'images/image 41.png', 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => 'images/image 42.png', 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => 'images/image 43.png', 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => 'images/image 41.png', 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => 'images/image 41.png', 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => 'images/image 42.png', 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => 'images/image 43.png', 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => 'images/image 41.png', 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => 'images/image 41.png', 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => 'images/image 42.png', 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
    ['photo' => 'images/image 43.png', 'status' => 'Черная пятница', 'prices' => '45 000', 'old-prices' => '60 000', 'title' => 'Лазурит 5 ст большой диван'],
];

?>

<section class="container-core compare-product_no-products active" data-page-type="favorites">
    <p class="compare-product_no-products_title">Вы не добавили товар в избранное</p>
    <a class="compare-product_no-products_btn-go-to-catalog green-btn" href="/catalog.php">Перейти в каталог</a>
</section>

<section class="container-core compare-product active" data-page-type="favorites">
    <div class="container-core catalog" data-catalog-proucts-wrapper>
        <?php foreach ($catalogData as $item) { ?>

            <a class="catalog_item" href="/card-product.php" data-catalog-item data-page-type="favorites">
                <div class="catalog_item_gallery-wrapper">
                    <button class="catalog_item_add-to-favorites active" data-catalog-item-add-to-favorites></button>
                    <div class="catalog_item_slider-wrapper">
                        <div class="swiper-wrapper_item">
                            <img src="<?= $item['photo'] ?>" alt="">
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
    </div>

    <section class="container-core pagination-wrapper">
        <button class="btn-show-more" data-show-all-products>Показать еще</button>

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
</section>


<?php
include __DIR__ . '/footer.php';
?>
