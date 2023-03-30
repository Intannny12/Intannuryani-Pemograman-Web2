<?php
require_once 'dbkoneksi.php';

// Cek user klik edit
if (!empty($_GET['idedit'])) {
    // simpan idedit
    $edit = $_GET['idedit'];
    // buat query sql
    $sql = "SELECT * FROM pelanggan WHERE id =?";
    // prepare
    $st = $dbh->prepare($sql);
    // eksekusi query
    $st->execute([$edit]);
    // simpan ke baris
    $row = $st->fetch();
} else {
    $row = [];
}


?>

<form method="POST" action="proses_pelanggan.php">
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div>
                </div>
                <input id="kode" name="kode" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="nama" name="nama" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-o-left"></i>
                    </div>
                </div>
                <input id="jk" name="jk" value="L" type="radio" class="form-control">Laki-Laki
                <input id="jk" name="jk" value="P" type="radio" class="form-control">Perempuan
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-up"></i>
                    </div>
                </div>
                <input id="tmp_lahir" name="tmp_lahir" value="" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </div>
                <input id="tgl_lahir" name="tgl_lahir" value="" type="date" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </div>
                <input id="email" name="email" value="" type="email" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="kartu_id" class="col-4 col-form-label">Kartu</label>
        <div class="col-8">
            <?php
            $sqlkartu_id = "SELECT * FROM kartu";
            $rskartu_id = $dbh->query($sqlkartu_id);
            ?>
            <select id="kartu_id" name="kartu_id" class="custom-select">
                <?php
                foreach ($rskartu_id as $rowkartu_id) {
                ?>
                    <option value="<?= $rowkartu_id['id'] ?>"><?= $rowkartu_id['nama'] ?></option>
                <?php
                }
                ?>

            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <?php 

            if (empty($edit)) {
                $value = "Simpan";
            } else {
                $value = "Update";
            }
            
            ?>
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?php echo $value; ?>" />
            <input type="hidden" name="idedit" value="<?php echo $edit; ?>">
        </div>
    </div>
</form>