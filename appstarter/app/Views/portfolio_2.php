<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= lang('Home.sections.portfolio.title') ?> - <?= lang('Home.system.website-name') ?></title>
    <meta name="description" content="<?= lang('Home.system.seo.description') ?>">
    <meta name="keywords" content="<?= lang('Home.system.seo.keywords') ?>">
    <meta name="author" content="<?= lang('Home.system.seo.author') ?>">
    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php if (in_array($locale, ['en', 'vi', 'id', 'es', 'art-x-navi'])) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap"
              rel="stylesheet">
    <?php elseif ('th' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Thai:wght@100..900&display=swap"
              rel="stylesheet">
    <?php elseif ('zh-TW' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@100..900&display=swap" rel="stylesheet">
    <?php elseif ('ja' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@100..900&display=swap" rel="stylesheet">
    <?php elseif ('en-Shaw' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Shavian&display=swap" rel="stylesheet">
    <?php elseif ('ko' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@100..900&display=swap" rel="stylesheet">
    <?php endif; ?>
    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/fontawesome-free-7.1.0-web/css/all.min.css') ?>" rel="stylesheet">
    <!-- hreflang -->
    <link rel="alternate" hreflang="en" href="<?= base_url('en/portfolio') ?>"/>
    <link rel="alternate" hreflang="th" href="<?= base_url('th/portfolio') ?>"/>
    <link rel="alternate" hreflang="ja" href="<?= base_url('ja/portfolio') ?>"/>
    <link rel="alternate" hreflang="zh-TW" href="<?= base_url('zh-TW/portfolio') ?>"/>
    <link rel="alternate" hreflang="en-Shaw" href="<?= base_url('en-Shaw/portfolio') ?>"/>
    <link rel="alternate" hreflang="x-default" href="<?= base_url('portfolio') ?>"/>
    <link rel="canonical" href="<?= current_url() ?>">
    <style>
        body {
        <?php if (in_array($locale, ['en', 'vi', 'id', 'es'])) : ?> font-family: "Noto Serif", serif;
        <?php elseif ('th' == $locale) : ?> font-family: "Noto Serif Thai", serif;
        <?php elseif ('zh-TW' == $locale) : ?> font-family: "Noto Serif TC", serif;
        <?php elseif ('ja' == $locale) : ?> font-family: "Noto Serif JP", serif;
        <?php elseif ('en-Shaw' == $locale) : ?> font-family: "Noto Sans Shavian", serif;
        <?php elseif ('ko' == $locale) : ?> font-family: "Noto Serif KR", serif;
        <?php endif; ?>
        }

        a {
            text-decoration: none;
            color: #222;
        }

        [data-bs-theme="dark"] a {
            color: #ccc;
        }
    </style>
    <script>
        function applySystemTheme(e) {
            const isDark = e.matches;
            document.documentElement.setAttribute('data-bs-theme', isDark ? 'dark' : 'light');
        }

        const colorSchemeQuery = window.matchMedia('(prefers-color-scheme: dark)');
        applySystemTheme(colorSchemeQuery);
        colorSchemeQuery.addEventListener('change', applySystemTheme);
    </script>
</head>
<body class="<?= $locale ?>">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm overflow-visible">
                <div class="position-relative">
                    <img src="<?= base_url('assets/img/portfolio-page/banner.webp') ?>" class="card-img-top object-fit-cover" alt="Cover Banner" style="height: 250px;">
                    <div class="position-absolute start-0 translate-middle-y ms-4">
                        <img src="<?= base_url('assets/img/portfolio-page/profile.webp') ?>" class="rounded-circle border border-4 border-white shadow-sm" alt="Profile Picture" style="width: 200px; height: 200px; object-fit: cover;">
                    </div>
                </div>
                <div class="card-body mt-5 pt-5 mt-2 px-4">
                    <h3 class="card-title mt-3 fw-bold mb-0"><?= lang('Portfolio.title-name') ?></h3>
                    <p class="text-muted small">
                        <a href="https://www.linkedin.com/in/ratinanlee/" target="_blank"><i class="fa-brands fa-square-linkedin"></i> @ratinanlee</a>
                        &middot;
                        <a href="<?= base_url($locale . '/business-card') ?>"><i class="fa-solid fa-address-card"></i> <?= lang('Portfolio.contact-me') ?></a>
                    </p>
                    <p class="text-muted"><?= lang('Portfolio.subtitle') ?></p>
                    <ul class="nav nav-tabs" id="portfolio-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" id="portfolio-tab" data-target="tab-portfolio"><?= lang('Home.sections.portfolio.title') ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="reviews-tab" data-target="tab-reviews"><?= lang('Portfolio.reviews.title') ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="about-tab" data-target="tab-about"><?= lang('Portfolio.about.title') ?></a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-page p-3" id="tab-portfolio">
                            abc;adksjf;aklsdjf; a<br/>
                            ads;kfja;sf<br/>
                            asdkfja;s<br/>
                            asdfkja<br/>
                            sadfjask;<br/>
                        </div>
                        <div class="tab-page p-3 d-none" id="tab-reviews">
                            defads;kfja;sf<br/>
                            asdkfja;s<br/>
                            asdfkja<br/>
                            sadfjask;<br/>
                        </div>
                        <div class="tab-page p-3 d-none" id="tab-about">
                            <h3><?= lang('Portfolio.experience.section-title') ?></h3>
                            <?php
                            $work = [
                                [
                                    'freelance.webp', lang('Portfolio.experience.title.freelance'),
                                    lang('Portfolio.experience.company.freelance'), lang('Portfolio.location.remote'),
                                    2024, 0
                                ],
                                [
                                    'moolahgo.webp', lang('Portfolio.experience.title.tech-lead'), 'Moolahgo (FinTech)',
                                    lang('Portfolio.location.singapore'), 2021, 2024
                                ],
                                [
                                    'irvins.webp', lang('Portfolio.experience.title.tech-lead'),
                                    'Irvins (Salted Egg Snacks)', lang('Portfolio.location.singapore'), 2020, 2021
                                ],
                                [
                                    'secretlab.webp', lang('Portfolio.experience.title.it-backend-lead'),
                                    'Secretlab (Gaming Chairs)', lang('Portfolio.location.singapore'), 2018, 2020
                                ],
                                [
                                    'buzzcity.webp', lang('Portfolio.experience.title.software-engineer'),
                                    'BuzzCity-MobAds (AdsTech)', lang('Portfolio.location.singapore'), 2015, 2027
                                ],
                                [
                                    'dst.webp', lang('Portfolio.experience.title.programmer'),
                                    'DST Worldwide Services (Financial)', lang('Portfolio.location.bangkok'), 2012, 2014
                                ],
                            ];
                            ?>
                            <?php foreach ($work as $row) : ?>
                                <div class="row">
                                    <div class="col-12 p-1 mb-2">
                                        <img src="<?= base_url('assets/img/portfolio-page/companies/' . $row[0]) ?>"
                                             alt="<?= $row[2] ?>"
                                             class="img-thumbnail bg-white p-1 me-3 mb-2 float-md-start"
                                             style="max-width:80px;"/><br class="d-md-none"/>
                                        <h6 class="mb-1"><?= $row[1] ?><br/><?= $row[2] ?></h6>
                                        <p><?= $row[3] ?> &middot; <?= calculate_years([
                                                $row[4], $row[5]
                                            ], $locale, ' - ') ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <h3><?= lang('Portfolio.school.section-title') ?></h3>
                            <?php
                            $school = [
                                [
                                    'ntu.webp', lang('Portfolio.school.title.ntu'),
                                    lang('Portfolio.school.program.msc'), lang('Portfolio.location.singapore'), 2014,
                                    2015
                                ],
                                [
                                    'tu.webp', lang('Portfolio.school.title.tu'), lang('Portfolio.school.program.bsc'),
                                    lang('Portfolio.location.bangkok'), 2008, 2012
                                ],
                            ];
                            ?>
                            <?php foreach ($school as $row) : ?>
                                <div class="row">
                                    <div class="col-12 p-1 mb-2">
                                        <img src="<?= base_url('assets/img/portfolio-page/companies/' . $row[0]) ?>"
                                             alt="<?= $row[1] ?>"
                                             class="img-thumbnail bg-white p-1 me-3 mb-2 float-md-start"
                                             style="max-width:80px;"/><br class="d-md-none"/>
                                        <h6 class="mb-1"><?= $row[1] ?><br/><?= $row[2] ?></h6>
                                        <p><?= $row[3] ?> &middot; <?= calculate_years([
                                                $row[4], $row[5]
                                            ], $locale, ' - ') ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $slug = "calendar"; include_once "_footer_menu.php"; ?>
</div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tabButtons = document.querySelectorAll('.nav-link');
        tabButtons.forEach((button) => {
            button.addEventListener('click', (event) => {
                event.preventDefault();
                const target = event.target.getAttribute('data-target');
                tabButtons.forEach((btn) => btn.classList.remove('active'));
                event.target.classList.add('active');
                const tabPanes = document.querySelectorAll('.tab-page');
                tabPanes.forEach((pane) => pane.classList.add('d-none'));
                document.getElementById(target).classList.remove('d-none');
            });
        });
    });
</script>
</html>