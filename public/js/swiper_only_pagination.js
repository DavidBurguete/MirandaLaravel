window.addEventListener("load", () => {
    const swiper = new Swiper('.swiper_only_pagination', {
        direction: 'horizontal',
        loop: true,

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

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

    document.querySelector('.swiper-pagination').addEventListener('click', event => {
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
});