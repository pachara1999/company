<?php $this->extend('template/home_layout') ?>

<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">

<div class="container-fluid p-0 overflow-hidden">
    <div class="card card-inverse border-0 text-center" style="height: fit-content; ">
        <img class="card-img-top3" src="<?php echo base_url('public/asset/img/content/' . $content_blog1['image_path']) ?>" alt="">
        <div class="card-img-overlay d-flex flex-column justify-content-center" style="color: white; padding-bottom: 50px;">
            <h1 class="card-title1 m-0"><?= $content_blog1['title'] ?></h1>
        </div>
    </div>
</div>
<div>
    <div class="py-4">
        <h1 class="text-center">
            <?= $content_blog2['title'] ?>
        </h1>
    </div>
    <div class="py-4">
        <!-- <div class="container border-top-3 border border-muted" style="width: 800px;"></div> -->
        <div class="text-center pt-4">
            <h5>
                <?= $content_blog2['description'] ?>
            </h5>
        </div>
    </div>
</div>


<?php $this->endSection() ?>

<?php $this->section('scripts') ?>

<?php $this->endSection() ?>