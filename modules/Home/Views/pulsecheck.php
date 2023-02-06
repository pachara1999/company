<?php $this->extend('template/home_layout') ?>

<?php $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('public/asset/css/test.css') ?>">

<div class="container-fluid p-0 overflow-hidden">
    <div class="card card-inverse border-0 text-center" style="height: fit-content; ">
        <img class="card-img-top4" src="" alt="">
        <div class="card-img-overlay d-flex flex-column justify-content-center" style="color: white; padding-bottom: 50px;">
            <h1 class="card-title4 m-0 SetFontProxima" style="color:#7cbf4f; font-weight: 600; font-style: normal;">
                Project PulseCheck
            </h1>
        </div>
    </div>
    <div class="pt-4">
        <div class="container">
            <h2 class="text-center py-2">
                Office Hours for Underrepresented Healthcare Entrepreneurs
            </h2>
            <p class="px-5">
                Our mandate at HealthQuest is to invest in innovation that improves value and access in the healthcare system for all patients. We believe that diverse leadership is critical to the future of healthcare innovation. We’re hosting office hours for pre-founders, founders, and CEOs from diverse backgrounds historically underrepresented in healthcare, who are building companies of any stage in the healthcare sector. Through this initiative, we aim to provide support and mentorship to underrepresented entrepreneurs and take an important first step in working towards a more inclusive future.
            </p>
            <p class="px-5">
                Office hours appointments are limited but we’ll do our best to accommodate as many entrepreneurs as possible. If you’re interested in meeting with us, please fill out the form below and we’ll get back to you!
            </p>
        </div>

        <div class="container">
            <div class="border-top-3 border border-muted" style="width: 100%;">
            </div>
            <form>
                <div class="row px-5 py-3">
                    <div class="col-md-12 col-lg-12 col-sm-12 py-2 px-5">
                        <label for="inputCompany" class="SetFontProxima" style="font-weight: 400;font-style: normal;font-size: 16px; color: rgba(23,23,23,.8);">Company Name</label>
                        <input type="text" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 py-2 px-5" style="font-weight: 400;font-style: normal;font-size: 16px;color: rgba(23,23,23,.8);">
                        <label for="inputCompany" class="SetFontProxima">Company Description</label>
                        <textarea id="subject" class="form-control" placeholder="Tell us about the problems in healthcare your company is solving" name="subject" style="width: 100%;"></textarea>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 py-2 px-5">
                        <label for="inputCompany" class="SetFontProxima" style="font-weight: 400;font-style: normal;font-size: 16px;color: rgba(23,23,23,.8);">Company Location</label>
                        <input type="text" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 py-2 px-5">
                        <label for="inputCapital" class="SetFontProxima" style="font-weight: 400;font-style: normal;font-size: 16px;color: rgba(23,23,23,.8);">Capital Raised to Date (Thousands)</label><br>
                        <label for="inputCapital" class="SetFontProxima" style="font-weight: 400;font-style: normal;font-size: 12px;color: rgba(23,23,23,.8);">Again, can be $0, but will tell us if your business has achieved product/market fit</label>
                        <input type="text" class="form-control" id="inputAddress">
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 py-2 px-5">
                        <label for="inputCapital" class="SetFontProxima" style="font-weight: 400;font-style: normal;font-size: 16px;color: rgba(23,23,23,.8);">Annual Revenue (Thousands)</label><br>
                        <label for="inputCapital" class="SetFontProxima" style="font-weight: 400;font-style: normal;font-size: 12px;color: rgba(23,23,23,.8);">Again, can be $0, but will tell us if your business has achieved product/market fit</label>
                        <input type="text" class="form-control" id="inputAddress">
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12 py-2 px-5">
                        <label for="inputName" class="SetFontProxima" style="font-weight: 400;font-style: normal;font-size: 16px; color: rgba(23,23,23,.8);">Name</label>
                        <input type="text" class="form-control" id="inputName">
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 py-2 px-5">
                        <label for="inputLastname" class="SetFontProxima" style="font-weight: 400;font-style: normal;font-size: 16px;color: rgba(23,23,23,.8);">Lastname</label>
                        <input type="text" class="form-control" id="inputLastname">
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 py-2 px-5">
                        <label for="inputAddress" class="SetFontProxima" style="font-weight: 400;font-style: normal;font-size: 16px;color: rgba(23,23,23,.8);">Title</label>
                        <input type="text" class="form-control" id="inputTitle">
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 py-2 px-5" style="font-weight: 400;font-style: normal;font-size: 16px;color: rgba(23,23,23,.8);">
                        <label for="inputEmail" class="SetFontProxima">Email Address</label>
                        <input type="text" class="form-control" id="inputEmail">
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 py-2 px-5" style="font-weight: 400;font-style: normal;font-size: 16px;color: rgba(23,23,23,.8);">
                        <p>Tell us about yourself</p>
                        <p style="font-size: 12px;">This initiative was created with healthcare entrepreneurs that have historically had limited access to VC funding in mind. Below are some categories of groups that may identify as underrepresented. Please check any that apply to you: </p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault" style="font-size: 12px;">
                                African American/Black
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault" style="font-size: 12px;">
                                Female
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault" style="font-size: 12px;">
                                Non-Binary
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault" style="font-size: 12px;">
                                Hispanic/Latinx
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault" style="font-size: 12px;">
                                LGBTQ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault" style="font-size: 12px;">
                                Living with a disability
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault" style="font-size: 12px;">
                                Native American/Alaskan Native
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault" style="font-size: 12px;">
                                Other (please identify below)
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 py-2 px-5" style="font-weight: 400;font-style: normal;font-size: 16px;color: rgba(23,23,23,.8);">
                        <label for="inputEmail" class="SetFontProxima">Other</label>
                        <input type="text" class="form-control py-2" placeholder="Please specify if you selected 'Other' above" id="inputEmail" style="font-size: 12px;">
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 py-2 px-5" style="font-weight: 400;font-style: normal;font-size: 16px;color: rgba(23,23,23,.8);">
                        <label for="inputOther" class="SetFontProxima">How did you hear about us?</label>
                        <input type="text" class="form-control" id="inputOther">
                    </div>

                </div>
                <div class="text-center py-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>




<?php $this->endSection() ?>

<?php $this->section('scripts') ?>

<?php $this->endSection() ?>