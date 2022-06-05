<?= $this->extend('backend/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Daftar Guru</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-calendar"></i> Daftar Guru</h4>
                </div>
                <div class="card-body">
                    <a href="<?= base_url('admin/dashboard/teacher_list/add') ?>" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah Guru</a>

                    <div class="border mt-4 p-2 p-md-3" style="border-radius:5px">
                        <table id="example2" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Guru</th>
                                    <th>Posisi</th>
                                    <th>Nomor HP</th>
                                    <th>Deskripsi Singkat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach($teachers as $t) {
                                ?>
                                <tr>
                                    <td><?= $no++."." ?></td>
                                    <td><?= $t->name ?></td>
                                    <td><?= $t->position ?></td>
                                    <td><?= $t->phone ?></td>
                                    <td><?= $t->short_desc ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url('admin/dashboard/teacher_list/edit/'.$t->id) ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger" onclick="$('#formDelete').submit();"><i class="fas fa-trash-alt"></i></a>
                                            <form action="<?= base_url('admin/dashboard/teacher_list/delete') ?>" method="post" id="formDelete" style="display:none">
                                                <?= csrf_field() ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="id" value="<?= $t->id ?>">
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