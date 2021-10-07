/* ----------------------- about section tabs ----------------------- */

(() => {
    const aboutSection = document.querySelector(".about-section"),
        tabsContainer = document.querySelector(".about-tabs");

    tabsContainer.addEventListener('click', (event) => {
        /* if event.target contains 'tab-item' class and contains 'active' class */
        if (event.target.classList.contains("tab-item") && !event.target.classList.contains("active")) {
            const target = event.target.getAttribute("data-target");
            // desactivar active existente 'tab-item'
            tabsContainer.querySelector(".active").classList.remove("outer-shadow", "active");
            // activar nuevo 'tab-item'
            event.target.classList.add("active", "outer-shadow");
            // desactivar active existente 'tab-content'
            aboutSection.querySelector(".tab-content.active").classList.remove("active");
            // activar nuevo 'tab-content'
            aboutSection.querySelector(target).classList.add("active");
        }
    })
})();