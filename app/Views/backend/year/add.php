<?= $this->extend('backend/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tahun Ajaran</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4><i class="fas fa-calendar"></i> Tahun Ajaran</h4>
                    <a href="<?= base_url('admin/dashboard/school_year'); ?>" class="btn bg-warning text-white py-1"><i class="fas fa-arrow-left circle-icon text-warning"></i> &nbsp;Kembali</a>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/dashboard/school_year/save') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="school_year">Tahun Ajaran</label>
                            <input type="text" name="school_year" class="form-control <?= ($validation->hasError('school_year')) ? 'is-invalid' : '' ?>" placeholder="Tahun Ajaran" value="<?= old('school_year') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('school_year') ?>
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