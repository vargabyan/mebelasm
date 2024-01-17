<?php
include __DIR__ . '/head.php';
?>

<?php
include __DIR__ . '/breadcrumb.php';
breadcrumb([['url' => '', 'name' => 'Каталог']]);
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
    ['photo' => 'images/image 41.png', 'title' => 'Прямые диваны'],
    ['photo' => 'images/image 41.png', 'title' => 'Прямые диваны'],
    ['photo' => 'images/image 42.png', 'title' => 'Угловые диваны'],
    ['photo' => 'images/image 43.png', 'title' => 'Модульные диваны'],
    ['photo' => 'images/image 44.png', 'title' => 'Кресла и пуфы'],
];
?>

<div class="container-core sale">
    <p class="sale-text">Распродажа <span>До –30%</span></p>
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
include __DIR__ . '/footer.php';
?>
