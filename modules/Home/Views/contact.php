<?php $this->extend('template/home_layout') ?>

<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">

<div class="setimg container-fluid">
    <img src="https://img2.thaipng.com/20180729/blb/kisspng-desktop-wallpaper-display-resolution-high-definiti-falling-gold-5b5dc207e293e7.6449503615328711759281.jpg" alt="" width="100%" height="650px">
    <div class="setImgSectio2">Contact Us</div>
</div>
<div>
    <div class="py-4">
        <h1 class="text-center">
            Our Office Location
        </h1>
    </div>
    <div class="py-4">
        <div class="container border-top-3 border border-muted" style="width: 800px;"></div>
        <div class="text-center pt-4">
            <h5>
                1301 Shoreway Rd, Suite 350
            </h5>
            <h5>
                Belmont, CA 94002
            </h5>
        </div>
    </div>
    <div class="text-center">
        img Map
    </div>
    <div class="container border-top-3 border border-muted " style="width: 800px;"></div>
    <div class="py-4">
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
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Lastname">
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
    </div>
</div>


<?php $this->endSection() ?>

<?php $this->section('scripts') ?>

<?php $this->endSection() ?>