<?= $this->extend('frontend/registration/layout/template') ?>

<?= $this->section('registration') ?>
<div class="alert alert-info">
    <h3><i class="fas fa-info-circle"></i> Informasi</h3>

    <ol>
        <li>Semua berkas kecuali <b>Pas Foto</b> diunggah dalam format <b>PDF</b>.</li>
        <li>Maksimal ukuran masing-masing file adalah <b>500 KB</b>.</li>
        <li><b>Pas Foto</b> diunggah dengan ukuran <b>4x6</b> (472 x 709 px) dalam format <b>PNG</b>/<b>JPG</b>/<b>JPEG</b> dengan background <b>berwarna merah</b>.</li>
        <li>Pastikan file yang diunggah dapat <b>dibaca dengan jelas</b> dan <b>tidak ada bagian yang tertutup</b>.</li>
    </ol>
</div>

<table class="table mt-5">
    <tbody>
        <tr id="r-certif">
            <?php
                if($file) {
                    if($file->certificate === "") {
            ?>
            <td><b>Ijazah</b></td>
            <td>
                <form method="post" id="form_certif" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <div class="custom-file">
                        <input type="file" name="certificate" id="certificate" class="custom-file-input certif-input" accept=".pdf">
                        <label for="certificate" class="custom-file-label certif-label">Pilih File</label>
                        <div class="text-danger" id="invalidCertif"></div>
                    </div>
                </form>
            </td>
            <?php } else { ?>
            <td colspan="2">
                <div class="alert alert-success w-100 text-center" style="font-size:15pt">
                    <i class="fas fa-check-circle"></i> Ijazah Berhasil Diunggah
                </div>
            </td>
            <?php
                    }
                } else {
            ?>
            <td><b>Ijazah</b></td>
            <td>
                <form method="post" id="form_certif" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <div class="custom-file">
                        <input type="file" name="certificate" id="certificate" class="custom-file-input certif-input" accept=".pdf">
                        <label for="certificate" class="custom-file-label certif-label">Pilih File</label>
                        <div class="text-danger" id="invalidCertif"></div>
                    </div>
                </form>
            </td>
            <?php } ?>
        </tr>
        <tr id="r-skhu">
            <?php
                if($file) {
                    if($file->skhu === "") {
            ?>
            <td><b>Surat Keterangan Hasil Ujan (SKHU)</b></td>
            <td>
                <form method="post" id="form_skhu" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <div class="custom-file">
                        <input type="file" name="skhu" id="skhu" class="custom-file-input" accept=".pdf">
                        <label for="skhu" class="custom-file-label skhu-label">Pilih File</label>
                        <div class="text-danger" id="invalidSkhu"></div>
                    </div>
                </form>
            </td>
            <?php } else { ?>
            <td colspan="2">
                <div class="alert alert-success w-100 text-center" style="font-size:15pt">
                    <i class="fas fa-check-circle"></i> SKHU Berhasil Diunggah
                </div>
            </td>
            <?php
                    }
                } else {
            ?>
            <td><b>Surat Keterangan Hasil Ujan (SKHU)</b></td>
            <td>
                <form method="post" id="form_skhu" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <div class="custom-file">
                        <input type="file" name="skhu" id="skhu" class="custom-file-input" accept=".pdf">
                        <label for="skhu" class="custom-file-label skhu-label">Pilih File</label>
                        <div class="text-danger" id="invalidSkhu"></div>
                    </div>
                </form>
            </td>
            <?php } ?>
        </tr>
        <tr id="r-family">
            <?php
                if($file) {
                    if($file->family_card === "") { 
            ?>
            <td><b>Kartu Keluarga (KK)</b></td>
            <td>
                <form method="post" id="form_kk" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <div class="custom-file">
                        <input type="file" name="family_card" id="family_card" class="custom-file-input" accept=".pdf">
                        <label for="family_card" class="custom-file-label family-label">Pilih File</label>
                        <div class="text-danger" id="invalidFamily"></div>
                    </div>
                </form>
            </td>
            <?php } else { ?>
            <td colspan="2">
                <div class="alert alert-success w-100 text-center" style="font-size:15pt">
                    <i class="fas fa-check-circle"></i> Kartu Keluarga (KK) Berhasil Diunggah
                </div>
            </td>
            <?php
                    }
                } else {
            ?>
            <td><b>Kartu Keluarga (KK)</b></td>
            <td>
                <form method="post" id="form_kk" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <div class="custom-file">
                        <input type="file" name="family_card" id="family_card" class="custom-file-input" accept=".pdf">
                        <label for="family_card" class="custom-file-label family-label">Pilih File</label>
                        <div class="text-danger" id="invalidFamily"></div>
                    </div>
                </form>
            </td>
            <?php } ?>
        </tr>
        <tr id="r-image">
            <?php if($profile->image === "avatar-1.png") { ?>
            <td><b>Pas Foto (4x6)</b></td>
            <td>
                <form method="post" id="form_image" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <div class="custom-file">
                        <input type="file" name="image" id="image" class="custom-file-input" accept=".jpg,.jpeg,.png">
                        <label for="image" class="custom-file-label image-label">Pilih File</label>
                        <div class="text-danger" id="invalidImage"></div>
                    </div>
                </form>
            </td>
            <?php } else { ?>
            <td colspan="2">
                <div class="alert alert-success w-100 text-center" style="font-size:15pt">
                    <i class="fas fa-check-circle"></i> Pas Foto Berhasil Diunggah
                </div>
            </td>
            <?php } ?>
        </tr>
    </tbody>
</table>
<?= $this->endSection() ?>