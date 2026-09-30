<?php
$this->extend('game/_layout.php');
$this->section('content');
?>
    <div class="row">
        <div class="col-8 col-md-4">
            <h1>日本語 (Japanese)</h1>
            <p><a class="btn btn-outline-danger w-100 py-3" href="<?= base_url('game/japanese/review') ?>">Review the characters</a></p>
            <p>Pick the game:</p>
        </div>
    </div>
<?php
$modes = [
    'romaji-pick-kana' => 'A &gt; {X}',
    'romaji-type-kana' => 'A <small>type</small> {X}',
    'kana-pick-romaji' => '{X} &gt; A',
    'kana-type-romaji' => '{X} <small>type</small> A',
];
?>
<?php foreach ($modes as $slug => $name) : ?>
    <div class="row mb-3">
        <div class="col-4">
            <a class="btn btn-outline-danger w-100 py-3" href="<?= base_url('game/japanese/entry/' . $slug . '/hiragana') ?>">
                <h3><?= str_replace('{X}', 'あ', $name) ?></h3>
            </a>
        </div>
        <div class="col-4">
            <a class="btn btn-outline-danger w-100 py-3" href="<?= base_url('game/japanese/entry/' . $slug . '/katakana') ?>">
                <h3><?= str_replace('{X}', 'ア', $name) ?></h3>
            </a>
        </div>
        <?php if (in_array($slug, ['kana-pick-romaji', 'kana-type-romaji'])) : ?>
            <div class="col-4">
                <a class="btn btn-outline-danger w-100 py-3" href="<?= base_url('game/japanese/entry/' . $slug . '/all') ?>">
                    <h3><?= str_replace('{X}', 'あ、ア', $name) ?></h3>
                </a>
            </div>
        <?php endif; ?>
    </div>
<?php endforeach; ?>
    <div class="row mb-3">
        <div class="col-4">
            <a class="btn btn-outline-danger w-100 py-3" href="<?= base_url('game/japanese/entry/kanji/all') ?>">
                <h3>漢字</h3>
            </a>
        </div>
    </div>
<?php $this->endSection(); ?>