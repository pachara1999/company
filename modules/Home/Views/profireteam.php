<?php $this->extend('template/home_layout') ?>
<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">


<div class="container">
    <div class="py-5">
        <h1 class="text-center">
            <?= $employee['name'] ?>
        </h1>
        <div class="row">
            <div class="col-5 col-sm-12 col-md-12 col-lg-5 text-sm-start text-md-start ">
                <div class="setPositionIMGnewpic text-sm-center text-md-center ">
                    <img src="<?php echo base_url('public/asset/img/employee/' . $employee['image_path']); ?>" alt="" class="img-fluid">
                </div>
                <div class="text-center py-5">
                    <div class="">
                        <a href="" class="text-decoration-none text-dark mx-1 border-bottom">Twitter</a> | <a href="" class="border-bottom mx-1 text-decoration-none text-dark">LinkedIn</a>
                    </div>
                </div>
            </div>
            <div class="col-7 col-sm-12 col-md-12 col-lg-7 text-sm-start text-md-start px-lg-2">
                <div>
                    <?= $employee['remark'] ?>
                </div>
            </div>
        </div>
        <div class="d-inline-flex flex-row justify-content-start mx-4 px-1 flex-wrap ">
            <?php foreach ($employees as $employee) { ?>
                <div class="p-2 text-sm-center text-md-center mx-sm-auto mx-md-0 mx-lg-0">
                    <a href="<?php echo base_url('profireteam/'.$employee['id']); ?>" class="text-decoration-none text-dark">
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
            <div class="p-2 text-sm-center text-md-center mx-sm-auto mx-md-0 mx-lg-0">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344696774-3E2QYTMKQ4JR2R3QDOSZ/Garheng.jpg?format=300w" alt="" width="232px" height="232px">
                    <h4 class="text-center" style="font-size: 20px;">
                        Garheng Kong
                    </h4>
                    <p class="text-center" style="font-size: 13px;">
                        Managing Partner
                    </p>
                </a>
            </div>
            <div class="p-2 text-sm-center text-md-center mx-sm-auto mx-md-0 mx-lg-0">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344715283-AZY518I3VFMQDIFSYMH3/Randy.jpg?format=500w" alt="" width="232px" height="232px">
                    <h4 class="text-center" style="font-size: 20px;">
                        Randy Scott
                    </h4>
                    <p class="text-center" style="font-size: 13px;">
                        Randy Scott
                    </p>
                </a>
            </div>
            <div class="p-2 text-sm-center text-md-center mx-sm-auto mx-md-0 mx-lg-0">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344752320-ZEE842TH2NIUO3GDL95K/Todd.jpg?format=500w" alt="" width="232px" height="232px">
                    <h4 class="text-center" style="font-size: 20px;">
                        Todd Creech
                    </h4>
                    <p class="text-center" style="font-size: 13px;">
                        Partner
                    </p>
                </a>
            </div>
            <div class="p-2 text-sm-center text-md-center mx-sm-auto mx-md-0 mx-lg-0">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344771759-QZT1BJ41EOGB3KQF0G5L/Anthony.jpg?format=500w" alt="" width="232px" height="232px">
                    <h4 class="text-center" style="font-size: 20px;">
                        Anthony Williams
                    </h4>
                    <p class="text-center" style="font-size: 13px;">
                        Partner
                    </p>
                </a>
            </div>
            <div class="p-2 text-sm-center text-md-center mx-sm-auto mx-md-0 mx-lg-0">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344789455-9TRAIBSC5RHBO2LQV445/David.jpg?format=500w" alt="" width="232px" height="232px">
                    <h4 class="text-center" style="font-size: 20px;">
                        David Kabakoff
                    </h4>
                    <p class="text-center" style="font-size: 13px;">
                        Senior Partner
                    </p>
                </a>
            </div>
            <div class="p-2 text-sm-center text-md-center mx-sm-auto mx-md-0 mx-lg-0">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670345310336-RPYQNS1N0LKKJGMP0K8O/Sharath_updated.png?format=500w" alt="" width="232px" height="232px">
                    <h4 class="text-center" style="font-size: 20px;">
                        Sharath Reddy
                    </h4>
                    <p class="text-center" style="font-size: 13px;">
                        Partner - Platform & Research
                    </p>
                </a>
            </div>

            <div class="p-2 text-sm-center text-md-center mx-sm-auto mx-md-0 mx-lg-0">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670345310336-RPYQNS1N0LKKJGMP0K8O/Sharath_updated.png?format=500w" alt="" width="232px" height="232px">
                    <h4 class="text-center" style="font-size: 20px;">
                        Sharath Reddy
                    </h4>
                    <p class="text-center" style="font-size: 13px;">
                        Partner - Platform & Research
                    </p>
                </a>
            </div>
            <div class="p-2 text-sm-center text-md-center mx-sm-auto mx-md-0 mx-lg-0">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670345310336-RPYQNS1N0LKKJGMP0K8O/Sharath_updated.png?format=500w" alt="" width="232px" height="232px">
                    <h4 class="text-center" style="font-size: 20px;">
                        Sharath Reddy
                    </h4>
                    <p class="text-center" style="font-size: 13px;">
                        Partner - Platform & Research
                    </p>
                </a>
            </div>
            <div class="p-2 text-sm-center text-md-center mx-sm-auto mx-md-0 mx-lg-0">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670345310336-RPYQNS1N0LKKJGMP0K8O/Sharath_updated.png?format=500w" alt="" width="232px" height="232px">
                    <h4 class="text-center" style="font-size: 20px;">
                        Sharath Reddy
                    </h4>
                    <p class="text-center" style="font-size: 13px;">
                        Partner - Platform & Research
                    </p>
                </a>
            </div>
            <div class="p-2 text-sm-center text-md-center mx-sm-auto mx-md-0 mx-lg-0">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670345310336-RPYQNS1N0LKKJGMP0K8O/Sharath_updated.png?format=500w" alt="" width="232px" height="232px">
                    <h4 class="text-center" style="font-size: 20px;">
                        Sharath Reddy
                    </h4>
                    <p class="text-center" style="font-size: 13px;">
                        Partner - Platform & Research
                    </p>
                </a>
            </div>
            <div class="p-2 text-sm-center text-md-center mx-sm-auto mx-md-0 mx-lg-0">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670345310336-RPYQNS1N0LKKJGMP0K8O/Sharath_updated.png?format=500w" alt="" width="232px" height="232px">
                    <h4 class="text-center" style="font-size: 20px;">
                        Sharath Reddy
                    </h4>
                    <p class="text-center" style="font-size: 13px;">
                        Partner - Platform & Research
                    </p>
                </a>
            </div>
            <div class="p-2 text-sm-center text-md-center mx-sm-auto mx-md-0 mx-lg-0">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670345310336-RPYQNS1N0LKKJGMP0K8O/Sharath_updated.png?format=500w" alt="" width="232px" height="232px">
                    <h4 class="text-center" style="font-size: 20px;">
                        Sharath Reddy
                    </h4>
                    <p class="text-center" style="font-size: 13px;">
                        Partner - Platform & Research
                    </p>
                </a>
            </div>
            <div class="p-2 text-sm-center text-md-center mx-sm-auto mx-md-0 mx-lg-0">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670345310336-RPYQNS1N0LKKJGMP0K8O/Sharath_updated.png?format=500w" alt="" width="232px" height="232px">
                    <h4 class="text-center" style="font-size: 20px;">
                        Sharath Reddy
                    </h4>
                    <p class="text-center" style="font-size: 13px;">
                        Partner - Platform & Research
                    </p>
                </a>
            </div>
            <div class="p-2 text-sm-center text-md-center mx-sm-auto mx-md-0 mx-lg-0">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670345310336-RPYQNS1N0LKKJGMP0K8O/Sharath_updated.png?format=500w" alt="" width="232px" height="232px">
                    <h4 class="text-center" style="font-size: 20px;">
                        Sharath Reddy
                    </h4>
                    <p class="text-center" style="font-size: 13px;">
                        Partner - Platform & Research
                    </p>
                </a>
            </div>
            <div class="p-2 text-sm-center text-md-center mx-sm-auto mx-md-0 mx-lg-0">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670345310336-RPYQNS1N0LKKJGMP0K8O/Sharath_updated.png?format=500w" alt="" width="232px" height="232px">
                    <h4 class="text-center" style="font-size: 20px;">
                        Sharath Reddy
                    </h4>
                    <p class="text-center" style="font-size: 13px;">
                        Partner - Platform & Research
                    </p>
                </a>
            </div>
            <div class="p-2 text-sm-center text-md-center mx-sm-auto mx-md-0 mx-lg-0">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670345310336-RPYQNS1N0LKKJGMP0K8O/Sharath_updated.png?format=500w" alt="" width="232px" height="232px">
                    <h4 class="text-center" style="font-size: 20px;">
                        Sharath Reddy
                    </h4>
                    <p class="text-center" style="font-size: 13px;">
                        Partner - Platform & Research
                    </p>
                </a>
            </div>
            <div class="p-2 text-sm-center text-md-center mx-sm-auto mx-md-0 mx-lg-0 ">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670345310336-RPYQNS1N0LKKJGMP0K8O/Sharath_updated.png?format=500w" alt="" width="232px" height="232px">
                    <h4 class="text-center" style="font-size: 20px;">
                        Sharath Reddy
                    </h4>
                    <p class="text-center" style="font-size: 13px;">
                        Partner - Platform & Research
                    </p>
                </a>
            </div>
            <div class="p-2 text-sm-center text-md-center  mx-sm-auto mx-md-0 mx-lg-0">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670345310336-RPYQNS1N0LKKJGMP0K8O/Sharath_updated.png?format=500w" alt="" width="232px" height="232px">
                    <h4 class="text-center" style="font-size: 20px;">
                        Sharath Reddy
                    </h4>
                    <p class="text-center" style="font-size: 13px;">
                        Partner - Platform & Research
                    </p>
                </a>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>

<?php $this->section('scripts') ?>

<?php $this->endSection() ?>