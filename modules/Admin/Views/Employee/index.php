<?php $this->extend('template/layout') ?>

<?php $this->section('content') ?>
<div class="row mb-3">
    <div class="col-md-12 text-center">
        <h4>พนักงาน</h4>
    </div>
</div>
<div class="row">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo base_url('admin/employee/manage'); ?>" class="btn btn-info float-end">
                        <i class="fa fa-plus"></i>
                        เพิ่มพนักงาน
                    </a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="employee-tbl" class="table align-items-center mb-0">
                        <thead>
                            <th width="10%" class="text-uppercase text-xxl font-weight-bolder opacity-7">#</th>
                            <th width="30%" class="text-uppercase text-xxl font-weight-bolder opacity-7">พนักงาน</th>
                            <th width="20%" class="text-uppercase text-xxl font-weight-bolder opacity-7">ตำแหน่ง</th>
                            <th width="30%" class="text-uppercase text-xxl font-weight-bolder opacity-7">เครื่องมือ</th>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $key => $row) { ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                            <img src="<?php echo base_url('public/asset/img/employee/' . $row['image_path']) ?>" class="avatar avatar-sm me-3">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"> <?= $row['name'] ?> </h6>
                                            </div>
                                        </div>
                                        
                                    </td>
                                    <td><?= $row['position'] ?></td>
                                    <td>
                                        <a type="button" class="btn btn-link text-warning text-gradient px-3 mb-0" href="<?php echo base_url('admin/employee/manage/' . $row['id']); ?>">
                                            <i class="fa-regular fa-pen-to-square" aria-hidden="true"></i>
                                            แก้ไข
                                        </a>
                                        <button class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="DeleteEmployee('<?= $row['id'] ?>')">
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
        $('#employee-tbl').DataTable({
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

    function DeleteEmployee(id) {
        Swal.fire({
            title: 'คุณต้องการลบข้อมูล?',
            text: "คุณต้องการลบข้อมูลพนักงานใช่หรือไม่!",
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
                        url: "<?php echo base_url('admin/employee/delete'); ?>",
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