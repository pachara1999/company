<?php $this->extend('template/layout') ?>

<?php $this->section('content') ?>
<div class="row mb-2">
    <div class="col-md-12 text-center">
        <h4>จัดการเมนู</h4>
    </div>
</div>
<div class="card">
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn text-primary text-gradient px-3 mb-0" data-bs-toggle="modal" data-bs-target="#edit_content"><i class="fa-solid fa-camera"></i> เปลี่ยนโลโก้</button>
            <div class="modal fade" id="edit_content" tabindex="-1" role="dialog" aria-labelledby="edit_content" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-left">
                                    <h5 class="font-weight-bolder text-info text-gradient">แก้ไขโลโก้</h5>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo base_url('admin/saveLogo'); ?>" method="post" enctype="multipart/form-data">
                                        <label for="">โลโก้</label>
                                        <input type="file" name="image_path" class="form-control">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-round bg-gradient-warning btn-lg w-50 mt-4 mb-0">แก้ไขข้อมูล</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="menu-tbl" class="table align-items-center mb-0">
                <thead>
                    <th width="10%" class="text-uppercase text-xxl font-weight-bolder opacity-7">#</th>
                    <th width="60%" class="text-uppercase text-xxl font-weight-bolder opacity-7">ชื่อเมนู</th>
                    <th width="30%" class="text-uppercase text-xxl font-weight-bolder opacity-7">เครื่องมือ</th>
                </thead>
                <tbody>
                    <?php foreach ($menubars as $key => $menu) { ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $menu['name'] ?></td>
                            <td>
                                <button type="button" class="btn btn-link text-warning text-gradient px-3 mb-0" data-bs-toggle="modal" data-bs-target="#edit_content<?php echo $key + 1 ?>"><i class="fa fa-pen"></i> แก้ไข</button>
                                <div class="modal fade" id="edit_content<?php echo $key + 1 ?>" tabindex="-1" role="dialog" aria-labelledby="edit_content<?php echo $key + 1 ?>" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <div class="card card-plain">
                                                    <div class="card-header pb-0 text-left">
                                                        <h5 class="font-weight-bolder text-info text-gradient">แก้ไขเมนู</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <form action="<?php echo base_url('admin/saveMenubar'); ?>" method="post">
                                                            <input type="hidden" name="id" value="<?= $menu['id'] ?>">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label>ชื่อเมนู</label>
                                                                    <input type="text" name="name" class="form-control" value="<?= $menu['name'] ?>">
                                                                </div>
                                                            </div>

                                                            <div class="text-center">
                                                                <button type="submit" class="btn btn-round bg-gradient-warning btn-lg w-50 mt-4 mb-0">แก้ไขข้อมูล</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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