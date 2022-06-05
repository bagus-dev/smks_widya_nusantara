<?= $this->extend('backend/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Syarat Pendaftaran</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4><i class="fas fa-list"></i> Syarat Pendaftaran</h4>
                    <a href="<?= base_url('admin/dashboard/regist_req'); ?>" class="btn bg-warning text-white py-1"><i class="fas fa-arrow-left circle-icon text-warning"></i> &nbsp;Kembali</a>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/dashboard/regist_req/save') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="name">Persyaratan</label>
                            <textarea name="name" rows="3" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : '' ?>" placeholder="Persyaratan" style="height:auto"><?= old('name') ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('name') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>