<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= lang('Home.system.pages.home') ?> - <?= lang('Home.system.website-name') ?></title>
    <meta name="description" content="<?= lang('Home.system.seo.description') ?>">
    <meta name="keywords" content="<?= lang('Home.system.seo.keywords') ?>">
    <meta name="author" content="<?= lang('Home.system.seo.author') ?>">
    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php if ('en' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Story+Script&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <?php elseif ('th' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&family=Sriracha&display=swap" rel="stylesheet">
    <?php elseif ('zh-TW' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&family=Stick&display=swap" rel="stylesheet">
    <?php elseif ('ja' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&family=Yusei+Magic&display=swap" rel="stylesheet">
    <?php else : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Shavian&display=swap" rel="stylesheet">
    <?php endif; ?>
    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet') ?>">
    <!-- Main CSS File -->
    <link href="<?= base_url('assets/css/main.min.css') ?>" rel="stylesheet">
    <!-- hreflang -->
    <link rel="alternate" hreflang="en" href="<?= base_url('en') ?>"/>
    <link rel="alternate" hreflang="th" href="<?= base_url('th') ?>"/>
    <link rel="alternate" hreflang="ja" href="<?= base_url('ja') ?>"/>
    <link rel="alternate" hreflang="zh-TW" href="<?= base_url('zh-TW') ?>"/>
    <link rel="alternate" hreflang="x-default" href="<?= base_url() ?>"/>
    <link rel="canonical" href="<?= current_url() ?>">
    <!-- =======================================================
    * Template Name: Craftivo
    * Template URL: https://bootstrapmade.com/craftivo-bootstrap-portfolio-template/
    * Updated: Oct 04 2025 with Bootstrap v5.3.8
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body class="index-page <?= $locale ?>">
<?php
$experience_years = date('Y') - 2012;
include "_header.php";
?>
<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <picture data-aos="fade-in">
            <source media="(min-width: 768px)" srcset="<?= base_url('assets/img/profile/profile-hero.jpg') ?>">
            <img src="<?= base_url('assets/img/profile/profile-hero-mobile.jpg') ?>" alt="Hero Image" />
        </picture>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2><?= lang('Home.sections.home.greetings') ?></h2>
                    <p><?= lang('Home.sections.home.i-am-a') ?> <span class="typed" data-typed-items="<?= lang('Home.sections.home.occupations') ?>"></span><span class="typed-cursor" aria-hidden="true"></span></p>
                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/ratinanlee" target="_blank"><i class="bi bi-linkedin"></i></a>
                        <a href="https://github.com/lee-ratinan" target="_blank"><i class="bi bi-github"></i></a>
                        <a href="https://www.instagram.com/ratinanlee/" target="_blank"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->
    <!-- About Section -->
    <section id="about" class="about section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="subtitle"><?= lang('Home.numbers.1') ?></span>
            <h2><?= lang('Home.sections.about.about-me') ?></h2>
            <p><?= lang('Home.sections.about.main-paragraph') ?></p>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-5">
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="150">
                    <div class="profile-card">
                        <div class="profile-header">
                            <div class="profile-avatar">
                                <img src="<?= base_url('assets/img/profile/profile-img.jpg') ?>" class="img-fluid" alt="<?= lang('Home.sections.about.ratinan-lee') ?>">
                                <div class="status-indicator"></div>
                            </div>
                            <h3><?= lang('Home.sections.about.ratinan-lee') ?></h3>
                            <span class="role"><?= lang('Home.sections.about.main-occupations') ?></span>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span>5.0</span>
                            </div>
                        </div>
                        <div class="profile-stats">
                            <div class="stat-item">
                                <h4>20+</h4>
                                <p><?= lang('Home.sections.about.counts.products') ?></p>
                            </div>
                            <div class="stat-item">
                                <h4><?= $experience_years ?>+</h4>
                                <p><?= lang('Home.sections.about.counts.years') ?></p>
                            </div>
                            <div class="stat-item">
                                <h4>19+</h4>
                                <p><?= lang('Home.sections.about.counts.certificates') ?></p>
                            </div>
                        </div>
                        <div class="profile-actions">
                            <a href="#" class="btn-primary d-none"><i class="bi bi-download"></i> <?= lang('Home.sections.about.download-cv') ?></a>
                            <a href="#contact" class="btn-secondary"><i class="bi bi-envelope"></i> <?= lang('Home.sections.contact.title') ?></a>
                        </div>
                        <div class="social-connect">
                            <a href="https://www.linkedin.com/in/ratinanlee" target="_blank"><i class="bi bi-linkedin"></i></a>
                            <a href="https://github.com/lee-ratinan" target="_blank"><i class="bi bi-github"></i></a>
                            <a href="https://www.instagram.com/ratinanlee/" target="_blank"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-left" data-aos-delay="200">
                    <div class="content-wrapper">
                        <div class="bio-section">
                            <div class="section-tag"><?= lang('Home.sections.about.about-me') ?></div>
                            <h2><?= lang('Home.sections.about.secondary.title') ?></h2>
                            <p><?= lang('Home.sections.about.secondary.paragraph-1') ?></p>
                            <p><?= lang('Home.sections.about.secondary.paragraph-2') ?></p>
                        </div>
                        <div class="details-grid">
                            <div class="detail-item" data-aos="fade-up" data-aos-delay="250">
                                <i class="bi bi-briefcase"></i>
                                <div class="detail-content">
                                    <span><?= lang('Home.sections.about.boxes.1.label') ?></span>
                                    <strong><?= lang('Home.sections.about.boxes.1.value', [$experience_years]) ?></strong>
                                </div>
                            </div>
                            <div class="detail-item" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-mortarboard"></i>
                                <div class="detail-content">
                                    <span><?= lang('Home.sections.about.boxes.2.label') ?></span>
                                    <strong><?= lang('Home.sections.about.boxes.2.value') ?></strong>
                                </div>
                            </div>
                            <div class="detail-item" data-aos="fade-up" data-aos-delay="350">
                                <i class="bi bi-geo-alt"></i>
                                <div class="detail-content">
                                    <span><?= lang('Home.sections.about.boxes.3.label') ?></span>
                                    <strong><?= lang('Home.sections.about.boxes.3.value') ?></strong>
                                </div>
                            </div>
                            <div class="detail-item" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-calendar-check"></i>
                                <div class="detail-content">
                                    <span><?= lang('Home.sections.about.boxes.4.label') ?></span>
                                    <strong><?= lang('Home.sections.about.boxes.4.value') ?></strong>
                                </div>
                            </div>
                            <div class="detail-item" data-aos="fade-up" data-aos-delay="350">
                                <i class="bi bi-translate"></i>
                                <div class="detail-content">
                                    <span><?= lang('Home.sections.about.boxes.5.label') ?></span>
                                    <strong><?= lang('Home.sections.about.boxes.5.value') ?></strong>
                                </div>
                            </div>
                            <div class="detail-item" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-person-vcard"></i>
                                <div class="detail-content">
                                    <span><?= lang('Home.sections.about.boxes.6.label') ?></span>
                                    <strong><?= lang('Home.sections.about.boxes.6.value') ?></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->
    <!-- Resume Section -->
    <section id="resume" class="resume section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="subtitle"><?= lang('Home.numbers.2') ?></span>
            <h2><?= lang('Home.sections.resume.title') ?></h2>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="experience-section">
                        <div class="section-header" data-aos="fade-right" data-aos-delay="200">
                            <div class="header-content">
                                <span class="section-badge"><?= lang('Home.sections.resume.experience.label') ?></span>
                                <h2><?= lang('Home.sections.resume.experience.title') ?></h2>
                            </div>
                        </div>
                        <div class="experience-cards">
                            <div class="exp-card featured" data-aos="zoom-in" data-aos-delay="300">
                                <div class="card-header">
                                    <div class="company-logo">
                                        <i class="bi bi-buildings"></i>
                                    </div>
                                    <div class="period-badge"><?= lang('Home.sections.resume.experience.records.1.current') ?></div>
                                </div>
                                <div class="card-body">
                                    <h3><?= lang('Home.sections.resume.experience.records.1.title') ?></h3>
                                    <p class="company-name"><?= lang('Home.sections.resume.experience.records.1.companies') ?></p>
                                    <span class="duration"><?= calculate_years([2018, 0], $locale, ' - ') ?></span>
                                    <p class="description"><?= lang('Home.sections.resume.experience.records.1.paragraph') ?></p>
                                    <div class="skills-tags">
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.1.tags.1') ?></span>
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.1.tags.2') ?></span>
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.1.tags.3') ?></span>
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.1.tags.4') ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="exp-card" data-aos="zoom-in" data-aos-delay="350">
                                <div class="card-header">
                                    <div class="company-logo">
                                        <i class="bi bi-laptop"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3><?= lang('Home.sections.resume.experience.records.2.title') ?></h3>
                                    <p class="company-name"><?= lang('Home.sections.resume.experience.records.2.companies') ?></p>
                                    <span class="duration"><?= calculate_years([2024, 0], $locale, ' - ') ?></span>
                                    <p class="description"><?= lang('Home.sections.resume.experience.records.2.paragraph') ?></p>
                                    <div class="skills-tags">
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.2.tags.1') ?></span>
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.2.tags.2') ?></span>
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.2.tags.3') ?></span>
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.2.tags.4') ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="exp-card" data-aos="zoom-in" data-aos-delay="400">
                                <div class="card-header">
                                    <div class="company-logo">
                                        <i class="bi bi-keyboard"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3><?= lang('Home.sections.resume.experience.records.3.title') ?></h3>
                                    <p class="company-name"><?= lang('Home.sections.resume.experience.records.3.companies') ?></p>
                                    <span class="duration"><?= calculate_years([2012, 2017], $locale, ' - ') ?></span>
                                    <p class="description"><?= lang('Home.sections.resume.experience.records.3.paragraph') ?></p>
                                    <div class="skills-tags">
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.3.tags.1') ?></span>
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.3.tags.2') ?></span>
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.3.tags.3') ?></span>
                                        <span class="skill-tag"><?= lang('Home.sections.resume.experience.records.3.tags.4') ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="education-section">
                        <div class="section-header" data-aos="fade-left" data-aos-delay="200">
                            <div class="header-content">
                                <span class="section-badge"><?= lang('Home.sections.resume.education.label') ?></span>
                                <h2><?= lang('Home.sections.resume.education.title') ?></h2>
                                <a class="btn btn-outline-success rounded-pill" href="<?= base_url($locale . '/certifications') ?>"><?= lang('Certifications.title') ?> <i class="bi bi-arrow-right-circle"></i></a>
                            </div>
                        </div>
                        <div class="education-timeline" data-aos="fade-left" data-aos-delay="300">
                            <div class="timeline-track">
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <i class="bi bi-patch-check-fill"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <div class="education-meta">
                                            <span class="year-range"><?= calculate_years([2024, 2025], $locale, ' - ') ?></span>
                                            <span class="degree-level"><?= lang('Home.sections.resume.education.records.certificates.label') ?></span>
                                        </div>
                                        <h4><?= lang('Home.sections.resume.education.records.certificates.title') ?></h4>
                                        <div class="certifications-list">
                                            <?php foreach (lang('Home.sections.resume.education.records.certificates.list') as $line) : ?>
                                                <div class="cert-item">
                                                    <span class="cert-name"><?= $line[0] ?></span>
                                                    <span class="cert-year"><?= calculate_years($line[1], $locale) ?></span>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <i class="bi bi-mortarboard-fill"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <div class="education-meta">
                                            <span class="year-range"><?= calculate_years([2014, 2015], $locale, ' - ') ?></span>
                                            <span class="degree-level"><?= lang('Home.sections.resume.education.records.masters.label') ?></span>
                                        </div>
                                        <h4><?= lang('Home.sections.resume.education.records.masters.title') ?></h4>
                                        <p class="institution"><?= lang('Home.sections.resume.education.records.masters.university') ?></p>
                                        <p class="description"><?= lang('Home.sections.resume.education.records.masters.paragraph') ?></p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <i class="bi bi-mortarboard-fill"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <div class="education-meta">
                                            <span class="year-range"><?= calculate_years([2008, 2012], $locale, ' - ') ?></span>
                                            <span class="degree-level"><?= lang('Home.sections.resume.education.records.bachelor.label') ?></span>
                                        </div>
                                        <h4><?= lang('Home.sections.resume.education.records.bachelor.title') ?></h4>
                                        <p class="institution"><?= lang('Home.sections.resume.education.records.bachelor.university') ?></p>
                                        <p class="description"><?= lang('Home.sections.resume.education.records.bachelor.paragraph') ?></p>
                                        <div class="achievement">
                                            <i class="bi bi-award"></i>
                                            <span><?= lang('Home.sections.resume.education.records.bachelor.honors') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Resume Section -->
    <!-- Services Section -->
    <section id="services" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="subtitle"><?= lang('Home.numbers.3') ?></span>
            <h2><?= lang('Home.sections.services.title') ?></h2>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <?php
                $icons = [
                        'kanban', // leadership + management
                        'palette', // system analysis design
                        'code-slash', // development
                        'megaphone'  // coaching
                ];
                ?>
                <?php for ($i = 0; $i < 4; $i++) : ?>
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="<?= $i + 1 ?>00">
                        <div class="service-item">
                            <?php if (0 == $i) : ?>
                                <div class="featured-tag"><?= lang('Home.sections.services.featured') ?></div><?php endif ?>
                            <div class="icon-wrapper">
                                <i class="bi bi-<?= $icons[$i] ?>"></i>
                            </div>
                            <h4><?= lang('Home.sections.services.list.' . $i . '.item') ?></h4>
                            <p><?= lang('Home.sections.services.list.' . $i . '.description') ?></p>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="row mt-5">
                <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="cta-box">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h3><?= lang('Home.sections.services.cta-title') ?></h3>
                                <p><?= lang('Home.sections.services.cta-paragraph') ?></p>
                            </div>
                            <div class="col-lg-4 text-lg-end text-center">
                                <a href="#contact" class="cta-btn"><?= lang('Home.sections.services.cta') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Services Section -->
    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="subtitle"><?= lang('Home.numbers.4') ?></span>
            <h2><?= lang('Home.sections.portfolio.title') ?></h2>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
                    <li data-filter="*" class="filter-active"><?= lang('Home.sections.portfolio.filters.all') ?></li>
                    <li data-filter=".filter-website"><?= lang('Home.sections.portfolio.filters.website') ?></li>
                    <li data-filter=".filter-backend"><?= lang('Home.sections.portfolio.filters.backend') ?></li>
                    <li data-filter=".filter-mobile"><?= lang('Home.sections.portfolio.filters.mobile') ?></li>
                    <li data-filter=".filter-ai"><?= lang('Home.sections.portfolio.filters.ai') ?></li>
                </ul>
                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
                    <?php
                    $tag_types = [
                            'website' => lang('Home.sections.portfolio.filters.website'),
                            'backend' => lang('Home.sections.portfolio.filters.backend'),
                            'mobile'  => lang('Home.sections.portfolio.filters.mobile'),
                            'ai'      => lang('Home.sections.portfolio.filters.ai')
                    ];
                    $portfolio_items = [
                            [
                                    'title'   => 'Golf School Website',
                                    'filters' => ['website'],
                                    'image'   => 'wisdomgolf.jpg',
                                    'year'    => [2025],
                                    'tags'    => ['website', 'seo', 'ux-ui-design', 'thailand']
                            ],
                            [
                                    'title'   => 'Thai Massage Website',
                                    'filters' => ['website'],
                                    'image'   => 'skythai.jpg',
                                    'year'    => [2025],
                                    'tags'    => ['website', 'seo', 'ux-ui-design', 'new-zealand']
                            ],
                            [
                                    'title'   => 'Industrial Website',
                                    'filters' => ['website'],
                                    'image'   => 'meirdtech.jpg',
                                    'year'    => [2025],
                                    'tags'    => ['website', 'seo', 'thailand']
                            ],
                            [
                                    'title'   => 'Remittance Portal',
                                    'filters' => ['website', 'backend'],
                                    'image'   => 'moolahgo.jpg',
                                    'year'    => [2021, 2024],
                                    'tags'    => ['fintech', 'data-analytics', 'security']
                            ],
                            [
                                    'title'   => 'Remittance Mobile App',
                                    'filters' => ['mobile', 'backend', 'ai'],
                                    'image'   => 'moolahpay.jpg',
                                    'year'    => [2021, 2024],
                                    'tags'    => ['fintech', 'ux-ui-design', 'ai', 'security']
                            ],
                            [
                                    'title'   => 'Snack Online Stores',
                                    'filters' => ['website', 'backend'],
                                    'image'   => 'irvins.jpg',
                                    'year'    => [2020, 2021],
                                    'tags'    => ['e-commerce', 'seo', 'shopify']
                            ],
                            [
                                    'title'   => 'Furniture Online Stores',
                                    'filters' => ['website', 'backend'],
                                    'image'   => 'secretlab.jpg',
                                    'year'    => [2018, 2020],
                                    'tags'    => ['e-commerce', 'seo', 'shopify']
                            ],
                            [
                                    'title'   => 'Personal Accounting Application',
                                    'filters' => ['website', 'backend'],
                                    'image'   => 'backendku.jpg',
                                    'year'    => [2018, 0],
                                    'tags'    => ['backend', 'data-analytics']
                            ],
                    ];
                    ?>
                    <?php foreach ($portfolio_items as $portfolio) : ?>
                        <div class="col-lg-3 col-md-4 col-6 portfolio-item isotope-item <?php foreach ($portfolio['filters'] as $filter) {echo ' filter-' . $filter;} ?>">
                            <div class="portfolio-card">
                                <div class="portfolio-image-container">
                                    <img src="<?= base_url('assets/img/portfolio/' . $portfolio['image']) ?>" alt="<?= $portfolio['title'] ?>" class="img-fluid" loading="lazy">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-info">
                                            <?php foreach ($portfolio['filters'] as $filter) : ?>
                                                <span class="project-category"><?= $tag_types[$filter] ?></span>
                                            <?php endforeach; ?>
                                            <h4><?= $portfolio['title'] ?></h4>
                                        </div>
                                        <div class="portfolio-actions">
                                            <a href="<?= base_url('assets/img/portfolio/' . $portfolio['image']) ?>" class="glightbox portfolio-link d-none"><i class="bi bi-plus-lg"></i></a>
                                            <a href="#" class="portfolio-details d-none"><i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-meta">
                                    <div class="project-tags me-2 d-block">
                                        <?php foreach ($portfolio['tags'] as $tag) : ?><span class="tag float-start m-1"><?= lang('Home.sections.portfolio.tags.' . $tag) ?></span><?php endforeach; ?>
                                    </div>
                                    <div class="project-year d-none"><?= calculate_years($portfolio['year'], $locale, ' - ') ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="portfolio-bottom" data-aos="fade-up" data-aos-delay="400">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h3><?= lang('Home.sections.portfolio.cta-title') ?></h3>
                        <p><?= lang('Home.sections.portfolio.cta-paragraph') ?></p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="#contact" class="btn btn-accent"><?= lang('Home.sections.portfolio.cta') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Portfolio Section -->
    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="subtitle"><?= lang('Home.numbers.5') ?></span>
            <h2><?= lang('Home.sections.contact.title') ?></h2>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row gy-4">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="info-item">
                        <div class="icon-wrapper">
                            <i class="bi bi-linkedin"></i>
                        </div>
                        <div>
                            <h3><?= lang('Home.sections.contact.linkedin') ?></h3>
                            <p><a href="https://www.linkedin.com/in/ratinanlee" target="_blank">/in/ratinanlee</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="info-item">
                        <div class="icon-wrapper">
                            <i class="bi bi-github"></i>
                        </div>
                        <div>
                            <h3><?= lang('Home.sections.contact.github') ?></h3>
                            <p><a href="https://github.com/lee-ratinan" target="_blank">/lee-ratinan</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="info-item">
                        <div class="icon-wrapper">
                            <i class="bi bi-instagram"></i>
                        </div>
                        <div>
                            <h3><?= lang('Home.sections.contact.instagram') ?></h3>
                            <p><a href="https://www.instagram.com/ratinanlee/" target="_blank">/ratinanlee</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="info-item">
                        <div class="icon-wrapper">
                            <i class="bi bi-line"></i>
                        </div>
                        <div>
                            <h3><?= lang('Home.sections.contact.line') ?></h3>
                            <p><a href="https://line.me/ti/p/ME2Tsnm9nr" target="_blank">Nat-エイキン</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="info-item">
                        <div class="icon-wrapper">
                            <i class="bi bi-medium"></i>
                        </div>
                        <div>
                            <h3><?= lang('Home.sections.contact.medium') ?></h3>
                            <p><a href="https://medium.com/@ratinanlee" target="_blank">@ratinanlee</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="info-item">
                        <div class="icon-wrapper">
                            <i class="bi bi-messenger"></i>
                        </div>
                        <div>
                            <h3><?= lang('Home.sections.contact.facebook') ?></h3>
                            <p><a href="https://www.messenger.com/t/lee.ratinan/" target="_blank">/lee.ratinan</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="info-item">
                        <div class="icon-wrapper">
                            <i class="bi bi-telegram"></i>
                        </div>
                        <div>
                            <h3><?= lang('Home.sections.contact.telegram') ?></h3>
                            <p><a href="https://t.me/rikikawa_eikin" target="_blank">@rikikawa_eikin</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="info-item">
                        <div class="icon-wrapper">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <div>
                            <h3><?= lang('Home.sections.contact.whatsapp') ?></h3>
                            <p><a href="<?= base_url('whatsapp') ?>" target="_blank">Ratinan “Nat” Lee</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Contact Section -->
</main>
<?php include "_footer.php"; ?>
</body>
</html>