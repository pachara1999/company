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
                            <a href="<?php echo base_url($menubar['link']) ?>" class="nav-link text-while  p-0 mx-md-1 mx-lg-4 mx-sm-1">
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
                <div class="col-6 text-left col-lg-7 col-sm-12 col-md-4 text-sm-center py-sm-4 py-md-2 py-lg-2 text-md-start text-lg-start">
                    <img src="<?php echo base_url(session()->get('logo_image')) ?>" alt="" width="140px" height="70">
                </div>
                <div class="col-4 col-sm-6 col-md-6 col-lg-3 text-sm-start text-md-start text-lg-start py-sm-4 py-md-2 py-lg-2 my-auto mt-md-4">
                    <div>
                        <p style="color: white; font-size: 16px;">
                            1301 Shoreway Rd Suite 350
                            Belmont, CA 94002</p>
                    </div>
                </div>
                <div class="col-2 col-sm-6 col-md-2 col-lg-2  text-center py-sm-4 py-md-2 py-lg-2 my-auto" style="color: white;">
                    <i class="bi bi-linkedin px-2"></i>
                    <i class="bi bi-twitter px-2"></i>
                </div>
            </div>
            <div class="row py-2" style="color: white;">
                <div class="col-6 text-sm-center text-md-start text-lg-start col-sm-12 col-md-7 col-lg-7">
                    <p>
                        Copyrights © 2021 | HealthQuest Capital | All rights reserved
                    </p>
                </div>
                <div class="col-6 text-sm-center text-md-center text-lg-start col-sm-12 col-md-5 col-lg-5">
                    <p>
                        website by Chase e-Design
                    </p>
                </div>
            </div>
        </div>

    </div>



    <?php $this->renderSection('scripts'); ?>


</body>

</html>