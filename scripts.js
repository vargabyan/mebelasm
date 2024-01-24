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
    // const btnAddBasket = e.target.closest('[data-catalog-item-add-basket]');
    // const btnAddFavorites = e.target.closest('[data-catalog-item-add-to-favorites]');
    //
    // if (btnAddBasket || btnAddFavorites) {
    //     e.preventDefault();
    // }

    function size() {
        console.log('+++')
        return window.innerWidth < 570 ? "vertical" : "horizontal"
    }

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


new Swiper('.completed-projects-swiper', {
    loop: true,
    spaceBetween: 20,
    pagination: {
        el: '.swiper-pagination',
    },
    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
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
    const btn = e.target.closest('[data-job-vacancy-category-item]')

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

        if (+value.textContent >=1) {
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
    const btn = e.target.closest('[data-basket-item-btn-open-modal-for-delete]')

    if (btn) {
        const content = document.querySelector('[data-basket-modal-for-delete]')

        content.classList.add('active')
    }
})

document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-basket-modal-for-delete-btn-close]')

    if (btn) {
        const content = document.querySelector('[data-basket-modal-for-delete]')

        content.classList.remove('active')
    }
})





