<?php $this->extend('template/home_layout') ?>

<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">
<!-- img SectionOne -->
<div class="setimg container-fluid ">
    <img src="https://img2.thaipng.com/20180729/blb/kisspng-desktop-wallpaper-display-resolution-high-definiti-falling-gold-5b5dc207e293e7.6449503615328711759281.jpg" alt="" width="100%" height="400px">
    <div class="setImgSectio4">Our Team</div>
</div>
<!-- end img SectionOne -->

<!-- Section One -->
<div class="container pb-3">
    <div class="row py-3">
        <div class="col-5 px-5 py-3 col-sm-12 col-lg-5 text-sm-center text-md-center text-lg-start">
            <h4 class="">
                An experienced, complementary and integrated team
            </h4>
        </div>
        <div class="col-7 py-3 col-sm-12 col-lg-7">
            <p>
                Our team has 100+ years of combined investing experience and 100+ years of operating experience in the types of healthcare transformers that HealthQuest currently invests in.
            </p>
            <p>
                Our partners have successfully led companies, commercialized medical products, built organizations, and treated patients—a broad range of experience that helps us recognize many of the challenges our portfolio companies are likely to encounter.
            </p>
            <p>
                We are supplemented by a world-class Board of Advisors diversified across healthcare sectors that provide us and our portfolio companies unique strategic insights and opportunities.
            </p>
        </div>
    </div>
    <!-- end SectionOne -->

    <!-- Card Section2 -->
    <div class="row">
        <?php foreach ($employees as $employee) { ?>
            <div class="col-2 text-center px-2 col-sm-6 col-md-3 col-lg-2 ">
                <a href="<?php echo base_url('profireteam/' . $employee['id']); ?>" class="text-decoration-none text-dark">
                    <img src="<?php echo base_url('public/asset/img/employee/' . $employee['image_path']); ?>" alt="" width="170px" height="170px">
                    <h4 class="text-center" style="font-size: 20px;">
                        <?= $employee['name'] ?>
                    </h4>
                    <p class="text-center" style="font-size: 13px;">
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