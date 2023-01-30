<?php $this->extend('template/layout') ?>

<?php $this->section('content') ?>
<div class="row mb-2">
    <div class="col-md-12 text-center">
        <h4>จัดการเมนู</h4>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="menu-tbl" class="table align-items-center mb-0">
                <thead>
                    <th width="10%" class="text-uppercase text-xxl font-weight-bolder opacity-7">#</th>
                    <th width="60%" class="text-uppercase text-xxl font-weight-bolder opacity-7">ชื่อเมนู</th>
                    <th width="30%" class="text-uppercase text-xxl font-weight-bolder opacity-7">เครื่องมือ</th>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i <= 6; $i++) { ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td></td>
                            <td>
                                <button type="button" class="btn btn-link text-warning text-gradient px-3 mb-0" href="#">
                                    <i class="fa-regular fa-pen-to-square" aria-hidden="true"></i>
                                    แก้ไข
                                </button>
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="#">
                                    <i class="fa-regular fa-eye-slash me-2" aria-hidden="true"></i>
                                    ซ่อน
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->endSection() ?>

<?php $this->section('scripts') ?>

<?php $this->endSection() ?>