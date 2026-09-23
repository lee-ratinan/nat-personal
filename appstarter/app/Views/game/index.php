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
<body>
<div class="container">
  <div class="row">
      <div class="col-12">
          <h1>Game Center</h1>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
          <a href="<?= base_url('game/scrum') ?>">
              <img src="<?= base_url('assets/img/game/scrum.webp') ?>" alt="Scrum Game">
          </a>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
          <a href="<?= base_url('game/japanese') ?>">
              <img src="<?= base_url('assets/img/game/japanese.webp') ?>" alt="Japanese Game">
          </a>
      </div>
  </div>
</div>
</body>
</html>