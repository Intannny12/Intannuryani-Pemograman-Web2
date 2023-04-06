<?php 
    require_once '../dbkoneksi.php';
?>
<?php
$id = $_GET['idedit'];
$sql = "SELECT * FROM vendor WHERE id = ?";
$r = $dbh->prepare($sql);
$r->execute(array($id));
$hasil = $r->fetch();
?>
            
<form method="POST" action="proses.php">
   <input type ="hidden" name = "id" value="<?php echo $hasil['id']; ?>">
  <div class="form-group row">
    <label for="nomor" class="col-4 col-form-label">Nomor</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="nomor" name="nomor" type="text" class="form-control"
        value="<?php echo $hasil['nomor']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control" 
        value="<?php echo $hasil['nama']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="kota" class="col-4 col-form-label">Kota</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="kota" name="kota" value="<?php echo $hasil['kota']; ?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="kontak" class="col-4 col-form-label">Kontak</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="kontak" name="kontak" 
        value="<?php echo $hasil['kontak']; ?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>
        <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Update"/>
    </div>
  </div>
</form>