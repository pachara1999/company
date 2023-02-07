<?php $this->extend('template/home_layout') ?>
<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">

<section id="getstarted4" class="py-5" style="background-image: url(<?php echo base_url('public/asset/img/content/' . $content_blog1['image_path']) ?>);">
    <div class="dark-overlay">
        <div class="container">
            <div class="card-img-overlay h-100 d-flex flex-column pb-5 justify-content-center text-center " style="color: white;">
                <h1 class="card-title2 SetFontProxima" style=" font-weight: 700; color:#7cbf4f"><?= $content_blog1['title'] ?></h1>
            </div>
        </div>
    </div>
</section>



<div class="container">
    <div class="text-center py-5 SetFontLoTo">
        <h1 style="font-weight: 400;font-style: normal;font-size: 28px;"><?= $content_blog2['title'] ?></h1>
    </div>
    <div class="row">
        <?php foreach ($portfolios as $portfolio) { ?>
            <div class="setPositionIMG  text-center py-1 col-sm-12 col-lg-3 col-md-6">
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