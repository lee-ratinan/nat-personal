<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Game Center - <?= lang('Home.system.website-name') ?></title>
    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Story+Script&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Noto+Sans+Thai:wght@100..900&family=Noto+Sans+TC:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="canonical" href="<?= current_url() ?>">
    <script>
        function applySystemTheme(e) {
            const isDark = e.matches;
            document.documentElement.setAttribute('data-bs-theme', isDark ? 'dark' : 'light');
        }

        const colorSchemeQuery = window.matchMedia('(prefers-color-scheme: dark)');
        applySystemTheme(colorSchemeQuery);
        colorSchemeQuery.addEventListener('change', applySystemTheme);
    </script>
    <style>
        a.game {
            display: block;
            text-align: center;
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 mt-5">
            <h1>Game Center</h1>
        </div>
        <div class="col-4 col-md-3 col-lg-2 p-3">
            <a class="game" href="<?= base_url('game/scrum') ?>">
                <img class="img-fluid rounded-5" src="<?= base_url('assets/img/game/scrum.webp') ?>" alt="Scrum Game">
                Scrum Game
            </a>
        </div>
        <div class="col-4 col-md-3 col-lg-2 p-3">
            <a class="game" href="<?= base_url('game/japanese') ?>">
                <img class="img-fluid rounded-5" src="<?= base_url('assets/img/game/japanese.webp') ?>"
                     alt="Japanese Game">
                Japanese Game
            </a>
        </div>
        <div class="col-4 col-md-3 col-lg-2 p-3">
            <a class="game" href="<?= base_url('game/shavian') ?>">
                <img class="img-fluid rounded-5" src="<?= base_url('assets/img/game/shavian.webp') ?>"
                     alt="Shavian Game">
                Shavian Game
            </a>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <hr/>
        </div>
    </div>
    <?php $slug = "game"; $locale = 'en'; include_once dirname(dirname(__FILE__)) . "/_footer_menu.php"; ?>
</div>
</body>
</html>