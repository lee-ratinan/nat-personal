<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= lang('PersonalLife.system.title') ?> - <?= lang('Home.system.website-name') ?></title>
    <meta name="description" content="<?= lang('PersonalLife.system.seo.description') ?>">
    <meta name="keywords" content="<?= lang('PersonalLife.system.seo.keywords') ?>">
    <meta name="author" content="<?= lang('Home.system.seo.author') ?>">
    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
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
    <link rel="alternate" hreflang="en" href="<?= base_url('en/personal-life') ?>"/>
    <link rel="alternate" hreflang="th" href="<?= base_url('th/personal-life') ?>"/>
    <link rel="alternate" hreflang="ja" href="<?= base_url('ja/personal-life') ?>"/>
    <link rel="alternate" hreflang="zh-TW" href="<?= base_url('zh-TW/personal-life') ?>"/>
    <link rel="alternate" hreflang="x-default" href="<?= base_url('personal-life') ?>"/>
    <link rel="canonical" href="<?= current_url() ?>">
    <!-- =======================================================
    * Template Name: Craftivo
    * Template URL: https://bootstrapmade.com/craftivo-bootstrap-portfolio-template/
    * Updated: Oct 04 2025 with Bootstrap v5.3.8
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <style>
        .flag-badge img {height:1.2em;margin-right:0.5em;}
        .flag-badge {margin-right:0.5em;}
    </style>
</head>
<body class="index-page <?= $locale ?>">
<?php include "_header.php"; ?>
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
                    <h2><?= lang('PersonalLife.sections.home.greetings') ?></h2>
                    <p><?= lang('PersonalLife.sections.home.i-am-a') ?> <span class="typed" data-typed-items="<?= lang('PersonalLife.sections.home.occupations') ?>"></span><span class="typed-cursor" aria-hidden="true"></span></p>
                    <div class="social-links">
                        <a href="https://www.instagram.com/ratinanlee/" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.facebook.com/lee.ratinan" target="_blank"><i class="bi bi-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->
    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="content" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="mb-4"><?= lang('PersonalLife.sections.about.heading') ?></h2>
                        <p class="lead mb-4"><?= lang('PersonalLife.sections.about.paragraph-1') ?></p>
                        <p class="mb-5"><?= lang('PersonalLife.sections.about.paragraph-2') ?></p>
                        <div class="row g-4 mb-5">
                            <div class="col-6">
                                <div class="stat-item text-center">
                                    <div class="stat-number fw-bold" id="api_country_count">###</div>
                                    <div class="stat-label"><?= lang('PersonalLife.sections.about.box-1') ?></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-item text-center">
                                    <div class="stat-number fw-bold" id="api_journey_distance_km">###</div>
                                    <div class="stat-label">
                                        <?= lang('PersonalLife.sections.about.box-2') ?>
                                        <?php if ('en' == $locale) : ?>
                                            <br><span style="font-size:0.7em">(<span id="api_journey_distance_miles">###</span> miles)</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-item text-center">
                                    <?php $vacations = count($galleries); ?>
                                    <div class="stat-number fw-bold"><?= number_format($vacations) ?></div>
                                    <div class="stat-label"><?= lang('PersonalLife.sections.about.box-3') ?></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-item text-center">
                                    <div class="stat-number fw-bold" id="api_flight_count">###</div>
                                    <div class="stat-label"><?= lang('PersonalLife.sections.about.box-4') ?></div>
                                </div>
                            </div>
                            <div class="col-12 text-center" id="flag-badges"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="image-stack" style="position: relative;">
                        <div class="image-main" style="position: relative;z-index: 1;">
                            <img src="<?= base_url('assets/img/travel/about-1.jpg') ?>" alt="<?= lang('PersonalLife.sections.about.heading') ?>" class="img-fluid" style="border-radius: 8px; box-shadow: 0 20px 40px color-mix(in srgb, var(--accent-color), transparent 90%);">
                        </div>
                        <div class="image-overlay" style="position: absolute;bottom: -40px;right: -40px;z-index: 2;max-width: 200px;">
                            <img src="<?= base_url('assets/img/travel/about-2.jpg') ?>" alt="Nat Lee" class="img-fluid" style="border-radius: 8px; border: 4px solid var(--default-color); box-shadow: 0 15px 30px color-mix(in srgb, var(--accent-color), transparent 85%);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->
    <!-- Gallery Section -->
    <section id="gallery" class="gallery portfolio section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up" data-aos-delay="300">
            <h5><?= lang('PersonalLife.sections.gallery.title') ?></h5>
            <h2><?= lang('PersonalLife.sections.gallery.heading') ?></h2>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="isotope-layout" data-default-filter=".filter-first-twelve" data-layout="masonry" data-sort="original-order">
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
                    <li data-filter="*" class="filter-active"><?= lang('PersonalLife.sections.gallery.filters.all') ?> <span id="count-gallery-all"></span></li>
                    <li data-filter=".filter-southeast-asia"><?= lang('PersonalLife.sections.gallery.filters.southeast-asia') ?> <span id="count-gallery-southeast-asia"></span></li>
                    <li data-filter=".filter-east-asia"><?= lang('PersonalLife.sections.gallery.filters.east-asia') ?> <span id="count-gallery-east-asia"></span></li>
                    <li data-filter=".filter-oceania"><?= lang('PersonalLife.sections.gallery.filters.oceania') ?> <span id="count-gallery-oceania"></span></li>
                    <li data-filter=".filter-america"><?= lang('PersonalLife.sections.gallery.filters.america') ?> <span id="count-gallery-america"></span></li>
                </ul>
                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
                    <?php
                    $regions = [
                            'southeast-asia' => 0,
                            'east-asia'      => 0,
                            'america'        => 0,
                            'oceania'        => 0,
                    ];
                    ?>
                    <?php foreach ($galleries as $i => $gallery) : ?>
                        <?php
                        $regions[$gallery['filter']] += 1;
                        $locations = [];
                        $date_str  = format_date($gallery['dates'], $locale, ' - ');
                        foreach ($gallery['locations'] as $location) {
                            $locations[] = lang('PersonalLife.locations.' . $location);
                        }
                        ?>
                        <div class="col-lg-3 col-md-4 col-6 portfolio-item isotope-item <?= ($i < 12 ? 'filter-first-twelve' : '') ?> <?= 'filter-' . $gallery['filter'] ?>">
                            <div class="portfolio-card">
                                <div class="portfolio-image-container">
                                    <img src="<?= base_url('assets/img/gallery/' . $gallery['code'] . '.jpg') ?>" alt="<?= $gallery['title'] ?>" class="img-fluid" loading="lazy">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-info">
                                            <h4><?= $gallery['title'] ?></h4>
                                        </div>
                                        <div class="portfolio-actions">
                                            <a href="<?= base_url('assets/img/gallery/' . $gallery['code'] . '.jpg') ?>" class="glightbox portfolio-link" data-glightbox="title:<?= $gallery['title'] ?>;description: <i class='bi bi-geo-alt'></i> <?= implode(get_comma($locale), $locations) ?> <i class='bi bi-calendar-heart'></i> <?= $date_str ?> <?= (!empty($gallery['detail']) ? '<br>' . $gallery['detail'] : '')?>"><i class="bi bi-plus-lg"></i></a>
                                            <?php if (!empty($gallery['link'])) : ?>
                                                <a href="<?= str_replace('[[LOCALE]]', $locale, $gallery['link']) ?>" class="portfolio-details" target="_blank"><i class="bi bi-arrow-right"></i></a>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-meta">
                                    <div class="d-flex flex-nowrap overflow-x-auto gap-2 pb-2">
                                        <span class="badge bg-success text-white text-nowrap">
                                            <?= implode('</span><span class="badge bg-success text-white text-nowrap">', $locations) ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="portfolio-meta overflow-x-auto">
                                    <span class="small text-nowrap"><i class="bi bi-calendar-heart"></i> <?= $date_str ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col py-5 text-end">
                    <a href="<?= base_url($locale . '/trip') ?>"><?= lang('PersonalLife.trip.button') ?> <i class="bi bi-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
    </section><!-- /Gallery Section -->
    <script>
        document.getElementById('count-gallery-all').innerHTML = '(<?= count($galleries) ?>)';
        document.getElementById('count-gallery-southeast-asia').innerHTML = '(<?= $regions['southeast-asia'] ?>)';
        document.getElementById('count-gallery-east-asia').innerHTML = '(<?= $regions['east-asia'] ?>)';
        document.getElementById('count-gallery-oceania').innerHTML = '(<?= $regions['oceania'] ?>)';
        document.getElementById('count-gallery-america').innerHTML = '(<?= $regions['america'] ?>)';
    </script>
    <!-- Bucket List Section -->
    <section id="bucket-list" class="bucket-list portfolio section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up" data-aos-delay="300">
            <h5><?= lang('PersonalLife.sections.bucket-list.title') ?></h5>
            <h2><?= lang('PersonalLife.sections.bucket-list.heading') ?></h2>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="isotope-layout" data-default-filter=".filter-first-twelve" data-layout="masonry" data-sort="original-order">
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
                    <li data-filter="*" class="filter-active"><?= lang('PersonalLife.sections.bucket-list.filters.all') ?> <span id="count-bucket-all"></span></li>
                    <li data-filter=".filter-observatory"><?= lang('PersonalLife.sections.bucket-list.filters.observatory') ?> <span id="count-bucket-observatory"></span></li>
                    <li data-filter=".filter-adventure"><?= lang('PersonalLife.sections.bucket-list.filters.adventure') ?> <span id="count-bucket-adventure"></span></li>
                    <li data-filter=".filter-cultural"><?= lang('PersonalLife.sections.bucket-list.filters.cultural') ?> <span id="count-bucket-cultural"></span></li>
                    <li data-filter=".filter-pilgrimage"><?= lang('PersonalLife.sections.bucket-list.filters.pilgrimage') ?> <span id="count-bucket-pilgrimage"></span></li>
                    <li data-filter=".filter-others"><?= lang('PersonalLife.sections.bucket-list.filters.others') ?> <span id="count-bucket-others"></span></li>
                </ul>
                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
                    <?php
                    $stats = [
                            'observatory' => 0,
                            'adventure'   => 0,
                            'cultural'    => 0,
                            'pilgrimage'  => 0,
                            'others'      => 0
                    ];
                    ?>
                    <?php foreach ($bucket_lists as $i => $item) : ?>
                        <?php
                        if (isset($bucket_lists_to_fill[$item['filter']][$item['code']])) {
                            unset($bucket_lists_to_fill[$item['filter']][$item['code']]);
                        }
                        $stats[$item['filter']] += 1;
                        $date_str = '';
                        if (!empty($item['dates'])) {
                            $date_str = format_date($item['dates'], $locale);
                        } else if (isset($item['since'])) {
                            $year     = calculate_years([$item['since']], $locale);
                            $date_str = lang('PersonalLife.since', [$year]);
                        }
                        $locations = [];
                        foreach ($item['locations'] as $location) {
                            $locations[] = lang('PersonalLife.locations.' . $location);
                        }
                        ?>
                        <div class="col-lg-3 col-md-4 col-6 portfolio-item isotope-item <?= ($i < 12 ? 'filter-first-twelve' : '') ?> <?= 'filter-' . $item['filter'] ?>">
                            <div class="portfolio-card">
                                <div class="portfolio-image-container">
                                    <img src="<?= base_url('assets/img/bucket-lists/' . $item['code'] . '.jpg') ?>" alt="<?= $item['title'] ?>" class="img-fluid" loading="lazy">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-info">
                                            <h4><?= $item['title'] ?></h4>
                                        </div>
                                        <div class="portfolio-actions">
                                            <a href="<?= base_url('assets/img/bucket-lists/' . $item['code'] . '.jpg') ?>" class="glightbox portfolio-link" data-glightbox="title:<?= lang('PersonalLife.sections.bucket-list.filters.' . $item['filter']) ?> / <?= $item['title'] ?>; description: <i class='bi bi-geo-alt'></i> <?= implode(get_comma($locale), $locations) ?> <i class='bi bi-calendar-heart'></i> <?= $date_str ?>"><i class="bi bi-plus-lg"></i></a>
                                            <?php if (!empty($item['link'])) : ?>
                                                <a href="<?= str_replace('[[LOCALE]]', $locale, $item['link']) ?>" class="portfolio-details" target="_blank"><i class="bi bi-arrow-right"></i></a>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-meta">
                                    <div class="d-flex flex-nowrap overflow-x-auto gap-2 pb-2">
                                        <span class="badge bg-success text-white text-nowrap">
                                            <?= implode('</span><span class="badge bg-success text-white text-nowrap">', $locations) ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="portfolio-meta overflow-x-auto">
                                    <span class="small text-nowrap">
                                        <i class="bi bi-calendar-heart"></i> <?= $date_str ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php foreach ($bucket_lists_to_fill as $category_code => $category_items) : ?>
                        <?php foreach ($category_items as $code => $item) : ?>
                            <?php
                            $locations = [];
                            foreach ($item['location'] as $location) {
                                $locations[] = lang('PersonalLife.locations.' . $location);
                            }
                            if (empty($locations)) {
                                $locations[] = lang('PersonalLife.locations.unknown');
                            }
                            ?>
                            <div class="col-lg-3 col-md-4 col-6 portfolio-item isotope-item <?= 'filter-' . $category_code ?>">
                                <div class="portfolio-card">
                                    <div class="portfolio-image-container">
                                        <img src="<?= base_url('assets/img/bucket-lists/' . $code . '.jpg') ?>" alt="<?= $item['title'] ?>" class="img-fluid" loading="lazy">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-info">
                                                <h4><?= $item['title'] ?></h4>
                                            </div>
                                            <div class="portfolio-actions">
                                                <a href="<?= base_url('assets/img/bucket-lists/' . $code . '.jpg') ?>" class="glightbox portfolio-link" data-glightbox="title:<?= lang('PersonalLife.sections.bucket-list.filters.' . $category_code) ?> / <?= $item['title'] ?>;"><i class="bi bi-plus-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-meta">
                                        <div class="d-flex flex-nowrap overflow-x-auto gap-2 pb-2">
                                            <span class="badge bg-success text-white text-nowrap">
                                                <?= implode('</span><span class="badge bg-success text-white text-nowrap">', $locations) ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="portfolio-meta overflow-x-auto">
                                        <span class="small text-nowrap"><i class="bi bi-calendar-heart"></i> -</span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section><!-- /Bucket List Section -->
    <?php
    $totals = [
            'observatory' => ($stats['observatory']+count($bucket_lists_to_fill['observatory'])),
            'adventure'   => ($stats['adventure']+count($bucket_lists_to_fill['adventure'])),
            'cultural'    => ($stats['cultural']+count($bucket_lists_to_fill['cultural'])),
            'pilgrimage'  => ($stats['pilgrimage']+count($bucket_lists_to_fill['pilgrimage'])),
            'others'      => ($stats['others']+count($bucket_lists_to_fill['others']))
    ];
    $grand_total = array_sum($totals);
    ?>
    <script>
        document.getElementById('count-bucket-all').innerHTML = '(<?= count($bucket_lists) ?>/<?= $grand_total ?>)';
        document.getElementById('count-bucket-observatory').innerHTML = '(<?= $stats['observatory'] ?>/<?= $totals['observatory'] ?>)';
        document.getElementById('count-bucket-adventure').innerHTML = '(<?= $stats['adventure'] ?>/<?= $totals['adventure'] ?>)';
        document.getElementById('count-bucket-cultural').innerHTML = '(<?= $stats['cultural'] ?>/<?= $totals['cultural'] ?>)';
        document.getElementById('count-bucket-pilgrimage').innerHTML = '(<?= $stats['pilgrimage'] ?>/<?= $totals['pilgrimage'] ?>)';
        document.getElementById('count-bucket-others').innerHTML = '(<?= $stats['others'] ?>/<?= $totals['others'] ?>)';
    </script>
</main>
<?php include "_footer.php"; ?>
<script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>
<script>
    $(function () {
        $.get(
            'https://admin.ratinan.com/api/journey-stats',
            function (response) {
                if ('OK' === response.status) {
                    $('#api_country_count').html((response.data.country_count).toLocaleString());
                    $('#api_flight_count').html((response.data.flight_count).toLocaleString());
                    $('#api_journey_distance_km').html((response.data.journey_distance.km).toLocaleString());
                    $('#api_journey_distance_miles').html((response.data.journey_distance.mile).toLocaleString());
                    // flags
                    let half = Math.ceil(response.data.country_count/2),
                        counter = 0;
                    $.each(response.data.country_breakdown, function (key, value) {
                        let flag_url = 'https://admin.ratinan.com/assets/vendor/flag-icon/flags/4x3/' + key.toLowerCase() + '.svg';
                        $('#flag-badges').append(`<span class="badge text-bg-success flag-badge"><img src="${flag_url}" alt="${key}" title="${key}" /> ${value}</span>`);
                        counter++;
                        if (counter === half) {
                            $('#flag-badges').append(`<br/>`);
                        }
                    });
                }
            }
        );
    });
</script>
</body>
</html>