<?php $this->extend('template/home_layout') ?>

<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">

<div class="container-fluid p-0 overflow-hidden">
    <div class="card card-inverse border-0 text-center" style="height: fit-content; ">
        <img class="card-img-top3 thumbnail" src="<?php echo base_url('public/asset/img/content/' . $content_blog1['image_path']) ?>" alt="">
        <div class="card-img-overlay d-flex flex-column justify-content-center" style="color: white; padding-bottom: 50px;">
            <h1 class="card-title1 m-0 SetFontProxima" style="color:#7cbf4f; font-weight: 600; font-style: normal;"><?= $content_blog1['title'] ?></h1>
        </div>
    </div>
</div>
<div>
    <div class="py-4">
        <h1 class="text-center SetFontProxima" style="font-weight: 400;font-style: normal;font-size: 28px; color: rgba(23,23,23,.8);">
            <?= $content_blog2['title'] ?>
        </h1>
    </div>
    <div class="container">
        <div class="border-top-3 border border-muted" style="width: 100%;">
        </div>
    </div>
    <div class="py-4">
        <div class="text-center pt-2 SetFontProxima" style="font-weight: 400;font-style: normal;font-size: 28px; color: rgba(23,23,23,.8);">
            <h5>
                <?= $content_blog2['description'] ?>
            </h5>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center SetFontLoTo" style="font-weight:600;font-style: normal;font-size: 28px; color: rgba(23,23,23,.8);">
            Contact Us By Filling the Form Below
        </h2>
        <form>
            <div class="row px-5">
                <div class="col-md-6 col-lg-6 col-sm-12 py-2 px-5">
                    <label for="inputName" class="SetFontProxima" style="font-weight: 400;font-style: normal;font-size: 16px; color: rgba(23,23,23,.8);">Name</label>
                    <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 py-2 px-5">
                    <label for="inputLastname" class="SetFontProxima" style="font-weight: 400;font-style: normal;font-size: 16px;color: rgba(23,23,23,.8);">Lastname</label>
                    <input type="text" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 py-2 px-5">
                    <label for="inputAddress" class="SetFontProxima" style="font-weight: 400;font-style: normal;font-size: 16px;color: rgba(23,23,23,.8);">Email Address</label>
                    <input type="text" class="form-control" id="inputAddress">
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 py-2 px-5" style="font-weight: 400;font-style: normal;font-size: 16px;color: rgba(23,23,23,.8);">
                    <label for="inputSubject" class="SetFontProxima">Subject</label>
                    <input type="text" class="form-control" id="inputAddress2">
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 py-2 px-5" style="font-weight: 400;font-style: normal;font-size: 16px;color: rgba(23,23,23,.8);">
                    <label for="inputMessage" class="SetFontProxima">Message</label>
                    <textarea id="subject" class="form-control" name="subject" style="width: 100%;"></textarea>
                </div>
            </div>
            <div class="text-center py-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>


<?php $this->endSection() ?>

<?php $this->section('scripts') ?>

<?php $this->endSection() ?>