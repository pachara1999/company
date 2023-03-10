<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Company</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">

</head>

<body>
    <style>
        .centered {
            color: red;
            position: absolute;
            top: 56%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

    <nav class="navbar navbar-dark navbar-expand-xl bg-dark ">
        <div class="container">
            <a href="<?php echo base_url('/home') ?>" class="navbar-brand">
                <img src="<?php echo base_url(session()->get('logo_image')) ?>" alt="" width="170px" height="80px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <?php foreach (session()->get('menubar') as $menubar) { ?>
                        <li class="nav-item text-md-start text-sm-start text-lg-start py-2 ">
                            <a href="<?php echo base_url($menubar['link']) ?>" style="font-size: 16px; font-weight: 700;" class=" 
                            <?= uri_string() == str_replace('/', '', $menubar['link']) ? 'active' : '' ?> text-uppercase nav-link text-while font-weight-bold  SetFontFutura p-0 mx-md-1 mx-lg-4 mx-sm-1">
                                <?= $menubar['name'] ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="doctor" style="height: 400;">
        <!-- <img src="https://wallpaperaccess.com/full/741760.jpg" alt="" width="100%"> -->
    </div>

    <?php $this->renderSection('content'); ?>
    <div class="container-fluid bg-black">
        <div class="container">
            <div class="row py-2">
                <div class="col-lg-7 col-sm-12 col-md-4 py-sm-5 py-md-1 py-lg-2 setImgFooter">
                    <img src="<?php echo base_url(session()->get('logo_image')) ?>" alt="" width="140px" height="70">
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 text-sm-start text-md-start text-lg-start py-2 m-0 text-center mt-md-4">
                    <div>
                        <p class="SetFontFutura" style="color: white; font-size: 16px;">
                            <?= session()->get('contact_ft.name') ?>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2 col-lg-2  text-center py-sm-3 py-md-2 py-lg-2 my-md-auto my-lg-auto" style="color: white;">
                    <i class="bi bi-linkedin px-2 "></i>
                    <i class="bi bi-twitter px-2 "></i>
                </div>
            </div>
            <div class="row " style="color: white;">
                <div class="text-sm-center text-md-start text-lg-start col-sm-12 col-md-7 col-lg-7 pt-2">
                    <p class="SetFontFutura">
                        <!-- Copyrights ?? 2021 | HealthQuest Capital | All rights reserved -->
                        <?= session()->get('cpr_ft.name') ?>
                    </p>
                </div>
                <div class="text-sm-center text-md-center text-lg-start col-sm-12 col-md-5 col-lg-5">
                    <p class="SetFontFutura">
                        <!-- website by Chase e-Design -->
                        <?= session()->get('credit_ft.name') ?>
                    </p>
                </div>
            </div>
        </div>

    </div>

    <!-- sdfsd -->

    <?php $this->renderSection('scripts'); ?>
</body>

</html>