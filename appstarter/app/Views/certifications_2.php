<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= lang('Certifications.title') ?> - lee.ratinan.com</title>
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
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap"
              rel="stylesheet">
    <?php elseif ('th' == $locale) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Thai:wght@100..900&display=swap"
              rel="stylesheet">
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
    <link rel="alternate" hreflang="en" href="<?= base_url('en/certifications') ?>"/>
    <link rel="alternate" hreflang="th" href="<?= base_url('th/certifications') ?>"/>
    <link rel="alternate" hreflang="ja" href="<?= base_url('ja/certifications') ?>"/>
    <link rel="alternate" hreflang="zh-TW" href="<?= base_url('zh-TW/certifications') ?>"/>
    <link rel="alternate" hreflang="en-Shaw" href="<?= base_url('en-Shaw/certifications') ?>"/>
    <link rel="alternate" hreflang="x-default" href="<?= base_url('business-card') ?>"/>
    <link rel="canonical" href="<?= current_url() ?>">
    <link href="https://cdn.datatables.net/v/dt/dt-3.0.0/datatables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/v/dt/dt-3.0.0/datatables.min.js"></script>
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

        h3 {
            font-size: 1.1em;
        }

        h2 {
            font-size: 1.2em;
        }

        h1 {
            font-size: 1.5em;
        }

        .btn-xs {
            padding: 0.15rem 0.5rem;
            font-size: 0.75rem;
            border-radius: 0.175rem;
        }

        .wishlisted td {
            color: #888;
            font-size: 0.85em;
            font-style: italic;
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
        <div class="col-12 mb-5">
            <p class="small text-end">
                <i class="fa-solid fa-language me-3"></i>
                <a class="btn btn-<?= 'en' == $locale ? '' : 'outline-' ?>success btn-xs" href="<?= base_url('en/certifications') ?>">English</a>
                <a class="btn btn-<?= 'th' == $locale ? '' : 'outline-' ?>success btn-xs" href="<?= base_url('th/certifications') ?>">ภาษาไทย</a>
                <a class="btn btn-<?= 'zh-TW' == $locale ? '' : 'outline-' ?>success btn-xs" href="<?= base_url('zh-TW/certifications') ?>">國語</a>
                <a class="btn btn-<?= 'ja' == $locale ? '' : 'outline-' ?>success btn-xs" href="<?= base_url('ja/certifications') ?>">日本語</a>
                <a class="btn btn-<?= 'en-Shaw' == $locale ? '' : 'outline-' ?>success btn-xs" href="<?= base_url('en-Shaw/certifications') ?>">𐑖𐑱𐑝𐑾𐑯</a>
            </p>
            <p>/ <a href="<?= base_url($locale) ?>"><i class="fa-solid fa-home"></i></a> / <?= lang('Certifications.title') ?> /</p>
            <h1><?= lang('Certifications.title') ?></h1>
            <button type="button" class="btn btn-outline-primary btn-sm mb-3" id="toggle-wishlist"><?= lang('Certifications.hide-toggle') ?> (<span id="state-label"><?= lang('Certifications.states.all') ?></span>)</button>
            <?php
            $languages = [
                [
                    'cefr' => 'C2', // English
                    'flag' => '🇺🇸🇬🇧🇦🇺'
                ],
                [
                    'cefr' => 'Native', // Thai
                    'flag' => '🇹🇭'
                ],
                [
                    'cefr' => 'A2', // Taiwanese Mandarin
                    'flag' => '🇹🇼'
                ],
                [
                    'cefr' => 'A1', // Japanese
                    'flag' => '🇯🇵'
                ]
            ];
            $cefr = [
                'A1' => lang('Certifications.cefr.levels.A1'),
                'A2' => lang('Certifications.cefr.levels.A2'),
                'B1' => lang('Certifications.cefr.levels.B1'),
                'B2' => lang('Certifications.cefr.levels.B2'),
                'C1' => lang('Certifications.cefr.levels.C1'),
                'C2' => lang('Certifications.cefr.levels.C2')
            ];
            ?>
            <div class="table-responsive">
                <table id="certifications" class="table table-striped table-hover table-sm">
                    <thead>
                        <tr>
                            <th style="min-width:125px" class="text-center"><?= lang('Certifications.table.date') ?></th>
                            <th><?= lang('Certifications.table.type') ?></th>
                            <th style="max-width:200px"><?= lang('Certifications.table.title') ?></th>
                            <th><?= lang('Certifications.table.certifying-body') ?></th>
                            <th><?= lang('Certifications.document-type.certificate') ?></th>
                            <th><?= lang('Certifications.table.result') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($db_rows as $row) : ?>
                        <tr <?= (empty($row['certification_link']) ? 'class="wishlisted"' : '') ?>>
                            <td class="text-center small" data-sort="<?= $row['completed_date'] ?? '9999-12-31' ?>"><?= !empty($row['completed_date']) ? format_date([$row['completed_date']], $locale) : '<i class="fa-solid fa-bullseye"></i>' ?></td>
                            <td class="text-center"><?= lang('Certifications.data.' . $row['certification_type']) ?></td>
                            <td><?= $row['certification_title'] ?></td>
                            <td style="max-width:180px">
                                <?= $row['institution_name'] ?>
                                <?= empty($row['institution_native_name']) ? '' : ' <small>(' . $row['institution_native_name'] . ')</small>' ?>
                                <?= empty($row['country_code']) ? '' : ' - ' . lang('Certifications.country.' . strtolower($row['country_code'])) ?>
                            </td>
                            <td data-filter="<?= (empty($row['certification_link']) ? 'future' : 'completed') ?>">
                                <?= !empty($row['certification_link']) ? '<a class="btn btn-outline-success btn-xs" href="' . $row['certification_link'] . '" target="_blank"><i class="fa-solid fa-file-pdf"></i> ' . lang('Certifications.document-type.certificate') . '</a>' : '' ?>
                                <?= !empty($row['academic_result_link']) ? '<a class="btn btn-outline-success btn-xs" href="' . $row['academic_result_link'] . '" target="_blank"><i class="fa-solid fa-file-pdf"></i> ' . lang('Certifications.document-type.transcript') . '</a>' : '' ?>
                                <?= !empty($row['external_link']) ? '<a class="btn btn-outline-success btn-xs" href="' . $row['external_link'] . '" target="_blank"><i class="fa-solid fa-external-link"></i></a>' : '' ?>
                            </td>
                            <td class="text-center small">
                                <?= $row['result_value'] ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <h2 class="mt-5"><?= lang('Certifications.cefr.title') ?></h2>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-sm mb-5">
                    <?php foreach (lang('BusinessCard.language.table') as $i => $row) : ?>
                        <tr>
                            <td><?= $languages[$i]['flag'] . ' ' . $row[0] ?></td>
                            <td>
                                <?php if ($languages[$i]['cefr'] == 'Native') : ?>
                                    <span class="badge bg-success">A1</span>
                                    <span class="badge bg-success">A2</span>
                                    <span class="badge bg-success">B1</span>
                                    <span class="badge bg-success">B2</span>
                                    <span class="badge bg-success">C1</span>
                                    <span class="badge bg-success">C2</span>
                                    <span class="badge bg-success"> &gt;&gt;</span>
                                    <?= lang('Certifications.cefr.mother-tongue') ?>
                                <?php else : ?>
                                    <?php $bg_class = 'bg-success';
                                    $lvl_txt = ''; ?>
                                    <?php foreach ($cefr as $j => $lvl) : ?>
                                        <span class="badge <?= $bg_class ?>"><?= $j ?></span>
                                        <?php if ($languages[$i]['cefr'] == $j) {
                                            $bg_class = 'bg-secondary';
                                            $lvl_txt = $lvl;
                                        } ?>
                                    <?php endforeach; ?>
                                    <?= $languages[$i]['cefr'] . ' ' . $lvl_txt ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <p class="mb-5"><i class="fa-solid fa-bullseye"></i> = <?= lang('Certifications.wishlisted') ?></p>
        </div>
        <div class="col-12 mb-5">
            <?php include "_professional_certifications.php"; ?>
            <hr/>
            <p class="small text-end">Updated: 14 Sep 2026</p>
        </div>
    </div>
</div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let table = new DataTable('#certifications', {paging: false});
        const states = ['all', 'completed', 'future'];
        const stateLabels = ['<?= lang('Certifications.states.all') ?>', '<?= lang('Certifications.states.completed') ?>', '<?= lang('Certifications.states.future') ?>'];
        let currentStateIndex = 0; // Starts at 'all'
        DataTable.ext.search.push(function (settings, data, dataIndex) {
            const currentState = states[currentStateIndex];
            // If state is 'all', show every row
            if (currentState === 'all') {
                return true;
            }
            // Target column index 1 (Status column)
            const columnIndex = 4;
            // Get the HTML node of the status cell for this row
            const cellNode = table.cell(dataIndex, columnIndex).node();
            // Read the data-filter attribute directly from the cell node
            const statusValue = cellNode.getAttribute('data-filter') || '';
            console.log(currentState + ' = ' + statusValue);
            // Keep row if attribute matches the current state
            return statusValue.toLowerCase() === currentState;
        });
        document.getElementById('toggle-wishlist').addEventListener('click', function() {
            currentStateIndex = (currentStateIndex + 1) % states.length;
            // console.log(states[currentStateIndex]);
            document.getElementById('state-label').innerText = stateLabels[currentStateIndex];
            table.draw();
        });
    });
</script>
</html>