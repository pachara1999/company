<?php $this->extend('template/home_layout') ?>

<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">

<div class="container-fluid p-0 overflow-hidden">
    <div class="card card-inverse border-0 text-center" style="height: fit-content; ">
        <img class="card-img-top3" src="<?php echo base_url('public/asset/img/content/' . $content_blog1['image_path']) ?>" alt="">
        <div class="card-img-overlay d-flex flex-column justify-content-center" style="color: white; padding-bottom: 50px;">
            <h1 class="card-title" style="font-size: 80px;"><?= $content_blog1['title'] ?></h1>
        </div>
    </div>
</div>
<div>
    <div class="py-4">
        <h1 class="text-center">
            <?= $content_blog2['title'] ?>
        </h1>
    </div>
    <div class="py-4">
        <div class="container border-top-3 border border-muted" style="width: 800px;"></div>
        <div class="text-center pt-4">
            <h5>
                <?= $content_blog2['description'] ?>
            </h5>
        </div>
    </div>
    <!-- <div class="text-center">
        img Map
    </div> -->
    <!-- <div class="container border-top-3 border border-muted " style="width: 800px;"></div> -->
    <!-- <div class="py-4">
        <h3 class="text-center">
            Contact Us By Filling the Form Below
        </h3>
        <div class="container">
            <div class="row px-5">

                <div class="col-lg-6 py-3 col-sm-12">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Name">
                </div>
                <div class="col-lg-6 py-3 col-sm-12">
                    <label for="">Lastname</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="Lastname">
                </div>
                <div class="col-lg-12 py-3 col-sm-12">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress">
                </div>
                <div class="col-lg-12 py-3 col-sm-12">
                    <label for="inputCity">Subject</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-lg-12 py-3 col-sm-12 ">
                    <label for="inputCity">Message</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
            </div>
            <div class="text-center py-3 ">
                <button type="submit" class="btn btn-dark fw-bold px-5">SUBMIT</button>
            </div>
        </div>
    </div> -->
</div>


<?php $this->endSection() ?>

<?php $this->section('scripts') ?>

<?php $this->endSection() ?>