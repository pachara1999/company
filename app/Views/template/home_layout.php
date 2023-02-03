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

    <nav class="navbar navbar-dark navbar-expand-lg bg-dark px-2">
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
                        <li class="nav-item text-md-center text-sm-center">
                            <a href="<?php echo base_url($menubar['link']) ?>" class="nav-link text-while">
                                <?= $menubar['name'] ?>
                            </a>
                        </li>
                    <?php } ?>
                    <!-- <li class="nav-item text-md-center text-sm-center">
                        <a href="<?php echo base_url('/about') ?>" class="nav-link  text-while">
                            ABOUT US
                        </a>
                    </li>
                    <li class="nav-item text-md-center text-sm-center">
                        <a href="<?php echo base_url('/team') ?>" class="nav-link  text-while">
                            TEAM
                        </a>
                    </li>
                    <li class="nav-item text-md-center text-sm-center">
                        <a href="<?php echo base_url('/portfolio') ?>" class="nav-link  text-while ">
                            PORTFOLIO
                        </a>
                    </li>
                    <li class="nav-item text-md-center text-sm-center">
                        <a href="<?php echo base_url('/new') ?>" class="nav-link  text-while ">
                            NEWS & INSIGHTS
                        </a>
                    </li>
                    <li class="nav-item text-md-center text-sm-center">
                        <a href="<?php echo base_url('/contact') ?>" class="nav-link  text-while ">
                            CONTACT
                        </a>
                    </li> -->
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
            <div class="row py-4">
                <div class="col-8 text-left col-lg-8 col-sm-4 col-md-4">
                    <img src="<?php echo base_url(session()->get('logo_image')) ?>" alt="" width="140px" height="70">
                </div>
                <div class="col-2 col-sm-4 col-md-4 col-lg-2">
                    <p style="color: white; font-size: 12px;">1301 Shoreway Rd Suite 350
                        Belmont, CA 94002</p>
                </div>
                <div class="col-2 col-sm-4 col-md-4 col-lg-2 gap-3 text-center" style="color: white;">
                    <i class="bi bi-linkedin px-2"></i>
                    <i class="bi bi-twitter px-2"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between" style="color: white;">
                <div>
                    <p>
                        Copyrights © 2021 | HealthQuest Capital | All rights reserved
                    </p>
                </div>
                <div>
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