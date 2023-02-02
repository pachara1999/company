<?php $this->extend('template/home_layout') ?>

<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">

<div class="setimg container-fluid">
    <img src="<?php echo base_url('public/asset/img/content/' . $content_blog1['image_path']) ?>" alt="" width="100%" height="450px">
    <div class="setImgSection1 "><?= $content_blog1['title'] ?></div>
</div>
<div class="container">
    <div class="text-sectionTwo">
        <p>
            <?= $content_blog1['description'] ?>
        </p>
        <div class="text-center">
            <button type="button" class="btn border border-success border-2 text-success" style="padding-left: 20px; padding-right: 20px;">
                LEARN MORE ABOUT OUR TEAM
            </button>
        </div>
    </div>
</div>
<div class="setimg container-fluid py-4">
    <img src="<?php echo base_url('public/asset/img/content/' . $content_blog2['image_path']) ?>" alt="" width="100%" height="228px">
    <div class="setImgSectio2"><?= $content_blog2['title'] ?></div>
</div>
<div class="container px-5">
    <div class="row px-5">
        <div class="col-3 py-3 col-sm-12">
            <h5 class="text-sm-center text-md-center text-lg-start">
                <?= $content_blog3['title'] ?>
            </h5>
        </div>
        <div class="col-9 py-3 col-sm-12">
            <p>
                <?= $content_blog3['description'] ?>
            </p>
        </div>
        <!-- <div class="col-3 py-3 col-sm-12 text-sm-center">
            <h5 class="text-sm-center text-md-center text-lg-start">
                EXCELLENCE
            </h5>
        </div>
        <div class="col-9 py-3 col-sm-12">
            <p>
                We aim to be the best at what we do. We are talented, motivated and results-oriented. We attract top-tier talent as colleagues, partners, investees and advisors.
            </p>
        </div>
        <div class="col-3 py-3 col-sm-12 text-sm-center">
            <h5 class="text-sm-center text-md-center text-lg-start">
                RESPECT
            </h5>
        </div>
        <div class="col-9 py-3 col-sm-12">
            <p>
                We treat everyone with respect and are easy to work with. We honor our commitments.
            </p>
        </div>
        <div class="col-3 py-3 col-sm-12 text-sm-center">
            <h5 class="text-sm-center text-md-center text-lg-start">
                COLLABORATION
            </h5>
        </div>
        <div class="col-9 py-3 col-sm-12">
            <p>
                We are team-oriented and aim to balance stakeholder objectives to create “win-win” outcomes.
            </p>
        </div>
        <div class="col-3 py-3 col-sm-12 text-sm-center">
            <h5 class="text-sm-center text-md-center text-lg-start">
                PARTNERSHIP
            </h5>
        </div>
        <div class="col-9 py-3 col-sm-12">
            <p>
                We strive to be good partners not only by aiming to deliver great outcomes, but also by providing incredible service, insights and access to our ecosystem.
            </p>
        </div> -->
    </div>
</div>

<?php $this->endSection() ?>

<?php $this->section('scripts') ?>

<?php $this->endSection() ?>