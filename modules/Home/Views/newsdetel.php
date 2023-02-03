<?php $this->extend('template/home_layout') ?>

<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<div class="py-5">
    <div class="text-center">
        <h1>
            <?= $data['title'] ?>
        </h1>
        <p class="py-3">
            <?= $data['create_at'] ?>
        </p>
    </div>
    <div class="container">
        <!-- <div class="fst-italic pb-4">
            <p>By <a href="" class="text-dark">Witney McKiernan</a> & <a href="" class="text-dark">Lily Chang,</a>HealthQuest Capital (5-minute read)</p>
        </div> -->
        <p>
            <?= $data['details'] ?>
        </p>
        <div>
            <p>
                <?= $data['references'] ?>
            </p>
        </div>

        <div class="text-center py-5">
            <a href="<?= base_url('/new') ?>" class="btn btn-secondary px-5">Back</a>
        </div>
    </div>
</div>

<?php $this->endSection() ?>

<?php $this->section('scripts') ?>
<script type="text/javascript">

</script>
<?php $this->endSection() ?>