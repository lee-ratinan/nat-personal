<!-- PSM AIE -->
<?php
$cert_list = [
    [
        'psm-aie.webp', 'PSM - AI Essentials', 'Scrum.org', '2026-09-26',
        'https://www.credly.com/badges/d2b2a635-20b1-461f-9ddb-fc60f9bc1127', 'new'
    ],
    [
        'psm-i.webp', 'PSM I', 'Scrum.org', '2024-10-02',
        'https://www.credly.com/badges/18359323-27a9-417f-a721-dc02a450bf11'
    ],
    [
        'psm-ii.webp', 'PSM II', 'Scrum.org', '2024-11-17',
        'https://www.credly.com/badges/ce16e50d-4345-4a90-ad02-a447f259ebec', 'advanced'
    ],
    [
        'pspo-i.webp', 'PSPO I', 'Scrum.org', '2024-10-16',
        'https://www.credly.com/badges/d818bb6f-393f-4b04-9bb2-9c98547dd066'
    ],
    [
        'pspo-ii.webp', 'PSPO II', 'Scrum.org', '2025-02-05',
        'https://www.credly.com/badges/45b01461-905e-4fe1-8357-00ca88e4b810', 'advanced'
    ],
    [
        'csm.webp', 'CSM', 'Scrum Alliance', '2025-02-09',
        'https://www.scrumalliance.org/members/1729850'
    ],
    [
        'google_pm.webp', 'Google Project Management', 'Google', '2024-09-06',
        'https://www.credly.com/badges/ae58262f-01ba-4886-b93d-4359646a8152'
    ],
    [
        'google_aie.webp', 'Google AI Essentials', 'Google', '2024-09-12',
        'https://www.credly.com/badges/143271c6-2815-40cb-a381-4f4e479f47b7'
    ],
    [
        'google_uxd.webp', 'Google UX Design', 'Google', '2024-09-24',
        'https://www.credly.com/badges/f668d4fd-1d12-4ac6-8aef-9e82e5893857'
    ],
    [
        'google_da.webp', 'Google Data Analytics', 'Google', '2024-10-10',
        'https://www.credly.com/badges/1ceac238-28ac-40d4-a92e-d4a52c4bd1e7'
    ],
];
?>
<div class="credly-badge-container">
    <?php foreach ($cert_list as $list) : ?>
        <div class="rounded-1 p-3 text-center cert-badge">
            <?php if (!isset($list[5])) : ?>
                <br/>
            <?php else: ?>
                <small class="badge bg-danger mb-1 float-end"><?= lang('Home.' . $list[5]) ?></small>
            <?php endif; ?>
            <a class="d-block" href="<?= $list[4] ?>" target="_blank">
                <img src="<?= base_url('assets/img/certifications/' . $list[0]) ?>" class="img-fluid" alt="<?= $list[1] ?>" loading="lazy" /><br/>
                <small><?= $list[2] ?><br/><?= format_date([$list[3]], $locale) ?></small>
            </a>
        </div>
    <?php endforeach; ?>
</div>
<style>
    .credly-badge-container {display: flex;flex-wrap: wrap;justify-content: center;align-items: center;gap: 16px;margin: 0 auto;width: 100%;}
    .credly-badge-container div {max-width: 150px;}
    .credly-badge-container a {text-decoration: none; color: #888;}
    @media (max-width: 480px) { .credly-badge-container {max-width: 460px;gap: 12px;} }
    @media (min-width: 481px) and (max-width: 768px) { .credly-badge-container {max-width: 481px;} }
    @media (min-width: 769px) and (max-width: 1024px) { .credly-badge-container {max-width: 769px;} }
    @media (min-width: 1025px) { .credly-badge-container {max-width: 1025px;} }
</style>