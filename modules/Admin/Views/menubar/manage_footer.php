<?php $this->extend('template/layout') ?>

<?php $this->section('content') ?>
<div class="row mb-2">
    <div class="col-md-12 text-center">
        <h4>แก้ไข Footer</h4>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <form id="ft-copy" action="<?= base_url('admin/saveFooter') ?>" method="post">
                <div class="col-md-12">
                    <input type="hidden" name="id[0]" value="<?= $footer_copyright['id'] ?>">
                    <label for="">Copyright</label>
                    <input type="text" name="name[0]" value="<?= $footer_copyright['name'] ?>" class="form-control">
                </div>
                <div class="col-md-12">
                    <input type="hidden" name="id[1]" value="<?= $footer_contact['id'] ?>">
                    <label for="">ที่อยู่ & ช่องทางกาาติดต่อ</label>
                    <input type="text" name="name[1]" value="<?= $footer_contact['name'] ?>" class="form-control">
                </div>
                <div class="col-md-12">
                    <input type="hidden" name="id[2]" value="<?= $footer_credit['id'] ?>">
                    <label for="">ออกแบบโดย</label>
                    <input type="text" name="name[2]" value="<?= $footer_credit['name'] ?>" class="form-control">
                </div>
                <div class="col-md-12 text-center p-3">
                    <button type="submit" class="btn btn-warning">บันทึก</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection() ?>

<?php $this->section('scripts') ?>

<?php $this->endSection() ?>