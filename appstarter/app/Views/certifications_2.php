<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= lang('Certifications.title') ?> - lee.ratinan.com</title>
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
    <link rel="alternate" hreflang="en" href="<?= base_url('en/certifications') ?>"/>
    <link rel="alternate" hreflang="th" href="<?= base_url('th/certifications') ?>"/>
    <link rel="alternate" hreflang="ja" href="<?= base_url('ja/certifications') ?>"/>
    <link rel="alternate" hreflang="zh-TW" href="<?= base_url('zh-TW/certifications') ?>"/>
    <link rel="alternate" hreflang="en-Shaw" href="<?= base_url('en-Shaw/certifications') ?>"/>
    <link rel="alternate" hreflang="x-default" href="<?= base_url('business-card') ?>"/>
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

        h3 {
            font-size: 1.1em;
        }

        h2 {
            font-size: 1.2em;
        }

        h1 {
            font-size: 1.5em;
        }

        .btn-xs {
            padding: 0.15rem 0.5rem;
            font-size: 0.75rem;
            border-radius: 0.175rem;
        }

        .wishlisted td {
            background-color: #a8a8a8;
            font-style: italic;
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
    <div class="row mt-5">
        <div class="col">
            <p class="small text-end">
                <i class="fa-solid fa-language me-3"></i>
                <a class="btn btn-<?= 'en' == $locale ? '' : 'outline-' ?>success btn-xs"
                   href="<?= base_url('en/certifications') ?>">English</a>
                <a class="btn btn-<?= 'th' == $locale ? '' : 'outline-' ?>success btn-xs"
                   href="<?= base_url('th/certifications') ?>">ภาษาไทย</a>
                <a class="btn btn-<?= 'zh-TW' == $locale ? '' : 'outline-' ?>success btn-xs"
                   href="<?= base_url('zh-TW/certifications') ?>">國語</a>
                <a class="btn btn-<?= 'ja' == $locale ? '' : 'outline-' ?>success btn-xs"
                   href="<?= base_url('ja/certifications') ?>">日本語</a>
                <a class="btn btn-<?= 'en-Shaw' == $locale ? '' : 'outline-' ?>success btn-xs"
                   href="<?= base_url('en-Shaw/certifications') ?>">𐑖𐑱𐑝𐑾𐑯</a>
            </p>
            <p>/ <a href="<?= base_url($locale) ?>"><i class="fa-solid fa-home"></i></a>
                / <?= lang('Certifications.title') ?> /</p>
            <h1><?= lang('Certifications.title') ?></h1>
            <?php
            $rows = [
                'academic'     => [
                    [
                        'title'       => lang('Certifications.data.primary'),
                        'institution' => lang('Certifications.data.ptd'),
                        'country'     => 'th',
                        'date'        => ['2002-03-29'],
                        'certificate' => 'https://drive.google.com/file/d/10ViQHpZiz-kUiVnKbYXcPtvavwh3xyPo/view?usp=sharing'
                    ],
                    [
                        'title'       => lang('Certifications.data.junior-high'),
                        'institution' => lang('Certifications.data.hwn'),
                        'country'     => 'th',
                        'date'        => ['2005-03-31'],
                        'certificate' => 'https://drive.google.com/file/d/10QZRJ9KK4KeKAlpMDHA7BpYICmh3zRDt/view?usp=sharing',
                    ],
                    [
                        'title'       => lang('Certifications.data.senior-high'),
                        'institution' => lang('Certifications.data.hwn'),
                        'country'     => 'th',
                        'date'        => ['2008-03-31'],
                        'certificate' => 'https://drive.google.com/file/d/10MLhTM_ojBrlIdXQH4PpFkZ9lE_i4-iF/view?usp=sharing'
                    ],
                    [
                        'title'       => lang('Certifications.data.bsc'),
                        'institution' => lang('Certifications.data.thammasat-university'),
                        'country'     => 'th',
                        'date'        => ['2012-03-31'],
                        'certificate' => 'https://drive.google.com/file/d/1roWRsOGKt-LQhI26jbHAhe037hIqBP0X/view?usp=sharing',
                        'transcript'  => 'https://drive.google.com/file/d/1dvTLm62H5Wd4SAIbUFIxdLfmUiEMRfLq/view?usp=sharing',
                        'result'      => 'CGPA: 3.59/4.00'
                    ],
                    [
                        'title'       => lang('Certifications.data.msc'),
                        'institution' => lang('Certifications.data.nanyang-technological-university'),
                        'country'     => 'sg',
                        'date'        => ['2015-07-01'],
                        'certificate' => 'https://drive.google.com/file/d/1oxnmnAjZW2qXWWwZNaObFYOf1zTdTOWg/view?usp=sharing',
                        'transcript'  => 'https://drive.google.com/file/d/1-vFq49tucHCFGUloaQgpx_8llzA2e6de/view?usp=sharing',
                        'result'      => 'CGPA: 3.95/5.00'
                    ],
                    [
                        'title'       => 'Foundations of Computation Thinking and Programming',
                        'institution' => lang('Certifications.data.nanyang-technological-university'),
                        'country'     => 'sg',
                        'date'        => ['2024-04-02'],
                        'certificate' => 'https://drive.google.com/file/d/1-CUDwSjYyGIIhzRLejIrGV4gdb6u2HCz/view?usp=sharing',
                        'transcript'  => 'https://drive.google.com/file/d/1-CKqDhytzI3tec5agDCOBhAIRZ7-7HmG/view?usp=sharing',
                        'result'      => 'P'
                    ],
                    [
                        'title'       => 'AI Foundation',
                        'institution' => lang('Certifications.data.nanyang-technological-university'),
                        'country'     => 'sg',
                        'date'        => ['2024-05-13'],
                        'certificate' => 'https://drive.google.com/file/d/1-Df0frwNRIXYGKr-vQWeqBDOJTU6GC-A/view?usp=sharing',
                        'transcript'  => 'https://drive.google.com/file/d/1-G_ZpLFBG0MjANwYxziI_Uq2KRfVEU60/view?usp=sharing',
                        'result'      => 'A'
                    ],
                    [
                        'title'       => 'Computational Game Theory',
                        'institution' => lang('Certifications.data.nanyang-technological-university'),
                        'country'     => 'sg',
                        'date'        => ['2024-06-11'],
                        'certificate' => 'https://drive.google.com/file/d/1-FCfU5WHzAA7xrTCcl1nFD09eSpE1ODt/view?usp=sharing',
                        'transcript'  => 'https://drive.google.com/file/d/1-HRdY91zXTumznLT6gUisef2LQ-Zs8_M/view?usp=sharing',
                        'result'      => 'A-',
                    ],
                    [
                        'title'       => 'Introduction to Computer Vision',
                        'institution' => lang('Certifications.data.nanyang-technological-university'),
                        'country'     => 'sg',
                        'date'        => ['2024-04-16'],
                        'certificate' => 'https://drive.google.com/file/d/1-KmSpTwNve4MxNwwfH87B2E-9mJQvWDx/view?usp=sharing',
                        'transcript'  => 'https://drive.google.com/file/d/1-CWpg04gpDnJT-JUMuM0PVVP7QRg9PMD/view?usp=sharing',
                        'result'      => 'B',
                    ],
                    [
                        'title'       => lang('Certifications.data.mba'),
                        'institution' => lang('Certifications.data.australia'),
                        'country'     => 'au',
                    ]
                ],
                'professional' => [
                    [
                        'title'       => 'AWS Fundamentals',
                        'institution' => 'Coursera / AWS',
                        'country'     => 'us',
                        'date'        => ['2024-08-18'],
                        'certificate' => 'https://drive.google.com/file/d/10rcXIhelLxR69IzRz9S7Xgy8esqtRO8-/view?usp=sharing'
                    ],
                    [
                        'title'       => 'AWS Cloud Practitioner Essentials',
                        'institution' => 'Coursera / AWS',
                        'country'     => 'us',
                        'date'        => ['2024-09-09'],
                        'certificate' => 'https://drive.google.com/file/d/10xufFvuFwHpsnfkcH95oDEhpQpqi1ULs/view?usp=sharing'
                    ],
                    [
                        'title'       => 'Google ProjectManagement',
                        'institution' => 'Coursera / Google',
                        'country'     => 'us',
                        'date'        => ['2024-09-06'],
                        'certificate' => 'https://drive.google.com/file/d/10awMV64SaHAWuO0upOjSokFS06CcOLn6/view?usp=sharing'
                    ],
                    [
                        'title'       => 'Google AI Essentials',
                        'institution' => 'Coursera / Google',
                        'country'     => 'us',
                        'date'        => ['2024-09-12'],
                        'certificate' => 'https://drive.google.com/file/d/10jpbZByUaNmu0_s3WfM_zgr1Fb27zCLz/view?usp=sharing'
                    ],
                    [
                        'title'       => 'Google UX Design',
                        'institution' => 'Coursera / Google',
                        'country'     => 'us',
                        'date'        => ['2024-09-24'],
                        'certificate' => 'https://drive.google.com/file/d/10ouk8JgocsF2Ja2-1rYETea8xWnhzccx/view?usp=sharing'
                    ],
                    [
                        'title'       => 'Google Data Analytics',
                        'institution' => 'Coursera / Google',
                        'country'     => 'us',
                        'date'        => ['2024-10-10'],
                        'certificate' => 'https://drive.google.com/file/d/10lrFQfwTKMfPK3p3YzQHInBL7FQ3bLSd/view?usp=sharing'
                    ],
                    [
                        'title'       => 'CSM (Certified ScrumMaster)',
                        'institution' => 'Scrum Alliance',
                        'country'     => 'us',
                        'date'        => ['2025-02-09'],
                        'certificate' => 'https://drive.google.com/file/d/1UX9LUM3Zub8dcc8AFOxrDhXmc20IDti5/view?usp=sharing',
                        'profile'     => 'https://www.scrumalliance.org/members/1729850'
                    ],
                    [
                        'title'       => 'PSM I (Professional Scrum Master)',
                        'institution' => 'Scrum.org',
                        'country'     => 'us',
                        'date'        => ['2024-10-02'],
                        'certificate' => 'https://drive.google.com/file/d/1-oclvFtaaWkdJh7IuQ5C7f5u1FW3vX7v/view?usp=sharing',
                        'profile'     => 'https://www.scrum.org/user/1457291'
                    ],
                    [
                        'title'       => 'PSM II (Professional Scrum Master)',
                        'institution' => 'Scrum.org',
                        'date'        => ['2024-11-17'],
                        'country'     => 'us',
                        'certificate' => 'https://drive.google.com/file/d/1-pHldM2W9NPDHUZPofa-KlFke5XHUaZx/view?usp=sharing',
                        'profile'     => 'https://www.scrum.org/user/1457291'
                    ],
                    [
                        'title'       => 'PSM III (Professional Scrum Master)',
                        'institution' => 'Scrum.org',
                        'country'     => 'us',
                    ],
                    [
                        'title'       => 'PSM AI (Professional Scrum Master - AI Essentials)',
                        'institution' => 'Scrum.org',
                        'country'     => 'us',
                    ],
                    [
                        'title'       => 'PAL (Professional Agile Leadership)',
                        'institution' => 'Scrum.org',
                        'country'     => 'us',
                    ],
                    [
                        'title'       => 'PSPO I (Professional Scrum Product Owner)',
                        'institution' => 'Scrum.org',
                        'country'     => 'us',
                        'date'        => ['2024-10-16'],
                        'certificate' => 'https://drive.google.com/file/d/1-pwoQ_ZiirRcddUA66Q4tv5YT_5Re-Nw/view?usp=sharing',
                        'profile'     => 'https://www.scrum.org/user/1457291'
                    ],
                    [
                        'title'       => 'PSPO II (Professional Scrum Product Owner)',
                        'institution' => 'Scrum.org',
                        'country'     => 'us',
                        'date'        => ['2025-02-05'],
                        'certificate' => 'https://drive.google.com/file/d/16RU0OgvyPdeLw8anCE8khn9z8UCKKhRu/view?usp=sharing',
                        'profile'     => 'https://www.scrum.org/user/1457291'
                    ],
                    [
                        'title'       => 'PSPO III (Professional Scrum Product Owner)',
                        'institution' => 'Scrum.org',
                        'country'     => 'us',
                    ],
                    [
                        'title'       => 'PSPO AI (Professional Scrum Product Owner - AI Essentials)',
                        'institution' => 'Scrum.org',
                        'country'     => 'us',
                    ],
                ],
            ];
            $cefr = [
                'A1' => 'Beginner',
                'A2' => 'Elementary',
                'B1' => 'Intermediate',
                'B2' => 'Upper-Intermediate',
                'C1' => 'Advanced',
                'C2' => 'Proficiency'
            ];
            $languages = [
                [
                    'cefr'           => 'C2', // English
                    'flag'           => '🇺🇸🇬🇧🇦🇺',
                    'certifications' => [
                        [
                            'title'       => 'Test of English Proficiency (CU-TEP)',
                            'institution' => 'Chulalongkorn University Academic Testing Center',
                            'country'     => 'th',
                            'date'        => ['2007-11-04'],
                            'certificate' => 'https://drive.google.com/file/d/1nlDMxBIC4RE7o0Fi70o009jEd7BSw-EV/view'
                        ],
                        [
                            'title'       => 'General English Test (TU-GET)',
                            'institution' => 'Language Institute, Thammasat University',
                            'country'     => 'th',
                            'date'        => ['2010-09-00'],
                            'certificate' => 'https://drive.google.com/file/d/1MbfI1rGCHA5kVHA4ggB47asY6RXxKoB6/view'
                        ],
                        [
                            'title'       => 'EF SET Certificate',
                            'institution' => 'EF SET',
                            'country'     => 'ch',
                            'date'        => ['2025-08-08'],
                            'certificate' => 'https://drive.google.com/file/d/18piWVwM1u3UT2zCmABG8uasEyYcuMHdv/view'
                        ]
                    ]
                ],
                [
                    'cefr' => 'Native', // Thai
                    'flag' => '🇹🇭'
                ],
                [
                    'cefr'           => 'A2', // Taiwanese Mandarin
                    'flag'           => '🇹🇼',
                    'certifications' => [
                        [
                            'title'       => 'TOCFL',
                            'country'     => 'tw',
                            'institution' => 'SC-TOP'
                        ]
                    ]
                ],
                [
                    'cefr'           => 'A1', // Japanese
                    'flag'           => '🇯🇵',
                    'certifications' => [
                        [
                            'title'       => 'Japanese Beginner Course',
                            'institution' => 'Tomo Japanese Language School',
                            'country'     => 'sg',
                            'date'        => ['2025-09-22'],
                            'certificate' => 'https://drive.google.com/file/d/1lD7jXK5PMW8M7DS0BmxXCS-aqq_X0GTA/view'
                        ],
                        [
                            'title'       => '日本語能力試験 (JLPT) N5',
                            'country'     => 'jp',
                            'institution' => 'Japan Foundation'
                        ]
                    ]
                ]
            ];
            ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-sm mb-5">
                    <?php foreach ($rows as $type => $subtypes) : ?>
                        <?php foreach ($subtypes as $row) : ?>
                            <tr <?= (empty($row['certificate']) ? 'class="wishlisted"' : '') ?>>
                                <td class="text-center"><?= lang('Certifications.data.' . $type) ?></td>
                                <td style="max-width:200px"><?= $row['title'] ?></td>
                                <td style="max-width:180px">
                                    <?= $row['institution'] . (isset($row['country']) ? ', ' . lang('Certifications.country.' . $row['country']) : '') ?>
                                </td>
                                <td class="text-center small"
                                    data-sort="<?= @$row['date'][0] ?>"><?= !empty($row['date']) ? format_date($row['date'], $locale) : '<i class="fa-solid fa-bullseye"></i>' ?></td>
                                <td>
                                    <?= !empty($row['certificate']) ? '<a class="btn btn-outline-success btn-xs" href="' . $row['certificate'] . '" target="_blank"><i class="fa-solid fa-file-pdf"></i> ' . lang('Certifications.document-type.certificate') . '</a>' : '' ?>
                                    <?= !empty($row['transcript']) ? '<a class="btn btn-outline-success btn-xs" href="' . $row['transcript'] . '" target="_blank"><i class="fa-solid fa-file-pdf"></i> ' . lang('Certifications.document-type.transcript') . '</a>' : '' ?>
                                    <?= !empty($row['profile']) ? '<a class="btn btn-outline-success btn-xs" href="' . $row['profile'] . '" target="_blank"><i class="fa-solid fa-external-link"></i></a>' : '' ?>
                                </td>
                                <td class="text-center small">
                                    <?= @$row['result'] ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </table>
            </div>
            <h2><?= lang('Certifications.cefr.title') ?></h2>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-sm mb-5">
                    <?php foreach (lang('BusinessCard.language.table') as $i => $row) : ?>
                        <tr>
                            <td><?= $languages[$i]['flag'] . ' ' . $row[0] ?></td>
                            <td>
                                <?php if ($languages[$i]['cefr'] == 'Native') : ?>
                                    <span class="badge bg-success">A1</span>
                                    <span class="badge bg-success">A2</span>
                                    <span class="badge bg-success">B1</span>
                                    <span class="badge bg-success">B2</span>
                                    <span class="badge bg-success">C1</span>
                                    <span class="badge bg-success">C2</span>
                                    <span class="badge bg-success"> &gt;&gt;</span>
                                    <?= lang('Certifications.cefr.mother-tongue') ?>
                                <?php else : ?>
                                    <?php $bg_class = 'bg-success';
                                    $lvl_txt = ''; ?>
                                    <?php foreach ($cefr as $j => $lvl) : ?>
                                        <span class="badge <?= $bg_class ?>"><?= $j ?></span>
                                        <?php if ($languages[$i]['cefr'] == $j) {
                                            $bg_class = 'bg-secondary';
                                            $lvl_txt = $lvl;
                                        } ?>
                                    <?php endforeach; ?>
                                    <?= $languages[$i]['cefr'] . ' ' . $lvl_txt ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php if (!empty($languages[$i]['certifications'])) : ?>
                            <tr>
                                <td class="ps-5" colspan="2">
                                    <table class="table table-sm table-striped table-hover mb-0">
                                        <?php foreach ($languages[$i]['certifications'] as $cert) : ?>
                                            <tr <?= (empty($cert['certificate']) ? 'class="wishlisted"' : '') ?>>
                                                <td style="width:40%"><?= $cert['title'] ?></td>
                                                <td style="width:35%"><?= $cert['institution'] . (!empty($cert['country']) ? ', ' . lang('Certifications.country.' . $cert['country']) : '') ?></td>
                                                <td class="text-center"
                                                    style="width:15%"><?= !empty($cert['date']) ? format_date($cert['date'], $locale) : '<i class="fa-solid fa-bullseye"></i>' ?></td>
                                                <td class="text-end"
                                                    style="width:10%"><?= !empty($cert['certificate']) ? '<a class="btn btn-outline-success btn-xs" href="' . $cert['certificate'] . '" target="_blank"><i class="fa-solid fa-file-pdf"></i></a>' : '' ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </table>
            </div>
            <p class="mb-5"><i class="fa-solid fa-bullseye"></i> = <?= lang('Certifications.wishlisted') ?></p>
        </div>
    </div>
</div>
</body>
</html>