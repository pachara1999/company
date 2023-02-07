<?php $this->extend('template/home_layout') ?>

<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">

<section id="getstarted2" class="py-5" style="background-image: url(<?php echo base_url('public/asset/img/content/' . $content_blog1['image_path']) ?>);">
    <div class="dark-overlay">
        <div class="container">
            <div class="card-img-overlay h-100 d-flex flex-column pb-5 justify-content-end text-center " style="color: white;">
                <h1 class="card-title2 SetFontProxima" style=" font-weight: 700; color:#7cbf4f"><?= $content_blog1['title'] ?></h1>
            </div>
        </div>
    </div>
</section>


<div class="container">
    <div class="text-sectionTwo px-3 ">
        <p class="SetFontProxima" style="font-weight: 400;font-style: normal;font-size: 16px; color:#171717CC;">
            <?= $content_blog1['description'] ?>
        </p>
        <div class="text-center pb-5 pt-4">
            <button type="button" class="btn border border-success border-2 text-success" style="padding-left: 20px; padding-right: 20px;">
                LEARN MORE ABOUT OUR TEAM
            </button>
        </div>
    </div>
</div>

<section id="getstarted1" class="py-5" style="background-image: url(<?php echo base_url('public/asset/img/content/' . $content_blog2['image_path']) ?>);">
    <div class="dark-overlay">
        <div class="container">
            <div class="card-img-overlay h-100 d-flex flex-column  justify-content-center text-center " style="color: white;">
                <h1 class="card-title2 SetFontProxima" style=" font-weight: 700; color:#7cbf4f"><?= $content_blog2['title'] ?></h1>
            </div>
        </div>
    </div>
</section>

<div class="container pt-4">
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