<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= $data['business-card'] ?> - <?= $data['name'] ?></title>
    <meta name="description" content="<?= lang('Home.system.seo.description') ?>">
    <meta name="keywords" content="<?= lang('Home.system.seo.keywords') ?>">
    <meta name="author" content="<?= lang('Home.system.seo.author') ?>">
    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php if (in_array($locale, ['en', 'vi', 'id', 'es'])) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <?php elseif ('th' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
    <?php elseif ('zh-TW' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">
    <?php elseif ('ja' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <?php elseif ('en-Shaw' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Shavian&display=swap" rel="stylesheet">
    <?php elseif ('ko' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <?php endif; ?>
    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet') ?>">
    <!-- hreflang -->
    <link rel="alternate" hreflang="en" href="<?= base_url('business-card?hl=en') ?>"/>
    <link rel="alternate" hreflang="th" href="<?= base_url('business-card?hl=th') ?>"/>
    <link rel="alternate" hreflang="ja" href="<?= base_url('business-card?hl=ja') ?>"/>
    <link rel="alternate" hreflang="zh-TW" href="<?= base_url('business-card?hl=zh-TW') ?>"/>
    <link rel="alternate" hreflang="ko" href="<?= base_url('business-card?hl=ko') ?>"/>
    <link rel="alternate" hreflang="vi" href="<?= base_url('business-card?hl=vi') ?>"/>
    <link rel="alternate" hreflang="es" href="<?= base_url('business-card?hl=es') ?>"/>
    <link rel="alternate" hreflang="id" href="<?= base_url('business-card?hl=id') ?>"/>
    <link rel="alternate" hreflang="en-Shaw" href="<?= base_url('business-card?hl=en-Shaw') ?>"/>
    <link rel="alternate" hreflang="x-default" href="<?= base_url('business-card') ?>"/>
    <link rel="canonical" href="<?= current_url() . (empty($hl) ? '' : '?hl=' . $hl) ?>">
    <style>
        body {
            background-image: linear-gradient(to bottom, #003602, #0f3102);
        <?php if (in_array($locale, ['en', 'vi', 'id', 'es'])) : ?> font-family: "Noto Sans", sans-serif;
        <?php elseif ('th' == $locale) : ?> font-family: "Noto Sans Thai", sans-serif;
        <?php elseif ('zh-TW' == $locale) : ?> font-family: "Noto Sans TC", sans-serif;
        <?php elseif ('ja' == $locale) : ?> font-family: "Noto Sans JP", sans-serif;
        <?php elseif ('en-Shaw' == $locale) : ?> font-family: "Noto Sans Shavian", sans-serif;
        <?php elseif ('ko' == $locale) : ?> font-family: "Noto Sans KR", sans-serif;
        <?php endif; ?>
        }
        .card, .list-group, .list-group-item {
            background: transparent;
            color: #fff;
        }
        .contact-link .bi {
            font-size:2em;
        }
        a {
            color: #afa !important;
        }
    </style>
    <!-- =======================================================
    * Template Name: Craftivo
    * Template URL: https://bootstrapmade.com/craftivo-bootstrap-portfolio-template/
    * Updated: Oct 04 2025 with Bootstrap v5.3.8
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col px-0" style="width:100%;max-width:800px;margin:0 auto;">
            <div class="card">
                <img class="card-img-top" src="<?= base_url('assets/img/business-card/business-card.jpg') ?>" alt="<?= $data['name'] ?>" />
                <div class="card-body">
                    <h1><?= $data['name'] ?></h1>
                    <p><?= $data['tagline'] ?></p>
                    <div class="row contact-link">
                        <?php foreach ($links as $key => $link) : ?>
                            <div class="col-4 col-md-3"><a class="d-block w-100 text-center py-3" href="<?= $link ?>" target="_blank"><i class="bi bi-<?= $key ?>"></i></a></div>
                        <?php endforeach; ?>
                        <?php foreach ($profiles as $name => $link) : ?>
                            <div class="col-4 col-md-3"><a class="btn btn-link w-100 py-4 fw-bold text-decoration-none" href="<?= $link ?>" target="_blank"><?= $name ?></a></div>
                        <?php endforeach; ?>
                    </div>
                    <hr class="my-4" />
                    <h2 class="mt-3"><i class="bi bi-mortarboard"></i> <?= $data['education'] ?></h2>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($data['educations'] as $row) : ?>
                            <li class="list-group-item"><?= $row ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <h2 class="mt-3"><i class="bi bi-award"></i> <?= $data['certification'] ?></h2>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($data['certifications'] as $row) : ?>
                            <li class="list-group-item"><?= $row ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <hr class="my-4" />
                    <p>
                        <i class="bi bi-translate"></i>
                        <?php foreach ($supported_languages as $lang_code => $lang_name) : ?>
                            <a class="btn btn-link btn-sm text-decoration-none" href="?hl=<?= $lang_code ?>"><?= $lang_name ?></a>
                        <?php endforeach; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>