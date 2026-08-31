<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="<?= base_url($locale) ?>" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="<?= base_url('assets/img/logo.webp') ?>" alt=""> -->
            <h1 class="sitename fw-bold"><?= lang('Home.system.site-name-head') ?></h1>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="<?= 'home' != $slug ? base_url($locale) : '#' ?>"><?= lang('Home.sections.home.title') ?></a></li>
                <li><a href="<?= 'personal-life' != $slug ? base_url($locale . '/personal-life') : '#' ?>"><?= lang('Home.system.pages.personal-life') ?></a></li>
                <li><a href="<?= 'portfolio' != $slug ? base_url($locale . '/portfolio') : '#' ?>"><?= lang('Home.sections.portfolio.title') ?></a></li>
                <li><a href="<?= 'certifications' != $slug ? base_url($locale . '/certifications') : '#' ?>"><?= lang('Certifications.title') ?></a></li>
                <li><a href="<?= 'writing' != $slug ? base_url($locale . '/writing') : '#' ?>"><?= lang('Writing.title') ?></a></li>
                <li><a href="<?= 'calendar' != $slug ? base_url($locale . '/calendar') : '#' ?>"><?= lang('Home.calendar') ?></a></li>
                <li><a href="<?= 'blog' != $slug ? base_url($locale . '/blog') : '?' ?>"><?= lang('Home.system.pages.blog') ?></a></li>
                <li><a href="#footer"><i class="bi bi-translate"></i></a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>