<?php $this->extend('template/home_layout') ?>

<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">
<!-- img SectionOne -->
<section id="getstarted3" class="py-5" style="background-image: url(<?php echo base_url('public/asset/img/content/' . $content_blog1['image_path']) ?>);">
    <div class="dark-overlay">
        <div class="container">
            <div class="card-img-overlay h-100 d-flex flex-column pb-5 justify-content-end text-center " style="color: white;">
                <h1 class="card-title2 SetFontProxima" style=" font-weight: 700; color:#7cbf4f"><?= $content_blog1['title'] ?></h1>
            </div>
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
<?php $this->endSection() ?>

<?php $this->section('scripts') ?>

<?php $this->endSection() ?>