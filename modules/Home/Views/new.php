<?php $this->extend('template/home_layout') ?>

<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<div class="container-fluid p-0 overflow-hidden">
    <div class="card card-inverse border-0 text-center" style="height: fit-content; ">
        <img class="card-img-top3 thumbnail" src="<?php echo base_url('public/asset/img/content/' . $content_blog1['image_path']) ?>" alt="">
        <div class="card-img-overlay d-flex flex-column justify-content-center" style="color: white; padding-bottom: 50px;">
            <h1 class="card-title1 m-0 SetFontProxima" style="color:#7cbf4f; font-weight: 600; font-style: normal;"><?= $content_blog1['title'] ?></h1>
        </div>
    </div>
</section>





<div class="py-5">
    <div class="text-center">
        <h2 class="SetFontProxima" style="color:rgba(23,23,23,.8); font-weight: 400;font-style: normal;font-size: 28px;">
            <?= $content_blog2['title'] ?>
        </h2>
    </div>
    <div class="container py-3">
        <div class="border-top-3 border border-muted" style="width: 100%;">
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-3">
                <form id="search_form" action="<?php echo base_url('/new'); ?>">
                    <input type="hidden" id="offset" name="offset" value="<?php if (!empty($_GET['offset'])) {
                                                                                echo $_GET['offset'];
                                                                            } else {
                                                                                echo 1;
                                                                            } ?>">
                    <div class="py-2">
                        <div style="border-bottom: 1px solid black;">
                            <select class="form-select SetFontProxima" style="font-size: 13px;" name="category_id" aria-label="Default select example">
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
                            <select class="form-select SetFontProxima" style="font-size: 13px;" name="year" aria-label="Default select example">
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
                        <!-- <input type="text" placeholder="Search" name="title" value="<?= (!empty($_GET['title']) ? $_GET['title'] : "") ?>"> -->
                        <!-- <button type="submit"><i class="bi bi-search"></i></button> -->

                        <div class="d-flex">
                            <input class="form-control me-1 SetFontProxima" style="font-size: 13px;" type="text" placeholder="Search" name="title" aria-label="Search" value="<?= (!empty($_GET['title']) ? $_GET['title'] : "") ?>">
                            <button class=" btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-9">
                <div class="row">
                    <?php foreach ($news as $new) { ?>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="<?php echo base_url('newsdetel/' . $new['id']) ?>" class="text-decoration-none text-dark">
                                <div class="setPositionIMGnew mx-auto">
                                    <img src="<?php echo base_url('public/asset/img/news/' . $new['image_path']); ?>" alt="">
                                </div>
                                <h5 class="SetFontProxima" style="font-weight: 400;font-style: normal;color:rgba(23,23,23,.8);">
                                    <?= $new['title'] ?>
                                </h5>
                                <p class="SetFontProxima" style="font-size: 12px; font-weight: 400;font-style: normal;color:rgba(23,23,23,.8);">
                                    <?= $new['create_at'] ?>
                                </p>
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <div class="py-5 ">
                    <div class="text-center">
                        <button type="button" class="btn border border-success border-2 text-success my-2 setPositionIMGnew" onclick="LoadMoreContent()">
                            LOAD MORE...
                        </button>
                    </div>
                    <p class="py-4 px-auto setPositionIMGnew" style="color:rgba(23,23,23,.8);">
                        For older news, please filter by year using the filters above
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

<?php $this->endSection() ?>

<?php $this->section('scripts') ?>
<script>
    var image = document.getElementsByClassName('thumbnail');
    new simpleParallax(image, {
        sscale: 1,
        orientation: 'down',
    });
</script>
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