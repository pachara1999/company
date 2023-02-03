<?php $this->extend('template/home_layout') ?>
<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">

<div class="setimg container-fluid p-0">
    <img src="<?php echo base_url('public/asset/img/content/' . $content_blog1['image_path']) ?>" alt="" width="100%" height="750px">
    <div class="setImgSectio2"><?= $content_blog1['title'] ?></div>
</div>
<div class="container">
    <div class="text-center py-5">
        <h1><?= $content_blog2['title'] ?></h1>
    </div>
    <div class="row">
        <?php foreach ($portfolios as $portfolio) { ?>
            <div class="setPositionIMG col-3 text-center py-1 col-lg-3 col-sm-12 col-md-6">
                <a href="<?= $portfolio['link'] ?>" target="_blank">
                    <img src="<?php echo base_url('public/asset/img/portfolio/' . $portfolio['image_path']) ?>" alt="<?php echo $portfolio['name'] ?>">
                </a>
            </div>
        <?php } ?>
    </div>
    <!-- <div class="container border-top-3 border border-muted my-3" style="width: 800px;"></div> -->
</div>
<?php $this->endSection() ?>

<?php $this->section('scripts') ?>

<?php $this->endSection() ?>