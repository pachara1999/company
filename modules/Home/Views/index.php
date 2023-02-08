<?php $this->extend('template/home_layout') ?>

<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<script src="<?php echo base_url('public/asset/js/parallax.min.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>

<div class="parallax-container">
    <img class="img-fluid thumbnail" id="parallax" src="<?php echo base_url('public/asset/img/content/' . $content_blog1['image_path']); ?>" alt="">
    <div class="teaser">
        <div class="content">
            <h1 class="card-title2 SetFontProxima" style=" font-weight: 700; color:#7cbf4f"><?= $content_blog1['title'] ?></h1>
            <p class="card-text SetFontProxima" style="font-size: 20px; font-weight: 300;"><?= $content_blog1['description'] ?></p>
        </div>
    </div>
</div>
<div>
    <div class="container">
        <div class="row px-5 py-5">
            <div class="SetFontLoTo  col-sm-12 col-md-4 text-sm-start text-md-center text-lg-center py-3" style="font-weight: 400;
            font-size: 28px;">
                <?= $content_blog2['title'] ?>
            </div>
            <div class="col-sm-12 col-md-8 py-2 " style="font-size: 20px; font-weight: 200; color: #222;">
                <div class="row py-3 SetFontProxima">
                    <?= $content_blog2['description'] ?>
                </div>
            </div>
            <div class="text-center SetFontLoTo">
                <a href="<?= base_url('/about') ?>" type="button" style="font-size: 20px; font-weight: 400;" class=" SetFontLoTo btn border border-success border-2 text-success my-2 px-5">
                    FIND OUT MORE ABOUT US
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-0 overflow-hidden">
    <div class="card card-inverse border-0 text-center" style="width: 100%">
        <img class="img-fluid card-img-top2 thumbnail" id="parallax" src="<?php echo base_url('public/asset/img/content/' . $content_blog3['image_path']); ?>" alt="">
        <div class="card-img-overlay h-100 d-flex flex-column justify-content-center" style="color: black;">
            <h1 class="card-title2 SetFontProxima" style=" color: #7cbf4f;"><?= $content_blog3['title'] ?></h1>
        </div>
        </section>
    </div>



    <div class="container text-center py-5">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 py-2">
                <img src="<?php echo base_url('public/asset/img/content/' . $content_blog4_1['image_path']); ?>" alt="" class="img-fluid">
                <h4 class="pt-5 pb-1 SetFontProxima" style="font-size: 20px; font-weight: 300; font-style: normal;">
                    <?= $content_blog4_1['title'] ?>
                </h4>
                <div class="text-sm-start text-md-start text-lg-start SetFontProxima " style="font-size: 16px; font-weight: 400; font-style: normal; color: rgba(23,23,23,.8);">
                    <p>
                        <?= $content_blog4_1['description'] ?>
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 py-2">
                <img src="<?php echo base_url('public/asset/img/content/' . $content_blog4_2['image_path']); ?>" alt="" class="img-fluid">
                <h3 class="pt-5 pb-1 SetFontProxima" style="font-size: 20px; font-weight: 300; font-style: normal;">
                    <?= $content_blog4_2['title'] ?>
                </h3>
                <div class="text-sm-start text-md-start text-lg-start SetFontProxima" style="font-size: 16px; font-weight: 400; font-style: normal; color: rgba(23,23,23,.8);">
                    <p>
                        <?= $content_blog4_2['description'] ?>
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 py-2">
                <img src="<?php echo base_url('public/asset/img/content/' . $content_blog4_3['image_path']); ?>" alt="" class="img-fluid">
                <h3 class="pt-5 pb-1 SetFontProxima" style="font-size: 20px; font-weight: 300; font-style: normal; ">
                    <?= $content_blog4_3['title'] ?>
                </h3>
                <div class="text-sm-start text-md-start text-lg-start SetFontProxima" style="font-size: 16px; font-weight: 400; font-style: normal; color: rgba(23,23,23,.8);">
                    <p>
                        <?= $content_blog4_3['description'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 overflow-hidden">
        <div class="card card-inverse border-0 text-center" style="width: 100%">
            <img class="card-img-top2 thumbnail" id="parallax" src="<?php echo base_url('public/asset/img/content/' . $content_blog5['image_path']); ?>" alt="">
            <div class="card-img-overlay h-100 d-flex flex-column justify-content-center" style="color: black;">
                <h1 class="card-title SetFontProxima" style="font-weight: 700; color: #7cbf4f;"><?= $content_blog5['title'] ?></h1>
            </div>
        </div>
        </section>

        <!-- blog5 -->
        <div class="container py-5">
            <div class="row">
                <?php foreach ($news as $new) { ?>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="text-center">
                            <img src="<?php echo base_url('public/asset/img/news/' . $new['image_path']); ?>" alt="" width="220px" height="123px">
                        </div>
                        <div class="px-4 py-2 px-lg-5 px-md-0 px-sm-0">
                            <div class="text-md-center text-lg-start setPositonPhone">
                                <p style="font-size:14px; font-weight: 400;font-style: normal; color: rgba(23,23,23,.8);" class="m-0 SetFontProxima"><?= $new['title'] ?></p>
                                <a href="<?= base_url('newsdetel/' . $new['id']) ?>" class="text-decoration-none text-black" style="font-size:14px; font-weight: 400;font-style: normal; color: rgba(23,23,23,.8);">Read More</a>
                                <p style="font-size: 13px; color: gray;" class="pt-1"><?= $new['create_at'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="text-center SetFontLoTo">
                <a href="<?= base_url('/new') ?>" type="button" style="font-size: 20px; font-weight: 400;" class=" SetFontLoTo btn border border-success border-2 text-success my-2 px-5">
                    MORE PORTFOLIO NEWS
                </a>
            </div>
        </div>

        <!-- blog6 -->
        <div class="container-fluid p-0 overflow-hidden">
            <div class="card card-inverse border-0 text-center" style="width: 100%">
                <img class="card-img-top2 thumbnail" id="parallax" src="<?php echo base_url('public/asset/img/content/' . $content_blog6['image_path']); ?>" alt="">
                <div class="card-img-overlay h-100 d-flex flex-column justify-content-center" style="color: black;">
                    <h1 class="card-title SetFontProxima" style=" font-weight: 700; color: #7cbf4f;"><?= $content_blog6['title'] ?></h1>
                </div>
            </div>
            </section>





            <div class="container py-5">
                <div class="row">
                    <div class="col-sm-12 col-lg-4">
                        <h2 class="text-center SetFontLoTo" style="font-weight: 400;font-style: normal;font-size: 28px;">
                            <?= $content_blog7_1['title'] ?>
                        </h2>
                        <p class="py-3 SetFontProxima" style="font-weight: 400;font-style: normal;font-size: 16px; color: rgba(23,23,23,.8);">
                            <?= $content_blog7_1['description'] ?>
                        </p>
                        <div class="text-center SetFontLoTo">
                            <a href="<?= base_url('/portfolio') ?>" type="button" style="font-size: 20px; font-weight: 400;" class=" SetFontLoTo btn border border-success border-2 text-success my-2 px-5">
                                VIEW FULL PORTFOLIO
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-8 col-md-12 SetFontLoTo" style="font-weight: 400;font-style: normal;font-size: 28px;">
                        <h2 class="text-center py-2">
                            <?= $content_blog7_2['title'] ?>
                        </h2>
                        <div class="row">
                            <?php foreach ($portfolios as $portfolio) { ?>
                                <div class="setPositionIMG  col-sm-6 col-md-4 col-lg-2 d-flex justify-content-center text-center">
                                    <img src="<?php echo base_url('public/asset/img/portfolio/' . $portfolio['image_path']) ?>" alt="<?php echo $portfolio['name'] ?>" alt="setImg" class="">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="border-top-3 border border-muted" style="width: 100%;">
                </div>
            </div>
            <div class="container ">
                <div class="text-center py-4 ">
                    <h3 class="py-2 SetFontProxima" style="color: rgba(23,23,23,.8);">
                        <?= $content_blog8['title'] ?>
                    </h3>
                </div>
                <div class="row m-0">
                    <div class="pb-4 text-center col-sm-12 col-md-12 col-lg-4 SetFontProxima" style="color: rgba(23,23,23,.8); font-weight: 400;font-style: normal;font-size: 16px;">
                        <img src="<?php echo base_url('public/asset/img/content/' . $content_blog8['image_path']); ?>" alt="" width="250" height="250">
                    </div>
                    <div class=" col-sm-12 col-md-12 col-lg-7 SetFontProxima" style="color: rgba(23,23,23,.8); font-weight: 400;font-style: normal;font-size: 16px;">
                        <div class="row">
                            <p><?= $content_blog8['description'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <div class="border-top-3 border border-muted" style="width: 100%;">
                </div>
            </div>

            <div class="text-center SetFontLoTo my-4">
                <a href="<?= base_url('/contact') ?>" type="button" style="font-size: 20px; font-weight: 400;" class=" SetFontLoTo btn border border-success border-2 text-success my-2 px-5">
                    CONTACT US
                </a>
            </div>
        </div>
        <!-- <script>
    var parallax = new Parallax('#parallax');
    parallax.init();
</script> -->
        <script>
            var image = document.getElementsByClassName('thumbnail');
            new simpleParallax(image, {
                scale: 1,
                orientation: 'down',
                delay: 0.8
            });
        </script>
        <?php $this->endSection() ?>

        <?php $this->section('scripts') ?>

        <?php $this->endSection() ?>