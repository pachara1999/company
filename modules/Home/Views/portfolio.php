<?php $this->extend('template/home_layout') ?>
<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">
<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>

<div class="container-fluid p-0 overflow-hidden">
    <div class="card card-inverse border-0 text-center" style="height: auto; ">
        <img class="card-img-top3 thumbnail" src="<?php echo base_url('public/asset/img/content/' . $content_blog1['image_path']) ?>" alt="">
        <div class="card-img-overlay d-flex flex-column justify-content-center" style="color: white; padding-bottom: 50px;">
            <h1 class="card-title1 m-0 SetFontProxima" style="color:#7cbf4f; font-weight: 600; font-style: normal;"><?= $content_blog1['title'] ?></h1>
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
    <script>
        var image = document.getElementsByClassName('thumbnail');
        new simpleParallax(image, {
            scale: 1,
            orientation: 'down',
        });
    </script>
    <?php $this->endSection() ?>

    <?php $this->section('scripts') ?>

    <?php $this->endSection() ?>