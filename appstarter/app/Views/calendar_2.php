<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= lang('Home.calendar') ?> - lee.ratinan.com</title>
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
    <link rel="alternate" hreflang="en" href="<?= base_url('en/calendar') ?>"/>
    <link rel="alternate" hreflang="th" href="<?= base_url('th/calendar') ?>"/>
    <link rel="alternate" hreflang="ja" href="<?= base_url('ja/calendar') ?>"/>
    <link rel="alternate" hreflang="zh-TW" href="<?= base_url('zh-TW/calendar') ?>"/>
    <link rel="alternate" hreflang="en-Shaw" href="<?= base_url('en-Shaw/calendar') ?>"/>
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
                <a class="btn btn-<?= 'en' == $locale ? '' : 'outline-' ?>success btn-xs" href="<?= base_url('en/calendar') ?>">English</a>
                <a class="btn btn-<?= 'th' == $locale ? '' : 'outline-' ?>success btn-xs" href="<?= base_url('th/calendar') ?>">ภาษาไทย</a>
                <a class="btn btn-<?= 'zh-TW' == $locale ? '' : 'outline-' ?>success btn-xs" href="<?= base_url('zh-TW/calendar') ?>">國語</a>
                <a class="btn btn-<?= 'ja' == $locale ? '' : 'outline-' ?>success btn-xs" href="<?= base_url('ja/calendar') ?>">日本語</a>
                <a class="btn btn-<?= 'en-Shaw' == $locale ? '' : 'outline-' ?>success btn-xs" href="<?= base_url('en-Shaw/calendar') ?>">𐑖𐑱𐑝𐑾𐑯</a>
            </p>
            <p>/ <a href="<?= base_url($locale) ?>"><i class="fa-solid fa-home"></i></a> / <?= lang('Home.calendar') ?> /</p>
            <h1><?= lang('Home.calendar') ?></h1>
            <iframe
                src="https://calendar.google.com/calendar/embed?height=600&wkst=2&ctz=Asia%2FSingapore&showPrint=0&mode=WEEK&title=<?= urlencode(lang('Home.calendar_title')) ?>&showCalendars=0&&src=bGVlLnJhdGluYW5AZ21haWwuY29t&color=%237cb342"
                style="border-width:0;margin:0 auto -25px auto;max-width:100%;max-height:80vh;"
                width="800"
                height="600"
                frameborder="0"
                scrolling="no">
            </iframe>
        </div>
    </div>
</div>
</body>
</html>