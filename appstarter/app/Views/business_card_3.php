<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= lang('BusinessCard.title') ?> - lee.ratinan.com</title>
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
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <?php elseif ('th' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Thai:wght@100..900&display=swap" rel="stylesheet">
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
    <link rel="alternate" hreflang="en" href="<?= base_url('en/business-card') ?>"/>
    <link rel="alternate" hreflang="th" href="<?= base_url('th/business-card') ?>"/>
    <link rel="alternate" hreflang="ja" href="<?= base_url('ja/business-card') ?>"/>
    <link rel="alternate" hreflang="zh-TW" href="<?= base_url('zh-TW/business-card') ?>"/>
    <link rel="alternate" hreflang="en-Shaw" href="<?= base_url('en-Shaw/business-card') ?>"/>
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
        h3 { font-size:1.1em; }
        h2 { font-size:1.2em; }
        h1 { font-size:1.5em; }
        .btn-xs {
            padding: 0.15rem 0.5rem;
            font-size: 0.75rem;
            border-radius: 0.175rem;
        }
        .ja .upright, .zh-TW .upright {writing-mode: vertical-rl; text-orientation: upright !important; margin-bottom: 50px; float: right;}
        .badge {border: solid 2px; border-radius: 12px; font-size: 0.8em; padding: 0.25em 0.5em;}
        .badge-iq {border-color: #800;}
        .badge-mbti {border-color: #30a474;}
        .badge-hogwarts-house {border-color: #265ca9;}
        .badge-camp-half-blood {border-color: #f8900b;}
        a.btn {margin-right: .5rem; margin-bottom: .5rem;}
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
                <a class="btn btn-<?= 'en' == $locale ? '' : 'outline-' ?>success btn-xs" href="<?= base_url('en/business-card') ?>">English</a>
                <a class="btn btn-<?= 'th' == $locale ? '' : 'outline-' ?>success btn-xs" href="<?= base_url('th/business-card') ?>">ภาษาไทย</a>
                <a class="btn btn-<?= 'zh-TW' == $locale ? '' : 'outline-' ?>success btn-xs" href="<?= base_url('zh-TW/business-card') ?>">國語</a>
                <a class="btn btn-<?= 'ja' == $locale ? '' : 'outline-' ?>success btn-xs" href="<?= base_url('ja/business-card') ?>">日本語</a>
                <a class="btn btn-<?= 'en-Shaw' == $locale ? '' : 'outline-' ?>success btn-xs" href="<?= base_url('en-Shaw/business-card') ?>">𐑖𐑱𐑝𐑾𐑯</a>
            </p>
            <h1 class="upright">
                <?php
                echo lang('BusinessCard.name');
                $name2 = lang('BusinessCard.name2');
                if (!empty($name2)) {
                    echo '<br/><br/><small>' . $name2 . '</small>';
                }
                ?>
            </h1>
            <div style="clear: both;"></div>
            <h2><?= lang('BusinessCard.tagline') ?></h2>
            <hr class="my-2" />
            <p class="mb-5">
                <?php foreach (lang('BusinessCard.badges') as $key => $value) : ?>
                    <span class="badge text-body badge-<?= $key ?>"><?= $value[0] ?>: <?= $value[1] ?></span>
                <?php endforeach; ?>
                <span class="badge text-body border-primary"><?= lang('BusinessCard.dob') ?></span>
                <span class="badge text-body border-danger"><i class="fa-solid fa-passport"></i> <?= lang('BusinessCard.passport') ?></span>
                <span class="badge text-body border-warning"><i class="fa-solid fa-home"></i> <?= lang('BusinessCard.residency') ?></span>
            </p>
            <h3><?= lang('BusinessCard.contact') ?></h3>
            <p>
                <?php foreach ($contact as $fa_class => $link) : ?>
                    <?php $key = str_replace(['fa-solid ', 'fa-brands '], '', $fa_class) ?>
                    <a class="btn btn-outline-success btn-sm" href="<?= $link ?>" target="_blank"><i class="<?= $fa_class ?>"></i> <?= lang('BusinessCard.contact-key.' . $key) ?></a>
                <?php endforeach; ?>
            </p>
            <hr/>
            <h3><?= lang('BusinessCard.education.title') ?></h3>
            <ul>
                <?php foreach (lang('BusinessCard.education.table') as $row) : ?>
                    <li><?= $row[0] ?><br/><?= $row[1] ?></li>
                <?php endforeach; ?>
            </ul>
            <hr/>
            <h3><?= lang('BusinessCard.certification.title') ?></h3>
            <ul>
                <?php foreach (lang('BusinessCard.certification.list') as $row) : ?>
                    <li><?= $row ?></li>
                <?php endforeach; ?>
            </ul>
            <p>
                <a href="https://www.scrum.org/user/1457291" class="btn btn-outline-success btn-sm">Scrum.org</a>
                <a href="https://www.credly.com/users/ratinanlee" class="btn btn-outline-success btn-sm">Credly.com</a>
                <a href="https://www.scrumalliance.org/members/1729850" class="btn btn-outline-success btn-sm">ScrumAlliance.org</a>

            </p>
            <hr/>
            <h3><?= lang('BusinessCard.language.title') ?></h3>
            <ul>
                <?php foreach (lang('BusinessCard.language.table') as $row) : ?>
                    <li><?= $row[0] ?>: <?= $row[1] ?></li>
                <?php endforeach; ?>
            </ul>
            <hr/>
        </div>
        <div class="col-12 mb-5">
            <?php include "_professional_certifications.php"; ?>
            <hr/>
            <p class="small text-end">Updated: 7 Sep 2026</p>
        </div>
    </div>
</div>
</body>
</html>