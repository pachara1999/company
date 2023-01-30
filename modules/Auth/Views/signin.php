<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="<?php echo base_url('public/asset/css/Auth.css'); ?>" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class='col-md-9 card mx-auto d-flex flex-row px-0'>
            <div class="img-left d-md-flex d-none">
            </div>
            <div class="card-body d-flex flex-column justify-content-center">
                <h4 class="title text-center mt-4 pb-3">ระบบจัดการสโมสรฟุตบอล (อคาเดมี่)</h4>
                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif; ?>
                <form id="signin_form" action="<?php echo base_url('loginAuth'); ?>" method="post" class='col-sm-10 col-12 mx-auto'>
                    <div class='form-group '>
                        <input type="text" name="username" class="form-control" placeholder='ชื่อผู้ใช้งาน'>
                    </div>
                    <div class='form-group py-3 '>
                        <input type="password" name="password" class="form-control" placeholder='รหัสผ่าน'>
                    </div>
                    <div class='text-center'>
                        <input type="submit" class="btn  btn-outline-success w-100 col-md-6" value='เข้าสู่ระบบ'>
                        <a href="<?php echo base_url('/register'); ?>" class="m-auto">สมัครสมาชิก</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>