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
                    <a href="<?php echo base_url('admin/news/manage'); ?>" class="btn btn-info m-2">
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
                            <?php foreach ($data as $key => $row) { ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $row['year'] ?></td>
                                    <td><?= $row['cateName'] ?></td>
                                    <td><?= $row['title'] ?></td>
                                    <td>
                                        <a type="button" class="btn btn-link text-warning text-gradient px-3 mb-0" href="<?php echo base_url('admin/news/manage/' . $row['id']); ?>">
                                            <i class="fa-regular fa-pen-to-square" aria-hidden="true"></i>
                                            แก้ไข
                                        </a>
                                        <button class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="DeleteNews('<?= $row['id'] ?>')">
                                            <i class="fa fa-trash me-2" aria-hidden="true"></i>
                                            ลบ
                                        </button>
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

    function DeleteNews(id) {
        Swal.fire({
            title: 'คุณต้องการลบข้อมูล?',
            text: "คุณต้องการลบข้อมูลข่าวสารใช่หรือไม่!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonText: 'ยกเลิก',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ลบ'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                ).then(() => {
                    $.ajax({
                        method: 'POST',
                        url: "<?php echo base_url('admin/news/deleteNews'); ?>",
                        data: {
                            id: id
                        },
                        success: function(res) {
                            console.log(res);
                            if (res.status == 'success') {
                                window.location.reload();
                            }
                        }
                    })
                });
            }
        })
    }
</script>
<?php $this->endSection() ?>