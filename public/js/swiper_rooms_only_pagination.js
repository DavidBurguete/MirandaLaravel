window.addEventListener("load", () => {
    let view_changer = document.getElementById("change-view");
    let is_grid = false;
    let slidesPerGrid = 3;
    let slidesPerList = 1;    
    let screen_width = window.screen.width;
    let slide_amount = slidesPerList;
    let cards = document.querySelectorAll(".room__card");
    if(screen_width>1000){
        slide_amount = slidesPerGrid;
        is_grid = true;
    }


    const swiper = new Swiper('.swiper_only_pagination', {
        direction: 'horizontal',
        loop: false ,

        pagination: {
            el: '.swiper-only-pagination',
            type: 'custom',
            clickable: true, 
            renderCustom: function (swiper, current, total) {
                let paginationHTML = '';
                let maxVisiblePages = 5;
                let paginationRange = [];

                if (total > maxVisiblePages) {
                    paginationRange.push(1);

                    if (current > 3) {
                        paginationRange.push('...');
                    }

                    let start = Math.max(2, current - 1);
                    let end = Math.min(total - 1, current + 1);

                    for (let i = start; i <= end; i++) {
                        paginationRange.push(i);
                    }

                    if (current < total - 2) {
                        paginationRange.push('...');
                    }

                    paginationRange.push(total);
                } else {
                    for (let i = 1; i <= total; i++) {
                        paginationRange.push(i);
                    }
                }

                paginationHTML += `<button class="page-number custom-button-prev--rooms" data-slide="«">«</button>`;

                paginationRange.forEach(page => {
                    if (page === '...') {
                        paginationHTML += `<button class="page-number ellipsis" disabled>...</button>`;
                    } else {
                        paginationHTML += `<button class="page-number" data-slide="${page}">${page}</button>`;
                    }
                });

                paginationHTML += `<button class="page-number custom-button-next--rooms" data-slide="»">»</button>`;

                return paginationHTML;
            }
        },

        slidesPerView: slide_amount,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

    document.querySelector('.swiper-only-pagination').addEventListener('click', event => {
        if (event.target.classList.contains('page-number')) {
            const type = event.target.getAttribute('data-slide');
            if(!Number.isNaN(parseInt(type))){
                const slideIndex = parseInt(type) - 1;
                swiper.slideTo(slideIndex);
            }
            else{
                var max = swiper.pagination.el.children;
                max = parseInt(max[max.length-2].getAttribute("data-slide"));
                if(type === "«"){
                    const action = swiper.realIndex - 1 < 0 ? max : swiper.realIndex - 1;
                    swiper.slideTo(action);
                }
                else if(type === "»"){
                    const action = swiper.realIndex + 1 >= max ? 0 : swiper.realIndex + 1;
                    swiper.slideTo(action);
                }
            }
        }
    });

    let params = swiper.params;
    view_changer.addEventListener("click", () => {
        is_grid = !is_grid;
        if(is_grid){
            params.slidesPerView = slidesPerGrid;
            cards.forEach(card => {
                card.classList.remove("room__card--list");
                let card_subclasses = card.querySelectorAll("[class*='--list']");
                card_subclasses.forEach(card_subclass => {
                    let class_to_remove = card_subclass.classList[1];
                    card_subclass.classList.remove(class_to_remove);
                });
            });
        }
        else{
            params.slidesPerView = slidesPerList;
            cards.forEach(card => {
                card.classList.add("room__card--list");
                let card_subclasses = card.querySelectorAll("[class*='room']");
                card_subclasses.forEach(card_subclass => {
                    let class_breakdown = card_subclass.className.split("__card");
                    card_subclass.classList.add(class_breakdown[0] + "__card--list" + class_breakdown[1]);
                });
            });
        }
        swiper.update();
    });

    swiper.on('slideChange', function () {
        const allPageNumbers = document.querySelectorAll('.page-number');
        allPageNumbers.forEach(pageNumber => {
            pageNumber.classList.remove('active');
        });
        const activePageNumber = document.querySelector(`.page-number[data-slide="${swiper.realIndex + 1}"]`);
        if (activePageNumber) {
            activePageNumber.classList.add('active');
        }
    });


    const activePageNumber = document.querySelector(`.page-number[data-slide="1"]`);
    activePageNumber.classList.add('active');
});