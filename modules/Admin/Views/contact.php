<?php $this->extend('template/layout') ?>

<?php $this->section('content') ?>

<div class="card">
    <div class="card-header">
        <h2>Contact</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="contact-tbl" class="table table-striped">
                        <thead>
                            <tr>
                                <th width="10%" class="text-uppercase text-xxl font-weight-bolder opacity-7">#</th>
                                <th width="40%" class="text-uppercase text-xxl font-weight-bolder opacity-7">Name</th>
                                <th width="20%" class="text-uppercase text-xxl font-weight-bolder opacity-7">Subject</th>
                                <th width="30%" class="text-uppercase text-xxl font-weight-bolder opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($contacts as $key => $contact) { ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $contact['firstname'] . " " . $contact['lastname'] ?></td>
                                    <td><?= $contact['subject'] ?></td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#ContactModal<?= $key + 1 ?>">
                                            <i class="fa-solid fa-circle-info" title="ดูข้อมูล"></i>
                                        </button>

                                        <button type="button" class="btn bg-gradient-danger" onclick="DeletedContact('<?= $contact['id'] ?>')">
                                            <i class="fa fa-trash" title="ลบ"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="ContactModal<?= $key + 1 ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Contact Details</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <b>Name :</b> <?= $contact['firstname'] . " " . $contact['lastname'] ?>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <b>Email :</b> <?= $contact['email'] ?>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <b>Subject :</b> <?= $contact['subject'] ?>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <b>Message :</b> <?= $contact['message'] ?>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <b>Submit Date :</b> <?= date('d/m/Y', strtotime($contact['submit_at'])) ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
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

        $('#contact-tbl').DataTable({
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

    function DeletedContact(id) {
        Swal.fire({
            title: 'คุณต้องการลบข้อมูล?',
            text: "คุณต้องการลบข้อมูลการติดต่อใช่หรือไม่!",
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
                        url: "<?php echo base_url('admin/contact/delete'); ?>",
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