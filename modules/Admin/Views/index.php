<?php $this->extend('template/layout') ?>

<?php $this->section('content') ?>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <h4>จัดการคอนเทนท์</h4>
            </div>
            <div class="col-md-12">
                <a href="<?php echo base_url('admin/menu-bar');?>" class="btn btn-warning">จัดการเมนู</a>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection() ?>

<?php $this->section('scripts') ?>

<?php $this->endSection() ?>