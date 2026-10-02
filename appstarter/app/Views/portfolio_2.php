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
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
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
        a {text-decoration: none;color: #222;}
        [data-bs-theme="dark"] a {color: #ccc;}
        .success-story-btn:hover {cursor: pointer;}
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
                                        <div class="col-12">
                                            <div class="row">
                                                <?php
                                                $cs_img = [
                                                    '1' => 'from-chaos-to-clarity.webp',
                                                    '2' => 'presenting-projection.webp',
                                                    '3' => 'taking-a-call.webp',
                                                    '4' => 'presenting-map.webp'
                                                ];
                                                ?>
                                                <?php for ($i = 1; $i <= 4; $i++) : ?>
                                                    <div class="col-6 col-md-4 col-lg-3 success-story-btn" data-target="story-<?= $i ?>">
                                                        <img class="success-story-btn img-fluid rounded-3 mb-3" data-target="story-<?= $i ?>" src="<?= base_url('assets/img/portfolio-page/' . $cs_img[$i]) ?>" alt="<?= lang('Portfolio.case-studies.details.' . $i . '.title') ?>" loading="lazy" />
                                                        <h6 class="success-story-btn" data-target="story-<?= $i ?>"><?= lang('Portfolio.case-studies.details.' . $i . '.title') ?></h6>
                                                        <a class="float-end success-story-btn" data-target="story-<?= $i ?>" href="#"><?= lang('Portfolio.blog.read-more') ?> <i class="bi bi-chevron-double-right"></i></a>
                                                    </div>
                                                <?php endfor; ?>
                                            </div>
                                            <hr class="my-3" />
                                            <h4 class="my-4"><?= lang('Portfolio.blog.title') ?></h4>
                                            <div class="row my-5" id="wordpress-posts"></div>
                                            <div class="text-end mb-3"><a href="<?= base_url($locale . "/blog?m=tags&ms=portfolio&id=62") ?>" class="btn btn-outline-success" target="_blank"><?= lang('Portfolio.blog.read-more') ?> <i class="bi bi-chevron-double-right"></i></a></div>
                                        </div>
                                        <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                                            <?php for ($i = 1; $i <= 4; $i++) : ?>
                                                <div class="success-story-section <?= (1 != $i ? 'd-none' : '') ?>" id="story-<?= $i ?>">
                                                    <img src="<?= base_url('assets/img/portfolio-page/' . $cs_img[$i]) ?>" alt="<?= lang('Portfolio.case-studies.details.' . $i . '.title') ?>" class="img-fluid mb-3 rounded-3" loading="lazy" />
                                                    <h4><?= lang('Portfolio.case-studies.details.' . $i . '.title') ?></h4>
                                                    <h5 class="mt-4"><i class="bi bi-stars"></i> <?= lang('Portfolio.case-studies.challenge') ?></h5>
                                                    <p><?= lang('Portfolio.case-studies.details.' . $i . '.challenge') ?></p>
                                                    <h5 class="mt-4"><i class="bi bi-stars"></i> <?= lang('Portfolio.case-studies.solution') ?></h5>
                                                    <ul>
                                                        <?php foreach (lang('Portfolio.case-studies.details.' . $i . '.solution') as $solution) : ?>
                                                            <li><?= $solution ?></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                    <h5 class="mt-4"><i class="bi bi-stars"></i> <?= lang('Portfolio.case-studies.impact') ?></h5>
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
                        <?php
                        $reviews = [
                            'linkedin' => [
                                [
                                    'name' => 'J. Rina, Secretlab',
                                    'text' => [
                                        'I highly recommend Ratinan for their exceptional problem-solving abilities, strong focus, and effective time management. He consistently develops practical solutions to challenges, stay dedicated to his tasks without losin gsight of priorities, and manages his time efficiently to ensure high-quality results are delivered on schedule.'
                                    ]
                                ],
                                [
                                    'name' => 'P. Saengsawang, Kamelo',
                                    'text' => [
                                        'Ratinan works for me as a freelance developer, and I can confidently say he is an expert in web development. From the start, he impressed me with his portfolio—full of well-designed and highly usable websites. He doesn’t just focus on aesthetics; he ensures that every site delivers a seamless user experience while maintaining robust functionality.',
                                        'What truly sets Ratinan apart is his initiative and speed. Before I even finalized my requirements, he had already taken the time to study my logistics industry. This meant I didn’t have to explain much—he anticipated my needs and structured the project in a way that made sense. All I had to do was refine the details, and the final product was exactly what I needed.',
                                        'If you’re looking for a developer who is skilled, proactive, and efficient, I highly recommend Ratinan.'
                                    ]
                                ],
                                [
                                    'name' => 'C.W. Kerk',
                                    'text' => [
                                        'I had the pleasure of working alongside Ratinan in the same company. He consistently stood out for his strong commitment to agile team culture and values. His passion for technology and collaborative approach made a noticeable impact across teams.',
                                        'Ratinan has proven capabilities in senior and lead roles, demonstrating technical excellence in areas such as agile scrum team practices, web application development, and technical mentorship. His dedication to continuous improvement and knowledge sharing reflects both his expertise and growth mindset.',
                                        'I highly recommend Ratinan for any role that values technical proficiency, a strong agile mindset, and a collaborative spirit.'
                                    ]
                                ],
                                [
                                    'name' => 'I. Tan, Secretlab',
                                    'text' => [
                                        'Had the opportunity to work with Nat during my time with Secretlab. His knowledge with the IT department is excellent and constantly giving careful thought to whatever ideas that the company or my team requires to continuously streamline our processes.',
                                        'Even when the requirements are not practical, Nat will always carefully explain what’s the issue and how he and his team can go around it to still achieve our end goal.',
                                        'I’ve no doubt that Nat will always value add to whichever team he works with or manages.'
                                    ]
                                ],
                                [
                                    'name' => 'J.T. Yuan, Secretlab',
                                    'text' => [
                                        'I am working together with Nat on a number of projects regarding SEO. He works really hard to fix the site without fail despite having a very tight deadline. I am sure with his skills and attitude, he’ll be a great addition to any team.'
                                    ]
                                ],
                                [
                                    'name' => 'K. Dhetchasethadee',
                                    'text' => [
                                        'I used to work with Ratinan at DNC Sportservice long time ago. That was when I met him. Anyway, after we graduated, I started my own project and invited him to join the team with all the technical stuff.',
                                        'He helped our project to solve the bugs in WordPress plugin. He also handled the call to the data center when we were trying to get our SSL certificate installed and their system was bugged.',
                                        'He was very dedicated and helpful despite his own full-time job which was very tough already. That’s my impression on him. I’d say that he’s professional and ready for any kind of technical challenges.'
                                    ]
                                ],
                            ],
                            'letter'   => [
                                [
                                    'name' => 'C. Chew, BuzzCity',
                                    'text' => [
                                        'Throughout his service at BuzzCity, Nat demonstrated his professionalism as well as proving to be a valuable team player. He is organized, reliable, and good in software development. Nat can work indepently and was able to follow projects through to completion. He is flexible and showed a lot of initiative in the projects assigned to him.',
                                        'Nat is a disciplined and sincere person and performed well with his fellow colleagues. I believe this underscored his important contributions to BuzzCity.'
                                    ]
                                ],
                            ],
                            'fastwork' => [
                                [
                                    'name' => 'Jib',
                                    'text' => [
                                        'ทำงานใส่ใจ เป็นระบบ มีความเป็นมืออาชีพมากค่ะ ช่วยเสนอทางเลือกต่างๆ ในการตัดสินใจ และจัดทำเอกสารต่างๆ เรียบร้อยดีค่ะ ช่วยดูเรื่อง SEO และการทำ Google Search Console ด้วย ดีมากเลยค่ะ',
                                        'ตอบเร็ว support ดูแลดีค่ะ'
                                    ]
                                ],
                                [
                                    'name' => 'zm475vep',
                                    'text' => [
                                        'ช่วยคิด solution, update งาน ในแต่ละวัน, รวดเร็วตามตกลง'
                                    ]
                                ],
                            ]
                        ];
                        ?>
                        <div class="tab-page p-3 d-none" id="tab-reviews">
                            <div class="row">
                                <div class="col-12 p-1 mb-2">
                                    <h3 class="my-3"><?= lang('Portfolio.reviews.title') ?></h3>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <h5>LinkedIn</h5>
                                            <?php foreach ($reviews['linkedin'] as $review) : ?>
                                                <div class="card mb-3">
                                                    <div class="card-body">
                                                        <?php foreach ($review['text'] as $line) : ?>
                                                            <p><?= $line ?></p>
                                                        <?php endforeach; ?>
                                                        <p>- <?= $review['name'] ?></p>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <h5>Letter of Recommendation</h5>
                                            <?php foreach ($reviews['letter'] as $review) : ?>
                                                <div class="card mb-3">
                                                    <div class="card-body">
                                                        <?php foreach ($review['text'] as $line) : ?>
                                                            <p><?= $line ?></p>
                                                        <?php endforeach; ?>
                                                        <p>- <?= $review['name'] ?></p>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                            <h5>FastWork</h5>
                                            <?php foreach ($reviews['fastwork'] as $review) : ?>
                                                <div class="card mb-3">
                                                    <div class="card-body">
                                                        <?php foreach ($review['text'] as $line) : ?>
                                                            <p><?= $line ?></p>
                                                        <?php endforeach; ?>
                                                        <p>- <?= $review['name'] ?></p>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-5" />
    <p class="small">
        <i class="fa-solid fa-language me-3"></i>
        <a class="btn btn-<?= 'en' == $locale ? '' : 'outline-' ?>success btn-xs" href="<?= base_url('en/portfolio') ?>">English</a>
        <a class="btn btn-<?= 'th' == $locale ? '' : 'outline-' ?>success btn-xs" href="<?= base_url('th/portfolio') ?>">ภาษาไทย</a>
        <a class="btn btn-<?= 'zh-TW' == $locale ? '' : 'outline-' ?>success btn-xs" href="<?= base_url('zh-TW/portfolio') ?>">國語</a>
        <a class="btn btn-<?= 'ja' == $locale ? '' : 'outline-' ?>success btn-xs" href="<?= base_url('ja/portfolio') ?>">日本語</a>
        <a class="btn btn-<?= 'en-Shaw' == $locale ? '' : 'outline-' ?>success btn-xs" href="<?= base_url('en-Shaw/portfolio') ?>">𐑖𐑱𐑝𐑾𐑯</a>
    </p>
    <?php $slug = "calendar"; include_once "_footer_menu.php"; ?>
</div>
</body>
<script>
    /**
     * WordPress REST API — Posts Fetcher & Renderer
     * Requires: jQuery
     * Usage:
     *   WPPosts.init({ baseUrl: 'https://your-site.com' });
     */
    const WPPosts = (() => {
        // ─── Config ──────────────────────────────────────────────────────────────

        const CONFIG = {
            baseUrl: '',
            perPage: 3,
            currentPage: 1,
            totalPages: 1,
        };

        // ─── Public: Initialise ──────────────────────────────────────────────────

        function init(options = {}) {
            CONFIG.baseUrl = (options.baseUrl || '').replace(/\/$/, '');
            CONFIG.perPage = options.perPage || 3;
            CONFIG.currentPage = 1;
            _bindControls();
            loadPage(1);
        }

        // ─── Core: Load a page ───────────────────────────────────────────────────

        async function loadPage(page) {
            CONFIG.currentPage = page;
            _setLoading(true);

            try {
                // ── Step 1: fetch posts ─────────────────────────────────────────────
                const posts = await _fetchPosts(page);

                // ── Step 2: collect all unique IDs across every post ────────────────
                const mediaIds  = _unique(posts.map((p) => p.featured_media).filter(Boolean));
                const authorIds = _unique(posts.map((p) => p.author).filter(Boolean));

                // ── Step 3: one batch request per resource type, all in parallel ─────
                const [mediaMap, authorMap, tagMap] = await Promise.all([
                    fetchMediaBatch(mediaIds),
                    fetchAuthorBatch(authorIds),
                ]);

                // ── Step 4: merge lookup data back into each post ───────────────────
                const enriched = posts.map((post) => ({
                    ...post,
                    mediaObj:  mediaMap[post.featured_media] || null,
                    authorObj: authorMap[post.author]        || null,
                }));

                renderPosts(enriched);
                _updatePagination();
            } catch (err) {
                _renderError(err);
            } finally {
                _setLoading(false);
            }
        }

        // ─── Step 1: fetch raw posts ─────────────────────────────────────────────
        async function _fetchPosts(page) {
            const params = new URLSearchParams({
                _fields: 'id,date_gmt,title,featured_media,slug,author',
                per_page: CONFIG.perPage,
                tags: 62,
                page,
            });
            const response = await fetch(`${CONFIG.baseUrl}/wp-json/wp/v2/posts?${params}`);
            CONFIG.totalPages = parseInt(response.headers.get('X-WP-TotalPages'), 10) || 1;
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return await response.json();
        }

        // ─── Batch sub-fetchers (each returns an id → object lookup map) ─────────

        /**
         * Fetch multiple media objects in one request.
         * @param {number[]} ids
         * @returns {Promise<Object>}  { [id]: mediaObject }
         */
        async function fetchMediaBatch(ids) {
            if (!ids.length) return {};
            try {
                const params = new URLSearchParams({
                    include: ids.join(','),
                    per_page: ids.length,
                    _fields: 'id,source_url,alt_text,media_details',
                });
                const response = await fetch(`${CONFIG.baseUrl}/wp-json/wp/v2/media?${params}`);
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                const results = await response.json();
                return _toMap(results);
            } catch {
                return {};
            }
        }

        /**
         * Fetch multiple authors in one request.
         * @param {number[]} ids
         * @returns {Promise<Object>}  { [id]: authorObject }
         */
        async function fetchAuthorBatch(ids) {
            if (!ids.length) return {};
            try {
                const params = new URLSearchParams({
                    include: ids.join(','),
                    per_page: ids.length,
                    _fields: 'id,name,slug,link',
                });
                const response = await fetch(`${CONFIG.baseUrl}/wp-json/wp/v2/users?${params}`);
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                const results = await response.json();
                return _toMap(results);
            } catch {
                return {};
            }
        }

        // ─── Renderer ────────────────────────────────────────────────────────────
        function renderDate(dateString) {
            let locale = '<?= $locale ?>';
            if ('th' === locale || 'zh-TW' === locale || 'ja' === locale) {
                return new Date(dateString).toLocaleDateString(locale, {
                    year: 'numeric', month: 'long', day: 'numeric',
                });
            } else if ('en-Shaw' === locale) {
                let postDate = new Date(dateString);
                let day = postDate.getDate(), month = postDate.getMonth(), year = postDate.getFullYear();
                let monthArray = ['𐑡𐑨𐑯𐑘𐑫𐑼𐑦', '𐑓𐑧𐑚𐑮𐑫𐑼𐑦', '𐑥𐑸𐑗', '𐑱𐑐𐑮𐑩𐑤', '𐑥𐑱', '𐑡𐑵𐑯', '𐑡𐑩𐑤𐑲', '𐑷𐑜𐑩𐑕𐑑', '𐑕𐑧𐑐𐑑𐑧𐑥𐑚𐑼', '𐑪𐑒𐑑𐑴𐑚𐑼', '𐑯𐑴𐑝𐑧𐑥𐑚𐑼', '𐑛𐑦𐑕𐑧𐑥𐑚𐑼'];
                return `${monthArray[month]} ${day}, ${year}`;
            }
            return new Date(dateString).toLocaleDateString('en-US', {
                year: 'numeric', month: 'long', day: 'numeric',
            });
        }
        function renderPosts(posts) {
            const $container = document.getElementById('wordpress-posts');
            $container.innerHTML = '';

            if (!posts.length) {
                $container.innerHTML = '<p class="wp-no-posts">No posts were found.</p>';
                return;
            }

            posts.forEach((post) => {
                const title   = post.title?.rendered   || '(Untitled)';
                const date    = post.date_gmt ? renderDate(post.date_gmt) : '';

                const imgSrc  = post.mediaObj?.source_url || '';
                const imgAlt  = post.mediaObj?.alt_text   || title;
                const imgHtml = imgSrc
                    ? `<a href="<?= base_url($locale . '/blog-post') ?>/${_esc(post.id)}/${_esc(post.slug)}" target="_blank"><img class="img-fluid rounded" src="${imgSrc}" alt="${_esc(imgAlt)}"></a>`
                    : '???';

                const authorName = post.authorObj?.name || '';
                const authorHtml = authorName
                    ? `<i class="bi bi-person-circle"></i> ${_esc(authorName)} &nbsp; `
                    : '';

                const postLink = `<?= base_url($locale . '/blog-post') ?>/${_esc(post.id)}/${_esc(post.slug)}`;

                const $card = `
        <div class="col-6 col-md-4 col-lg-3 wp-post" data-id="${post.id}" data-slug="${_esc(post.slug)}">
            ${imgHtml}
            <div class="wp-post__body mt-3">
                <h6 class="wp-post__title"><a href="${postLink}" target="_blank">${title}</a></h6>
                <span class="small">
                    ${authorHtml}
                    <time class="wp-post__date" datetime="${post.date_gmt}"><i class="bi bi-calendar-plus"></i>  ${date}</time><br/>
                </span>
                <a href="${postLink}" target="_blank" class="float-end"><?= lang('Portfolio.blog.read-more') ?> <i class="bi bi-chevron-double-right"></i></a>
            </div>
        </div>
      `;
                $container.innerHTML += $card;
            });
        }

        // ─── Pagination ──────────────────────────────────────────────────────────

        function _updatePagination() {
            const { currentPage, totalPages } = CONFIG;
            document.getElementById('wp-page-info').innerHTML = `<p>Page ${currentPage} of ${totalPages}</p>`;

            const $prev = document.getElementById('wp-prev');
            if (currentPage <= 1) {
                $prev.addClass('is-disabled btn-outline-secondary').removeClass('btn-success').attr({ 'aria-disabled': 'true', tabindex: '-1' });
            } else {
                $prev.addClass('btn-success').removeClass('is-disabled btn-outline-secondary').removeAttr('aria-disabled').attr('tabindex', '0');
            }
            $prev.addClass('btn-sm me-3');

            const $next = document.getElementById('wp-next');
            if (currentPage >= totalPages) {
                $next.addClass('is-disabled btn-outline-secondary').removeClass('btn-success').attr({ 'aria-disabled': 'true', tabindex: '-1' });
            } else {
                $next.addClass('btn-success').removeClass('is-disabled btn-outline-secondary').removeAttr('aria-disabled').attr('tabindex', '0');
            }
            $next.addClass('btn-sm ms-3');
        }

        function _bindControls() {
            document.addEventListener('click', (event) => {
                const prevBtn = event.target.closest('#wp-prev');
                if (prevBtn && !prevBtn.classList.contains('is-disabled')) {
                    loadPage(CONFIG.currentPage - 1);
                    return;
                }
                const nextBtn = event.target.closest('#wp-next');
                if (nextBtn && !nextBtn.classList.contains('is-disabled')) {
                    loadPage(CONFIG.currentPage + 1);
                }
            });
        }

        // ─── Utility helpers ─────────────────────────────────────────────────────

        /** Convert an array of objects with .id into a keyed lookup map. */
        function _toMap(arr) {
            return arr.reduce((acc, item) => { acc[item.id] = item; return acc; }, {});
        }

        /** Deduplicate an array of primitives. */
        function _unique(arr) {
            return [...new Set(arr)];
        }

        function _setLoading(state) {
            const container = document.getElementById('wordpress-posts');
            if (container) {
                container.classList.toggle('is-loading', state);
            }

            const buttons = document.querySelectorAll('#wp-prev, #wp-next');
            buttons.forEach((button) => {
                button.disabled = Boolean(state);
            });
        }

        function _renderError(err) {
            const msg = err?.message || err?.statusText || 'Unknown error';
            const container = document.getElementById('wordpress-posts');
            if (!container) {
                container.innerHTML = `<p class="wp-error">Failed to load posts: ${_esc(msg)}</p>`;
            }
        }

        function _esc(str) {
            return String(str)
                .replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;').replace(/'/g, '&#39;');
        }

        // ─── Public API ──────────────────────────────────────────────────────────

        return { init, loadPage, fetchMediaBatch, fetchAuthorBatch, renderPosts };
    })();
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
        // WP
        WPPosts.init({ baseUrl: 'https://blog.ratinan.com' });
        // cast stories
        const caseStoryBtns = document.querySelectorAll('.success-story-btn');
        caseStoryBtns.forEach((btn) => {
            btn.addEventListener('click', (event) => {
                event.preventDefault();
                const target = event.target.getAttribute('data-target');
                const caseStorySections = document.querySelectorAll('.success-story-section');
                caseStorySections.forEach((section) => section.classList.add('d-none'));
                document.getElementById(target).classList.remove('d-none');
                const targetElement = document.getElementById(target);
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    });
</script>
</html>