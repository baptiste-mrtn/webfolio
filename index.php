<?php
session_start();
// Génère deux nombres aléatoires
$num1 = rand(1, 10);
$num2 = rand(1, 10);
$_SESSION['captcha_result'] = $num1 + $num2; // Stocke la réponse dans la session
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Webfolio Baptiste Martin</title>
    <meta content="Développeur Web & Application - Webfolio Baptiste aArtin" name="description">
    <meta content="développeur, logiciel, concepteur, applications, web, angular, javascript, symfony, typescript, react, vue, baptiste, martin, php, laravel, sql, base de données, bdd, alternance, wordpress, git, github, gitlab, sql, nosql, html, css, agile, ui, ux, photoshop, illustrator, indesign, adobe"
          name="keywords">
    <link href="assets/img/logo/logo-nt.png" rel="icon">
    <link href="assets/img/logo/logo-nt.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<!-- ======= Mobile nav toggle button ======= -->
<!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
<i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
<!-- ======= Header ======= -->
<header class="d-flex flex-column justify-content-center" id="header">
    <nav class="navbar nav-menu" id="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="#home"><i class="bx bx-home"></i> <span>Accueil</span></a>
            </li>
            <li><a class="nav-link scrollto" href="#about"><i class="bx bx-user"></i> <span>A propos</span></a></li>
            <li><a class="nav-link scrollto" href="#portfolio"><i class="bx bx-book-content"></i>
                <span>Projets</span></a></li>
            <li><a class="nav-link scrollto" href="#contact"><i class="bx bx-envelope"></i> <span>Contact</span></a>
            </li>
        </ul>
    </nav>
</header>

<!-- ======= Hero Section ======= -->
<section class="d-flex flex-column justify-content-center" id="home">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h1>Baptiste Martin</h1>
                <p>Je suis un <span class="typed"
                                    data-typed-items="développeur web, développeur d'applications, web designer, concepteur"></span>
                </p>
                <div class="social-links">
                    <a class="github" href="https://github.com/baptiste-mrtn" target="_blank"><i
                            class="bx bxl-github"></i></a>
                    <a class="linkedin" href="https://www.linkedin.com/in/baptistemrtn/" target="_blank"><i
                            class="bx bxl-linkedin"></i></a>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-center">
                <img alt="logo" src="assets/img/logo/logo-nt.png">
            </div>
        </div>
    </div>
</section>

<main id="main">
    <section class="about" id="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>A propos</h2>
                <p>Originaire d'Ardèche dans la petite ville de Tournon-sur-Rhône, j'ai déménagé à Grenoble afin de
                    poursuivre mes études dans le domaine qui me plaît: l'informatique.</p>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-3">
                    <img alt="" class="img-fluid shadow rounded-circle" src="assets/img/me.png">
                </div>
                <div class="col-lg-9 pt-4 pt-lg-0 content">
                    <h3 class="mb-4">Développeur web & applications</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Ville:</strong>
                                    <span>Vienne</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Niveau:</strong> <span>Concepteur Développeur</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <p class="intro mb-4"><strong>Hello World, </strong><br>
                                Ayant un fort attrait pour le domaine de l'informatique depuis mon plus jeune âge, je
                                suis venu à Grenoble pour faire des études de <strong>graphiste</strong> car le métier me plaisait et je
                                souhaitais connaître les différentes facettes d'un artiste du numérique.
                                <br>
                                C'est en suivant ces cours que j'ai pu découvrir une porte d'entrée vers la
                                <strong>programmation</strong> et le <strong>développement web</strong> qui m'a pour le coup intrigué. <br>
                                J'ai donc, au fil des années, poursuit les études dans cette voie pour y découvrir les
                                multitudes de langages qui s'offraient à moi et au monde entier.
                                <br>
                                Grâce à mes connaissances et mes compétences, j'ai décidé de créer ce webfolio afin de
                                pouvoir montrer aux autres mon parcours et mes différents projets réalisés au cours de
                                mon existence.</p>

                        </div>
                        <div class="col-12 text-center">
                            <a class="cv" href="assets/pdf/CV-Baptiste-Martin.pdf">Télécharger le CV</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ======= Skills Section ======= -->
    <section class="skills section-bg" id="skills">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Compétences</h2>
                <p>Ayant suivi plusieurs formations dans le domaine du développement et du design, j'ai pu acquérir de
                    nombreuses compétences durant ces années.</p>
            </div>

            <div class="bubbles">
                <div class="first-bubble">
                    <img alt="html" src="https://seeklogo.com/images/H/html5-logo-0668063811-seeklogo.com.png">
                </div>
                <div class="bubble non-visibles">
                    <img alt="css" src="https://cdn.icon-icons.com/icons2/512/PNG/512/css3-02_icon-icons.com_50917.png">
                </div>
                <div class="bubble non-visibles">
                    <img alt="javascript"
                         src="https://cdn.icon-icons.com/icons2/2389/PNG/512/javascript_logo_icon_145155.png">
                </div>
                <div class="bubble non-visibles">
                    <img alt="php"
                         src="https://cdn.icon-icons.com/icons2/2389/PNG/512/php_logo_icon_144990.png">
                </div>

                <div class="bubble non-visibles">
                    <img alt="laravel"
                         src="https://static-00.iconduck.com/assets.00/laravel-icon-1990x2048-6ut6f6x6.png">
                </div>
                <div class="bubble non-visibles">
                    <img alt="angular"
                         src="https://angular.io/assets/images/logos/angular/angular_solidBlack.png">
                </div>
                <div class="bubble non-visibles">
                    <img alt="symfony"
                         src="https://maclaine.fr/wp-content/uploads/2021/12/Maclaine-la-rochelle-Agence-symfony.png">
                </div>
                <div class="bubble non-visibles">
                    <img alt="vue"
                         src="https://www.svgrepo.com/show/327411/logo-vue.svg">
                </div>
                <div class="bubble non-visibles">
                    <img alt="react"
                         src="https://static-00.iconduck.com/assets.00/react-icon-2048x1822-iy7h2x8y.png">
                </div>
                <div class="bubble non-visibles">
                    <img alt="java"
                         src="https://cdn-icons-png.freepik.com/512/14/14427.png">
                </div>
                <div class="bubble non-visibles">
                    <img alt="base de données"
                         src="https://icones.pro/wp-content/uploads/2021/05/icone-base-donnees-noir.png">
                </div>
                <div class="bubble non-visibles">
                    <img alt="wordpress"
                         src="https://cdn-icons-png.flaticon.com/512/59/59483.png">
                </div>
                <div class="bubble non-visibles">
                    <img alt="photoshop"
                         src="https://cdn-icons-png.flaticon.com/512/121/121140.png">
                </div>
                <div class="bubble non-visibles">
                    <img alt="illustrator"
                         src="https://cdn-icons-png.flaticon.com/512/121/121135.png">
                </div>
                <div class="bubble non-visibles">
                    <img alt="indesign"
                         src="https://cdn-icons-png.flaticon.com/512/121/121136.png">
                </div>

            </div>
        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section class="resume" id="resume">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Résumé</h2>
                <p>Voici toutes mes expériences passées qui m'ont permis d'être celui que je suis
                    professionnellement</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h3 class="resume-title">Formations</h3>
                    <div class="resume-item">
                        <h4>Concepteur Développeur d'Applications</h4>
                        <h5>2023 - 2025</h5>
                        <p><em>Le Campus Numérique In the Alps, Grenoble</em></p>
                        <ul>
                            <li>HTML / CSS / Javascript</li>
                            <li>Java / Spring Boot</li>
                            <li>SQL / NoSQL</li>
                            <li>Git / Github / Gitlab</li>
                            <li>Déploiement CI/CD</li>
                            <li>C# / .Net</li>
                            <li>Gestion de projet / Méthode Agile</li>
                        </ul>
                    </div>
                    <div class="resume-item">
                        <h4>Développeur Full Stack </h4>
                        <h5>2022 - 2023</h5>
                        <p><em>3W Academy, Paris</em></p>
                        <ul>
                            <li>Typescript / Angular</li>
                            <li>PHP / Symfony</li>
                            <li>SQL / MySQL</li>
                        </ul>
                    </div>
                    <div class="resume-item">
                        <h4>Développeur Web & Applications</h4>
                        <h5>2021 - 2022</h5>
                        <p><em>Le Campus Numérique In the Alps, Grenoble</em></p>
                        <ul>
                            <li>HTML / CSS</li>
                            <li>Javascript / React / Vue</li>
                            <li>PHP / Laravel</li>
                            <li>SQL / NoSQL</li>
                            <li>Git / Github</li>
                            <li>UX / UI</li>
                            <li>Méthode Agile</li>
                        </ul>
                    </div>
                    <div class="resume-item">
                        <h4>Infographiste - Web Designer</h4>
                        <h5>2018 - 2019</h5>
                        <p><em>Brassart, Grenoble</em></p>
                        <ul>
                            <li>HTML / CSS / WordPress</li>
                            <li>Photoshop / Illustrator / InDesign</li>
                            <li>Digital Painting / Dessin</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title">Experiences professionnelles</h3>
                    <div class="resume-item">
                        <h4>Développeur</h4>
                        <h5>2022 - 2023</h5>
                        <p><em>Evolnet, Crolles</em></p>
                        <ul>
                            <li>Refonte d'une application d'envoi de SMS : Frizbi
                                <ul>
                                    <li>Typescript / Angular</li>
                                    <li>PHP / Symfony</li>
                                </ul>
                            </li>
                            <li>Maintenance d'une application de click and collect : <a href="https://localdrivy.fr"
                                                                                        target="_blank">Localdrivy</a>
                                <ul>
                                    <li>Typescript / Angular</li>
                                    <li>PHP / Symfony</li>
                                </ul>
                            </li>
                            <li>Création de sites WordPress : <a href="https://www.detective-grenoble.fr/"
                                                                 target="_blank">April Détectives</a>, <a
                                    href="https://www.climjac.fr/" target="_blank">Climjac</a>
                            </li>
                            <li>Alternance de 1 an</li>
                        </ul>
                    </div>
                    <div class="resume-item">
                        <h4>Développeur</h4>
                        <h5>2021</h5>
                        <p><em>Idretis, Grenoble</em></p>
                        <ul>
                            <li>Refonte de l'application take A Moment
                                <ul>
                                    <li>Javascript / React Native</li>
                                </ul>
                            </li>
                            <li>Stage de 3 mois</li>
                        </ul>
                    </div>
                    <div class="resume-item">
                        <h4>Graphiste</h4>
                        <h5>2019</h5>
                        <p><em>Avalon Digital, Meylan</em></p>
                        <ul>
                            <li>Création de boutons pour un jeu vidéo de statégie : <a
                                    href="https://carrier-battles.com/fr/accueil/" target="_blank">Carrier Battles</a>
                                <ul>
                                    <li>Illustrator</li>
                                </ul>
                            </li>
                            <li>Création de visuel pour un jeu de plateau : Corsica
                                <ul>
                                    <li>Photoshop</li>
                                </ul>
                            </li>
                            <li>Stage de 3 mois</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio section-bg" id="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Voiçi mes créations de mes débuts jusqu'à aujourd'hui.</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <ul id="portfolio-filters">
                        <li class="filter-active" data-filter="*">Tout</li>
                        <li data-filter=".filter-web">Web</li>
                        <li data-filter=".filter-img">Visuel</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/web/climjac.png">
                        <div class="portfolio-info">
                            <h4>ClimJac</h4>
                            <p>Site vitrine pour installation de climatiseur</p>
                            <div class="portfolio-links">
                                <a href="https://www.climjac.fr/"
                                   target="_blank" title="Vers le site ClimJac"><i class="bx bx-link-external"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/web/april-detectives.png">
                        <div class="portfolio-info">
                            <h4>April Detectives</h4>
                            <p>Site vitrine pour détective privé</p>
                            <div class="portfolio-links">
                                <a href="https://www.detective-grenoble.fr/"
                                   target="_blank" title="Lien vers le site April detectives"><i
                                        class="bx bx-link-external"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/web/route-buissonniere.png">
                        <div class="portfolio-info">
                            <h4>La Route Buissonnière</h4>
                            <p>Site vitrine pour un gîte en Drôme</p>
                            <div class="portfolio-links">
                                <a href="https://la-route-buissonniere.alwaysdata.net/"
                                   target="_blank" title="Lien vers le site de la route buissonnière"><i
                                        class="bx bx-link-external"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/web/wata.png">
                        <div class="portfolio-info">
                            <h4>Wata</h4>
                            <p>Site fictif en HTML CSS</p>
                            <div class="portfolio-links">
                                <a href="https://baptiste-mrtn.github.io/Wata/"
                                   target="_blank" title="Vers le site Wata"><i class="bx bx-link-external"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/web/freelo.png">
                        <div class="portfolio-info">
                            <h4>Freelo</h4>
                            <p>Site fictif en HTML CSS</p>
                            <div class="portfolio-links">
                                <a href="https://baptiste-mrtn.github.io/Freelo/"
                                   target="_blank" title="Vers le site Freelo"><i class="bx bx-link-external"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/web/momna.png">
                        <div class="portfolio-info">
                            <h4>Momna</h4>
                            <p>Site fictif en HTML CSS</p>
                            <div class="portfolio-links">
                                <a href="https://baptiste-mrtn.github.io/Momna/"
                                   title="Vers le site Momna"><i class="bx bx-link-external"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/web/labyrinthe.png">
                        <div class="portfolio-info">
                            <h4>Labyrinthe</h4>
                            <p>Labyrinthe créé en Javascript</p>
                            <div class="portfolio-links">
                                <a href="https://baptiste-mrtn.github.io/Labyrinthe/"
                                   title="Lien vers le site du labyrinthe"><i class="bx bx-link-external"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/web/rps.png">
                        <div class="portfolio-info">
                            <h4>Rock Paper Scissors</h4>
                            <p>Jeu pierre papier ciseaux en Javascript</p>
                            <div class="portfolio-links">
                                <a href="https://rps-game.martinbaptiste.fr/"
                                   title="Lien vers le site du jeu pierre papier ciseaux"><i
                                        class="bx bx-link-external"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/web/subway.png">
                        <div class="portfolio-info">
                            <h4>SubWay de luxe</h4>
                            <p>Site fictif en WordPress</p>
                            <div class="portfolio-links">
                                <a href="https://pfe.martinbaptiste.fr/"
                                   title="Lien vers le site Subway de luxe"><i class="bx bx-link-external"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-img">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/visuals/montage-glitch.png">
                        <div class="portfolio-info">
                            <h4>Effet Glitch</h4>
                            <p>Effet glitch - Réalisé sur Photoshop</p>
                            <div class="portfolio-links">
                                <a class="portfolio-lightbox"
                                   data-gallery="portfolioGallery"
                                   href="assets/img/portfolio/visuals/montage-glitch.png" title="Effet Glitch"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-img">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/visuals/lettre-panda.png">
                        <div class="portfolio-info">
                            <h4>Lettre a un panda</h4>
                            <p>Incrustation d'une image dans une lettre - Réalisé sur Photoshop</p>
                            <div class="portfolio-links">
                                <a class="portfolio-lightbox" data-gallery="portfolioGallery"
                                   href="assets/img/portfolio/visuals/lettre-panda.png" title="Lettre a un panda"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-img">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/visuals/homme-nature.png">
                        <div class="portfolio-info">
                            <h4>Homme de nature</h4>
                            <p>Incrustation d'un personnage dans un décor - Réalisé sur Photoshop</p>
                            <div class="portfolio-links">
                                <a class="portfolio-lightbox" data-gallery="portfolioGallery"
                                   href="assets/img/portfolio/visuals/homme-nature.png" title="Homme de nature"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-img">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/visuals/loup-neige.jpg">
                        <div class="portfolio-info">
                            <h4>Loup des neiges</h4>
                            <p>Incrustation d'un décor dans un personnage - Réalisé sur Photoshop</p>
                            <div class="portfolio-links">
                                <a class="portfolio-lightbox" data-gallery="portfolioGallery"
                                   href="assets/img/portfolio/visuals/loup-neige.jpg" title="Loup des neiges"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-img">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/visuals/abysses.jpg">
                        <div class="portfolio-info">
                            <h4>Abysses</h4>
                            <p>Incrustation d'un requin - Réalisé sur Photoshop</p>
                            <div class="portfolio-links">
                                <a class="portfolio-lightbox" data-gallery="portfolioGallery"
                                   href="assets/img/portfolio/visuals/abysses.jpg" title="Abysses"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-img">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/visuals/panda1.jpg">
                        <div class="portfolio-info">
                            <h4>First Panda</h4>
                            <p>Ma première réalisation, un panda capuché - Réalisé sur Photoshop</p>
                            <div class="portfolio-links">
                                <a class="portfolio-lightbox" data-gallery="portfolioGallery"
                                   href="assets/img/portfolio/visuals/panda1.jpg" title="First Panda"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-img">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/visuals/panda-desintegre.jpg">
                        <div class="portfolio-info">
                            <h4>Panda Desintegration</h4>
                            <p>Effet explosion sur un panda - Réalisé sur Photoshop</p>
                            <div class="portfolio-links">
                                <a class="portfolio-lightbox"
                                   data-gallery="portfolioGallery"
                                   href="assets/img/portfolio/visuals/panda-desintegre.jpg" title="Panda Desintegration"><i
                                        class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-img">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/visuals/buste-dp.png">
                        <div class="portfolio-info">
                            <h4>Visage</h4>
                            <p>Dessin (gauche) et photo (droite) - Réalisé sur Photoshop en digital painting</p>
                            <div class="portfolio-links">
                                <a class="portfolio-lightbox" data-gallery="portfolioGallery"
                                   href="assets/img/portfolio/visuals/buste-dp.png" title="Visage"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-img">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/visuals/homme-spiderman.jpg">
                        <div class="portfolio-info">
                            <h4>Super-Héro Révélation</h4>
                            <p>Homme révélant son costume - Réalisé sur Photoshop</p>
                            <div class="portfolio-links">
                                <a class="portfolio-lightbox"
                                   data-gallery="portfolioGallery"
                                   href="assets/img/portfolio/visuals/homme-spiderman.jpg" title="Super-Héro Révélation"><i
                                        class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-img">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/visuals/stan-lee-tri.png">
                        <div class="portfolio-info">
                            <h4>Hommage à Stan Lee</h4>
                            <p>Low-poly de Stan Lee - Réalisé sur Illustrator</p>
                            <div class="portfolio-links">
                                <a class="portfolio-lightbox" data-gallery="portfolioGallery"
                                   href="assets/img/portfolio/visuals/stan-lee-tri.png" title="Hommage à Stan Lee"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-img">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/visuals/chouette.jpg">
                        <div class="portfolio-info">
                            <h4>Chouette destructrice</h4>
                            <p>Incrustation d'une chouette - Réalisé sur Photoshop</p>
                            <div class="portfolio-links">
                                <a class="portfolio-lightbox" data-gallery="portfolioGallery"
                                   href="assets/img/portfolio/visuals/chouette.jpg" title="Chouette destructrice"><i
                                        class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-img">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/visuals/moineau.jpg">
                        <div class="portfolio-info">
                            <h4>Moineau</h4>
                            <p>Dessin d'un moineau - Réalisé sur Photoshop en digital painting</p>
                            <div class="portfolio-links">
                                <a class="portfolio-lightbox" data-gallery="portfolioGallery"
                                   href="assets/img/portfolio/visuals/moineau.jpg" title="Moineau"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-img">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/visuals/oiseau-noir.jpg">
                        <div class="portfolio-info">
                            <h4>Pie</h4>
                            <p>Dessin d'une pie - Réalisé sur Photoshop en digital painting</p>
                            <div class="portfolio-links">
                                <a class="portfolio-lightbox" data-gallery="portfolioGallery"
                                   href="assets/img/portfolio/visuals/oiseau-noir.jpg" title="Pie"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-img">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/visuals/papillon.jpg">
                        <div class="portfolio-info">
                            <h4>Papillon</h4>
                            <p>Dessin d'un papillon - Réalisé sur Photoshop en digital painting</p>
                            <div class="portfolio-links">
                                <a class="portfolio-lightbox" data-gallery="portfolioGallery"
                                   href="assets/img/portfolio/visuals/papillon.jpg" title="Papillon"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-img">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/visuals/panda-tri.png">
                        <div class="portfolio-info">
                            <h4>Panda Low Poly</h4>
                            <p>Panda en low-poly - Réalisé sur Illustrator</p>
                            <div class="portfolio-links">
                                <a class="portfolio-lightbox" data-gallery="portfolioGallery"
                                   href="assets/img/portfolio/visuals/panda-tri.png" title="Panda Low Poly"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-img">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/visuals/panda-galerie.jpg">
                        <div class="portfolio-info">
                            <h4>Panda Galery</h4>
                            <p>Panda au musée - Réalisé sur Photoshop</p>
                            <div class="portfolio-links">
                                <a class="portfolio-lightbox" data-gallery="portfolioGallery"
                                   href="assets/img/portfolio/visuals/panda-galerie.jpg" title="Panda Galery"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-img">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/visuals/honey.png">
                        <div class="portfolio-info">
                            <h4>Comtesse Honey</h4>
                            <p>Montage d'un de mes lapines - Réalisé sur Photoshop</p>
                            <div class="portfolio-links">
                                <a class="portfolio-lightbox" data-gallery="portfolioGallery"
                                   href="assets/img/portfolio/visuals/honey.png" title="Comtesse Honey"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-img">
                    <div class="portfolio-wrap">
                        <img alt="" class="img-fluid" src="assets/img/portfolio/visuals/ruby.png">
                        <div class="portfolio-info">
                            <h4>Comtesse Ruby</h4>
                            <p>Montage d'un de mes lapines - Réalisé sur Photoshop</p>
                            <div class="portfolio-links">
                                <a class="portfolio-lightbox" data-gallery="portfolioGallery"
                                   href="assets/img/portfolio/visuals/ruby.png" title="Comtesse Ruby"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" id="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
            </div>

            <div class="row mt-1">
                <div class="col-lg-8 mt-5 mt-lg-0 mx-auto">
                    <form action="forms/contact.php" class="php-email-form" method="post" role="form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="name">Votre nom</label>
                                <input class="form-control" id="name" name="name" placeholder="John Doe" required
                                       type="text">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label for="email">Votre adresse mail</label>
                                <input class="form-control" id="email" name="email" placeholder="john.doe@gmail.com"
                                       required type="email">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="subject">Sujet</label>
                            <input class="form-control" id="subject" name="subject" placeholder="Demande" required
                                   type="text">
                        </div>
                        <div class="form-group mt-3">
                            <label for="message">Message</label>
                            <textarea id="message" class="form-control" name="message" placeholder="..." required
                                      rows="5"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label for="captcha">Combien font <?= $num1 ?> + <?= $num2 ?> ?</label>
                            <input type="text" class="form-control" id="captcha" name="captcha" placeholder="Votre réponse" required>
                        </div>
                        <div class="my-3">
                            <div class="loading">Chargement</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Votre message a bien été envoyé. Merci!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Envoyer</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <img alt="logo" class="w-25" src="assets/img/logo/logo.png">
        <div class="social-links">
            <a class="github" href="https://github.com/baptiste-mrtn" target="_blank"><i
                    class="bx bxl-github"></i></a>
            <a class="linkedin" href="https://www.linkedin.com/in/baptistemrtn/" target="_blank"><i
                    class="bx bxl-linkedin"></i></a>
        </div>
        <div class="copyright">
            &copy; Copyright <strong><span>Baptiste Martin</span></strong>
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: [license-url] -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->
<div id="preloader"></div>
<a class="back-to-top d-flex align-items-center justify-content-center" href="#"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/typed.js/typed.umd.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/portfolio.js"></script>

</body>

</html>