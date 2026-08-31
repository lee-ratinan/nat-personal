<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= lang('Writing.title') ?> - <?= lang('Home.system.website-name') ?></title>
    <meta name="description" content="<?= lang('Writing.system.seo.description') ?>">
    <meta name="keywords" content="<?= lang('Writing.system.seo.keywords') ?>">
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
    <link rel="alternate" hreflang="en" href="<?= base_url('en/writing') ?>"/>
    <link rel="alternate" hreflang="th" href="<?= base_url('th/writing') ?>"/>
    <link rel="alternate" hreflang="ja" href="<?= base_url('ja/writing') ?>"/>
    <link rel="alternate" hreflang="zh-TW" href="<?= base_url('zh-TW/writing') ?>"/>
    <link rel="alternate" hreflang="x-default" href="<?= base_url('writing') ?>"/>
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
<?php include "_header.php"; ?>
<main class="main">
    <!-- Writing Section -->
    <section id="about" class="about section mt-5">
        <div class="container section-title" data-aos="fade-up">
            <h2><?= lang('Writing.title') ?></h2>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-5">
                <div class="col-12 col-md-6" data-aos="zoom-in" data-aos-delay="150">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <h3><i class="bi bi-medium"></i></h3>
                            <h4><?= lang('Home.sections.contact.medium') ?></h4>
                            <a href="https://medium.com/@ratinanlee" target="_blank">@ratinanlee</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6" data-aos="zoom-in" data-aos-delay="160">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <h3><i class="bi bi-pencil-square"></i></h3>
                            <h4>ReadAWrite</h4>
                            <a href="https://www.readawrite.com/?action=user_page&user_id_publisher=8793437&tab=articleList" target="_blank">Rikikawa Eikin</a>
                        </div>
                    </div>
                </div>
                <?php
                $fictions = [
                    'gravitas-nostra'   => [
                        'title'     => 'Gravitas Nostra: พื้นที่พักใจ กับใครสักคน',
                        'author'    => 'Rikikawa Eikin',
                        'languages' => ['th'],
                        'genre'     => ['social-realism', 'boy-love', 'coming-of-age', 'depression'],
                        'released'  => ['2026-03-00', '2026-04-00'],
                        'link'      => 'https://www.readawrite.com/a/9fff8655b2eed3cad369303c7344cbfb?r=user_page',
                        'platform'  => 'ReadAWrite',
                    ],
                    'cursed-competence' => [
                        'title'     => 'The Cursed Competence',
                        'author'    => 'Rikikawa Eikin',
                        'languages' => ['th', 'en'],
                        'genre'     => ['diary', 'social-realism', 'depression'],
                        'released'  => ['2026-04-01'],
                        'link'      => 'https://www.readawrite.com/a/bc64ac1014d31fb2343a09f530caabbb?r=user_page',
                        'platform'  => 'ReadAWrite',
                    ],
                    'hallucinated-hug'  => [
                        'title'     => 'The Hallucinated Hug',
                        'author'    => 'Rikikawa Eikin',
                        'languages' => ['th', 'en'],
                        'genre'     => ['diary', 'social-realism', 'depression'],
                        'released'  => ['2026-03-30'],
                        'link'      => 'https://www.readawrite.com/a/75c86100cc52079d471a7ea704eefc7c?r=user_page',
                        'platform'  => 'ReadAWrite',
                    ]
                ];
                ?>
                <?php foreach ($fictions as $key => $fiction) : ?>
                    <div class="col-12 col-lg-6" data-aos="zoom-in" data-aos-delay="180">
                        <div class="card bg-dark">
                            <div class="card-body text-white">
                                <img class="me-3 mb-3 float-lg-end" src="<?= base_url('assets/img/fiction/' . $key . '.jpg') ?>" alt="<?= $key ?>" style="border-radius:5px;width:200px" />
                                <br class="d-inline-block d-lg-none" />
                                <?= (isset($fiction['title']) ? '<h4>' . $fiction['title'] . '</h4>' : '') ?>
                                <?= (isset($fiction['author']) ? '<b>' . lang('Writing.label.author') . '</b>: ' . $fiction['author'] . '<br>' : '') ?>
                                <?= (isset($fiction['released']) ? '<b>' . lang('Writing.label.released') . '</b>: ' . format_date($fiction['released'], $locale, ' - ') . '<br>' : '') ?>
                                <?php
                                if (isset($fiction['languages'])) {
                                    echo '<b>' . lang('Writing.label.languages') . '</b>: ';
                                    $avail_languages = [];
                                    foreach ($fiction['languages'] as $lcode) {
                                        $avail_languages[] = lang('Writing.languages.' . $lcode);
                                    }
                                    echo implode(', ', $avail_languages) . '<br>';
                                }
                                if (isset($fiction['genre'])) {
                                    echo '<b>' . lang('Writing.label.genre') . '</b>: ';
                                    $avail_genres = [];
                                    foreach ($fiction['genre'] as $genre) {
                                        $avail_genres[] = lang('Writing.genres.' . $genre);
                                    }
                                    echo implode(', ', $avail_genres) . '<br>';
                                }
                                ?>
                                <?= (isset($fiction['link']) ? '<a class="btn btn-sm btn-outline-success mt-3" href="' . $fiction['link'] . '" target="_blank">' . lang('Writing.label.read') . (isset($fiction['platform']) ? ' @' . $fiction['platform'] : '') . '</a><br>' : '') ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section><!-- /About Section -->
</main>
<?php include "_footer.php"; ?>
</body>
</html>