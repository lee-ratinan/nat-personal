<!-- PSM AIE -->
<?php
$cert_list = [
    [
        'psm-aie.webp', 'PSM - AI Essentials', 'Scrum.org',
        'https://www.credly.com/badges/d2b2a635-20b1-461f-9ddb-fc60f9bc1127'
    ],
    ['psm-i.webp', 'PSM I', 'Scrum.org', 'https://www.credly.com/badges/18359323-27a9-417f-a721-dc02a450bf11'],
    ['psm-ii.webp', 'PSM II', 'Scrum.org', 'https://www.credly.com/badges/ce16e50d-4345-4a90-ad02-a447f259ebec'],
    ['pspo-i.webp', 'PSPO I', 'Scrum.org', 'https://www.credly.com/badges/d818bb6f-393f-4b04-9bb2-9c98547dd066'],
    ['pspo-ii.webp', 'PSPO II', 'Scrum.org', 'https://www.credly.com/badges/45b01461-905e-4fe1-8357-00ca88e4b810'],
    [
        'google_pm.webp', 'Google Project Management', 'Google',
        'https://www.credly.com/badges/ae58262f-01ba-4886-b93d-4359646a8152'
    ],
    [
        'google_aie.webp', 'Google AI Essentials', 'Google',
        'https://www.credly.com/badges/143271c6-2815-40cb-a381-4f4e479f47b7'
    ],
    [
        'google_uxd.webp', 'Google UX Design', 'Google',
        'https://www.credly.com/badges/f668d4fd-1d12-4ac6-8aef-9e82e5893857'
    ],
    [
        'google_da.webp', 'Google Data Analytics', 'Google',
        'https://www.credly.com/badges/1ceac238-28ac-40d4-a92e-d4a52c4bd1e7'
    ],
];
?>
<div class="credly-badge-container">
    <?php foreach ($cert_list as $list) : ?>
        <div class="rounded-1 p-3 text-center cert-badge">
            <a href="<?= $list[3] ?>" target="_blank">
                <img src="<?= base_url('assets/img/certifications/' . $list[0]) ?>" class="img-fluid" alt="<?= $list[1] ?>"/><br/>
                <b><?= $list[1] ?></b><br/>
                <small><?= $list[2] ?></small>
            </a>
        </div>
    <?php endforeach; ?>
</div>
<style>
    .credly-badge-container {display: flex;flex-wrap: wrap;justify-content: center;align-items: center;gap: 16px;margin: 0 auto;width: 100%;}
    .credly-badge-container div {max-width: 150px;}
    .credly-badge-container a {text-decoration: none; color: #222;}
    [data-bs-theme="dark"] .credly-badge-container a {color: #ccc;}
    @media (max-width: 480px) { .credly-badge-container {max-width: 316px;gap: 12px;} }
    @media (min-width: 481px) and (max-width: 768px) { .credly-badge-container {max-width: 482px;} }
    @media (min-width: 769px) and (max-width: 1024px) { .credly-badge-container {max-width: 648px;} }
    @media (min-width: 1025px) { .credly-badge-container {max-width: 814px;} }
</style>