<?php $this->extend('template/home_layout') ?>

<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">

<div class="container-fluid p-0 overflow-hidden">
    <div class="card card-inverse border-0 text-center" style="height: fit-content; ">
        <img class="card-img-top1" src="<?php echo base_url('public/asset/img/content/' . $content_blog1['image_path']) ?>" alt="">
        <div class="card-img-overlay d-flex flex-column justify-content-end" style="color: white; padding-bottom: 50px;">
            <h1 class="card-title SetFontProxima" style="font-weight: 700; color:#7cbf4f"><?= $content_blog1['title'] ?></h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="text-sectionTwo px-3 ">
        <p class="SetFontProxima" style="font-weight: 400;font-style: normal;font-size: 16px; color:#171717CC;">
            <?= $content_blog1['description'] ?>
        </p>
        <div class="text-center">
            <button type="button" class="btn border border-success border-2 text-success" style="padding-left: 20px; padding-right: 20px;">
                LEARN MORE ABOUT OUR TEAM
            </button>
        </div>
    </div>
</div>
<div class="container-fluid p-0 overflow-hidden py-4">
    <div class="card card-inverse border-0 text-center" style="height: fit-content; ">
        <img class="card-img-top2" src="<?php echo base_url('public/asset/img/content/' . $content_blog2['image_path']) ?>" alt="">
        <div class="card-img-overlay d-flex flex-column justify-content-center" style="color: white;">
            <h1 class="card-title SetFontProxima" style="font-size: 84px; font-weight: 700; color:#7cbf4f"><?= $content_blog2['title'] ?></h1>
        </div>
    </div>
</div>

<div class="container ">
    <div class="row px-3">
        <div class="py-3 col-sm-12 col-md-6 col-lg-2">
            <h5 class="text-sm-center text-md-center text-lg-start SetFontProxima" style="color:rgb(112,173,71)">
                <?= $content_blog3['title'] ?>
            </h5>
        </div>
        <div class="py-3 col-sm-12 col-md-6 col-lg-10">
            <p class="SetFontProxima" style="color:#171717CC">
                <?= $content_blog3['description'] ?>
            </p>
        </div>
    </div>
</div>

<?php $this->endSection() ?>

<?php $this->section('scripts') ?>

<?php $this->endSection() ?>