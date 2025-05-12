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
    <link href="assets/img/logo/logo.webp" rel="icon">
    <link href="assets/img/logo/logo.webp" rel="apple-touch-icon">
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
    <?php
    include_once('./assets/php/portfolio.php');
    ?>

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
                <li><a class="nav-link scrollto" href="#plans"><i class="bx bx-table"></i>
                        <span>Plans</span></a></li>
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
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <h1>Baptiste Martin</h1>
                    <p>Je suis un <span class="typed" data-typed-items="développeur web, développeur d'applications, web designer, concepteur"></span></p>
                    <div class="social-links">
                        <a class="github" href="https://github.com/baptiste-mrtn" target="_blank" data-aos="fade-up" data-aos-delay="200"><i class="bx bxl-github"></i></a>
                        <a class="linkedin" href="https://www.linkedin.com/in/baptistemrtn/" target="_blank" data-aos="fade-up" data-aos-delay="300"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 text-center" data-aos="fade-left" data-aos-delay="200">
                    <img alt="logo" src="assets/img/logo/logo.webp" class="hero-logo">
                </div>
            </div>
        </div>
        <div class="scroll-down">
            <a href="#about">
                <i class="bx bx-chevron-down"></i>
            </a>
        </div>
    </section>

    <main id="main">
        <section class="about" id="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>A propos</h2>
                    <p>Originaire d'Ardèche dans la petite ville de Tournon-sur-Rhône, j'ai déménagé à Grenoble afin de poursuivre mes études dans le domaine qui me plaît: l'informatique.</p>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-3" data-aos="fade-right" data-aos-delay="100">
                        <img alt="" class="img-fluid profile-img" src="assets/img/me.png">
                    </div>
                    <div class="col-lg-9 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="200">
                        <h3 class="mb-4">Développeur web & applications</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-geo-alt"></i> <strong>Ville:</strong> <span>Vienne</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-mortarboard"></i> <strong>Niveau:</strong> <span>Concepteur Développeur</span></li>
                                </ul>
                            </div>
                            <div class="col-12">
                                <p class="intro mb-4"><strong>Hello World, </strong><br>
                                    Ayant un fort attrait pour le domaine de l'informatique depuis mon plus jeune âge, je suis venu à Grenoble pour faire des études de <strong>graphiste</strong> car le métier me plaisait et je souhaitais connaître les différentes facettes d'un artiste du numérique.
                                    <br>
                                    C'est en suivant ces cours que j'ai pu découvrir une porte d'entrée vers la <strong>programmation</strong> et le <strong>développement web</strong> qui m'a pour le coup intrigué. <br>
                                    J'ai donc, au fil des années, poursuit les études dans cette voie pour y découvrir les multitudes de langages qui s'offraient à moi et au monde entier.
                                    <br>
                                    Grâce à mes connaissances et mes compétences, j'ai décidé de créer ce webfolio afin de pouvoir montrer aux autres mon parcours et mes différents projets réalisés au cours de mon existence.
                                </p>
                            </div>
                            <div class="col-12 text-center cv-container" data-aos="fade-up" data-aos-delay="300">
                                <a class="cv" href="assets/pdf/CV_Baptiste_Martin.pdf">Télécharger le CV</a>
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

                <div class="wheel-container">
                    <!-- Les bulles sont injectées automatiquement ici -->
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

        <!-- ======= Plans Section ======= -->
        <section id="plans" class="plans-container">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Plans</h2>
                    <p>Différents tarifs suivant vos besoins</p>
                </div>
                <div class="plans">
                    <div class="plan">
                        <h3>Formule Starter</h3>
                        <div class="price">à partir de 500€</div>
                        <ul>
                            <li>Site vitrine WordPress</li>
                            <li>Thème personnalisé</li>
                            <li>1 page (accueil) + contact</li>
                            <li>Responsive design</li>
                            <li>Livraison en 1 semaine</li>
                        </ul>
                    </div>
                    <div class="plan">
                        <h3>Formule Pro</h3>
                        <div class="price">à partir de 1200€</div>
                        <ul>
                            <li>Site vitrine sur mesure</li>
                            <li>Jusqu'à 5 pages (accueil, contact, services…)</li>
                            <li>Design unique et optimisé</li>
                            <li>Optimisation SEO de base</li>
                            <li>Formulaire de contact</li>
                            <li>Intégration réseaux sociaux</li>
                            <li>Livraison en 2-3 semaines</li>
                        </ul>
                    </div>
                    <div class="plan">
                        <h3>Formule Expert</h3>
                        <div class="price">à partir de 2500€</div>
                        <ul>
                            <li>Site WordPress ou Full Stack (Laravel, Node...)</li>
                            <li>Interface d'administration personnalisée</li>
                            <li>Connexion à une base de données</li>
                            <li>Fonctionnalités sur mesure</li>
                            <li>Maintenance 3 mois incluse</li>
                            <li>Statistiques de trafic</li>
                            <li>Livraison en 4 à 6 semaines</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 text-center tarif-container">
                    <a class="price-button" href="assets/pdf/Grille_Tarifaire.pdf">Télécharger la grille tarifaire détaillée</a>
                </div>
            </div>
        </section>
        <!-- End Plans Section -->

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

                <div id="portfolio-loading" class="text-center py-5">
                    <div class="spinner-border text-success" role="status">
                        <span class="visually-hidden">Chargement...</span>
                    </div>
                    <p class="mt-3">Chargement du portfolio...</p>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200" style="display: none;">
                    <?php 
                    $delay = 0;
                    foreach ($portfolioItems as $item): 
                        $delay += 100;
                    ?>
                        <div class="col-lg-4 col-md-6 portfolio-item <?= $item['filter'] ?>" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                            <div class="portfolio-wrap">
                                <img alt="<?= $item['title'] ?>" class="img-fluid" src="<?= $item['img'] ?>" loading="lazy">
                                <div class="portfolio-info">
                                    <h4><?= $item['title'] ?></h4>
                                    <p><?= $item['description'] ?></p>
                                    <div class="portfolio-links">
                                        <a href="<?= $item['link'] ?>" target="_blank" title="Vers le site <?= $item['title'] ?>"><i class="bx bx-link-external"></i></a>
                                        <?php if (isset($item['lightbox']) && $item['lightbox']): ?>
                                            <a class="portfolio-lightbox" data-gallery="portfolioGallery" href="<?= $item['link'] ?>" title="<?= $item['title'] ?>"><i class="bx bx-plus"></i></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
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
                                <div class="error-message">
                                    <?=
                                    $_SESSION['error']; // Stocke la réponse dans la session
                                    ?>
                                </div>
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
            <img alt="logo" class="w-25" src="assets/img/logo/logo.webp">
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
                <a href="#" onclick="openModal(); return false;">Mentions Légales</a> | Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
    <script src="assets/js/skills.js"></script>

    <!-- Modal Mentions Légales -->
    <div class="modal-overlay" id="legalModal">
        <div class="modal-container">
            <div class="modal-header">
                <h2>Mentions Légales</h2>
                <button class="modal-close" onclick="closeModal()">&times;</button>
            </div>
            <div class="modal-content">
                <h3>1. Informations légales</h3>
                <p>Ce site est édité par :</p>
                <ul>
                    <li>Nom : Baptiste Martin</li>
                    <li>Statut : Micro-entrepreneur</li>
                    <li>Adresse : 45 rue Druge, 38200 Vienne</li>
                    <li>Email : contact@martinbaptiste.fr</li>
                    <li>N° SIRET : 93065512100026</li>
                </ul>

                <h3>2. Hébergement</h3>
                <p>Ce site est hébergé par :</p>
                <ul>
                    <li>OVH SAS</li>
                    <li>2 rue Kellermann</li>
                    <li>59100 Roubaix - France</li>
                </ul>

                <h3>3. Propriété intellectuelle</h3>
                <p>L'ensemble de ce site relève de la législation française et internationale sur le droit d'auteur et la propriété intellectuelle. Tous les droits de reproduction sont réservés, y compris pour les documents téléchargeables et les représentations iconographiques et photographiques.</p>

                <h3>4. Protection des données personnelles</h3>
                <p>Conformément à la loi "Informatique et Libertés" du 6 janvier 1978 modifiée et au Règlement Général sur la Protection des Données (RGPD), vous disposez d'un droit d'accès, de rectification et de suppression des données vous concernant.</p>
                <p>Pour exercer ce droit, vous pouvez nous contacter à l'adresse email suivante : contact@martinbaptiste.fr</p>

                <h3>5. Cookies</h3>
                <p>Ce site utilise uniquement des cookies techniques nécessaires à son fonctionnement (gestion du formulaire de contact). Aucun cookie de tracking ou d'analyse n'est utilisé.</p>

                <h3>6. Contact</h3>
                <p>Pour toute question concernant ces mentions légales, vous pouvez nous contacter à l'adresse suivante : contact@martinbaptiste.fr</p>
            </div>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById('legalModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('legalModal').classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        // Fermer la modal en cliquant sur l'overlay
        document.getElementById('legalModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Fermer la modal avec la touche Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });
    </script>
</body>

</html>