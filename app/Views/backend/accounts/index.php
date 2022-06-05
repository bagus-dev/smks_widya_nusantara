<?= $this->extend('backend/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Siswa Baru</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-users"></i> Siswa Baru</h4>
                </div>
                <div class="card-body">
                    <div class="border p-2 p-md-3" style="border-radius:5px">
                        <table id="example2" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tempat, Tanggal Lahir</th>
                                    <th>Lulusan Dari / Asal Sekolah</th>
                                    <th>Jurusan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach($users as $u) {
                                ?>
                                <tr>
                                    <td><?= $no++."." ?></td>
                                    <td><?= $u->fullname ?></td>
                                    <td><?= $u->place_birth.", ".date('d/m/Y',strtotime($u->date_birth)) ?></td>
                                    <td><?= $u->graduate_from !== '' ? $u->graduate_from : $u->from_school ?></td>
                                    <td><?= $u->name ?></td>
                                    <td>
                                        <?php
                                            if($u->nickname === '') {
                                                echo '<span class="bg-warning p-2 rounded text-white">Biodata Belum Lengkap</span>';
                                            } elseif($u->name === '') {
                                                echo '<span class="bg-warning p-2 rounded text-white">Jurusan Belum Dipilih';
                                            } elseif($u->certificate === '' OR $u->skhu === '' OR $u->family_card === '') {
                                                echo '<span class="bg-warning p-2 rounded text-white">Berkas Belum Lengkap</span>';
                                            } else {
                                                echo '<span class="bg-success p-2 rounded text-white">Sudah Lengkap</span>';
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url('admin/dashboard/accounts/'.url_title($u->fullname, '-', true).'/'.$u->user_id) ?>" class="btn btn-success" title="Lihat Detail"><i class="fas fa-eye"></i></a>
                                            <a href="<?= base_url('admin/dashboard/accounts/print/'.$u->user_id) ?>" class="btn btn-primary" target="_blank" title="Cetak"><i class="fas fa-print"></i></a>
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