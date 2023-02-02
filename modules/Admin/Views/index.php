<?php $this->extend('template/layout') ?>

<?php $this->section('content') ?>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <h4>จัดการคอนเทนท์</h4>
            </div>
            <div class="col-md-12">
                <a href="<?php echo base_url('admin/menu-bar'); ?>" class="btn btn-warning">จัดการเมนู</a>
            </div>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <th width="10%">#</th>
                            <th width="35%">ชื่อหน้า</th>
                            <th width="35%">บล็อคของคอนเทนท์</th>
                            <th width="20%">เครื่องมือ</th>
                        </thead>
                        <tbody>
                            <?php foreach ($content as $key => $row) { ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $row['page'] ?></td>
                                    <td><?= $row['name'] ?></td>
                                    <td>

                                        <button type="button" class="btn btn-link text-warning text-gradient px-3 mb-0" data-bs-toggle="modal" data-bs-target="#edit_content<?php echo $key + 1 ?>"><i class="fa fa-pen"></i> แก้ไข</button>
                                        <div class="modal fade" id="edit_content<?php echo $key + 1 ?>" tabindex="-1" role="dialog" aria-labelledby="edit_content<?php echo $key + 1 ?>" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body p-0">
                                                        <div class="card card-plain">
                                                            <div class="card-header pb-0 text-left">
                                                                <h5 class="font-weight-bolder text-info text-gradient"><?= $row['page'] ?> (<?= $row['name'] ?>)</h5>
                                                            </div>
                                                            <div class="card-body">
                                                                <form action="<?php echo base_url('admin/saveContent'); ?>" method="post" enctype="multipart/form-data">
                                                                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <input type="file" name="image_path" class="form-control">
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <label>ชื่อหัวข้อ</label>
                                                                            <input type="text" name="title" class="form-control" value="<?= $row['title'] ?>">
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <label>รายละเอียด</label>
                                                                            <textarea name="description" id="" cols="30" rows="10" class="form-control ckeditor"><?= $row['description'] ?></textarea>
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
    </div>
</div>

<?php $this->endSection() ?>

<?php $this->section('scripts') ?>
<script>
    $(document).ready(function() {
        CKEDITOR.replaceClass = 'ckeditor';
    });
</script>
<?php $this->endSection() ?>