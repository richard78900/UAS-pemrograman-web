export function initializeNavbarResponsive() {
    const burger = document.getElementsByClassName("burger")[0];
    const navWrapper = document.getElementsByClassName("navbar-wrapper")[0];
    burger.addEventListener("click", function () {
        navWrapper.classList.add("active");
    });
    const burgerExit = document.getElementsByClassName("burger-exit")[0];
    burgerExit.addEventListener("click", function () {
        navWrapper.classList.remove("active");
    });
}

export function navbarLinksActive() {
    const aTags = document.querySelectorAll(
        ".navbar .navbar-wrapper .navbar-menu a"
    );

    for (let i = 0; i < aTags.length; i++) {
        aTags[i].addEventListener("click", function () {
            for (var j = 0; j < aTags.length; j++) {
                aTags[j].classList.remove("active");
            }
            this.classList.add("active");
        });
    }
}
