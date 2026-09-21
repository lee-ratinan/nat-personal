<style>
    .footer-links a {
        color: #444;
        margin-right: 10px;
        text-decoration: none;
    }
    .footer-links a:hover {
        color: #888;
    }
</style>
<div class="row">
    <div class="col-12 footer-links">
        <p>
            <a href="<?= base_url($locale) ?>"><?= lang('Home.sections.home.title') ?></a>
            <a href="<?= base_url($locale . '/personal-life') ?>"><?= lang('Home.system.pages.personal-life') ?></a>
            <a href="<?= base_url($locale . '/portfolio') ?>"><?= lang('Home.sections.portfolio.title') ?></a>
            <a href="<?= base_url($locale . '/writing') ?>"><?= lang('Writing.title') ?></a>
            <a href="<?= base_url($locale . '/blog') ?>"><?= lang('Home.system.pages.blog') ?></a>
            <a href="<?= ('calendar' == $slug ? '#' : base_url($locale . '/calendar')) ?>"><?= lang('Home.calendar') ?></a>
            <a href="<?= ('business-card' == $slug ? '#' : base_url($locale . '/business-card')) ?>"><?= lang('BusinessCard.title') ?></a>
            <a href="<?= ('certifications' == $slug ? '#' : base_url($locale . '/certifications')) ?>"><?= lang('Certifications.title') ?></a>
        </p>
    </div>
</div>