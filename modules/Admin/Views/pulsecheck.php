<?php $this->extend('template/layout') ?>

<?php $this->section('content') ?>

<div class="card">
    <div class="card-header">
        <h2>Project Pulsecheck</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="pulsecheck-tbl" class="table table-striped">
                        <thead>
                            <tr>
                                <th width="10%" class="text-uppercase text-xxl font-weight-bolder opacity-7">#</th>
                                <th width="40%" class="text-uppercase text-xxl font-weight-bolder opacity-7">Company name</th>
                                <th width="20%" class="text-uppercase text-xxl font-weight-bolder opacity-7">Title</th>
                                <th width="30%" class="text-uppercase text-xxl font-weight-bolder opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pulsechecks as $key => $pulsecheck) { ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $pulsecheck['company_name'] ?></td>
                                    <td><?= $pulsecheck['title'] ?></td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#Pulsecheck<?= $key + 1 ?>">
                                            <i class="fa-solid fa-circle-info" title="ดูข้อมูล"></i>
                                        </button>

                                        <button type="button" class="btn bg-gradient-danger" onclick="DeletedPulsecheck('<?= $pulsecheck['id'] ?>')">
                                            <i class="fa fa-trash" title="ลบ"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="Pulsecheck<?= $key + 1 ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Project Pulsecheck Details</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <b>Company Name :</b> <?= $pulsecheck['company_name'] ?>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <b>Company Description</b> <br> <?= $pulsecheck['company_descripttion'] ?>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <b>Company Location :</b> <?= $pulsecheck['company_location'] ?>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <b>Capital Raised to Date (Thousands) :</b> <?= $pulsecheck['capital_raised'] ?>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <b>Annual Revenue (Thousands) :</b> <?= $pulsecheck['annual_revenue'] ?>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <b>Name :</b> <?= $pulsecheck['fname'] . " " . $pulsecheck['lname'] ?>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <b>Title : <?= $pulsecheck['title']  ?></b>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <b>Email Address : </b> <?= $pulsecheck['email'] ?>
                                                            </div>
                                                            <div class="col-md-12 text-break">
                                                                <b>Tell us about yourself</b>
                                                                <?= ($pulsecheck['African']) ? '<br><span class="badge bg-gradient-dark ml-3">African American/Black</span>' : '' ?>
                                                                <?= ($pulsecheck['Female']) ? '<br><span class="badge bg-gradient-dark ml-3">Female</span>' : '' ?>
                                                                <?= ($pulsecheck['Non-Binary']) ? '<br><span class="badge bg-gradient-dark ml-3">Non-Binary</span>' : '' ?>
                                                                <?= ($pulsecheck['Hispanic/Latinx']) ? '<br><span class="badge bg-gradient-dark ml-3">Hispanic/Latinx</span>' : '' ?>
                                                                <?= ($pulsecheck['LGBTQ']) ? '<br><span class="badge bg-gradient-dark ml-3">LGBTQ</span>' : '' ?>
                                                                <?= ($pulsecheck['Living']) ? '<br><span class="badge bg-gradient-dark ml-3">Living with a disability</span>' : '' ?>
                                                                <?= ($pulsecheck['Native_American']) ? '<br><span class="badge bg-gradient-dark ml-3">Native American/Alaskan Native</span>' : '' ?>
                                                                <?= ($pulsecheck['Other']) ? '<br><span class="badge bg-gradient-dark ml-3">Other (please identify below)</span>' : '' ?>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <b>Other :</b> <?= $pulsecheck['other_detail'] ?>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <b>How did you hear about us? :</b> <?= $pulsecheck['about_us'] ?>
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

        $('#pulsecheck-tbl').DataTable({
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

    function DeletedPulsecheck(id) {
        Swal.fire({
            title: 'คุณต้องการลบข้อมูล?',
            text: "คุณต้องการลบข้อมูลใช่หรือไม่!",
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
                        url: "<?php echo base_url('admin/pulsecheck/delete'); ?>",
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