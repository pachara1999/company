<?php $this->extend('template/home_layout') ?>

<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<div>
    <div class="setimg container-fluid p-0">

        <img src="<?php echo base_url('public/asset/img/content/' . $content_blog1['image_path']); ?>" alt="" width="100%" height="650px">
        <div class="setImgSection1"><?= $content_blog1['title'] ?></div>
        <h4 class="setImgSectio3">
            <?= $content_blog1['description'] ?>
        </h4>
    </div>
    <div class="container">
        <div class="row px-5 py-5">
            <div class="col-4 text-center display-6  col-sm-12">
                <?= $content_blog2['title'] ?>
            </div>
            <div class="col col-sm-12 py-2">
                <div class="row py-2">
                    <?= $content_blog2['description'] ?>
                </div>
            </div>
            <div class="text-center ">
                <a href="<?= base_url('/about') ?>" type="button" class="btn border border-success border-2 text-success my-2">
                    FIND OUT MORE ABOUT US
                </a>
            </div>
        </div>
    </div>

</div>
<div class="setimg container-fluid py-4 p-0">
    <img src="<?php echo base_url('public/asset/img/content/' . $content_blog3['image_path']); ?>" alt="" width="100%" height="228px">
    <div class="setImgSectio2"><?= $content_blog3['title'] ?></div>
</div>
<div class="container text-center">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 py-2">
            <img src="<?php echo base_url('public/asset/img/content/' . $content_blog4_1['image_path']); ?>" alt="" class="img-fluid">
            <h4 class="pt-5 pb-1">
                <?= $content_blog4_1['title'] ?>
            </h4>
            <p class="text-start">
                <?= $content_blog4_1['description'] ?>
            </p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 py-2">
            <img src="<?php echo base_url('public/asset/img/content/' . $content_blog4_2['image_path']); ?>" alt="" class="img-fluid">
            <h4 class="pt-5 pb-1">
                <?= $content_blog4_2['title'] ?>
            </h4>
            <p class="text-start">
                <?= $content_blog4_2['description'] ?>
            </p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 py-2">
            <img src="<?php echo base_url('public/asset/img/content/' . $content_blog4_3['image_path']); ?>" alt="" class="img-fluid">
            <h4 class="pt-5 pb-1">
                <?= $content_blog4_3['title'] ?>
            </h4>
            <p class="text-start">
                <?= $content_blog4_3['description'] ?>
            </p>
        </div>
    </div>
</div>
<div class="setimg container-fluid py-4 p-0">
    <img src="<?php echo base_url('public/asset/img/content/' . $content_blog5['image_path']); ?>" alt="" width="100%" height="228px">
    <div class="setImgSectio2"><?= $content_blog5['title'] ?></div>
</div>

<!-- blog5 -->
<div class="container py-4">
    <div class="row">
        <?php foreach ($news as $new) { ?>
            <div class="col-3 col-sm-12 col-md-6 col-lg-3">
                <div class="text-center">
                    <img src="<?php echo base_url('public/asset/img/news/' . $new['image_path']); ?>" alt="" width="220px" height="123px">
                </div>
                <div class="px-4 py-2 text-sm-center text-md-center text-lg-start px-lg-5 px-md-0 px-sm-0">
                    <p class="m-0" style="font-size:14px;"><?= $new['title'] ?></p>
                    <a href="<?= base_url('newsdetel/' . $new['id']) ?>" class="text-decoration-none text-black">Read More</a>
                    <p style="font-size: small; color: gray;" class="pt-1"><?= $new['create_at'] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="text-center">
        <a href="<?= base_url('/new') ?>" type="button" class="btn border border-success border-2 text-success">
            MORE PORTFOLIO NEWS
        </a>
    </div>
</div>

<!-- blog6 -->
<div class="setimg container-fluid py-4 p-0">
    <img src="<?php echo base_url('public/asset/img/content/' . $content_blog6['image_path']); ?>" alt="" width="100%" height="228px">
    <div class="setImgSectio2"><?= $content_blog6['title'] ?></div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-4 col-sm-12 col-lg-4">
            <h4 class="text-center">
                <?= $content_blog7_1['title'] ?>
            </h4>
            <p class="py-3">
                <?= $content_blog7_1['description'] ?>
            </p>
            <div class="text-center ">
                <a href="<?= base_url('/portfolio') ?>" type="button" class="btn border border-success border-2 text-success my-2">
                    VIEW FULL PORTFOLIO
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-lg-8 col-md-12">
            <h4 class="text-center">
                <?= $content_blog7_2['title'] ?>
            </h4>
            <div class="row ">
                <?php foreach ($portfolios as $portfolio) { ?>
                    <div class="setPositionIMG col-2 col-sm-6 col-md-4 col-lg-2 d-flex justify-content-center text-center">
                        <img src="<?php echo base_url('public/asset/img/portfolio/' . $portfolio['image_path']) ?>" alt="<?php echo $portfolio['name'] ?>" alt="setImg" class="">
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="container border-top-3 border border-muted" style="width: 800px;"></div>
<div class="container ">
    <div class="text-center py-4">
        <h3 class="py-2">
            <?= $content_blog8['title'] ?>
        </h3>
    </div>
    <div class="row m-0">
        <div class="col-4 text-center col-sm-12 col-md-12 col-lg-4">
            <img src="<?php echo base_url('public/asset/img/content/' . $content_blog8['image_path']); ?>" alt="" width="250" height="250">
        </div>
        <div class="col-7 col-sm-12 col-md-12 col-lg-7">
            <div class="row">
                <p><?= $content_blog8['description'] ?></p>
            </div>
        </div>
    </div>
</div>
<div class="container border-top-3 border border-muted my-3" style="width: 800px;"></div>
<div class="text-center my-4">
    <a href="<?= base_url('/contact') ?>" type="button" class="btn border border-success border-2 text-success">
        CONTACT US
    </a>
</div>
</div>

<?php $this->endSection() ?>

<?php $this->section('scripts') ?>
<script type="text/javascript">

</script>
<?php $this->endSection() ?>