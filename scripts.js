new Swiper('.catalog-swiper', {
    loop: true,

    pagination: {
        el: '.catalog-swiper-pagination',
    },
});

new Swiper('.home-core-slider_swiper', {
    loop: true,
    pagination: {
        el: '.swiper-pagination',
    },
    navigation: {
        nextEl: '.home-core-slider_next',
        prevEl: '.home-core-slider_prev',
    },
});


window.addEventListener('load', (e) => {
    const cardProductThumbsSlider = new Swiper(".card-product_thumbsSlider", {
        direction: "vertical",
        spaceBetween: 12,
        slidesPerView: 6,
        freeMode: true,
        watchSlidesProgress: true,
        breakpoints: {
            320: {
                slidesPerView: 6,
                spaceBetween: 4,
                direction: "horizontal",
            },
            769: {
                slidesPerView: 6,
                spaceBetween: 12,
                direction: "vertical",
            }
        }
    });

    new Swiper(".card-product_swiper", {
        zoom: true,
        spaceBetween: 14,
        thumbs: {
            swiper: cardProductThumbsSlider,
        },
    });

})


new Swiper('.our-team_swiper', {
    navigation: {
        nextEl: '.our-team_swiper-button-next',
        prevEl: '.our-team_swiper-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 20
        }
    }
});


new Swiper('.partners-swiper', {
    breakpoints: {
        320: {
            spaceBetween: 12,
            slidesPerView: 3.5,
        },
        768: {
            spaceBetween: 20,
            slidesPerView: 4,
        },
        992: {
            spaceBetween: 30,
            slidesPerView: 4,
        },
        1200: {
            spaceBetween: 40,
            slidesPerView: 4,
        }
    }
});


document.addEventListener('click', (e) => {
    const btnAddBasket = e.target.closest('[data-catalog-item-add-basket]');
    const btnAddFavorites = e.target.closest('[data-catalog-item-add-to-favorites]');

    if (btnAddBasket || btnAddFavorites) {
        e.preventDefault();
    }
})


document.addEventListener('mouseover', (e) => {
    const wrapperCatalogItem = e.target.closest('[data-catalog-item]');

    if (wrapperCatalogItem && window.innerWidth > 570) {
        const btnAddBasket = wrapperCatalogItem.querySelector('[data-catalog-item-add-basket]');
        const btnAddFavorites = wrapperCatalogItem.querySelector('[data-catalog-item-add-to-favorites]');

        btnAddBasket.classList.add('active');
        btnAddFavorites.classList.add('active');
    }
})
document.addEventListener('mouseout', (e) => {
    const wrapperCatalogItem = e.target.closest('[data-catalog-item]');

    if (wrapperCatalogItem && window.innerWidth > 570) {
        const btnAddBasket = wrapperCatalogItem.querySelector('[data-catalog-item-add-basket]');
        const btnAddFavorites = wrapperCatalogItem.querySelector('[data-catalog-item-add-to-favorites]');

        btnAddBasket.classList.remove('active');
        btnAddFavorites.classList.remove('active');
    }
})


document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-seo-btn-show-all]');

    if (btn) {
        const wrapper = btn.closest('[data-seo-wrapper]');
        const hiddenText = wrapper.querySelector('[data-seo-text]');

        hiddenText.classList.toggle('close');
        btn.style['display'] = 'none';
    }
})

document.addEventListener('click', (e) => {
    const btnQuestion = e.target.closest('[data-questions-and-answer-question]');

    if (btnQuestion) {
        const wrapper = btnQuestion.closest('[data-questions-and-answer-item]');
        const hiddenAnswer = wrapper.querySelector('[data-questions-and-answer-answer]');

        btnQuestion.classList.toggle('open');
        hiddenAnswer.classList.toggle('open');
    }
})


document.addEventListener('click', (e) => {
    const btnList = e.target.closest('[data-select-list]');
    const btnMap = e.target.closest('[data-select-map]');

    if (btnList) {
        const wrapper = btnList.closest('[data-map-wrapper]');
        const mapContent = wrapper.querySelector('[data-content-map]');
        const cityList = wrapper.querySelector('[data-content-city-list]');
        const _btnMap = wrapper.querySelector('[data-select-map]');

        btnList.classList.add('active');
        _btnMap.classList.remove('active');
        cityList.classList.add('active');
        mapContent.classList.remove('active');
    }

    if (btnMap) {
        const wrapper = btnMap.closest('[data-map-wrapper]');
        const mapContent = wrapper.querySelector('[data-content-map]');
        const cityList = wrapper.querySelector('[data-content-city-list]');
        const _btnList = wrapper.querySelector('[data-select-list]');

        _btnList.classList.remove('active');
        btnMap.classList.add('active');
        cityList.classList.remove('active');
        mapContent.classList.add('active');
    }

})

document.addEventListener('click', (e) => {
    const wrapper = e.target.closest('[data-card-descriptions-wapper]')
    const btn = e.target;

    if (wrapper) {
        const allBtn = document.querySelectorAll('[data-description-btn]')
        const contents = document.querySelectorAll('[data-content-description-item]')

        allBtn.forEach((elem) => {
            if (elem === btn) {

                allBtn.forEach((eachBtn, index) => {
                    if (elem === eachBtn) {
                        eachBtn.classList.add('active')
                        contents[index].classList.add('active')
                    } else {
                        eachBtn.classList.remove('active')
                        contents[index].classList.remove('active')
                    }
                })
            }
        })
    }
})

document.addEventListener('click', (e) => {
    const wrapper = e.target.closest('[data-card-about-card-product-size]')
    const btn = e.target;

    if (wrapper) {
        const allBtn = document.querySelectorAll('[data-card-about-card-product-size-item]')

        allBtn.forEach((elem) => {
            if (elem === btn) {
                allBtn.forEach((eachBtn, index) => {
                    if (elem === eachBtn) {
                        eachBtn.classList.add('active')
                    } else {
                        eachBtn.classList.remove('active')
                    }
                })
            }
        })
    }
})

document.addEventListener('click', (e) => {
    const wrapper = e.target.closest('[data-card-about-card-product-colors-items]')
    const btn = e.target;

    if (wrapper) {
        const allBtn = document.querySelectorAll('[data-card-about-card-product-colors-item]')

        allBtn.forEach((elem) => {
            if (elem === btn) {
                allBtn.forEach((eachBtn, index) => {
                    if (elem === eachBtn) {
                        eachBtn.classList.add('active')
                    } else {
                        eachBtn.classList.remove('active')
                    }
                })
            }
        })
    }
})


document.addEventListener('click', (e) => {
    const wrapper = e.target.closest('[data-contact-information-wrapper]')
    const btn = e.target;

    if (wrapper) {
        const allBtn = document.querySelectorAll('[data-contact-information-btn]')
        const contents = document.querySelectorAll('[data-contact-information-content-item]')

        allBtn.forEach((elem) => {
            if (elem === btn) {

                allBtn.forEach((eachBtn, index) => {
                    if (elem === eachBtn) {
                        eachBtn.classList.add('active')
                        contents[index].classList.add('active')
                    } else {
                        eachBtn.classList.remove('active')
                        contents[index].classList.remove('active')
                    }
                })
            }
        })
    }
})


document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-job-vacancy-category-item-first]')

    if (btn && window.innerWidth < 570) {
        const wrapper = btn.closest('[data-job-vacancy-category-item-wrapper]')

        if (wrapper) {
            const allBtnIncludeOneWrapper = wrapper.querySelectorAll('[data-job-vacancy-category-item]')

            allBtnIncludeOneWrapper.forEach((elem, index) => {
                if (index !== 0) {
                    elem.classList.toggle('active')
                }
            })
        }
    }
})


document.addEventListener('click', (e) => {
    const btnDecrement = e.target.closest('[data-basket-item-quantity-btn-decrement]')
    const btnIncrement = e.target.closest('[data-basket-item-quantity-btn-increment]')

    if (btnDecrement) {
        const wrapper = btnDecrement.closest('[data-basket-item]')
        const value = wrapper.querySelector('[data-basket-item-quantity-value]')

        if (+value.textContent > 1) {
            value.textContent = +value.textContent - 1
        }
    }
    if (btnIncrement) {
        const wrapper = btnIncrement.closest('[data-basket-item]')
        const value = wrapper.querySelector('[data-basket-item-quantity-value]')

        if (+value.textContent >= 1) {
            value.textContent = +value.textContent + 1
        }
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-basket-item-btn-open-hidden-content]')

    if (btn && window.innerWidth < 768) {
        const wrapper = btn.closest('[data-basket-item]')
        wrapper.querySelectorAll('[data-basket-item-btn-open-hidden-content]').forEach((elem, index) => {
            if (btn === elem) {
                const contents = wrapper.querySelectorAll('[data-basket-item-content]')

                contents[index].classList.toggle('active')

            }
        })
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-btn-open-modal-additional-for-mobile]')

    if (btn) {
        const content = document.querySelector('[data-modal-additional-for-mobile]')

        content.classList.add('active')
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-modal-additional-for-mobile-btn-close]')

    if (btn) {
        const content = document.querySelector('[data-modal-additional-for-mobile]')

        content.classList.remove('active')
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-contacts-page_modal-for-mobile_label]')

    if (btn) {
        const content = document.querySelector('[data-modal-additional-for-mobile]')

        setTimeout(() => {
            content.classList.remove('active')
        }, 100)
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-contacts-page_tag-wrapper] button')

    if (btn) {
        const allButton = document.querySelectorAll('[data-contacts-page_tag-wrapper] button')
        const content = document.querySelector('[data-modal-additional-for-mobile]')

        allButton.forEach(elemBtn => {
            if (elemBtn === btn) {
                elemBtn.classList.add('active')
            } else {
                elemBtn.classList.remove('active')
            }
        })
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-company-group-btn-read-more]')

    if (btn) {
        const wrapper = btn.closest('[data-company-group]')
        const items = wrapper.querySelectorAll('[data-company-group_item]')

        items.forEach(item => {
            item.style['display'] = 'flex';
        })
        btn.style['display'] = 'none';
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-placing-an-order-map-btn-open]')

    if (btn) {
        const wrapper = document.querySelector('[data-placing-an-order-map-btn-open-map-wrapper]')

        wrapper.classList.add('active')
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-placing-an-order-map-btn-close]')

    if (btn) {
        const wrapper = btn.closest('[data-placing-an-order-map-btn-open-map-wrapper]')

        wrapper.classList.remove('active')
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-success-page-grade-wrapper]')

    if (btn) {
        const wrapper = document.querySelector('[data-help-us-become-better-modal-wrapper]')

        wrapper.classList.add('active')
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-help-us-become-better-modal_btn-close]')

    if (btn) {
        const wrapper = document.querySelector('[data-help-us-become-better-modal-wrapper]')

        wrapper.classList.remove('active')
    }
})

document.addEventListener('click', (e) => {
    const btnSignIN = e.target.closest('[data-btn-sign-in]')
    const btnSignUp = e.target.closest('[data-btn-sign-up]')

    if (btnSignIN) {
        const wrapper = btnSignIN.closest('[data-sing-in-sign-up]')
        const formSignIN = wrapper.querySelector('[data-sing-in-form]')
        const formSignUp = wrapper.querySelector('[data-sing-up-form]')
        const _btnSignUp = wrapper.querySelector('[data-btn-sign-up]')

        formSignIN.classList.add('active')
        formSignUp.classList.remove('active')
        btnSignIN.classList.remove('not-active')
        _btnSignUp.classList.add('not-active')

    }
    if (btnSignUp) {
        const wrapper = btnSignUp.closest('[data-sing-in-sign-up]')
        const formSignIN = wrapper.querySelector('[data-sing-in-form]')
        const formSignUp = wrapper.querySelector('[data-sing-up-form]')
        const _btnSignIN = wrapper.querySelector('[data-btn-sign-in]')

        formSignUp.classList.add('active')
        formSignIN.classList.remove('active')
        btnSignUp.classList.remove('not-active')
        _btnSignIN.classList.add('not-active')
    }
})


document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-footer-menu-links-item-first]')

    if (btn && window.innerWidth < 570) {
        const wrapper = btn.closest('[data-footer-menu-links]')

        if (wrapper) {
            const allBtnIncludeOneWrapper = wrapper.querySelectorAll('[data-footer-menu-links-item]')

            allBtnIncludeOneWrapper.forEach((elem, index) => {
                if (index !== 0) {
                    elem.classList.toggle('active')
                }
            })
        }
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-placing-an-order-conditions-radio-container-input]:checked')

    if (btn) {
        const wrapper = btn.closest('[data-placing-an-order-conditions-item-wrapper]')
        const allCheckboxWrapper = wrapper.querySelectorAll('[data-placing-an-order-conditions-item]')
        const checkboxWrapper = btn.closest('[data-placing-an-order-conditions-item]')

        allCheckboxWrapper.forEach(el => {
            if (el === checkboxWrapper) {
                el.classList.add('active')
            } else {
                el.classList.remove('active')
            }
        })
    }
})


document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-filter-catalog-btn-show-all]')

    if (btn) {
        const wrapper = btn.closest('[data-filter-catalog-wrapper-pc]')
        const allItem = wrapper.querySelectorAll('[data-filter-catalog-item]')
        const allBtn = wrapper.querySelectorAll('[data-filter-catalog-btn-show-all]')

        allItem.forEach((el, index) => {
            if (index >= 7) {
                el.classList.toggle('open-all');
            }
        })

        allBtn[0].classList.toggle('btn-open-filter')
        allBtn[1].classList.toggle('btn-open-filter')
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-btn-open-drop-menu]')
    if (btn) {
        const wrapper = e.target.closest('[data-filter-catalog-item]')
        const dropMenu = wrapper.querySelector('[data-filter-menu-dropdown-wrapper]')
        dropMenu.classList.toggle('open-filter-drop-menu')
    }
})

document.addEventListener('click', (e) => {
    const dropMenu = e.target.closest('[data-filter-menu-dropdown-wrapper]')
    if (!dropMenu) {
        const allDropMenu = document.querySelectorAll('[data-filter-menu-dropdown-wrapper]')
        allDropMenu.forEach(el => {

            if (el.closest('[data-filter-catalog-item]').querySelector('[data-btn-open-drop-menu]') !== e.target.closest('[data-btn-open-drop-menu]')) {
                el.classList.remove('open-filter-drop-menu')
            }
        })
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-filter-menu-dropdown-btn-cencel]')
    if (btn) {
        const dropMenu = btn.closest('[data-filter-menu-dropdown-wrapper]')
        const allInput = dropMenu.querySelectorAll('.filter-menu_dropdown_item_container input')

        allInput.forEach( inp => {
            inp.checked = false;
        })
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-filter-sizes-menu-dropdown-btn-cencel]')
    if (btn) {
        const dropMenu = btn.closest('[data-filter-menu-dropdown-wrapper]')
        const allInput = dropMenu.querySelectorAll('.menu_dropdown-for-sizes_item input')

        allInput.forEach( inp => {
            inp.value = '';
        })
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-filter-menu-dropdown-btn-submit]')
    if (btn) {
        e.preventDefault();
        const dropMenu = btn.closest('[data-filter-menu-dropdown-wrapper]')

        dropMenu.classList.toggle('open-filter-drop-menu')
    }
})




