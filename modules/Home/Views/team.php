<?php $this->extend('template/home_layout') ?>

<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">
<!-- img SectionOne -->
<div class="container-fluid p-0 overflow-hidden">
    <div class="card card-inverse border-0 text-center" style="height: fit-content; ">
        <img class="card-img-top3 thumbnail" src="<?php echo base_url('public/asset/img/content/' . $content_blog1['image_path']) ?>" alt="">
        <div class="card-img-overlay d-flex flex-column justify-content-center" style="color: white;">
            <h1 class="card-title1 m-0 SetFontProxima" style="color:#7cbf4f; font-weight: 500; font-style: normal;"><?= $content_blog1['title'] ?></h1>
        </div>
    </div>
</section>
<!-- end img SectionOne -->

<!-- Section One -->
<div class="container pb-3">
    <div class="row py-3">
        <div class="px-3 py-3 col-sm-12 col-lg-5 text-sm-center text-md-center text-lg-start SetFontLoTo" style="font-weight: 400;
    font-style: normal;
    font-size: 28px;">
            <h4>
                <?= $content_blog2['title'] ?>
            </h4>
        </div>
        <div class="px-3 py-3 col-sm-12 col-lg-7 SetFontProxima">
            <p style="font-weight: 400;
    font-style: normal;
    font-size: 16px; color: rgba(23,23,23,.8);">
                <?= $content_blog2['description'] ?>
            </p>
        </div>
    </div>
    <!-- end SectionOne -->

    <!-- Card Section2 -->
    <div class="row">
        <?php foreach ($employees as $employee) { ?>
            <div class="text-center px-2 col-sm-6 col-md-3 col-lg-2 ">
                <a href="<?php echo base_url('profireteam/' . $employee['id']); ?>" class="text-decoration-none text-dark">
                    <img src="<?php echo base_url('public/asset/img/employee/' . $employee['image_path']); ?>" alt="" width="170px" height="170px">
                    <h4 class="text-center SetFontProxima" style="font-size: 20px;color: rgb(23, 23, 23);">
                        <?= $employee['name'] ?>
                    </h4>
                    <p class="text-center SetFontProxima" style="font-size: 13px;color: rgb(23, 23, 23);">
                        <?= $employee['position'] ?>
                    </p>
                </a>
            </div>
        <?php } ?>
    </div>
    <!-- endCard Section2 -->
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