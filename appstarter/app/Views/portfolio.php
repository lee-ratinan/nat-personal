<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= lang('Home.sections.portfolio.title') ?> - <?= lang('Home.system.website-name') ?></title>
    <meta name="description" content="This page contains my portfolio, aiming to showcase my journey as a Scrum Master, Tech Lead, and Project Manager.">
    <meta name="keywords" content="Portfolio, scrum, scrum master, tech lead, project manager, project management">
    <meta name="author" content="<?= lang('Home.system.seo.author') ?>">
    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php if ('en' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Story+Script&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <?php elseif ('th' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&family=Sriracha&display=swap" rel="stylesheet">
    <?php elseif ('zh-TW' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&family=Stick&display=swap" rel="stylesheet">
    <?php elseif ('ja' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&family=Yusei+Magic&display=swap" rel="stylesheet">
    <?php else : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Shavian&display=swap" rel="stylesheet">
    <?php endif; ?>
    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet') ?>">
    <!-- Main CSS File -->
    <link href="<?= base_url('assets/css/main.min.css') ?>" rel="stylesheet">
    <!-- hreflang -->
    <link rel="alternate" hreflang="en" href="<?= base_url('en/portfolio') ?>"/>
    <link rel="alternate" hreflang="th" href="<?= base_url('th/portfolio') ?>"/>
    <link rel="alternate" hreflang="ja" href="<?= base_url('ja/portfolio') ?>"/>
    <link rel="alternate" hreflang="zh-TW" href="<?= base_url('zh-TW/portfolio') ?>"/>
    <link rel="alternate" hreflang="x-default" href="<?= base_url('portfolio') ?>"/>
    <link rel="canonical" href="<?= current_url() ?>">
    <!-- =======================================================
    * Template Name: Craftivo
    * Template URL: https://bootstrapmade.com/craftivo-bootstrap-portfolio-template/
    * Updated: Oct 04 2025 with Bootstrap v5.3.8
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <style>
        img.max-400 { margin:0 auto; width:80%; max-width:400px; }
    </style>
</head>
<body class="index-page portfolio-page <?= $locale ?>">
<?php include "_header.php"; ?>
<main class="main mt-5 pt-5">
    <section id="about" class="about section mt-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-12 text-center">
                    <p><?= lang('Portfolio.title') ?></p>
                    <h1><?= lang('Portfolio.title-name') ?></h1>
                    <h2><?= lang('Portfolio.subtitle') ?></h2>
                    <img class="img-fluid max-400 rounded my-3" src="<?= base_url('assets/img/portfolio-page/cover-1.jpg') ?>" alt="Portfolio Cover - Tokyo 2026" />
                </div>
                <div class="col-12">
                    <p>
                        <b><?= lang('Portfolio.intro.name') ?></b><br>
                        <?= lang('Portfolio.intro.other-names') ?>
                    </p>
                    <p>
                        <?= lang('Portfolio.intro.nationality') ?><br>
                        <?= lang('Portfolio.intro.residency') ?><br>
                        <?= lang('Portfolio.intro.language') ?><br>
                        <?= lang('Portfolio.intro.linkedin') ?> <a href="https://www.linkedin.com/in/ratinanlee/" target="_blank">/ratinanlee</a><br>
                        <?= lang('Portfolio.intro.business-card') ?> <a href="https://connect.ratinan.com/" target="_blank">connect.ratinan.com/</a>
                    </p>
                    <div class="row justify-content-end">
                        <div class="col-12 col-md-10 col-lg-8 text-end my-5">
                            <h3><?= lang('Portfolio.who-am-i.title') ?></h3>
                            <?php
                            $year = (int)date('Y');
                            $in_industry_yrs = $year - 2012;
                            $leading_yrs = $year - 2017;
                            ?>
                            <p><?= lang('Portfolio.who-am-i.para', [$in_industry_yrs, $leading_yrs]) ?></p>
                        </div>
                    </div>
                    <div class="text-center my-5">
                        <?php include "_professional_certifications.php"; ?>
                        <div class="mt-3">
                            <a class="btn btn-primary" href="https://www.scrum.org/user/1457291" target="_blank">Scrum.org Profile</a>
                            <a class="btn btn-primary" href="https://www.scrumalliance.org/members/1729850" target="_blank">Scrum Alliance Profile</a>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <!-- education -->
                            <div class="row">
                                <div class="col-12 col-lg-6 mb-3">
                                    <h3><i class="bi bi-mortarboard-fill"></i> <?= lang('Home.sections.resume.education.label') ?></h3>
                                    <p>
                                        <i class="bi bi-patch-check"></i> <b><?= lang('Home.sections.resume.education.records.masters.title') ?></b><br>
                                        <i class="bi bi-bank2"></i> <?= lang('Home.sections.resume.education.records.masters.university') ?><br>
                                        <i class="bi bi-geo-alt-fill"></i> <?= lang('Home.sections.resume.education.records.masters.country') ?><br>
                                        <i class="bi bi-calendar-check"></i> <?= calculate_years([lang('Home.sections.resume.education.records.masters.class-of')], $locale) ?>
                                    </p>
                                    <p>
                                        <i class="bi bi-patch-check"></i> <b><?= lang('Home.sections.resume.education.records.bachelor.title') ?></b><br>
                                        <i class="bi bi-bank2"></i> <?= lang('Home.sections.resume.education.records.bachelor.university') ?><br>
                                        <i class="bi bi-geo-alt-fill"></i> <?= lang('Home.sections.resume.education.records.bachelor.country') ?><br>
                                        <i class="bi bi-calendar-check"></i> <?= calculate_years([lang('Home.sections.resume.education.records.bachelor.class-of')], $locale) ?>
                                    </p>
                                </div>
                                <div class="col-12 col-lg-6 text-center text-lg-end mb-3">
                                    <img class="img-fluid max-400 rounded" src="<?= base_url('assets/img/portfolio-page/education-msc-graduation.jpg') ?>" alt="MSc Graduation" />
                                </div>
                            </div>
                            <!-- experience -->
                            <div class="row">
                                <div class="col-12 col-lg-6 text-lg-end order-lg-2 mb-3">
                                    <h3><i class="bi bi-suitcase-lg-fill"></i> <?= lang('Home.sections.resume.experience.label') ?></h3>
                                    <?php for ($i = 1; $i <= 3; $i++) : ?>
                                        <p>
                                            <b><?= lang('Home.sections.resume.experience.records.' . $i . '.title') ?></b><br>
                                            <?= lang('Home.sections.resume.experience.records.' . $i . '.companies') ?><br>
                                            <?= lang('Home.sections.resume.experience.records.' . $i . '.country') ?><br>
                                            <?= calculate_years(lang('Home.sections.resume.experience.records.' . $i . '.year'), $locale, ' - ') ?>
                                        </p>
                                    <?php endfor; ?>
                                </div>
                                <div class="col-12 col-lg-6 text-center text-lg-start order-lg-1 mb-3">
                                    <img class="img-fluid max-400 rounded" src="<?= base_url('assets/img/portfolio-page/experience-buzzcity.jpg') ?>" alt="BuzzCity Team" />
                                </div>
                            </div>
                            <div class="text-center my-5">* * *</div>
                            <p class="text-center"><?= lang('Portfolio.para.as-a-scrum-master') ?></p>
                            <div class="text-center my-5">* * *</div>
                            <h3 class="text-center"><?= lang('Portfolio.case-studies.title') ?></h3>
                            <div class="resume mt-5">
                                <div class="experience-section">
                                    <div class="experience-cards">
                                        <?php
                                        $cs_img = [
                                            '1' => [base_url('assets/img/portfolio-page/decoration-04.jpg'), 'Agile Board'],
                                            '2' => [base_url('assets/img/portfolio-page/decoration-01.jpg'), 'Office Desk'],
                                            '3' => [base_url('assets/img/portfolio-page/decoration-03.jpg'), 'Thumbs Up']
                                        ];
                                        ?>
                                        <?php for ($i = 1; $i <= 3; $i++) : ?>
                                        <div class="exp-card aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                            <div class="card-header">
                                                <div class="company-logo">
                                                    &nbsp; <?= $i ?> &nbsp;
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h4><?= lang('Portfolio.case-studies.details.' . $i . '.title') ?></h4>
                                                <h5><?= lang('Portfolio.case-studies.challenge') ?></h5>
                                                <p><?= lang('Portfolio.case-studies.details.' . $i . '.challenge') ?></p>
                                                <h5><?= lang('Portfolio.case-studies.solution') ?></h5>
                                                <ul>
                                                    <?php foreach (lang('Portfolio.case-studies.details.' . $i . '.solution') as $solution) : ?>
                                                        <li><?= $solution ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <h5><?= lang('Portfolio.case-studies.impact') ?></h5>
                                                <ul>
                                                    <?php foreach (lang('Portfolio.case-studies.details.' . $i . '.impact') as $impact) : ?>
                                                        <li><?= $impact ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <div class="text-center my-3">
                                                    <img class="img-fluid max-400 rounded" src="<?= $cs_img[$i][0] ?>" alt="<?= $cs_img[$i][1] ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center my-5">* * *</div>
                            <h3 class="text-center"><?= lang('Portfolio.para.empowering') ?></h3>
                            <p class="text-center my-5"><?= lang('Portfolio.para.true-leadership') ?></p>
                            <div class="text-center my-3">
                                <img class="img-fluid max-400 rounded" src="<?= base_url('assets/img/portfolio-page/decoration-02.jpg') ?>" alt="Team at Dinner" />
                            </div>
                        </div>
                        <div class="col-12 my-5">
                            <h3 class="text-center"><?= lang('Portfolio.blog.title') ?></h3>
                            <div class="my-5" id="wordpress-posts"></div>
                            <div class="text-center"><a href="<?= base_url($locale . "/blog?m=tags&ms=portfolio&id=62") ?>" class="btn btn-primary"><?= lang('Portfolio.blog.read-more') ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "_footer.php"; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    /**
     * WordPress REST API — Posts Fetcher & Renderer
     * Requires: jQuery
     * Usage:
     *   WPPosts.init({ baseUrl: 'https://your-site.com' });
     */
    const WPPosts = (() => {
        // ─── Config ──────────────────────────────────────────────────────────────

        const CONFIG = {
            baseUrl: '',
            perPage: 2,
            currentPage: 1,
            totalPages: 1,
        };

        // ─── Public: Initialise ──────────────────────────────────────────────────

        function init(options = {}) {
            CONFIG.baseUrl = (options.baseUrl || '').replace(/\/$/, '');
            CONFIG.perPage = options.perPage || 2;
            CONFIG.currentPage = 1;

            _bindControls();
            loadPage(1);
        }

        // ─── Core: Load a page ───────────────────────────────────────────────────

        async function loadPage(page) {
            CONFIG.currentPage = page;
            _setLoading(true);

            try {
                // ── Step 1: fetch posts ─────────────────────────────────────────────
                const posts = await _fetchPosts(page);

                // ── Step 2: collect all unique IDs across every post ────────────────
                const mediaIds  = _unique(posts.map((p) => p.featured_media).filter(Boolean));
                const authorIds = _unique(posts.map((p) => p.author).filter(Boolean));
                const tagIds    = _unique(posts.flatMap((p) => p.tags || []).filter(Boolean));

                // ── Step 3: one batch request per resource type, all in parallel ─────
                const [mediaMap, authorMap, tagMap] = await Promise.all([
                    fetchMediaBatch(mediaIds),
                    fetchAuthorBatch(authorIds),
                    fetchTagBatch(tagIds),
                ]);

                // ── Step 4: merge lookup data back into each post ───────────────────
                const enriched = posts.map((post) => ({
                    ...post,
                    mediaObj:  mediaMap[post.featured_media] || null,
                    authorObj: authorMap[post.author]        || null,
                    tagObjs:   (post.tags || []).map((id) => tagMap[id]).filter(Boolean),
                }));

                renderPosts(enriched);
                _updatePagination();
            } catch (err) {
                _renderError(err);
            } finally {
                _setLoading(false);
            }
        }

        // ─── Step 1: fetch raw posts ─────────────────────────────────────────────
        function _fetchPosts(page) {
            return new Promise((resolve, reject) => {
                $.ajax({
                    url: `${CONFIG.baseUrl}/wp-json/wp/v2/posts`,
                    method: 'GET',
                    data: {
                        _fields: 'id,date_gmt,excerpt,title,featured_media,slug,tags,author',
                        per_page: CONFIG.perPage,
                        tags: 62,
                        page,
                    },
                    complete(xhr) {
                        CONFIG.totalPages = parseInt(xhr.getResponseHeader('X-WP-TotalPages'), 10) || 1;
                    },
                    success: resolve,
                    error: reject,
                });
            });
        }

        // ─── Batch sub-fetchers (each returns an id → object lookup map) ─────────

        /**
         * Fetch multiple media objects in one request.
         * @param {number[]} ids
         * @returns {Promise<Object>}  { [id]: mediaObject }
         */
        async function fetchMediaBatch(ids) {
            if (!ids.length) return {};
            try {
                const results = await $.ajax({
                    url: `${CONFIG.baseUrl}/wp-json/wp/v2/media`,
                    method: 'GET',
                    data: {
                        include:  ids.join(','),
                        per_page: ids.length,
                        _fields:  'id,source_url,alt_text,media_details',
                    },
                });
                return _toMap(results);
            } catch {
                return {};
            }
        }

        /**
         * Fetch multiple authors in one request.
         * @param {number[]} ids
         * @returns {Promise<Object>}  { [id]: authorObject }
         */
        async function fetchAuthorBatch(ids) {
            if (!ids.length) return {};
            try {
                const results = await $.ajax({
                    url: `${CONFIG.baseUrl}/wp-json/wp/v2/users`,
                    method: 'GET',
                    data: {
                        include:  ids.join(','),
                        per_page: ids.length,
                        _fields:  'id,name,slug,link',
                    },
                });
                return _toMap(results);
            } catch {
                return {};
            }
        }

        /**
         * Fetch multiple tags in one request.
         * @param {number[]} ids
         * @returns {Promise<Object>}  { [id]: tagObject }
         */
        async function fetchTagBatch(ids) {
            if (!ids.length) return {};
            try {
                const results = await $.ajax({
                    url: `${CONFIG.baseUrl}/wp-json/wp/v2/tags`,
                    method: 'GET',
                    data: {
                        include:  ids.join(','),
                        per_page: ids.length,
                        _fields:  'id,name,slug,link',
                    },
                });
                return _toMap(results);
            } catch {
                return {};
            }
        }

        // ─── Renderer ────────────────────────────────────────────────────────────
        function renderDate(dateString) {
            let locale = '<?= $locale ?>';
            if ('th' === locale || 'zh-TW' === locale || 'ja' === locale) {
                return new Date(dateString).toLocaleDateString(locale, {
                    year: 'numeric', month: 'long', day: 'numeric',
                });
            } else if ('en-Shaw' === locale) {
                let postDate = new Date(dateString);
                let day = postDate.getDate(), month = postDate.getMonth(), year = postDate.getFullYear();
                let monthArray = ['𐑡𐑨𐑯𐑘𐑫𐑼𐑦', '𐑓𐑧𐑚𐑮𐑫𐑼𐑦', '𐑥𐑸𐑗', '𐑱𐑐𐑮𐑩𐑤', '𐑥𐑱', '𐑡𐑵𐑯', '𐑡𐑩𐑤𐑲', '𐑷𐑜𐑩𐑕𐑑', '𐑕𐑧𐑐𐑑𐑧𐑥𐑚𐑼', '𐑪𐑒𐑑𐑴𐑚𐑼', '𐑯𐑴𐑝𐑧𐑥𐑚𐑼', '𐑛𐑦𐑕𐑧𐑥𐑚𐑼'];
                return `${monthArray[month]} ${day}, ${year}`;
            }
            return new Date(dateString).toLocaleDateString('en-US', {
                year: 'numeric', month: 'long', day: 'numeric',
            });
        }
        function renderPosts(posts) {
            const $container = $('#wordpress-posts');
            $container.empty();

            if (!posts.length) {
                $container.html('<p class="wp-no-posts">No posts found.</p>');
                return;
            }

            posts.forEach((post) => {
                const title   = post.title?.rendered   || '(Untitled)';
                const excerpt = post.excerpt?.rendered || '';
                const date    = post.date_gmt ? renderDate(post.date_gmt) : '';

                const imgSrc  = post.mediaObj?.source_url || '';
                const imgAlt  = post.mediaObj?.alt_text   || title;
                const imgHtml = imgSrc
                    ? `<a href="<?= base_url($locale . '/blog-post') ?>/${_esc(post.id)}/${_esc(post.slug)}"><img class="img-fluid rounded" src="${imgSrc}" alt="${_esc(imgAlt)}"></a>`
                    : '';

                const authorName = post.authorObj?.name || '';
                const authorHtml = authorName
                    ? `<i class="bi bi-person-circle"></i> ${_esc(authorName)} &nbsp; `
                    : '';

                const tagsHtml = (post.tagObjs || [])
                    .map((t) => `<a class="wp-post__tag btn btn-sm btn-outline-success m-1" href="?m=tags&ms=${_esc(t.name)}&id=${_esc(t.id)}">${_esc(t.name)}</a>`)
                    .join('');
                const postLink = `<?= base_url($locale . '/blog-post') ?>/${_esc(post.id)}/${_esc(post.slug)}`;

                const $card = $(`
        <article class="wp-post row" data-id="${post.id}" data-slug="${_esc(post.slug)}">
          <div class="col-12 col-md-4 col-lg-3 col-xl-2 mb-3 wp-post__img">${imgHtml}</div>
          <div class="col-12 col-md-8 col-lg-9 col-xl-10 mb-3 wp-post__body">
            <h2 class="wp-post__title">
              <a href="${postLink}">${title}</a>
            </h2>
            <div class="wp-post__meta">
              ${authorHtml}
              <time class="wp-post__date" datetime="${post.date_gmt}"><i class="bi bi-calendar-plus"></i>  ${date}</time>
            </div>
            <div class="wp-post__excerpt">${excerpt}</div>
            ${tagsHtml ? `<div class="wp-post__tags">${tagsHtml}</div>` : ''}
          </div>
          <hr />
        </article>
      `);

                $container.append($card);
            });
        }

        // ─── Pagination ──────────────────────────────────────────────────────────

        function _updatePagination() {
            const { currentPage, totalPages } = CONFIG;

            $('#wp-page-info').text(`Page ${currentPage} of ${totalPages}`);

            const $prev = $('#wp-prev');
            if (currentPage <= 1) {
                $prev.addClass('is-disabled btn-outline-secondary').removeClass('btn-success').attr({ 'aria-disabled': 'true', tabindex: '-1' });
            } else {
                $prev.addClass('btn-success').removeClass('is-disabled btn-outline-secondary').removeAttr('aria-disabled').attr('tabindex', '0');
            }
            $prev.addClass('btn-sm me-3');

            const $next = $('#wp-next');
            if (currentPage >= totalPages) {
                $next.addClass('is-disabled btn-outline-secondary').removeClass('btn-success').attr({ 'aria-disabled': 'true', tabindex: '-1' });
            } else {
                $next.addClass('btn-success').removeClass('is-disabled btn-outline-secondary').removeAttr('aria-disabled').attr('tabindex', '0');
            }
            $next.addClass('btn-sm ms-3');
        }

        function _bindControls() {
            $(document).on('click', '#wp-prev', function () {
                if (!$(this).hasClass('is-disabled')) loadPage(CONFIG.currentPage - 1);
            });

            $(document).on('click', '#wp-next', function () {
                if (!$(this).hasClass('is-disabled')) loadPage(CONFIG.currentPage + 1);
            });
        }

        // ─── Utility helpers ─────────────────────────────────────────────────────

        /** Convert an array of objects with .id into a keyed lookup map. */
        function _toMap(arr) {
            return arr.reduce((acc, item) => { acc[item.id] = item; return acc; }, {});
        }

        /** Deduplicate an array of primitives. */
        function _unique(arr) {
            return [...new Set(arr)];
        }

        function _setLoading(state) {
            $('#wordpress-posts').toggleClass('is-loading', state);
            $('#wp-prev, #wp-next').prop('disabled', state);
        }

        function _renderError(err) {
            const msg = err?.responseJSON?.message || err?.statusText || 'Unknown error';
            $('#wordpress-posts').html(`<p class="wp-error">Failed to load posts: ${_esc(msg)}</p>`);
        }

        function _esc(str) {
            return String(str)
                .replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;').replace(/'/g, '&#39;');
        }

        // ─── Public API ──────────────────────────────────────────────────────────

        return { init, loadPage, fetchMediaBatch, fetchAuthorBatch, fetchTagBatch, renderPosts };
    })();
    $(function () {
        WPPosts.init({ baseUrl: 'https://blog.ratinan.com' });
    });
</script>
</body>
</html>