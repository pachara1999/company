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
        <div class="text-center">
            <iframe class="map map-embeded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.4347337275076!2d100.57814851485503!3d13.7526371009793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29e5e78b275e1%3A0xedcd7f7ecf5c1033!2z4Liq4LiW4Liy4Lia4Lix4LiZ4Liq4Li44LiC4Lig4Liy4Lie4LmB4Lil4Liw4LiE4Lin4Liy4Lih4LiH4Liy4Lih4LiV4Lij4Lix4Lii4LiN4Liy!5e0!3m2!1sth!2sth!4v1655892015885!5m2!1sth!2sth" height="300" style="width:100%; max-width:1170px; border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <div class="container py-5">
        <h2 class="text-center SetFontLoTo" style="font-weight:600;font-style: normal;font-size: 28px; color: rgba(23,23,23,.8);">
            Contact Us By Filling the Form Below
        </h2>
        <form action="<?= base_url('/addContact') ?>" method="post">
            <div class="row px-5">
                <div class="col-md-6 col-lg-6 col-sm-12 py-2 px-5">
                    <label for="inputName" class="SetFontProxima" style="font-weight: 400;font-style: normal;font-size: 16px; color: rgba(23,23,23,.8);">Name</label>
                    <input type="text" class="form-control" id="inputEmail4" name="firstname" maxlength="100" required>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 py-2 px-5">
                    <label for="inputLastname" class="SetFontProxima" style="font-weight: 400;font-style: normal;font-size: 16px;color: rgba(23,23,23,.8);">Lastname</label>
                    <input type="text" class="form-control" id="inputPassword4" name="lastname" maxlength="100" required>
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 py-2 px-5">
                    <label for="inputAddress" class="SetFontProxima" style="font-weight: 400;font-style: normal;font-size: 16px;color: rgba(23,23,23,.8);">Email Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="email" maxlength="100" required>
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 py-2 px-5" style="font-weight: 400;font-style: normal;font-size: 16px;color: rgba(23,23,23,.8);">
                    <label for="inputSubject" class="SetFontProxima">Subject</label>
                    <input type="text" class="form-control" id="inputAddress2" name="subject" maxlength="100" required>
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 py-2 px-5" style="font-weight: 400;font-style: normal;font-size: 16px;color: rgba(23,23,23,.8);">
                    <label for="inputMessage" class="SetFontProxima">Message</label>
                    <textarea id="subject" class="form-control" name="message" style="width: 100%;"></textarea>
                </div>
            </div>
            <div class="text-center py-3">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>


<?php $this->endSection() ?>

<?php $this->section('scripts') ?>

<?php $this->endSection() ?>