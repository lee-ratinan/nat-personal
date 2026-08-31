<footer id="footer" class="footer">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="<?= base_url($locale) ?>" class="logo d-flex align-items-center">
                    <span class="sitename"><?= lang('Home.system.site-name-head') ?></span>
                </a>
                <p><?= lang('Home.system.footer-msg') ?></p>
            </div>
            <div class="col-lg-3 col-6 footer-links">
                <h4><?= lang('Home.system.useful-links') ?></h4>
                <ul>
                    <li><a href="<?= 'home' != $slug ? base_url($locale) : '#' ?>"><?= lang('Home.sections.home.title') ?></a></li>
                    <li><a href="<?= 'personal-life' != $slug ? base_url($locale . '/personal-life') : '#' ?>"><?= lang('Home.system.pages.personal-life') ?></a></li>
                    <li><a href="<?= 'portfolio' != $slug ? base_url($locale . '/portfolio') : '#' ?>"><?= lang('Home.sections.portfolio.title') ?></a></li>
                    <li><a href="<?= 'certifications' != $slug ? base_url($locale . '/certifications') : '#' ?>"><?= lang('Certifications.title') ?></a></li>
                    <li><a href="<?= 'writing' != $slug ? base_url($locale . '/writing') : '#' ?>"><?= lang('Writing.title') ?></a></li>
                    <li><a href="<?= 'calendar' != $slug ? base_url($locale . '/calendar') : '#' ?>"><?= lang('Home.calendar') ?></a></li>
                    <li><a href="<?= 'blog' != $slug ? base_url($locale . '/blog') : '?' ?>"><?= lang('Home.system.pages.blog') ?></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-6 footer-links">
                <h4><?= lang('Home.system.change-language') ?></h4>
                <?php
                if ('home' == $slug) {
                    $slug = '';
                }
                if (!isset($post_slug)) {
                    $post_slug = '';
                }
                ?>
                <ul>
                    <li><a href="<?= base_url('en/' . $slug . $post_slug) ?>">English (US)</a></li>
                    <li><a href="<?= base_url('th/' . $slug . $post_slug) ?>">ภาษาไทย</a></li>
                    <li><a href="<?= base_url('ja/' . $slug . $post_slug) ?>">日本語 <sup>AI 翻訳</sup></a></li>
                    <li><a href="<?= base_url('zh-TW/' . $slug . $post_slug) ?>">中文（台灣） <sup>AI 翻譯</sup></a></li>
                    <li><a href="<?= base_url('en-Shaw/' . $slug . $post_slug) ?>">𐑖𐑱𐑝𐑾𐑯</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">RatinanLee</strong> <span>All Rights Reserved</span></p>
    </div>
</footer>
<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Preloader -->
<div id="preloader"></div>
<!-- Vendor JS Files -->
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
<script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
<script src="<?= base_url('assets/vendor/typed.js/typed.umd.js') ?>"></script>
<script src="<?= base_url('assets/vendor/waypoints/noframework.waypoints.js') ?>"></script>
<script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
<!-- Main JS File -->
<script src="<?= base_url('assets/js/main.min.js') ?>"></script>