<?php
include __DIR__ . '/head.php';
?>

<?php
include __DIR__ . '/breadcrumb.php';
breadcrumb([['url' => '', 'name' => 'Контакты']]);
?>

<section class="container-core contacts-page">
    <h1 class="site-header contacts-page_basket_header">Контакты</h1>

    <div class="contacts-page_tag-wrapper" data-contacts-page_tag-wrapper>
        <button class="active">АСМ-мебель</button>
        <button>HEO</button>
        <button>«Классик» Фабрика мебели</button>
        <button>ArtSofa</button>
        <button>«АСМ-Элегант» Фабрика мебели</button>
        <button>«Релакс» Фабрика матрасов и кроватей</button>
        <button>ОАО Агроспецмонтаж</button>
        <button>«Модуль» Мебельная фабрика</button>
        <button>АСМ Мебельный Формат</button>
    </div>
    <button class="contacts-page_btb-more-tag" data-btn-open-modal-additional-for-mobile>Еще 6 компаний</button>

    <div class="contacts-page_content">
        <?php for ($i = 0; $i < 12; $i++) { ?>
            <div class="contacts-page_item">
                <img class="contacts-page_item_img" src="images/afcc6ed113096bfb07deb93865a07e69.png" alt="">
                <div class="contacts-page_item_text-wrapper">
                    <p class="contacts-page_item_address">ТД «РИМ», ул. Окружная 5</p>
                    <a class="contacts-page_item_tel" href="tel:8-922-035-31-28">8-922-035-31-28</a>
                    <p class="contacts-page_item_working-hours">
                        Режим работы
                        <span>с 10:00 до 20:00</span>
                    </p>
                </div>
            </div>
        <?php } ?>
    </div>
</section>


<section class="modal-additional-for-mobile" data-modal-additional-for-mobile>
    <div class="modal-additional-for-mobile_content">
        <div class="modal-additional-for-mobile_title-wrapper">
            <p class="modal-additional-for-mobile_title">Другие компании</p>
            <button class="modal-additional-for-mobile_btn-close" data-modal-additional-for-mobile-btn-close></button>
        </div>
        <div class="basket_item_action-wrapper">
            <div class="contacts-page_modal-for-mobile_label-wrapper">
                «АСМ-Элегант» Фабрика мебели
                <label class="contacts-page_modal-for-mobile_label" data-contacts-page_modal-for-mobile_label>
                    <input type="radio" checked="checked" name="radio">
                    <span class="contacts-page_modal-for-mobile_checkmark"></span>
                </label>
            </div>
            <div class="contacts-page_modal-for-mobile_label-wrapper">
                «Релакс» Фабрика матрасов и кроватей
                <label class="contacts-page_modal-for-mobile_label" data-contacts-page_modal-for-mobile_label>
                    <input type="radio" name="radio">
                    <span class="contacts-page_modal-for-mobile_checkmark"></span>
                </label>
            </div>
            <div class="contacts-page_modal-for-mobile_label-wrapper">
                ОАО Агроспецмонтаж
                <label class="contacts-page_modal-for-mobile_label" data-contacts-page_modal-for-mobile_label>
                    <input type="radio" name="radio">
                    <span class="contacts-page_modal-for-mobile_checkmark"></span>
                </label>
            </div>
            <div class="contacts-page_modal-for-mobile_label-wrapper">
                «Модуль» Мебельная фабрика
                <label class="contacts-page_modal-for-mobile_label" data-contacts-page_modal-for-mobile_label>
                    <input type="radio" name="radio">
                    <span class="contacts-page_modal-for-mobile_checkmark"></span>
                </label>
            </div>
            <div class="contacts-page_modal-for-mobile_label-wrapper">
                АСМ Мебельный Формат
                <label class="contacts-page_modal-for-mobile_label" data-contacts-page_modal-for-mobile_label>
                    <input type="radio" name="radio">
                    <span class="contacts-page_modal-for-mobile_checkmark"></span>
                </label>
            </div>
        </div>
    </div>
</section>


<?php
include __DIR__ . '/footer.php';
?>
