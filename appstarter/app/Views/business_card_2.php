<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= $data['business-card'] ?> - <?= $data['name'] ?></title>
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
    <link rel="alternate" hreflang="en" href="<?= base_url('business-card?hl=en') ?>"/>
    <link rel="alternate" hreflang="th" href="<?= base_url('business-card?hl=th') ?>"/>
    <link rel="alternate" hreflang="ja" href="<?= base_url('business-card?hl=ja') ?>"/>
    <link rel="alternate" hreflang="zh-TW" href="<?= base_url('business-card?hl=zh-TW') ?>"/>
    <link rel="alternate" hreflang="ko" href="<?= base_url('business-card?hl=ko') ?>"/>
    <link rel="alternate" hreflang="vi" href="<?= base_url('business-card?hl=vi') ?>"/>
    <link rel="alternate" hreflang="es" href="<?= base_url('business-card?hl=es') ?>"/>
    <link rel="alternate" hreflang="id" href="<?= base_url('business-card?hl=id') ?>"/>
    <link rel="alternate" hreflang="en-Shaw" href="<?= base_url('business-card?hl=en-Shaw') ?>"/>
    <link rel="alternate" hreflang="x-default" href="<?= base_url('business-card') ?>"/>
    <link rel="canonical" href="<?= current_url() . (empty($hl) ? '' : '?hl=' . $hl) ?>">
    <style>
        body {
        <?php if (in_array($locale, ['en', 'vi', 'id', 'es', 'art-x-navi'])) : ?> font-family: "Noto Serif", serif;
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
        .ja .upright, .zh-TW .upright {text-orientation: upright !important;}
        .btn-outline-mediator {color: #30a474;border: #30a474 1px solid;}
        .btn-outline-mediator:hover {background-color: #30a474;border: #30a474 1px solid;color: #fff;}
        .btn-outline-ravenclaw {color: #265ca9;border: #265ca9 1px solid;}
        .btn-outline-ravenclaw:hover {background-color: #265ca9;border: #265ca9 1px solid;color: #fff;}
        .btn-outline-athena {color: #f8900b;border: #f8900b 1px solid;}
        .btn-outline-athena:hover {background-color: #f8900b;border: #f8900b 1px solid;color: #fff;}
        a.btn {margin-right: .5rem; margin-bottom: .5rem;}
    </style>
</head>
<body class="<?= $locale ?>">
<div class="container-fluid">
    <div class="row">
        <div class="col px-3 py-5" style="width:100%;max-width:800px;margin:0 auto;">
            <h1><?= $data['name'] ?></h1>
            <h2 class="mb-2"><?= $data['tagline'] ?></h2>
            <div class="mb-5">
                <a class="btn btn-xs btn-outline-athena rounded-pill" href="#">IQ: 135</a>
                <?php foreach ($data['badges'] as $badge) : ?>
                    <a class="btn btn-xs btn-outline-athena rounded-pill" href="#"><?= $badge['label'] ?>: <?= $badge['value'] ?></a>
                <?php endforeach; ?>
            </div>
            <a href="<?= base_url() ?>" class="btn btn-outline-success btn-sm">
                <i class="fa-solid fa-globe-asia"></i> lee.ratinan.com
            </a>
            <a href="mailto:lee@ratinan.com" class="btn btn-outline-success btn-sm">
                <i class="fa-solid fa-envelope"></i> lee@ratinan.com
            </a>
            <div class="row">
                <div class="col-12 col-md-10 col-lg-8">
                    <?php foreach ($links as $class => $link) : ?>
                        <a href="<?= $link ?>" target="_blank" class="btn btn-outline-success btn-sm">
                            <i class="fa-brands fa-<?= $class ?>"></i>
                            <?= $translations[$locale][$class] ?? $translations['en'][$class] ?>
                        </a>
                    <?php endforeach; ?>
                </div>
                <div class="col-12 col-md-10 col-lg-8">
                    <a href="https://medium.com/@ratinanlee" target="_blank" class="btn btn-outline-success btn-sm"><i class="fa-brands fa-medium"></i> Medium</a>
                    <a href="https://www.readawrite.com/?action=user_page&user_id_publisher=8793437&tab=articleList" target="_blank" class="btn btn-outline-success btn-sm"><i class="fa-solid fa-pen-square"></i> ReadAWrite</a>
                </div>
                <div class="col-12 col-md-10 col-lg-8">
                    <?php foreach ($professional_profiles as $name => $link) : ?>
                        <a href="<?= $link ?>" target="_blank" class="btn btn-outline-success btn-xs"><?= $name ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <hr>
            <h3>
                <?= $data['resume']['title'] ?>
                <a href="#" id="open-resume"><i class="fa-solid fa-angle-down"></i></a>
            </h3>
            <div id="resume-section" style="display: none">
                <a href="https://drive.google.com/file/d/1ZXCc5VxgpqIqSaFZNoSk2Q7DcmBRVyGw/view?usp=sharing" target="_blank" class="btn btn-outline-success btn-xs"><?= $data['resume']['tech-lead'] ?></a>
                <a href="https://drive.google.com/file/d/1UiABlqiWRvJgoELj6B6W9UHa53GvL8e4/view?usp=sharing" target="_blank" class="btn btn-outline-success btn-xs"><?= $data['resume']['project-manager'] ?></a>
                <a href="https://drive.google.com/file/d/1I-sQ5vYCoolkz3vqLnyC8XI7xzE0M84C/view?usp=sharing" target="_blank" class="btn btn-outline-success btn-xs"><?= $data['resume']['scrum-master'] ?></a>
                <a href="https://drive.google.com/file/d/1-WetbRph_7YxDwlwXZZGazX_-rGFJc4Z/view?usp=sharing" target="_blank" class="btn btn-outline-success btn-xs">Portfolio</a>
            </div>
            <hr>
            <h3><?= $data['education'] ?></h3>
            <ul>
                <?php foreach ($data['educations'] as $row) : ?>
                    <li><?= $row ?></li>
                <?php endforeach; ?>
            </ul>
            <hr>
            <h3><?= $data['certification'] ?></h3>
            <ul>
                <?php foreach ($data['certifications'] as $row) : ?>
                    <li><?= $row ?></li>
                <?php endforeach; ?>
            </ul>
            <hr>
            <h3><?= $data['language'] ?></h3>
            <ul>
                <?php foreach ($data['languages'] as $row) : ?>
                    <li><?= $row ?></li>
                <?php endforeach; ?>
            </ul>
            <hr>
            <i class="fa-solid fa-language"></i>
            <?php foreach ($supported_languages as $lang_code => $lang_name) : ?>
                <a class="btn btn-<?= ($lang_code == $locale ? '' : 'outline-') ?>success btn-xs me-1 mb-1" href="?hl=<?= $lang_code ?>"><?= $lang_name ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>
<script>
    $(function () {
        $('#open-resume').click(function () {
            $('#resume-section').slideDown();
            $(this).hide();
        });
    });
</script>
</html>