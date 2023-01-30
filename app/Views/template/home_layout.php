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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    <nav class="navbar navbar-expand-lg bg-body-tertiary py-2">
        <div class="container ">
            <div class="collapse navbar-collapse text-center " id="navbarSupportedContent">
                <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1452196668201-5EIWFKPJRM1JG0NEHJ3S/HQC+logo+clear.png?format=1500w" alt="" width="170px" height="80px">
                <ul class="navbar-nav mx-5">
                    <li class="nav-item px-2 fw-bold">
                        <a class="nav-link " aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item px-2 fw-bold">
                        <a class="nav-link " aria-current="page" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item px-2 fw-bold">
                        <a class="nav-link" href="#">TEAM</a>
                    </li>
                    <li class="nav-item px-2 fw-bold ">
                        <a class="nav-link" href="#">PORTFOLIO</a>
                    </li>
                    <li class="nav-item px-2 fw-bold">
                        <a class="nav-link" href="#">NEWS & INSIGHTS</a>
                    </li>
                    <li class="nav-item px-2 fw-bold">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>
                    <li class="nav-item px-2 fw-bold">
                        <a class="nav-link" href="#">PROJECT PULSECHECK</a>
                    </li>
                    <li class="nav-item px-2 fw-bold">
                        <a class="nav-link" href="#">LP PORTAL</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="doctor" style="height: 400;">
        <!-- <img src="https://wallpaperaccess.com/full/741760.jpg" alt="" width="100%"> -->
    </div>

    <?php $this->renderSection('content'); ?>
    <?php $this->renderSection('scripts'); ?>
</body>

</html>