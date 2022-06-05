<?= $this->extend('backend/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Prosedur Pendaftaran</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4><i class="fas fa-sort-numeric-up"></i> Prosedur Pendaftaran</h4>
                    <a href="<?= base_url('admin/dashboard/regist_procedure'); ?>" class="btn bg-warning text-white py-1"><i class="fas fa-arrow-left circle-icon text-warning"></i> &nbsp;Kembali</a>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/dashboard/regist_procedure/update') ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="id" value="<?= $procedure->id ?>">

                        <div class="form-group">
                            <label for="procedure">Prosedur</label>
                            <textarea name="procedure" rows="3" class="form-control <?= ($validation->hasError('procedure')) ? 'is-invalid' : '' ?>" placeholder="Prosedur" style="height:auto"><?= old('procedure') ? old('procedure') : $procedure->procedure ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('procedure') ?>
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