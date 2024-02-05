<?php
include __DIR__ . '/head.php';
?>

<section class="sing-in-sign-up-wrapper" data-sing-in-sign-up>
    <div class="sing-in-sign-up">
        <div class="sing-in-sign-up_header-wrapper">
            <div class="sing-in-sign-up_btn-wrapper">
                <div class="sing-in-sign-up_btn_item-wrapper">
                    <button class="sing-in-sign-up_btn_item" data-btn-sign-in>Вход</button>
                    <button class="sing-in-sign-up_btn_item not-active" data-btn-sign-up>Регистрация</button>
                </div>
                <a class="sing-in-sign-up-wrapper_btn-close" href="/"></a>
            </div>
            <p class="sing-in-sign-up_title">После авторизации вы сможете управлять заказами и оставлять отзывы</p>
        </div>
        <div class="sing-in-sign-up_forms-wrapper">
            <form class="sing-in-sign-up_form active" action="" data-sing-in-form >
                <label class="sing-in-sign-up_form_label"><input type="text" placeholder="+7"></label>
                <label class="sing-in-sign-up_form_label"><input type="password" placeholder="Пароль"></label>
                <div class="sing-in-sign-up_form_footer-btn-wrapper">
                    <input class="sing-in-sign-up_form_footer-btn-item" type="submit" value="Войти">
                    <a class="sing-in-sign-up_form_footer-btn-additional" href="">Забыл пароль или номер телефона?</a>
                </div>
            </form>
            <form class="sing-in-sign-up_form" action="" data-sing-up-form >
                <label class="sing-in-sign-up_form_label"><input type="text" placeholder="+7"></label>
                <label class="sing-in-sign-up_form_label"><input type="password" placeholder="Пароль"></label>
                <label class="sing-in-sign-up_form_label"><input type="password" placeholder="Пароль"></label>
                <div class="sing-in-sign-up_form_footer-btn-wrapper">
                    <input class="sing-in-sign-up_form_footer-btn-item" type="submit" value="Регистрация">
                </div>
            </form>
        </div>
    </div>
</section>


<?php
include __DIR__ . '/footer.php';
?>
