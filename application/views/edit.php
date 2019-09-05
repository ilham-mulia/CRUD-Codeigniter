<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/materialize.css'); ?>" rel="stylesheet"/>
<h1>Edit Data</h1>

  <form class="" action="" method="post">

<div class="row">
    <div class="col-sm-2">
  	<div class="form-group">
      	<input type="text" value="<?php echo $tampil->kode; ?>" placeholder="Kode" class="form-control" name="kode" />
  	</div>
  </div>
</div>
<div class="row">
    <div class="col-sm-2">
  	<div class="form-group">
      	<input type="text" value="<?php echo $tampil->judul; ?>" placeholder="judul" class="form-control" name="judul"/>
  	</div>
  </div>
</div>

<div class="row">
    <div class="col-sm-2">
  	<div class="form-group">
      	<input type="text" value="<?php echo $tampil->letak; ?>" placeholder="letak" class="form-control" name="letak"/>
  	</div>
  </div>
</div>

<div class="row">
    <div class="col-sm-2">
  	<div class="form-group">
      	<input type="text" value="<?php echo $tampil->genre; ?>" placeholder="genre" class="form-control" name="genre"/>
  	</div>
  </div>
</div>

<div class="row">
    <div class="col-sm-2">
  	<div class="form-group">
      	<input type="text" value="<?php echo $tampil->kondisi; ?>" placeholder="kondisi" class="form-control" name="kondisi"/>
  	</div>
  </div>
</div>

<div class="row">
    <div class="col-sm-2">
  	<div class="form-group">
      	<input type="date" value="<?php echo $tampil->tahun; ?>" placeholder="tahun" class="form-control" name="tahun"/>
  	</div>
  </div>
</div>


<div class="row">
    <div class="col-sm-2">
  	<div class="form-group">
      <input type="submit" name="submit" value="Ubah" class="btn btn-primary">
      <a href="http://localhost/codeigniter_Kaset">Back</a>
  	</div>
  </div>
</div>



  </form>






</form>
