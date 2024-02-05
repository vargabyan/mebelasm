<?php
include __DIR__ . '/head.php';
?>

<section class="container-core">
    <div class="success-page">
        <div class="success-page_logo"></div>
        <h1 class="success-page_title">Заказ <span>№ 124 573</span> оформлен</h1>
        <p class="success-page_sub-title">С вами свяжется менеджер для уточнения деталей заказа.</p>
        <div class="success-page_grade-wrapper" data-success-page-grade-wrapper>
            <p class="success-page_grade_title">Оцените сервис</p>
            <div class="success-page_grade_items">
                <?php for ($i = 0; $i < 5; $i++) {
                    if ($i < 4) { ?>
                        <div class="success-page_grade active"></div>
                    <?php } else { ?>
                        <div class="success-page_grade"></div>
                    <?php }
                } ?>
            </div>
        </div>
        <a class="success-page_go-to-home-page" href="/">На главную страницу</a>
    </div>
</section>


<section class="help-us-become-better-modal-wrapper" data-help-us-become-better-modal-wrapper>
    <div class="help-us-become-better-modal">
        <div class="help-us-become-better-modal_btn-header-wrapper">
            <p class="help-us-become-better-modal_title">Помогите нам стать лучше!</p>
            <button class="help-us-become-better-modal_btn-close" data-help-us-become-better-modal_btn-close></button>
        </div>
        <form class="help-us-become-better-modal_from" action="">
                <div class="help-us-become-better-modal_label-wrapper">
                    <p>Что <span>ПОНРАВИЛОСЬ</span> при использовании сайта</p>
                    <label class="help-us-become-better-modal_label" for="">
                        <input type="text" placeholder="Например, простое оформление заказа">
                    </label>
                </div>
                <div class="help-us-become-better-modal_label-wrapper">
                    <p>Что <span>НЕ ПОНРАВИЛОСЬ</span> при использовании сайта</p>
                    <label class="help-us-become-better-modal_label" for="">
                        <input type="text" placeholder="Например, не понравился поиск">
                    </label>
                </div>
            <div class="help-us-become-better-modal_btn-footer-wrapper">
                <button class="help-us-become-better-modal_btn-footer" data-help-us-become-better-modal_btn-close type="button">Пропустить</button>
                <input class="help-us-become-better-modal_btn-footer green-btn" type="submit" value="Отправить оценку">
            </div>
        </form>
    </div>
</section>


<?php
include __DIR__ . '/footer.php';
?>
