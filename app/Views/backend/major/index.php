<?= $this->extend('backend/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Jurusan</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-chalkboard"></i> Jurusan</h4>
                </div>
                <div class="card-body">
                    <a href="<?= base_url('admin/dashboard/major/add') ?>" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah Jurusan</a>
                    
                    <div class="border mt-4 p-2 p-md-3" style="border-radius:5px">
                        <table id="example2" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Jurusan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach($majors as $m) {
                                ?>
                                <tr>
                                    <td><?= $no++."." ?></td>
                                    <td><?= $m->name ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url('admin/dashboard/major/edit/'.$m->id) ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                            <form action="<?= base_url('admin/dashboard/major/delete') ?>" method="post" id="formDelete" style="display:none">
                                                <?= csrf_field() ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="id" value="<?= $m->id ?>">
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