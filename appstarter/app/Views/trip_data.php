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
                    <p><a href="<?= base_url($locale . '/trip') ?>">Trip</a> / <?= $trip['title'] ?></p>
                    <h1 class="text-center"><?= $trip['title'] ?></h1>
                    <span class="float-end"><code>CODE: <?= strtoupper($trip['code']) ?></code></span>
                    <p><i class="bi bi-globe-americas"></i> <?= lang('PersonalLife.sections.gallery.filters.' . $trip['filter']) ?></p>
                    <p>
                        <i class="bi bi-pin-map"></i>
                        <?php foreach ($trip['locations'] as $location) : ?>
                            <?= lang('PersonalLife.locations.' . $location) ?>
                        <?php endforeach; ?>
                    </p>
                    <p><i class="bi bi-calendar-check"></i> <?= format_date($trip['dates'], $locale, ' - ') ?></p>
                    <p><?= $trip['detail'] ?></p>
                    <?php if (!empty($trip['link'])) : ?>
                        <p><a href="<?= str_replace('[[LOCALE]]', $locale, $trip['link']) ?>"><i class="bi bi-image"></i> <?= $trip['title'] ?></a></p>
                    <?php endif; ?>
                    <?php if ($detail['itinerary']) : ?>
                        <div class="table-responsive">
                            <table id="table-1" class="table table-sm table-hover table-striped table-borderless table-dark">
                                <thead>
                                <tr>
                                    <td style="width:50px">#</td>
                                    <td><b><?= $detail['date'] ?></b></td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($detail['itinerary'] as $day) : ?>
                                    <tr>
                                        <td></td>
                                        <td><b><?= $day['date'] ?></b></td>
                                    </tr>
                                    <?php foreach ($day['lines'] as $line) : ?>
                                        <tr>
                                            <td><?= $line[0] ?></td>
                                            <td><?= $line[1] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>
                    <?php if ($detail['budget']) : ?>
                        <div class="table-responsive">
                            <table id="table-2" class="table table-sm table-hover table-striped table-borderless table-dark">
                                <thead>
                                    <tr>
                                        <td></td>
                                        <td><b><?= $detail['budget']['title'] ?></b></td>
                                        <td class="text-end" style="width:100px"><?= $detail['budget']['currencies'][0] ?></td>
                                        <td class="text-end" style="width:100px"><?= $detail['budget']['currencies'][1] ?></td>
                                    </tr>
                                </thead>
                                <?php
                                $totals[0] = 0.0;
                                $totals[1] = 0.0;
                                ?>
                                <tbody>
                                <?php foreach ($detail['budget']['lines'] as $line) : ?>
                                    <tr>
                                        <?php
                                        $totals[0] += $line[2];
                                        $totals[1] += $line[3];
                                        ?>
                                        <td><?= $line[0] ?></td>
                                        <td><?= $line[1] ?></td>
                                        <td class="text-end"><?= (0 < $line[2] ? format_money($line[2], $detail['budget']['currencies'][0]) : '-') ?></td>
                                        <td class="text-end"><?= (0 < $line[3] ? format_money($line[3], $detail['budget']['currencies'][1]) : '-') ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td></td>
                                    <td class="text-end"><?= $detail['budget']['totals'] ?></td>
                                    <td class="text-end"><?= (0 < $totals[0] ? format_money($totals[0], $detail['budget']['currencies'][0]) : '-') ?></td>
                                    <td class="text-end"><?= (0 < $totals[1] ? format_money($totals[1], $detail['budget']['currencies'][1]) : '-') ?></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    <?php endif; ?>
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
        const table1 = new DataTable('#table-1', {paging: false, ordering: false, info: false});
        const table2 = new DataTable('#table-2', {paging: false, ordering: false, info: false});
    });
</script>
</body>
</html>