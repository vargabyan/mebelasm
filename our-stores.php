<?php
include __DIR__ . '/head.php';
?>

<?php
include __DIR__ . '/breadcrumb.php';
breadcrumb([['url' => '', 'name' => 'Магазины']]);
?>


<section class="container-core map-wrapper " data-map-wrapper data-page-type="our-stores">
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
