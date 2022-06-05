<?= $this->extend('backend/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tahun Ajaran</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-calendar"></i> Tahun Ajaran</h4>
                </div>
                <div class="card-body">
                    <a href="<?= base_url('admin/dashboard/school_year/add') ?>" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah Tahun Ajaran</a>

                    <div class="border mt-4 p-2 p-md-3" style="border-radius:5px">
                        <table id="example2" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach($years as $y) {
                                ?>
                                <tr>
                                    <td><?= $no++."." ?></td>
                                    <td><?= $y->school_year ?></td>
                                    <td class="pt-3">
                                        <?php
                                            if($y->status == "0") {
                                                echo "<span class='bg-danger p-2 rounded text-white'>Tidak Aktif</span>";
                                            } else {
                                                echo "<span class='bg-success p-2 rounded text-white'>Aktif</span>";
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url('admin/dashboard/school_year/edit/'.$y->id) ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger" onclick="$('#formDelete').submit();"><i class="fas fa-trash-alt"></i></a>
                                            <form action="<?= base_url('admin/dashboard/school_year/delete') ?>" method="post" id="formDelete" style="display:none">
                                                <?= csrf_field() ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="id" value="<?= $y->id ?>">
                                            </form>
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
    </section>
</div>
<?= $this->endSection() ?>