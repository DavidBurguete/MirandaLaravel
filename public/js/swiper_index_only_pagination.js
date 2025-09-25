window.addEventListener("load", () => {
    let screen_width = window.screen.width;
    let slide_amount = 1;
    if(screen_width>1450){
        slide_amount = 2;
    }
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

        slidesPerView: slide_amount,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
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