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
                    <form action="<?= base_url('admin/dashboard/school_year/update') ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="id" value="<?= $year->id ?>">

                        <div class="form-group">
                            <label for="school_year">Tahun Ajaran</label>
                            <input type="text" name="school_year" class="form-control <?= ($validation->hasError('school_year')) ? 'is-invalid' : '' ?>" placeholder="Tahun Ajaran" value="<?= old('school_year') ? old('school_year') : $year->school_year ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('school_year') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="custom-select <?= ($validation->hasError('status')) ? 'is-invalid' : '' ?>">
                                <option value="0" <?php if(old('status') !== null){if(old('status') == '0'){echo 'selected';}}else{if($year->status == "0"){echo 'selected';}} ?>>Tidak Aktif</option>
                                <option value="1" <?php if(old('status') !== null){if(old('status') == '1'){echo 'selected';}}else{if($year->status == "1"){echo 'selected';}} ?>>Aktif</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('status') ?>
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