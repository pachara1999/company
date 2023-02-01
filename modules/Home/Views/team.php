<?php $this->extend('template/home_layout') ?>

<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">
<!-- img SectionOne -->
<div class="setimg container-fluid ">
    <img src="https://img2.thaipng.com/20180729/blb/kisspng-desktop-wallpaper-display-resolution-high-definiti-falling-gold-5b5dc207e293e7.6449503615328711759281.jpg" alt="" width="100%" height="400px">
    <div class="setImgSectio4">Our Team</div>
</div>
<!-- end img SectionOne -->

<!-- Section One -->
<div class="container pb-3">
    <div class="row py-3">
        <div class="col-5 px-5 py-3 col-sm-12 col-lg-5 text-sm-center text-md-center text-lg-start">
            <h4 class="">
                An experienced, complementary and integrated team
            </h4>
        </div>
        <div class="col-7 py-3 col-sm-12 col-lg-7">
            <p>
                Our team has 100+ years of combined investing experience and 100+ years of operating experience in the types of healthcare transformers that HealthQuest currently invests in.
            </p>
            <p>
                Our partners have successfully led companies, commercialized medical products, built organizations, and treated patients—a broad range of experience that helps us recognize many of the challenges our portfolio companies are likely to encounter.
            </p>
            <p>
                We are supplemented by a world-class Board of Advisors diversified across healthcare sectors that provide us and our portfolio companies unique strategic insights and opportunities.
            </p>
        </div>
    </div>
    <!-- end SectionOne -->

    <!-- Card Section2 -->
    <div class="row">
        <?php foreach ($employees as $employee) { ?>
            <div class="col-2 text-center px-2 col-sm-6 col-md-3 col-lg-2 ">
                <a href="<?php echo base_url('profireteam/'.$employee['id']); ?>" class="text-decoration-none text-dark">
                    <img src="<?php echo base_url('public/asset/img/employee/' . $employee['image_path']); ?>" alt="" width="170px" height="170px">
                    <h4 class="text-center" style="font-size: 20px;">
                        <?= $employee['name'] ?>
                    </h4>
                    <p class="text-center" style="font-size: 13px;">
                        <?= $employee['position'] ?>
                    </p>
                </a>
            </div>
        <?php } ?>
        <div class="col-2 text-center px-2 col-sm-6 col-md-3 col-lg-2 ">
            <a href="#" class="text-decoration-none text-dark">
                <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344696774-3E2QYTMKQ4JR2R3QDOSZ/Garheng.jpg?format=300w" alt="" width="170px" height="170px">
                <h4 class="text-center" style="font-size: 20px;">
                    Garheng Kong
                </h4>
                <p class="text-center" style="font-size: 13px;">
                    Managing Partner
                </p>
            </a>
        </div>
        <div class="col-2 text-center px-2 col-sm-6 col-md-3 col-lg-2">
            <a href="#" class="text-decoration-none text-dark">
                <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344715283-AZY518I3VFMQDIFSYMH3/Randy.jpg?format=500w" alt="" width="170px" height="170px">
                <h4 class="text-center" style="font-size: 20px;">
                    Randy Scott
                </h4>
                <p class="text-center" style="font-size: 13px;">
                    Randy Scott
                </p>
            </a>
        </div>
        <div class="col-2 text-center px-2 col-sm-6 col-md-3 col-lg-2">
            <a href="#" class="text-decoration-none text-dark">
                <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344752320-ZEE842TH2NIUO3GDL95K/Todd.jpg?format=500w" alt="" width="170px" height="170px">
                <h4 class="text-center" style="font-size: 20px;">
                    Todd Creech
                </h4>
                <p class="text-center" style="font-size: 13px;">
                    Partner
                </p>
            </a>
        </div>
        <div class="col-2 text-center px-2 col-sm-6 col-md-3 col-lg-2">
            <a href="#" class="text-decoration-none text-dark">
                <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344771759-QZT1BJ41EOGB3KQF0G5L/Anthony.jpg?format=500w" alt="" width="170px" height="170px">
                <h4 class="text-center" style="font-size: 20px;">
                    Anthony Williams
                </h4>
                <p class="text-center" style="font-size: 13px;">
                    Partner
                </p>
            </a>
        </div>
        <div class="col-2 text-center px-2 col-sm-6 col-md-3 col-lg-2">
            <a href="#" class="text-decoration-none text-dark">
                <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344789455-9TRAIBSC5RHBO2LQV445/David.jpg?format=500w" alt="" width="170px" height="170px">
                <h4 class="text-center" style="font-size: 20px;">
                    David Kabakoff
                </h4>
                <p class="text-center" style="font-size: 13px;">
                    Senior Partner
                </p>
            </a>
        </div>
        <div class="col-2 text-center px-2 col-sm-6 col-md-3 col-lg-2">
            <a href="#" class="text-decoration-none text-dark">
                <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670345310336-RPYQNS1N0LKKJGMP0K8O/Sharath_updated.png?format=500w" alt="" width="170px" height="170px">
                <h4 class="text-center" style="font-size: 20px;">
                    Sharath Reddy
                </h4>
                <p class="text-center" style="font-size: 13px;">
                    Partner - Platform & Research
                </p>
            </a>
        </div>
        <div class="col-2 text-center px-2 col-sm-6 col-md-3 col-lg-2">
            <a href="#" class="text-decoration-none text-dark">
                <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344808004-HOUAIHVSF5O67PC0EMSZ/Jared.jpg?format=500w" alt="" width="170px" height="170px">
                <h4 class="text-center" style="font-size: 20px;">
                    Jared Teo
                </h4>
                <p class="text-center" style="font-size: 13px;">
                    Principal
                </p>
            </a>
        </div>
        <div class="col-2 text-center px-2 col-sm-6 col-md-3 col-lg-2">
            <a href="#" class="text-decoration-none text-dark">
                <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344823597-CD3ODN822SWDOEVS65H0/0P8A3602-Edit.jpg?format=500w" alt="" width="170px" height="170px">
                <h4 class="text-center" style="font-size: 20px;">
                    Witney McKiernan
                </h4>
                <p class="text-center" style="font-size: 13px;">
                    Principal
                </p>
            </a>
        </div>
        <div class="col-2 text-center px-0 col-sm-6 col-md-3 col-lg-2">
            <a href="#" class="text-decoration-none text-dark">
                <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344847463-LSZYYES8NZPWEO1UPSIE/2.png?format=500w" alt="" width="170px" height="170px">
                <h4 class="text-center" style="font-size: 20px;">
                    test test
                </h4>
                <p class="text-center" style="font-size: 13px;">
                    Vice President
                </p>
            </a>
        </div>
        <div class="col-2 text-center px-2 col-sm-6 col-md-3 col-lg-2">
            <a href="#" class="text-decoration-none text-dark">
                <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344862955-RKU9QTJAAZA3DXIQZPJF/Hyun.png?format=500w" alt="" width="170px" height="170px">
                <h4 class="text-center" style="font-size: 20px;">
                    Hyun Kim
                </h4>
                <p class="text-center" style="font-size: 13px;">
                    Senior Associate
                </p>
            </a>
        </div>
        <div class="col-2 text-center px-2 col-sm-6 col-md-3 col-lg-2">
            <a href="#" class="text-decoration-none text-dark">
                <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344884647-M40N1XV01BNU4982IBYQ/Lily.jpg?format=500w" alt="" width="170px" height="170px">
                <h4 class="text-center" style="font-size: 20px;">
                    Lily Chang
                </h4>
                <p class="text-center" style="font-size: 13px;">
                    Senior Associate
                </p>
            </a>
        </div>
        <div class="col-2 text-center px-2 col-sm-6 col-md-3 col-lg-2">
            <a href="#" class="text-decoration-none text-dark">
                <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344902245-Y8Z0SWB8TR6RH3U23FQE/1.png?format=500w" alt="" width="170px" height="170px">
                <h4 class="text-center" style="font-size: 20px;">
                    Ben Houston
                </h4>
                <p class="text-center" style="font-size: 13px;">
                    Venture Partner
                </p>
            </a>
        </div>

        <div class="col-2 text- center px-2 col-sm-6 col-md-3 col-lg-2">
            <a href="#" class="text-decoration-none text-dark">
                <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344919372-XWPXHCQGQQDNND8B0TLY/Manfred.jpg?format=500w" alt="" width="170px" height="170px">
                <h4 class="text-center" style="font-size: 20px;">
                    Manfred Yu
                </h4>
                <p class="text-center" style="font-size: 13px;">
                    Chief Financial Officer
                </p>
            </a>
        </div>
        <div class="col-2 text-center px-2 col-sm-6 col-md-3 col-lg-2">
            <a href="#" class="text-decoration-none text-dark">
                <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670345278379-U9E6F62B11RZEQSTXKSV/1.png?format=500w" alt="" width="170px" height="170px">
                <h4 class="text-center" style="font-size: 20px;">
                    Avery Williams
                </h4>
                <p class="text-center" style="font-size: 13px;">
                    Venture Partner
                </p>
            </a>
        </div>
        <div class="col-2 text-center px-2 col-sm-6 col-md-3 col-lg-2">
            <a href="#" class="text-decoration-none text-dark">
                <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344945301-AH6C4J0CNB4X9VA24MYN/Harold.jpg?format=500w" alt="" width="170px" height="170px">
                <h4 class="text-center" style="font-size: 20px;">
                    Harold Lee
                </h4>
                <p class="text-center" style="font-size: 13px;">
                    Vice-President of Finance
                </p>
            </a>
        </div>
        <div class="col-2 text-center px-2 col-sm-6 col-md-3 col-lg-2">
            <a href="#" class="text-decoration-none text-dark">
                <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344973316-MFOZ4I3Y5JEI336Z2C0I/Christine.jpg?format=500w" alt="" width="170px" height="170px">
                <h4 class="text-center" style="font-size: 20px;">
                    Christine Ong
                </h4>
                <p class="text-center" style="font-size: 13px;">
                    Director of Finance
                </p>
            </a>
        </div>
        <div class="col-2 text-center px-2 col-sm-6 col-md-3 col-lg-2">
            <a href="#" class="text-decoration-none text-dark">
                <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344959036-88GB5A96YSZO0GTQN04U/0P8A3655-Edit.jpg?format=500w" alt="" width="170px" height="170px">
                <h4 class="text-center" style="font-size: 20px;">
                    Ying Liang
                </h4>
                <p class="text-center" style="font-size: 13px;">
                    Senior Finance/Operations Analyst
                </p>
            </a>
        </div>
        <div class="col-2 text-center px-2 col-sm-6 col-md-3 col-lg-2">
            <a href="#" class="text-decoration-none text-dark">
                <img src="https://images.squarespace-cdn.com/content/v1/568d36dfa12f449ad80575ea/1670344988600-LX1JBAWKHLXJFS8VTW2W/0P8A3382-Edit.jpg?format=500w" alt="" width="170px" height="170px">
                <h4 class="text-center" style="font-size: 20px;">
                    Denise Mutschler
                </h4>
                <p class="text-center" style="font-size: 13px;">
                    Executive Assistant
                </p>
            </a>
        </div>
    </div>
    <!-- endCard Section2 -->
</div>

</div>
<?php $this->endSection() ?>

<?php $this->section('scripts') ?>

<?php $this->endSection() ?>