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
        <div class="col-12 pt-3">
            <div class="card border-0 shadow-sm overflow-visible">
                <div class="d-none d-md-block position-relative">
                    <img src="<?= base_url('assets/img/portfolio-page/banner.webp') ?>" class="card-img-top object-fit-cover" alt="Cover Banner" style="height: 250px; object-position: right center;">
                    <div class="position-absolute start-0 translate-middle-y ms-4">
                        <img src="<?= base_url('assets/img/portfolio-page/profile.webp') ?>" class="rounded-circle border border-4 border-white shadow-sm" alt="Profile Picture" style="width: 200px; height: 200px; object-fit: cover;">
                    </div>
                </div>
                <div class="d-block d-md-none">
                    <img src="<?= base_url('assets/img/portfolio-page/banner.webp') ?>" class="card-img-top" alt="Cover Banner">
                    <div class="text-center mt-3">
                        <img src="<?= base_url('assets/img/portfolio-page/profile.webp') ?>" class="rounded-circle border border-2 border-white shadow-sm" alt="Profile Picture" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                </div>
                <div class="card-body mt-md-5 pt-md-5 px-4">
                    <h3 class="card-title mt-3 fw-bold mb-0"><?= lang('Portfolio.title-name') ?></h3>
                    <p class="text-muted small">
                        <a href="https://www.linkedin.com/in/ratinanlee/" target="_blank"><i class="fa-brands fa-square-linkedin"></i> @ratinanlee</a>
                        &middot;
                        <a href="<?= base_url($locale . '/business-card') ?>"><i class="fa-solid fa-address-card"></i> <?= lang('Portfolio.contact-me') ?></a>
                    </p>
                    <p class="text-muted"><?= lang('Portfolio.subtitle') ?></p>
                    <ul class="nav nav-tabs" id="portfolio-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" id="case-studies-tab" data-target="tab-case-studies"><?= lang('Portfolio.case-studies.title') ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="about-tab" data-target="tab-about"><?= lang('Portfolio.about.title') ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="reviews-tab" data-target="tab-reviews"><?= lang('Portfolio.reviews.title') ?></a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- TAB: CASE STUDIES -->
                        <div class="tab-page p-3" id="tab-case-studies">
                            <div class="row">
                                <div class="col-12 p-1 mb-2">
                                    <h3 class="my-3"><?= lang('Portfolio.case-studies.title') ?></h3>
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-8">
                                            <div class="row">
                                                <?php
                                                $cs_img = [
                                                    '1' => 'from-chaos-to-clarity.webp',
                                                    '2' => 'decoration-01.webp',
                                                    '3' => 'decoration-03.webp',
                                                ];
                                                ?>
                                                <?php for ($i = 1; $i <= 3; $i++) : ?>
                                                    <div class="col-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                                        <a href="#story-<?= $i ?>" class="text-decoration-none success-story-btn" data-target="story-<?= $i ?>">
                                                            <img src="<?= base_url('assets/img/portfolio-page/' . $cs_img[$i]) ?>" alt="<?= lang('Portfolio.case-studies.details.' . $i . '.title') ?>" class="img-fluid mb-3" data-target="story-<?= $i ?>" />
                                                            <h6 data-target="story-<?= $i ?>"><?= lang('Portfolio.case-studies.details.' . $i . '.title') ?></h6>
                                                        </a>
                                                    </div>
                                                <?php endfor; ?>
                                            </div>
                                            <hr class="my-3" />
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <?php for ($i = 1; $i <= 3; $i++) : ?>
                                                <div class="success-story-section d-none" id="story-<?= $i ?>">
                                                    <img src="<?= base_url('assets/img/portfolio-page/' . $cs_img[$i]) ?>" alt="<?= lang('Portfolio.case-studies.details.' . $i . '.title') ?>" class="img-fluid mb-3" />
                                                    <h4><?= lang('Portfolio.case-studies.details.' . $i . '.title') ?></h4>
                                                    <h5><?= lang('Portfolio.case-studies.challenge') ?></h5>
                                                    <p><?= lang('Portfolio.case-studies.details.' . $i . '.challenge') ?></p>
                                                    <h5><?= lang('Portfolio.case-studies.solution') ?></h5>
                                                    <ul>
                                                        <?php foreach (lang('Portfolio.case-studies.details.' . $i . '.solution') as $solution) : ?>
                                                            <li><?= $solution ?></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                    <h5><?= lang('Portfolio.case-studies.impact') ?></h5>
                                                    <ul>
                                                        <?php foreach (lang('Portfolio.case-studies.details.' . $i . '.impact') as $impact) : ?>
                                                            <li><?= $impact ?></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- TAB: ABOUT -->
                        <div class="tab-page p-3 d-none" id="tab-about">
                            <div class="row">
                                <div class="col-12 p-1 mb-2">
                                    <p>
                                        <b><?= lang('Portfolio.intro.name') ?></b><br>
                                        <?= lang('Portfolio.intro.other-names') ?>
                                    </p>
                                    <p><?= lang('Portfolio.para.as-a-scrum-master') ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 p-1 mb-2">
                                    <h3 class="my-3"><?= lang('Portfolio.experience.section-title') ?></h3>
                                    <?php
                                    $work = [
                                        [
                                            'freelance.webp', lang('Portfolio.experience.title.freelance'),
                                            lang('Portfolio.experience.company.freelance'), lang('Portfolio.location.remote'),
                                            2024, 0
                                        ],
                                        [
                                            'moolahgo.webp', lang('Portfolio.experience.title.tech-lead-sr'), 'Moolahgo (FinTech)',
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
                                            'BuzzCity-MobAds (AdsTech)', lang('Portfolio.location.singapore'), 2015, 2017
                                        ],
                                        [
                                            'dst.webp', lang('Portfolio.experience.title.programmer'),
                                            'DST Worldwide Services (Financial)', lang('Portfolio.location.bangkok'), 2012, 2014
                                        ],
                                    ];
                                    ?>
                                    <?php foreach ($work as $row) : ?>
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="<?= base_url('assets/img/portfolio-page/companies/' . $row[0]) ?>"
                                                     alt="<?= $row[2] ?>"
                                                     class="img-thumbnail bg-white p-1 me-3 mb-3 float-md-start"
                                                     style="max-width:80px;"/><br class="d-md-none"/>
                                                <h6 class="mb-1"><?= $row[1] ?><br/><?= $row[2] ?></h6>
                                                <p><?= $row[3] ?> &middot; <?= calculate_years([
                                                        $row[4], $row[5]
                                                    ], $locale, ' - ') ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <div class="text-center"><img src="<?= base_url('assets/img/portfolio-page/experience-buzzcity.webp') ?>" alt="BuzzCity" class="img-thumbnail" style="max-width:300px;" loading="lazy"/></div>
                                </div>
                                <div class="col-12 col-md-6 p-1 mb-2">
                                    <h3 class="my-3"><?= lang('Portfolio.school.section-title') ?></h3>
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
                                            <div class="col-12">
                                                <img src="<?= base_url('assets/img/portfolio-page/companies/' . $row[0]) ?>"
                                                     alt="<?= $row[1] ?>"
                                                     class="img-thumbnail bg-white p-1 me-3 mb-3 float-md-start"
                                                     style="max-width:80px;"/><br class="d-md-none"/>
                                                <h6 class="mb-1"><?= $row[1] ?><br/><?= $row[2] ?></h6>
                                                <p><?= $row[3] ?> &middot; <?= calculate_years([
                                                        $row[4], $row[5]
                                                    ], $locale, ' - ') ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <div class="text-center"><img src="<?= base_url('assets/img/portfolio-page/education-msc-graduation.webp') ?>" alt="NTU" class="img-thumbnail" style="max-width:300px;" loading="lazy"/></div>
                                    <h3 class="my-3"><?= lang('Portfolio.certifications.section-title') ?></h3>
                                    <?php
                                    $certifications = [
                                        [
                                            'scrum-org.webp',
                                            'Scrum.org',
                                            [
                                                [
                                                    'Professional Scrum Master', [
                                                    ['PSM I', 2024],
                                                    ['PSM II', 2024],
                                                    ['PSM AI Essentials', 2026]
                                                ]
                                                ],
                                                [
                                                    'Professional Scrum Product Owner', [
                                                    ['PSPO I', 2024],
                                                    ['PSPO II', 2025]
                                                ]
                                                ]
                                            ]
                                        ],
                                        [
                                            'scrum-alliance.webp',
                                            'Scrum Alliance',
                                            [
                                                [
                                                    'Certified ScrumMaster',
                                                    [
                                                        ['CSM', 2025]
                                                    ]
                                                ]
                                            ]
                                        ],
                                        [
                                            'google.webp',
                                            'Google',
                                            [
                                                [
                                                    'Google Professional Certificate',
                                                    [
                                                        ['Google Project Management', 2024],
                                                        ['Google AI Essentials', 2024],
                                                        ['Google UX Design', 2024],
                                                        ['Google Data Analytics', 2024]
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ];
                                    ?>
                                    <?php foreach ($certifications as $row) : ?>
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="<?= base_url('assets/img/portfolio-page/companies/' . $row[0]) ?>"
                                                     alt="<?= $row[1] ?>"
                                                     class="img-thumbnail bg-white p-1 me-3 mb-3 float-md-start"
                                                     style="max-width:80px;"/><br class="d-md-none"/>
                                                <div class="float-md-start">
                                                    <h6 class="mb-1"><?= $row[1] ?></h6>
                                                    <?php foreach ($row[2] as $type) : ?>
                                                        <ul>
                                                            <li><?= $type[0] ?>
                                                                <ul>
                                                                    <?php foreach ($type[1] as $cert) : ?>
                                                                        <li><?= $cert[0] ?>, <?= calculate_years([$cert[1]], $locale) ?></li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col px-md-5 text-center">
                                    <h4><?= lang('Portfolio.para.empowering') ?></h4>
                                    <p><?= lang('Portfolio.para.true-leadership') ?></p>
                                </div>
                            </div>
                            <?php include_once "_professional_certifications.php"; ?>
                        </div>
                        <!-- TAB: REVIEWS -->
                        <div class="tab-page p-3 d-none" id="tab-reviews">
                            <div class="row">
                                <div class="col-12 p-1 mb-2">
                                    <h3 class="my-3"><?= lang('Portfolio.reviews.title') ?></h3>
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-5" />
    <?php $slug = "calendar"; include_once "_footer_menu.php"; ?>
</div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // tabs
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
        // cast stories
        const caseStoryBtns = document.querySelectorAll('.success-story-btn');
        caseStoryBtns.forEach((btn) => {
            btn.addEventListener('click', (event) => {
                event.preventDefault();
                const target = event.target.getAttribute('data-target');
                const caseStorySections = document.querySelectorAll('.success-story-section');
                caseStorySections.forEach((section) => section.classList.add('d-none'));
                document.getElementById(target).classList.remove('d-none');
            });
        });
    });
</script>
</html>