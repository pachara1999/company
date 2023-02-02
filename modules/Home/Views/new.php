<?php $this->extend('template/home_layout') ?>

<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<div>
    <div class="setimg container-fluid">
        <img src="<?= $content_blog1['image_path'] ?>" alt="" width="100%" height="650px">
        <div class="setImgSectio2"><?= $content_blog1['title'] ?></div>
    </div>
</div>
<div class="py-5">
    <div class="text-center">
        <h1>
            <?= $content_blog2['title'] ?>
        </h1>
    </div>
    <div class="container border-top-3 border border-muted my-3" style="width: 800px;"></div>
    <div class="container">
        <div class="row">

            <div class="col-3 col-sm-12 col-md-12 col-lg-3">
                <form id="search_form" action="<?php echo base_url('/new'); ?>">
                    <input type="hidden" id="offset" name="offset" value="<?php if (!empty($_GET['offset'])) {
                                                                                echo $_GET['offset'];
                                                                            } else {
                                                                                echo 1;
                                                                            } ?>">
                    <div class="py-2">
                        <div style="border-bottom: 1px solid black;">
                            <select class="form-select" name="category_id" aria-label="Default select example">
                                <option value="" selected>CATEGORY : ALL</option>
                                <?php foreach ($categories as $category) { ?>
                                    <option value="<?= $category['id'] ?>" <?php if (!empty($_GET['category_id'])) {
                                                                                if ($_GET['category_id'] == $category['id']) {
                                                                                    echo " selected";
                                                                                }
                                                                            } ?>><?= $category['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="py-2">
                        <div style="border-bottom: 1px solid black;">
                            <select class="form-select" name="year" aria-label="Default select example">
                                <option value="" selected>YEAR : ALL</option>
                                <?php
                                $year = date('Y');
                                for ($i = $year; $i > $year - 5; $i--) { ?>
                                    <option value="<?= $i ?>" <?php if (!empty($_GET['year'])) {
                                                                    if ($_GET['year'] == $i) {
                                                                        echo " selected";
                                                                    }
                                                                } ?>><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div>
                        <input type="text" placeholder="Search" name="title" value="<?= (!empty($_GET['title']) ? $_GET['title'] : "") ?>">
                        <button type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>

            <div class="col-9 col-sm-12 col-md-12 col-lg-9">
                <div class="row">
                    <?php foreach ($news as $new) { ?>
                        <div class="col-4 col-sm-12 col-md-6 col-lg-4">
                            <a href="" class="text-decoration-none text-dark">
                                <div class="setPositionIMGnew mx-auto">
                                    <img src="<?php echo base_url('public/asset/img/news/' . $new['image_path']); ?>" alt="">
                                </div>
                                <h5>
                                    <?= $new['title'] ?>
                                </h5>
                                <p style="font-size: 12px;">
                                    <?= $new['create_at'] ?>
                                </p>
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <div class="py-5 ">
                    <div class="text-center">
                        <button type="button" class="btn border border-success border-2 text-success my-2" onclick="LoadMoreContent()">
                            LOAD MORE...
                        </button>
                    </div>
                    <p style="padding-left: 150px;" class="py-4">
                        For older news, please filter by year using the filters above
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

<?php $this->endSection() ?>

<?php $this->section('scripts') ?>
<script type="text/javascript">
    function LoadMoreContent() {
        var offset = $('#offset').val();
        offset++
        $('#offset').val(offset);
        // console.log($('#offset').val());
        $('#search_form').submit();
    }
</script>
<?php $this->endSection() ?>