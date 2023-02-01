<?php $this->extend('template/layout') ?>

<?php $this->section('content') ?>
<div class="row">
    <div class="col-md-12 text-center">
        <h4>ข่าวสาร</h4>
    </div>
</div>
<div class="row">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo base_url('admin/news/manage-category'); ?>" class="btn btn-primary m-2">
                        จัดการประเภทข่าวสาร
                    </a>
                    <a href="<?php echo base_url('admin/news/add-news'); ?>" class="btn btn-info m-2">
                        เพิ่มข่าวสาร
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table id="news-tbl" class="table">
                        <thead>
                            <tr>
                                <th width="10%" class="text-uppercase text-xxl font-weight-bolder opacity-7">#</th>
                                <th width="10%" class="text-uppercase text-xxl font-weight-bolder opacity-7">ปี</th>
                                <th width="15%" class="text-uppercase text-xxl font-weight-bolder opacity-7">ประเภท</th>
                                <th width="50%" class="text-uppercase text-xxl font-weight-bolder opacity-7">หัวข้อ</th>
                                <th width="15%" class="text-uppercase text-xxl font-weight-bolder opacity-7">เครื่องมือ</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>

<?php $this->section('scripts') ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#news-tbl').DataTable({
            "ordering": false,
            "language": {
                "lengthMenu": "แสดง _MENU_ แถว",
                "zeroRecords": "ไม่พบข้อมูล",
                "info": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                "infoEmpty": "ไม่มีข้อมูล",
                "infoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
                "paginate": {
                    "first": "หน้าแรก",
                    "previous": "<",
                    "next": ">",
                    "last": "หน้าสุดท้าย"
                },
                "search": "ค้นหา :",
            }
        });
    });
</script>
<?php $this->endSection() ?>