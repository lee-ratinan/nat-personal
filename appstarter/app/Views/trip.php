<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= lang('PersonalLife.trip.title') ?> - <?= lang('Home.system.website-name') ?></title>
    <meta name="description" content="This page contains my portfolio, aiming to showcase my journey as a Scrum Master, Tech Lead, and Project Manager.">
    <meta name="keywords" content="Portfolio, scrum, scrum master, tech lead, project manager, project management">
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
    <link rel="alternate" hreflang="en" href="<?= base_url('en/trip') ?>"/>
    <link rel="alternate" hreflang="th" href="<?= base_url('th/trip') ?>"/>
    <link rel="alternate" hreflang="ja" href="<?= base_url('ja/trip') ?>"/>
    <link rel="alternate" hreflang="zh-TW" href="<?= base_url('zh-TW/trip') ?>"/>
    <link rel="alternate" hreflang="x-default" href="<?= base_url('trip') ?>"/>
    <link rel="canonical" href="<?= current_url() ?>">
    <!-- =======================================================
    * Template Name: Craftivo
    * Template URL: https://bootstrapmade.com/craftivo-bootstrap-portfolio-template/
    * Updated: Oct 04 2025 with Bootstrap v5.3.8
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body class="index-page trip-page <?= $locale ?>">
<?php include "_header.php"; ?>
<main class="main mt-5 pt-5">
    <section id="about" class="about section mt-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 py-3">
                    <h1 class="text-center"><?= lang('PersonalLife.trip.title') ?></h1>
                </div>
                <div class="col">
                    <div class="table-responsive">
                        <table id="main-table" class="table table-dark table-striped table-hover table-sm">
                            <thead>
                            <tr>
                                <td style="min-width:225px;"><i class="bi bi-calendar-check"></i></td>
                                <td style="min-width:150px;"><i class="bi bi-globe-americas"></i></td>
                                <td style="min-width:150px;"><i class="bi bi-pin-map"></i></td>
                                <td style="min-width:300px;"></td>
                                <td style="min-width:150px;"><i class="bi bi-file-earmark-text"></i></td>
                                <td style="min-width:300px;"><i class="bi bi-image"></i></td>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($trips as $trip) : ?>
                                <?php $date_str  = format_date($trip['dates'], $locale, ' - '); ?>
                                <tr>
                                    <td data-order="<?= $trip['dates'][0] ?>"><?= $date_str ?></td>
                                    <td><?= lang('PersonalLife.sections.gallery.filters.' . $trip['filter']) ?></td>
                                    <td><?= lang('PersonalLife.country.' . $trip['country']) ?></td>
                                    <td><?= $trip['title'] ?></td>
                                    <td>
                                        <?= (isset($details[$trip['code']]) ? '<a href="' . base_url($locale . '/trip/' . $trip['code']) . '"><i class="bi bi-file-earmark-text"></i> ' . lang('PersonalLife.detail') . '</a><br/>' : '') ?>
                                        <?= (isset($trip['link']) ? '<a href="' . str_replace('[[LOCALE]]', $locale, $trip['link']) . '"><i class="bi bi-image"></i> ' . lang('PersonalLife.gallery') . '</a>' : '') ?>
                                    </td>
                                    <td>
                                        <?php if (isset($trip['junrei']) && is_array($trip['junrei']) && !empty($trip['junrei'])) : ?>
                                        <ul class="ps-1">
                                        <?php foreach ($trip['junrei'] as $junrei) : ?>
                                            <li><a href="<?= str_replace('[[LOCALE]]', $locale, $junrei['link']) ?>"><?= $junrei['title'] ?></a></li>
                                        <?php endforeach; ?>
                                        </ul>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "_footer.php"; ?>
<link href="https://cdn.datatables.net/v/dt/dt-3.0.0/datatables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/v/dt/dt-3.0.0/datatables.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const table = new DataTable('#main-table', {paging: false, order: [{column: 0, direction: 'desc'}]});
    });
</script>
</body>
</html>