<?php $this->extend('template/layout') ?>

<?php $this->section('content') ?>
<div class="row mb-3">
    <div class="col-md-12 text-center">
        <h4>เพิ่มผลงาน</h4>
    </div>
</div>
<div class="row">
    <div class="card">
        <div class="card-body">
            <form action="<?php echo base_url('admin/portfolio/save'); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo (!empty($data['id'])) ? $data['id'] : "" ?>">
                <div class="row">
                    <div class="col-md-3">
                        <label for="image">โลโก้</label>
                        <input type="file" name="image_path" class="form-control">
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">ชื่อผลงาน <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="" class="form-control" value="<?php echo (!empty($data['name'])) ? $data['name'] : "" ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="position">ลิงค์</label>
                                <input type="text" name="link" id="" class="form-control" value="<?php echo (!empty($data['link'])) ? $data['link'] : "" ?>" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-success">บันทึก</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->endSection() ?>

<?php $this->section('scripts') ?>
<script type="text/javascript">
    CKEDITOR.replace('remark');
</script>
<?php $this->endSection() ?>