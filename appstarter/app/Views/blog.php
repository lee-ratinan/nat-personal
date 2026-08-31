<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= lang('Home.system.pages.blog') ?> - <?= lang('Home.system.website-name') ?></title>
    <meta name="description" content="Ratinan Lee's <?= lang('Home.system.pages.blog') ?>">
    <meta name="keywords" content="<?= lang('Home.system.pages.blog') ?>">
    <meta name="author" content="<?= lang('Home.system.seo.author') ?>">
    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php if ('en' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Story+Script&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Noto+Sans+Thai:wght@100..900&family=Noto+Sans+TC:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    <?php elseif ('th' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&family=Sriracha&family=Noto+Sans+TC:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <?php elseif ('zh-TW' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&family=Stick&family=Noto+Sans+Thai:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <?php elseif ('ja' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&family=Yusei+Magic&family=Noto+Sans+TC:wght@100..900&family=Noto+Sans+Thai:wght@100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <?php else : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Shavian&family=Noto+Sans+TC:wght@100..900&family=Noto+Sans+Thai:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
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
    <link rel="alternate" hreflang="en" href="<?= base_url('en/blog') ?>"/>
    <link rel="alternate" hreflang="th" href="<?= base_url('th/blog') ?>"/>
    <link rel="alternate" hreflang="ja" href="<?= base_url('ja/blog') ?>"/>
    <link rel="alternate" hreflang="zh-TW" href="<?= base_url('zh-TW/blog') ?>"/>
    <link rel="alternate" hreflang="x-default" href="<?= base_url('blog') ?>"/>
    <link rel="canonical" href="<?= current_url() ?>">
    <!-- =======================================================
    * Template Name: Craftivo
    * Template URL: https://bootstrapmade.com/craftivo-bootstrap-portfolio-template/
    * Updated: Oct 04 2025 with Bootstrap v5.3.8
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <style>
        .wp-post__title, .wp-post__meta, .wp-post__excerpt {font-family: Ubuntu, 'Noto Sans Thai', 'Noto Sans JP', 'Noto Sans TC', sans-serif !important;}
    </style>
</head>
<body class="calendar-page <?= $locale ?>">
<?php include "_header.php"; ?>
<main class="main mt-5 pt-5">
    <section id="about" class="about section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-12 col-md-10 col-xl-9">
                    <h1 class="mb-5"><?= lang('Home.system.pages.blog') ?></h1>
                    <?php if ('posts' != $mode) { echo '<h2>' . ucfirst($mode) . ': ' . $ms . '</h2><p><a href="?">View All</a></p>'; } ?>
                    <div class="mb-3">
                        <?php
                        $tag_links = [
                            'blog?m=tags&ms=song%20translation&id=75' => 'Song Translation',
                            'blog?m=tags&ms=Gallery&id=76'            => 'Gallery',
                            'blog?m=tags&ms=portfolio&id=62' => 'Portfolio'
                        ];
                        foreach ($tag_links as $link => $name) {
                            echo '<a class="btn btn-outline-success btn-sm me-1" href="' . $link . '"><i class="bi bi-tag"></i> ' . $name . '</a>';
                        }
                        ?>
                    </div>
                    <div id="wordpress-posts">
                        <div class="text-center m-5"><i class="bi bi-gear-fill spinner-border"></i></div>
                    </div>
                    <nav class="wp-pagination text-center">
                        <button id="wp-prev" class="btn btn-success">← Previous</button>
                        <span id="wp-page-info"></span>
                        <button id="wp-next" class="btn btn-success">Next →</button>
                    </nav>
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
            perPage: 10,
            currentPage: 1,
            totalPages: 1,
        };

        // ─── Public: Initialise ──────────────────────────────────────────────────

        function init(options = {}) {
            CONFIG.baseUrl = (options.baseUrl || '').replace(/\/$/, '');
            CONFIG.perPage = options.perPage || 10;
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
                        _fields: 'id,date_gmt,excerpt,title,featured_media,slug,tags,author,sticky',
                        per_page: CONFIG.perPage,
                        <?= 'posts' != $mode ? $mode .': ' . $id . ',' : '' ?>
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
                const sticky  = (post.sticky ? '<span class="float-end"><i class="bi bi-pin-angle-fill"></i> <?= lang('PersonalLife.pinned') ?></span>' : '')

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
                    .map((t) => `<a class="wp-post__tag btn btn-sm btn-outline-success m-1" href="?m=tags&ms=${_esc(t.name)}&id=${_esc(t.id)}"><i class="bi bi-tag"></i> ${_esc(t.name)}</a>`)
                    .join('');
                const postLink = `<?= base_url($locale . '/blog-post') ?>/${_esc(post.id)}/${_esc(post.slug)}`;

                const $card = $(`
        <article class="wp-post row" data-id="${post.id}" data-slug="${_esc(post.slug)}">
          <div class="col-12 col-md-4 col-lg-3 col-xl-2 mb-3 wp-post__img">${imgHtml}</div>
          <div class="col-12 col-md-8 col-lg-9 col-xl-10 mb-3 wp-post__body">
            ${sticky}
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