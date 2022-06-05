<?= $this->extend('backend/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Syarat Pendaftaran</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-list"></i> Syarat Pendaftaran</h4>
                </div>
                <div class="card-body">
                    <a href="<?= base_url('admin/dashboard/regist_req/add') ?>" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah Syarat</a>

                    <div class="border mt-4 p-2 p-md-3" style="border-radius:5px">
                        <table id="example2" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Persyaratan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach($reqs as $r) {
                                ?>
                                <tr>
                                    <td><?= $no++."." ?></td>
                                    <td><?= $r->name ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url('admin/dashboard/regist_req/edit/'.$r->id) ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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