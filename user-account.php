<?php
include __DIR__ . '/head.php';
?>

<section class="container-core user-account-wrapper">
    <div class="user-account_header-wrapper">
        <?php
        include __DIR__ . '/breadcrumb.php';
        breadcrumb([['url' => '', 'name' => 'Личный кабинет']]);
        ?>
        <h1 class="site-header">Личный кабинет</h1>
    </div>
    <div class="user-account_content">
        <div class="user-account_menu-wrapper">
            <ul class="user-account_menu">
                <li><a href="#order">Заказы</a></li>
                <li><a href="#profil">Профиль</a></li>
                <li><a href="#review">Мои отзывы</a></li>
                <li><a href="#">Мои обращения</a></li>
                <li><a href="#bonus-coins">Бонусные рубли</a></li>
                <li><a href="/">Выйти</a></li>
            </ul>
            <a class="user-account_messenger" href="">Написать в WhatsApp</a>
        </div>
        <div class="user-account_user-to-do">
            <div class="user-account_orders">
                <h3 class="user-account_orders_title" id="order">Заказы<span>2</span></h3>
                <div class="user-account_orders_btn-current-add-completed-wrapper">
                    <a class="user-account_orders_btn-current-add-completed_item active" href="">Текущие</a>
                    <a class="user-account_orders_btn-current-add-completed_item" href="">Выполненные</a>
                </div>

                <div class="user-account_orders-wrapper">
                    <button class="user-account_orders_btn-open-modal-for-delete btn-ellipses mobile-version" data-btn-open-modal-additional-for-mobile></button>
                    <div class="user-account_orders_status-wrapper">
                        <h4 class="user-account_orders_number">Заказ №183</h4>
                        <p class="user-account_orders_status order-paid">Оплачен</p>
                    </div>
                    <div class="user-account_orders_content-wrapper">
                        <div class="user-account_orders_item_wrapper">
                            <div class="user-account_orders_item">
                                <img class="user-account_orders_item_img" src="images/image 41.png" alt="">
                                <p class="user-account_orders_item_price">Лазурит 5 ст большой диван <span>10 000 ₽</span></p>
                            </div>

                            <div class="user-account_orders_item">
                                <img class="user-account_orders_item_img" src="images/image 42.png" alt="">
                                <p class="user-account_orders_item_price">Лазурит 5 ст большой диван <span>10 000 ₽</span></p>
                            </div>
                        </div>
                        <p class="user-account_orders_total-price">Сумма заказа <span>20 000 ₽</span></p>
                    </div>
                    <hr class="user-account_orders_line">
                    <div class="user-account_orders_detail-btn-wrapper">
                        <a class="user-account_orders_detail-btn" href="">Детали заказа</a>
                        <a class="user-account_orders_detail-btn" href="">Отменить заказ</a>
                        <a class="user-account_orders_detail-btn" href="">Задать вопрос</a>
                    </div>
                </div>

                <div class="user-account_orders-wrapper">
                    <button class="user-account_orders_btn-open-modal-for-delete btn-ellipses mobile-version" data-user-account-orders-item-btn-open-modal-for-delete></button>
                    <div class="user-account_orders_status-wrapper">
                        <h4 class="user-account_orders_number">Заказ №183</h4>
                        <p class="user-account_orders_status order-not-paid">Не оплачен</p>
                    </div>
                    <div class="user-account_orders_content-wrapper">
                        <div class="user-account_orders_item_wrapper">
                            <div class="user-account_orders_item">
                                <img class="user-account_orders_item_img" src="images/image 41.png" alt="">
                                <p class="user-account_orders_item_price">Лазурит 5 ст большой диван <span>10 000 ₽</span></p>
                            </div>
                        </div>
                        <p class="user-account_orders_total-price">Сумма заказа <span>10 000 ₽</span></p>
                    </div>
                    <hr class="user-account_orders_line">
                    <div class="user-account_orders_detail-btn-wrapper">
                        <a class="user-account_orders_detail-btn" href="">Детали заказа</a>
                        <a class="user-account_orders_detail-btn" href="">Отменить заказ</a>
                        <a class="user-account_orders_detail-btn" href="">Задать вопрос</a>
                    </div>
                </div>
            </div>

            <div class="user-account_orders profile">
                <h3 class="user-account_orders_title profile_title" id="profil">Профиль</h3>
                <form action="">
                    <label class="user-account_profile_label"><input type="text" placeholder="Имя"></label>
                    <label class="user-account_profile_label"><input type="text" placeholder="Электронная почта"></label>
                    <label class="user-account_profile_label">Для получения скидки на ДР
                        <input type="text" placeholder="Дата рождения">
                    </label>
                    <label class="user-account_profile_label"><input type="text" placeholder="+7" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"></label>
                    <hr class="user-account_orders_line profile-line">
                    <label class="user-account_profile_btn-save"><input type="submit" value="Сохранить"></label>
                </form>
            </div>

            <?php
            $review_data = [
                ['color_product' => 'бежевый', 'date' => '12 июня. 2023', 'comment' => 'Распашная конструкция более уязвима перед ветром и непогодой, в отличие от откатных ворот. При обмерзании в зимнее время возможна блокировка бруствера. Откатные створки считаются более долговечными и надежными.', 'comment_photo' => 'images/04e79e6283bf03913bb8d8ffaef7f40e.png', 'quality' => 5, 'service' => 2, 'correspondence' => 3],
            ]
            ?>

            <div class="user-account_orders">
                <h3 class="user-account_orders_title" id="review">Мои отзывы<span>2</span></h3>

                <div class="user-account_review_content">
                    <div class="user-account_review-wrapper">
                        <div class="user-account_orders_content-wrapper">
                            <div class="user-account_orders_item_wrapper">
                                <div class="user-account_orders_item">
                                    <img class="user-account_orders_item_img" src="images/image 41.png" alt="">
                                    <p class="user-account_orders_item_price">Лазурит 5 ст большой диван <span>10 000 ₽</span></p>
                                </div>
                            </div>
                            <p class="user-account_orders_total-price">На модерации</p>
                        </div>
                    </div>

                    <div class="user-account_review-wrapper">
                        <?php foreach ($review_data as $review_item) { ?>
                            <div class="user-account_review_item">

                                <div class="user-account_review_grade">
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

                                <div class="cart-review_comment-wrapper">
                                    <p class="user-account_review_comment"><?= $review_item['comment'] ?></p>
                                    <div>
                                        <img class="user-account_review_photo-product" src="<?= $review_item['comment_photo'] ?>" alt="">
                                        <img class="user-account_review_photo-product" src="<?= $review_item['comment_photo'] ?>" alt="">
                                        <img class="user-account_review_photo-product" src="<?= $review_item['comment_photo'] ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <hr class="user-account_orders_line">
                    <button class="user-account_review_btn-delete-review">Удалить отзыв</button>
                </div>
            </div>


            <div class="user-account_orders" data-user-account-orders>
                <h3 class="user-account_orders_title" id="bonus-coins">Бонусные рубли<span>1 200</span></h3>

                <div class="user-account_bonus_content">

                    <div class="user-account_bonus_item" data-user-account-bonus-item>
                        <p class="user-account_bonus_item_number">Заказ №183</p>
                        <div class="user-account_bonus_item_coin">+ 400</div>
                    </div>

                    <div class="user-account_bonus_item" data-user-account-bonus-item>
                        <p class="user-account_bonus_item_number">Заказ №183</p>
                        <div class="user-account_bonus_item_coin">+ 400</div>
                    </div>

                    <div class="user-account_bonus_item" data-user-account-bonus-item>
                        <p class="user-account_bonus_item_number">Заказ №183</p>
                        <div class="user-account_bonus_item_coin">+ 400</div>
                    </div>

                    <div class="user-account_bonus_item" data-user-account-bonus-item>
                        <p class="user-account_bonus_item_number">Заказ №183</p>
                        <div class="user-account_bonus_item_coin">+ 400</div>
                    </div>

                    <div class="user-account_bonus_item" data-user-account-bonus-item>
                        <p class="user-account_bonus_item_number">Заказ №183</p>
                        <div class="user-account_bonus_item_coin">+ 400</div>
                    </div>

                </div>
                <button class="user-account_bonus_btn-show-more" data-user-account-bonus-btn-show-more>Показать еще</button>
            </div>

        </div>
    </div>
</section>


<section class="modal-additional-for-mobile" data-modal-additional-for-mobile>
    <div class="modal-additional-for-mobile_content">
        <div class="modal-additional-for-mobile_title-wrapper">
            <p class="modal-additional-for-mobile_title">Действия с товаром</p>
            <button class="modal-additional-for-mobile_btn-close" data-modal-additional-for-mobile-btn-close></button>
        </div>
        <div class="basket_item_action-wrapper">
            <a class="user-account_orders_detail-btn" href="">Детали заказа</a>
            <a class="user-account_orders_detail-btn" href="">Отменить заказ</a>
            <a class="user-account_orders_detail-btn" href="">Задать вопрос</a>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/footer.php';
?>
