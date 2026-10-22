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
    <link href="https://fonts.googleapis.com/css2?family=Story+Script&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Noto+Sans+Thai:wght@100..900&family=Noto+Sans+TC:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="canonical" href="<?= current_url() ?>">
    <style>
        body {
            background: #5f9c30;
            background: linear-gradient(172deg, rgba(95, 156, 48, 1) 0%, rgba(148, 15, 15, 1) 44%, rgba(26, 75, 130, 1) 77%, rgba(252, 176, 69, 1) 100%);
            color: white;
            height: 100vh;
            width: 100vw;
        }
        a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 mt-5">
            <h1>Japanese Game</h1>
            <p><a href="<?= base_url('game') ?>">Back to Game Center</a></p>
        </div>
        <div class="col-12">
            <a class="btn btn-danger btn-lg p-5 mb-5 w-100" href="<?= base_url('game/nihongo/hiragana') ?>">Hiragana・ひらがな</a>
            <a class="btn btn-danger btn-lg p-5 mb-5 w-100" href="<?= base_url('game/nihongo/katakana') ?>">Katakana・カタカナ</a>
            <a class="btn btn-danger btn-lg p-5 mb-5 w-100" href="<?= base_url('game/nihongo/vocabulary') ?>">Vocabulary・語彙</a>
        </div>
    </div>
</div>
</body>
</html>