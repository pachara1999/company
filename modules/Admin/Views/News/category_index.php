<?php $this->extend('template/layout') ?>

<?php $this->section('content') ?>
<div class="row">
    <div class="col-md-12 text-center">
        <h4>ประเภทข่าวสาร</h4>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-block btn-info float-end mb-3" data-bs-toggle="modal" data-bs-target="#add-category">เพิ่มประเภทข่าวสาร</button>
                        <div class="modal fade" id="add-category" tabindex="-1" role="dialog" aria-labelledby="add-category" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <div class="card card-plain">
                                            <div class="card-header pb-0 text-left">
                                                <h3 class="font-weight-bolder text-info text-gradient">เพิ่มประเภท</h3>
                                            </div>
                                            <div class="card-body">
                                                <form action="<?php echo base_url('admin/news/add-category'); ?>" method="post" enctype="multipart/form">
                                                    <label>ชื่อประเภท <span class="text-danger">*</span></label>
                                                    <input type="hidden" name="id" value="">
                                                    <input type="text" name="name" value="" class="form-control">
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">เพิ่ม</button>
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
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="cate-tbl" class="table">
                            <thead>
                                <tr>
                                    <th width="10%" class="text-uppercase text-xxl font-weight-bolder opacity-7">#</th>
                                    <th width="70%" class="text-uppercase text-xxl font-weight-bolder opacity-7">ชื่อประเภทข่าว</th>
                                    <th width="20%" class="text-uppercase text-xxl font-weight-bolder opacity-7">เครื่องมือ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $key => $row) { ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $row['name'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-link text-warning text-gradient px-3 mb-0" data-bs-toggle="modal" data-bs-target="#edit-category<?php echo $key + 1 ?>">
                                            <i class="fa fa-pen"></i>
                                            แก้ไข
                                            </button>
                                            <div class="modal fade" id="edit-category<?php echo $key + 1 ?>" tabindex="-1" role="dialog" aria-labelledby="edit-category<?php echo $key + 1 ?>" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body p-0">
                                                            <div class="card card-plain">
                                                                <div class="card-header pb-0 text-left">
                                                                    <h3 class="font-weight-bolder text-info text-gradient">แก้ไขประเภท</h3>
                                                                </div>
                                                                <div class="card-body">
                                                                    <form action="<?php echo base_url('admin/news/add-category'); ?>" method="post" enctype="multipart/form">
                                                                        <label>ชื่อประเภท <span class="text-danger">*</span></label>
                                                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                                        <input type="text" name="name" value="<?= $row['name'] ?>" class="form-control">
                                                                        <div class="text-center">
                                                                            <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">บันทึก</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="DeleteCategory('<?= $row['id'] ?>')">
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
</div>
</div>
<?php $this->endSection() ?>

<?php $this->section('scripts') ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#cate-tbl').DataTable({
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

    function DeleteCategory(id) {
        Swal.fire({
            title: 'คุณต้องการลบข้อมูล?',
            text: "คุณต้องการลบข้อมูลประเภทข่าวใช่หรือไม่!",
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
                        url: "<?php echo base_url('admin/news/delete-category'); ?>",
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