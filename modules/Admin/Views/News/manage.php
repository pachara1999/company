<?php $this->extend('template/layout') ?>

<?php $this->section('content') ?>
<div class="row">
    <div class="col-md-12 text-center">
        <h4>เพิ่มข่าวสาร</h4>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo base_url('admin/news/save'); ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <input type="hidden" name="id" value="<?= (!empty($data['id']) ? $data['id'] : '') ?>">
                        <div class="col-md-4">
                            <label for="">รูปภาพหน้าปกข่าว</label>
                            <input type="file" name="image_path" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">ปี</label>
                            <select name="year" id="" class="form-control">
                                <?php
                                $year = date('Y');
                                for ($i = $year; $i >= $year - 5; $i--) { ?>
                                    <option value="<?= $i ?>" <?= (!empty($data['year'] && $data['year'] == $i) ? "selected" : "") ?>><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">ประเภทข่าว</label>
                            <select name="category_id" id="" class="form-control">
                                <?php foreach ($categories as $category) { ?>
                                    <option value="<?= $category['id'] ?>" <?= (!empty($data['category_id'] && $data['category_id'] ==  $category['id']) ? "selected" : "") ?>><?= $category['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="">หัวข้อข่าวสาร <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="" class="form-control" value="<?= (!empty($data['title']) ? $data['title'] : '') ?>" required>
                        </div>
                        <div class="col-md-12">
                            <label for="">เนื้อหาข่าวสาร</label>
                            <textarea name="details" id="details" cols="30" rows="10" class="form-control"><?= (!empty($data['details']) ? $data['details'] : '') ?></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">รายละเอียดเพิ่มเติม</label>
                            <textarea name="references" id="references" cols="30" rows="10" class="form-control"><?= (!empty($data['references']) ? $data['references'] : '') ?></textarea>
                        </div>
                        <div class="col-md-12 mt-3 text-center">
                            <button type="submit" class="btn btn-success">บันทึก</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>

<?php $this->section('scripts') ?>
<script type="text/javascript">
    CKEDITOR.replace('details');
    CKEDITOR.replace('references');
</script>
<?php $this->endSection() ?>