window.addEventListener("load", () => {
    let screen_width = window.screen.width;
    let slide_amount = 1;
    if(screen_width>1000){
        slide_amount = 2;

        let features = document.getElementsByClassName("features")[0];
        let features_swiper_classes = features.querySelectorAll("[class^='swiper']");
        features_swiper_classes.forEach(swiper_class => {
            let classes = swiper_class.classList;
            // Using class_ because class is a reserved name
            let swiper_filtered = [...classes].filter(class_ => class_.startsWith('swiper'));
            swiper_filtered.forEach(class_ => classes.remove(class_));
        });

        let menu = document.getElementsByClassName("menu_pictures")[0];
        let menu_swiper_classes = menu.querySelectorAll("[class^='swiper']");
        menu_swiper_classes.forEach(swiper_class => {
            let classes = swiper_class.classList;
            // Using class_ because class is a reserved name
            let swiper_filtered = [...classes].filter(class_ => class_.startsWith('swiper'));
            swiper_filtered.forEach(class_ => classes.remove(class_));
        });
    }
    const swiper = new Swiper('.swiper_complete', {
        direction: 'horizontal',
        loop: true,

        pagination: {
            el: '.swiper-pagination',
        },

        navigation: {
            nextEl: '.custom-button-next--only_navigation',
            prevEl: '.custom-button-prev--only_navigation',
        },

        autoplay: {
            delay: 5000
        },

        slidesPerView: slide_amount,

        centeredSlides: true
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
});