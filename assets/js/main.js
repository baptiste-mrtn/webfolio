(function () {
    "use strict";

    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
        el = el.trim()
        if (all) {
            return [...document.querySelectorAll(el)]
        } else {
            return document.querySelector(el)
        }
    }

    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all)
        if (selectEl) {
            if (all) {
                selectEl.forEach(e => e.addEventListener(type, listener))
            } else {
                selectEl.addEventListener(type, listener)
            }
        }
    }

    /**
     * Easy on scroll event listener
     */
    const onscroll = (el, listener) => {
        el.addEventListener('scroll', listener)
    }

    /**
     * Navbar links active state on scroll
     */
    let navbarlinks = select('#navbar .scrollto', true)
    const navbarlinksActive = () => {
        let position = window.scrollY + 200
        navbarlinks.forEach(navbarlink => {
            if (!navbarlink.hash) return
            let section = select(navbarlink.hash)
            if (!section) return
            if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
                navbarlink.classList.add('active')
            } else {
                navbarlink.classList.remove('active')
            }
        })
    }
    window.addEventListener('load', navbarlinksActive)
    onscroll(document, navbarlinksActive)

    /**
     * Scrolls to an element with header offset
     */
    const scrollto = (el) => {
        let elementPos = select(el).offsetTop
        window.scrollTo({
            top: elementPos,
            behavior: 'smooth'
        })
    }

    /**
     * Back to top button
     */
    let backtotop = select('.back-to-top')
    if (backtotop) {
        const toggleBacktotop = () => {
            if (window.scrollY > 100) {
                backtotop.classList.add('active')
            } else {
                backtotop.classList.remove('active')
            }
        }
        window.addEventListener('load', toggleBacktotop)
        onscroll(document, toggleBacktotop)
    }

    /**
     * Mobile nav toggle
     */
    on('click', '.mobile-nav-toggle', function (e) {
        select('body').classList.toggle('mobile-nav-active')
        this.classList.toggle('bi-list')
        this.classList.toggle('bi-x')
    })

    /**
     * Scrool with ofset on links with a class name .scrollto
     */
    on('click', '.scrollto', function (e) {
        if (select(this.hash)) {
            e.preventDefault()

            let body = select('body')
            if (body.classList.contains('mobile-nav-active')) {
                body.classList.remove('mobile-nav-active')
                let navbarToggle = select('.mobile-nav-toggle')
                navbarToggle.classList.toggle('bi-list')
                navbarToggle.classList.toggle('bi-x')
            }
            scrollto(this.hash)
        }
    }, true)

    /**
     * Scroll with ofset on page load with hash links in the url
     */
    window.addEventListener('load', () => {
        if (window.location.hash) {
            if (select(window.location.hash)) {
                scrollto(window.location.hash)
            }
        }
    });

    /**
     * Preloader
     */
    let preloader = select('#preloader');
    if (preloader) {
        window.addEventListener('load', () => {
            preloader.remove()
        });
    }

    /**
     * Hero type effect
     */
    const typed = select('.typed')
    if (typed) {
        let typed_strings = typed.getAttribute('data-typed-items')
        typed_strings = typed_strings.split(',')
        new Typed('.typed', {
            strings: typed_strings,
            loop: true,
            typeSpeed: 100,
            backSpeed: 50,
            backDelay: 2000
        });
    }

    /**
     * Skills animation
     */
    let controller = new ScrollMagic.Controller();

    // build scenes


    document.addEventListener("DOMContentLoaded", function () {
        let bubbles = document.getElementsByClassName("bubbles");

        for (let bubble of bubbles) {
            let revealElements = bubble.getElementsByClassName("bubble");
            for (let i = 0; i < revealElements.length; i++) { // create a scene for each element
                new ScrollMagic.Scene({
                    triggerElement: revealElements[i], // y value not modified, so we can use element as trigger as well
                    offset: 50,												 // start a little later
                    triggerHook: 0.9,
                })
                    .setClassToggle(revealElements[i], "visible-" + i) // add class toggle
                    .addTo(controller);
            }
        }

    })

    /**
     * Porfolio isotope and filter
     */
    window.addEventListener('load', function () {
        const portfolioContainer = document.querySelector('.portfolio-container');
        const portfolioLoading = document.getElementById('portfolio-loading');

        if (portfolioContainer && portfolioLoading) {
            // Vérifier si Isotope est chargé
            const checkIsotope = setInterval(() => {
                if (typeof Isotope !== 'undefined') {
                    clearInterval(checkIsotope);

                    // Initialiser Isotope
                    const grid = new Isotope(portfolioContainer, {
                        itemSelector: '.portfolio-item',
                        layoutMode: 'masonry',
                        masonry: {
                            columnWidth: '.portfolio-item',
                            gutter: 0
                        }
                    });

                    // Afficher le portfolio
                    portfolioContainer.style.display = 'flex';
                    portfolioContainer.style.flexWrap = 'wrap';
                    // Masquer le loader
                    portfolioLoading.style.display = 'none';

                    // Gestion des filtres
                    const filters = document.querySelectorAll('#portfolio-filters li');
                    filters.forEach(filter => {
                        filter.addEventListener('click', function (e) {
                            e.preventDefault();
                            filters.forEach(f => f.classList.remove('filter-active'));
                            this.classList.add('filter-active');

                            const filterValue = this.getAttribute('data-filter');
                            grid.arrange({
                                filter: filterValue
                            });
                        });
                    });

                    // Rafraîchir AOS après l'arrangement
                    grid.on('arrangeComplete', function () {
                        AOS.refresh();
                    });

                    // Forcer un rafraîchissement après le chargement des images
                    const images = portfolioContainer.getElementsByTagName('img');
                    let loadedImages = 0;

                    Array.from(images).forEach(img => {
                        if (img.complete) {
                            loadedImages++;
                            if (loadedImages === images.length) {
                                grid.layout();
                            }
                        } else {
                            img.addEventListener('load', () => {
                                loadedImages++;
                                if (loadedImages === images.length) {
                                    grid.layout();
                                }
                            });
                        }
                    });
                }
            }, 100);

            // Timeout de sécurité après 5 secondes
            setTimeout(() => {
                clearInterval(checkIsotope);
                if (portfolioContainer.style.display === 'none') {
                    portfolioContainer.style.display = 'flex';
                    portfolioContainer.style.flexWrap = 'wrap';
                    portfolioLoading.style.display = 'none';
                }
            }, 5000);
        }
    });

    /**
     * Initiate portfolio lightbox
     */
    const portfolioLightbox = GLightbox({
        selector: '.portfolio-lightbox'
    });

    /**
     * Initiate portfolio details lightbox
     */
    const portfolioDetailsLightbox = GLightbox({
        selector: '.portfolio-details-lightbox',
        width: '90%',
        height: '90vh'
    });

    /**
     * Portfolio details slider
     */
    new Swiper('.portfolio-details-slider', {
        speed: 400,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        }
    });

    /**
     * Animation on scroll
     */
    window.addEventListener('load', () => {
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        })
    });

}

)
    ()