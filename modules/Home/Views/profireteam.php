<?php $this->extend('template/home_layout') ?>
<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">


<div class="container">
    <div class="py-5">
        <h1 class="text-center">
            <?= $employee['name'] ?>
        </h1>
        <div class="row py-5">
            <div class="col-5 col-sm-12 col-md-12 col-lg-5 text-sm-start text-md-start ">
                <div class="setPositionIMGnewpic text-sm-center text-md-center ">
                    <img src="<?php echo base_url('public/asset/img/employee/' . $employee['image_path']); ?>" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-7 col-sm-12 col-md-12 col-lg-7 text-sm-start text-md-start px-lg-2">
                <div class="py-sm-5 py-md-4 py-lg-0">
                    <?= $employee['remark'] ?>
                </div>
            </div>
        </div>
        <div class="d-inline-flex flex-row justify-content-start mx-4 px-1 flex-wrap pt-5">
            <?php foreach ($employees as $employee) { ?>
                <div class="p-2 text-sm-center text-md-center mx-sm-auto mx-md-0 mx-lg-0">
                    <a href="<?php echo base_url('profireteam/' . $employee['id']); ?>" class="text-decoration-none text-dark">
                        <img src="<?php echo base_url('public/asset/img/employee/' . $employee['image_path']); ?>" alt="" width="232px" height="232px">
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
    </div>
</div>
</div>
<?php $this->endSection() ?>

<?php $this->section('scripts') ?>

<?php $this->endSection() ?>