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
    loop: true,
    speed: 2000,
    allowTouchMove: false,
    autoplay: {
        delay: 0,
        disableOnInteraction: false
    },
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

        if (hiddenAnswer) {
            hiddenAnswer.classList.toggle('open');
        }
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

document.addEventListener('mouseover', (e) => {
    const btn = e.target.closest('[data-success-page_grade]')

    if (btn) {
        const wrapper = btn.closest('[data-success-page-grade-items]')
        const allItem = wrapper.querySelectorAll('[data-success-page_grade]')
        let currentIndex = 0;

        allItem.forEach( (item, index) => {
            if (item === btn) { currentIndex = index }
            item.classList.remove('mouseover')
        })

        allItem.forEach( (item, index) => {
            if (index <= currentIndex) {
                item.classList.add('mouseover')
            }
        })
    }
})

document.addEventListener('mouseover', (e) => {
    const container = document.querySelector('[data-success-page_grade-wrapper]')
    const items = e.target.closest('[data-success-page-grade-items]')

    if (container && !items) {
        const allItem = document.querySelectorAll('[data-success-page_grade]')

        allItem.forEach( item => {
            item.classList.remove('mouseover')
        })
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-success-page_grade]')

    if (btn) {
        const wrapper = btn.closest('[data-success-page-grade-items]')
        const allItem = wrapper.querySelectorAll('[data-success-page_grade]')
        let currentIndex = 0;

        allItem.forEach( (item, index) => {
            if (item === btn) { currentIndex = index }
            item.classList.remove('active')
        })

        allItem.forEach( (item, index) => {
            if (index <= currentIndex) {
                item.classList.add('active')
            }
        })

        const modalWrapper = document.querySelector('[data-help-us-become-better-modal-wrapper]')
        modalWrapper.classList.add('active')
    }
})

document.addEventListener('click', (e) => {
    const btnSubmit = e.target.closest('[data-help-us-become-better-modal-btn-footer-submit]')
    const btnClose = e.target.closest('[data-help-us-become-better-modal-btn-footer-close]')

    if (btnSubmit || btnClose) {
        e.preventDefault()
        const wrapper = document.querySelector('[data-help-us-become-better-modal-wrapper]')

        wrapper.classList.remove('active')
        document.querySelector('[data-success-page-grade-items]').style['display'] = 'none'
        document.querySelector('[data-title-rate-the-service]').style['display'] = 'none'
        document.querySelector('[data-title-thank-you]').style['display'] = 'block'
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-help-us-become-better-modal_btn-close]')

    if (btn) {
        const wrapper = document.querySelector('[data-help-us-become-better-modal-wrapper]')
        const allGradeItem = document.querySelectorAll('[data-success-page_grade]')

        allGradeItem.forEach( item => {
            item.classList.remove('active')
            item.classList.remove('mouseover')
        })

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

        if (window.innerWidth > 570) {
            allItem.forEach((el, index) => {
                if (index >= 7) {
                    el.classList.toggle('open-all');
                }
            })

            allBtn[0].classList.toggle('btn-open-filter')
            allBtn[1].classList.toggle('btn-open-filter')
        } else {
            allItem.forEach((el, index) => {
                if (index >= 1) {
                    el.classList.toggle('open-all');
                }
            })
        }
    }
})
document.addEventListener('click', (e) => {
    const dropMenu = e.target.closest('[data-filter-menu-dropdown-background]')
    const hasOpenDropMenu = document.querySelector('.open-filter-drop-menu')

    if (!dropMenu && hasOpenDropMenu) {

        hasOpenDropMenu.classList.remove('open-filter-drop-menu')

        if (window.innerWidth < 570) {
            document.querySelector('body').style['overflow'] = '';
        }
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-btn-open-drop-menu]')
    if (btn) {
        const wrapper = e.target.closest('[data-filter-catalog-item]')
        const dropMenu = wrapper.querySelector('[data-filter-menu-dropdown-background]');
        dropMenu.classList.toggle('open-filter-drop-menu')

        const locationParam = (dropMenu.offsetWidth - btn.offsetWidth) / 2;
        dropMenu.style['left'] = `-${locationParam}px`

        if (window.innerWidth < 570) {
            document.querySelector('body').style['overflow'] = 'hidden';
        }
    }
})


document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-filter-menu-dropdown-btn-cencel]')
    if (btn) {
        const dropMenu = btn.closest('[data-filter-menu-dropdown-background]')
        const allInput = dropMenu.querySelectorAll('.filter-menu_dropdown_item_container input:checked')

        allInput.forEach( inp => {
            inp.checked = false;
        })
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-filter-sizes-menu-dropdown-btn-cencel]')
    if (btn) {
        const dropMenu = btn.closest('[data-filter-menu-dropdown-background]')
        const allInput = dropMenu.querySelectorAll('.menu_dropdown-for-sizes_item input')

        allInput.forEach( inp => {
            inp.value = '';
        })
    }
})

document.addEventListener('click', (e) => {
    const btnSubmit = e.target.closest('[data-filter-menu-dropdown-btn-submit]')
    const btnClose = e.target.closest('[data-filter-menudropdown-btn-close]')

    if (btnSubmit || btnClose) {
        e.preventDefault();
        const dropMenu = e.target.closest('[data-filter-menu-dropdown-background]')
        dropMenu.classList.toggle('open-filter-drop-menu')

        if (window.innerWidth < 570) {
            document.querySelector('body').style['overflow'] = '';
        }
    }
})


document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-send-vc-btn-send]')

    if (btn) {
        const model = document.querySelector('[data-send-resume]')

        model.classList.add('active')
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-send-resume-modal-btn-close]')

    if (btn && btn.closest('[data-send-resume]')) {
        const model = btn.closest('[data-send-resume]')

        model.classList.remove('active')
        document.querySelector('body').style['overflow'] = '';
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-send-resume-modal-btn-submit]')

    if (btn) {
        e.preventDefault()
        const wrapperModel = btn.closest('[data-send-resume]')
        const model = document.querySelector('[data-modal-successful-wrapper]')

        wrapperModel.classList.remove('active')
        model.classList.add('active')
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-modal-successful-btn]')

    if (btn) {
        const model = btn.closest('[data-modal-successful-wrapper]')

        model.classList.remove('active')
        document.querySelector('body').style['overflow'] = '';
    }
})


document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-job-vacancy-btn-open-filter]')

    if (btn) {
        const model = document.querySelector('[data-job-vacancy-filter-modal]')

        model.classList.add('active')
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-send-resume-modal-btn-close]')

    if (btn && btn.closest('[data-job-vacancy-filter-modal]')) {
        const model = btn.closest('[data-job-vacancy-filter-modal]')

        model.classList.remove('active')
        document.querySelector('body').style['overflow'] = '';
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-job-vacancy-filter-modal_btn-submit]')

    if (btn) {
        e.preventDefault()
        const model = btn.closest('[data-job-vacancy-filter-modal]')

        model.classList.remove('active')
        document.querySelector('body').style['overflow'] = '';
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-job-vacancy-filter-modal_btn-clean]')

    if (btn) {
        const wrapperForm = btn.closest('[data-job-vacancy-filter-modal-form]')
        const inputItem = wrapperForm.querySelectorAll('[data-job-vacancy-filter-modal-input-container] input:checked')

        inputItem.forEach( item => {
            item.checked = false;
        })
    }
})


document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-card-about-card-product-btn-get-notifications]')

    if (btn) {
        const model = document.querySelector('[data-mode-notifications-about-price]')

        model.classList.add('active')
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-send-resume-modal-btn-close]')

    if (btn && btn.closest('[data-mode-notifications-about-price]')) {
        const model = btn.closest('[data-mode-notifications-about-price]')

        model.classList.remove('active')
        document.querySelector('body').style['overflow'] = '';
    }
})


document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-Interest-free-installments-btn]')

    if (btn) {
        const model = btn.querySelector('[data-modal-Interest-free-installments]')

        model.classList.add('active')
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-send-resume-modal-btn-close]')

    if (btn && btn.closest('[data-modal-Interest-free-installments]')) {
        const model = btn.closest('[data-modal-Interest-free-installments]')

        model.classList.remove('active')
        document.querySelector('body').style['overflow'] = '';
    }
})


document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-card-about-card-product-in-stock]')
    const ItemBtn = e.target.closest('[data-card-about-card-product-store-item]')

    if (btn || ItemBtn) {
        const model = document.querySelector('[data-modal-different-stores]')

        model.classList.add('active')
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-send-resume-modal-btn-close]')

    if (btn && btn.closest('[data-modal-different-stores]')) {
        const model = btn.closest('[data-modal-different-stores]')

        model.classList.remove('active')
        document.querySelector('body').style['overflow'] = '';
    }
})


document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-in-different-stores-btn]')

    if (btn) {
        const oldModel = document.querySelector('[data-modal-different-stores]')
        const model = document.querySelector('[data-booking-modal-wrapper]')

        oldModel.classList.remove('active')
        model.classList.add('active')
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-booking-modal-btn-go-to-back]')

    if (btn) {
        const oldModel = document.querySelector('[data-modal-different-stores]')
        const model = btn.closest('[data-booking-modal-wrapper]')

        oldModel.classList.add('active')
        model.classList.remove('active')
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})


document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-card-about-card-product-btn-add-basket]')

    if (btn) {
        const model = document.querySelector('[data-modal-add-in-basket]')

        model.classList.add('active')
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-send-resume-modal-btn-close]')

    if (btn && btn.closest('[data-modal-add-in-basket]')) {
        const model = btn.closest('[data-modal-add-in-basket]')

        model.classList.remove('active')
        document.querySelector('body').style['overflow'] = '';
    }
})

document.addEventListener('click', (e) => {
    const continueBtn = e.target.closest('[data-add-in-basket-modal-btn-continue]')

    if (continueBtn && continueBtn.closest('[data-modal-add-in-basket]')) {
        const model = continueBtn.closest('[data-modal-add-in-basket]')

        model.classList.remove('active')
        document.querySelector('body').style['overflow'] = '';
    }
})


document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-show-all-products]')

    if (btn) {
        const wrapper = document.querySelector('[data-catalog-proucts-wrapper]')
        const item = wrapper.querySelectorAll('[data-catalog-item]')

        item.forEach((el) => {
            el.style['display'] = 'flex';
        })

        btn.style['display'] = 'none';
    }
})


document.addEventListener('change', (e) => {
    const select = e.target.closest('[data-selection-city]')

    if (select) {
        const labelValue = document.querySelector('[data-selection-city-label-value]')
        labelValue.textContent = select.options[select.selectedIndex].textContent;
    }
})


document.addEventListener('click', (e) => {
    const container = document.querySelector('[data-header-nav-panel-other-search-wrapper]')
    const searchBackground = container.querySelector('.active[data-core-search-background]')

    if (e.target === searchBackground) {
        const searchWrapper = container.querySelector('.active[data-core-search-wrapper]')
        const searchContent = container.querySelector('[data-core-search-content]')

        searchBackground.classList.remove('active')
        searchWrapper.classList.remove('active')
        searchContent.classList.remove('active')
        document.querySelector('body').style['overflow'] = '';
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-core-search]')

    if (btn) {
        const container = btn.closest('[data-header-nav-panel-other-search-wrapper]')
        const searchBackground = container.querySelector('[data-core-search-background]')
        const searchWrapper = container.querySelector('[data-core-search-wrapper]')
        const searchContent = container.querySelector('[data-core-search-content]')


        searchBackground.classList.add('active')
        searchWrapper.classList.add('active')
        searchContent.classList.add('active')
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})


document.addEventListener('click', (e) => {
    const btnCancel = e.target.closest('.active[data-core-searach-mobile-btn-cancel]')

    if (btnCancel) {
        const container = document.querySelector('[data-core-searach-mobile-wrapper]')
        const btnWrapper = container.querySelector('.active[data-core-searach-mobile-btn-wrapper]')
        const searchWrapper = container.querySelector('.active[data-core-searach-mobile-input-label]')
        const searchContent = container.querySelector('.active[data-core-searach-mobile-content]')

        container.classList.remove('active')
        btnWrapper.classList.remove('active')
        searchWrapper.classList.remove('active')
        searchContent.classList.remove('active')
        btnCancel.classList.remove('active')
        document.querySelector('body').style['overflow'] = '';
    }
})

document.addEventListener('click', (e) => {
    const searchWrapper = e.target.closest('[data-core-searach-mobile-input-label]')

    if (searchWrapper) {
        const container = document.querySelector('[data-core-searach-mobile-wrapper]')
        const btnWrapper = container.querySelector('[data-core-searach-mobile-btn-wrapper]')
        const searchWrapper = container.querySelector('[data-core-searach-mobile-input-label]')
        const searchContent = container.querySelector('[data-core-searach-mobile-content]')
        const btnCancel = container.querySelector('[data-core-searach-mobile-btn-cancel]')

        container.classList.add('active')
        btnWrapper.classList.add('active')
        searchWrapper.classList.add('active')
        searchContent.classList.add('active')
        btnCancel.classList.add('active')
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})

document.addEventListener('click', (e) => {
    const btnOpen = e.target.closest('[data-map-store-item-btn-open]')

    if (btnOpen) {
        const container = btnOpen.closest('[data-map-store-item-container]')
        const hiddenItem = container.querySelector('[data-map-store-item]')

        hiddenItem.classList.add('active')
        container.style['width'] = '100%'
    }
})

document.addEventListener('click', (e) => {
    const btnCancel = e.target.closest('[data-map-store-item-btn-cancel]')

    if (btnCancel) {
        const container = btnCancel.closest('[data-map-store-item-container]')
        const hiddenItem = container.querySelector('[data-map-store-item]')

        hiddenItem.classList.remove('active')
        container.style['width'] = ''
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-card-about-card-product-btn-favorite]')

    if (btn) {
        btn.classList.toggle('active')
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-questions-and-answer_btn-show-more]')

    if (btn) {
        const container = btn.closest('[data-questions-and-answer]')
        const allHiddenItem = container.querySelectorAll('[data-questions-and-answer-item]')

        allHiddenItem.forEach( item => {
            item.classList.toggle('active');
        })

        btn.textContent = btn.classList.contains('open') ? 'Скрыть': 'Показать больше'
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-card-review-btn-show-more-review]')

    if (btn) {
        const container = btn.closest('[data-card-review]')
        const allHiddenItem = container.querySelectorAll('[data-cart-review-item]')

        allHiddenItem.forEach( item => {
            item.classList.toggle('active');
        })

        btn.textContent = btn.textContent === 'Показать больше отзывов' ? 'Скрыть' : 'Показать больше отзывов'
    }
})


document.addEventListener('DOMContentLoaded', (e) => {
    const has = document.querySelector('[data-each-vacancy-separately_form-scroll]')

    if (has) {
        window.scrollTo({top: Math.round(has.getBoundingClientRect().top)})
    }
})


document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-similar-vacancies-btn-open]')

    if (btn) {
        const container = document.querySelector('[data-similar-vacancies-wrapper]')
        const allHiddenItem = container.querySelectorAll('[data-job-vacancy-item]')

        allHiddenItem.forEach( item => {
            item.classList.toggle('active');
        })

        btn.textContent = btn.textContent === 'Показать еще' ? 'Скрыть' : 'Показать еще'
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-store-card-furniture-factory-map-btn]')

    if (btn) {
        const wrapper = btn.closest('[data-store-card-furniture-factory-map-wrapper]')
        const map = wrapper.querySelectorAll('[data-store-card-furniture-factory_map]')

        map.forEach( item => {
            item.classList.toggle('active');
        })

        btn.textContent = btn.textContent === 'Развернуть карту' ? 'Скрыть карту' : 'Развернуть карту'
    }
})


document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-user-account-bonus-btn-show-more]')

    if (btn) {
        const container = btn.closest('[data-user-account-orders]')
        const allHiddenItem = container.querySelectorAll('[data-user-account-bonus-item]')

        allHiddenItem.forEach( item => {
            item.classList.toggle('active');
        })

        btn.textContent = btn.textContent === 'Показать еще' ? 'Скрыть' : 'Показать еще'
    }
})


document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-open-sign-in-sign-up]')

    if (btn) {
        const container = document.querySelector('[data-sing-in-sign-up]')

        container.classList.add('active');
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-sing-in-sign-up-btn-close]')

    if (btn) {
        const container = document.querySelector('[data-sing-in-sign-up]')

        container.classList.remove('active');
        document.querySelector('body').style['overflow'] = '';
    }
})







