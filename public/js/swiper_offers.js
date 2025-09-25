window.addEventListener("load", () => {
    let screen_width = window.screen.width;
    if(screen_width<1000){
        const swiper = new Swiper('.swiper_complete', {
            direction: 'horizontal',
            loop: true,

            pagination: {
                el: '.swiper-pagination',
            },

            navigation: {
                nextEl: '.custom-button-next--only_navigation',
                prevEl: '.custom-button-prev--only_navigation',
            }
        });
    }
    else{
        let swiper_classes = document.querySelectorAll("[class^='swiper']");
        swiper_classes.forEach(swiper_class => {
            let classes = swiper_class.classList;
            // Using class_ because class is a reserved name
            let swiper_filtered = [...classes].filter(class_ => class_.startsWith('swiper'));
            swiper_filtered.forEach(class_ => classes.remove(class_));
        });
    }
});