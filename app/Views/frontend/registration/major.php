<?= $this->extend('frontend/registration/layout/template') ?>

<?= $this->section('registration') ?>
<form action="<?= base_url('registration/major') ?>" class="mt-5" method="post">
    <?= csrf_field() ?>

    <div class="form-group">
        <label for="major_id">Jurusan</label>
        <select name="major_id" class="custom-select <?= ($validation->hasError('major_id')) ? 'is-invalid' : '' ?>">
            <?php foreach($majors as $m) { ?>
            <option value="<?= $m->id ?>"><?= $m->name ?></option>
            <?php } ?>
        </select>
        <div class="invalid-feedback">
            <?= $validation->getError('major_id') ?>
        </div>
    </div>
    <div class="form-group">
        <label for="reason">Alasan Memilih Jurusan</label>
        <textarea name="reason" rows="3" class="form-control <?= ($validation->hasError('reason')) ? 'is-invalid' : '' ?>" placeholder="Alasan Memilih Jurusan"><?= old('reason') ?></textarea>
        <div class="invalid-feedback">
            <?= $validation->getError('reason') ?>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
    </div>
</form>
<?= $this->endSection() ?>