<?php 
    require_once '../dbkoneksi.php';
?>
<?php
$id = $_GET['idedit'];
$sql = "SELECT * FROM kartu WHERE id = ?";
$r = $dbh->prepare($sql);
$r->execute(array($id));
$hasil = $r->fetch();
?>
            
<form method="POST" action="proses.php">
   <input type ="hidden" name = "id" value="<?php echo $hasil['id']; ?>">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="kode" name="kode" type="text" class="form-control"
        value="<?php echo $hasil['kode']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Kartu</label> 
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
    <label for="diskon" class="col-4 col-form-label">Diskon</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="diskon" name="diskon" value="<?php echo $hasil['diskon']; ?>"
        type="number" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="iuran" class="col-4 col-form-label">Iuran</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="iuran" name="iuran" 
        value="<?php echo $hasil['iuran']; ?>"
        type="number" class="form-control">
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