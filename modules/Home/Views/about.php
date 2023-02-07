<?php $this->extend('template/home_layout') ?>

<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">
<script src="<?php echo base_url('public/asset/js/parallax.min.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>


<div class="container-fluid p-0 overflow-hidden">
    <div class="card card-inverse border-0 text-center" style="height: fit-content; background-color: black;">
        <img class="card-img-top3 img-fluid thumbnail" id="parallax" src="<?php echo base_url('public/asset/img/content/' . $content_blog1['image_path']) ?>" alt="">
        <div class="card-img-overlay d-flex flex-column justify-content-center" style="color: white;">
            <h1 class="card-title1 m-0 SetFontProxima" style="color:#7cbf4f; font-weight: 500; font-style: normal;"><?= $content_blog1['title'] ?></h1>
        </div>
    </div>
</section>


<div class="container">
    <div class="text-sectionTwo px-3 py-5">
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
<div class="container-fluid p-0 overflow-hidden py-5">
    <div class="card card-inverse border-0 text-center" style="height: fit-content; ">
        <img class="card-img-top2 thumbnail" id="parallax" src="<?php echo base_url('public/asset/img/content/' . $content_blog2['image_path']) ?>" alt="">
        <div class="card-img-overlay d-flex flex-column justify-content-center" style="color: white;">
            <h1 class="card-title SetFontProxima" style="font-size: 84px; font-weight: 700; color:#7cbf4f"><?= $content_blog2['title'] ?></h1>
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
<script>
    var image = document.getElementsByClassName('thumbnail');
    new simpleParallax(image, {
        sscale: 1,
        orientation: 'down',
    });
</script>
<?php $this->endSection() ?>

<?php $this->section('scripts') ?>

<?php $this->endSection() ?>