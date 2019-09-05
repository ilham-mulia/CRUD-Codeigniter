<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/css/materialize.css'); ?>" rel="stylesheet"/>
  </head>
  <body>
    <h1>Aplikasi Kaset</h1>
    <br>

<a href="http://localhost/codeigniter_Kaset/index.php/home/tambah" class="btn waves-effect waves-light" style="margin-left:20px;">Tambah Data</a>
<table class="table">
    <thead>
        <tr>
            <th class="text-center">Kode</th>
            <th>Judul</th>
            <th>Letak</th>
            <th>Genre</th>
            <th>Kondisi</th>
            <th>Tahun</th>
            <th>Actions</th>
        </tr>
    </thead>
    <?php

    foreach ($data as $tampil) { // $data di ambil dari home.php dan $tampil hanya sebuah variable baru
    ?>
    <tbody>
        <tr>
            <td class="text-center"> <?php echo $tampil->kode; ?></td>
            <td> <?php echo $tampil->judul; ?></td>
            <td> <?php echo $tampil->letak; ?></td>
            <td> <?php echo $tampil->genre; ?></td>
            <td> <?php echo $tampil->kondisi; ?></td>
            <td> <?php echo $tampil->tahun; ?></td>
            <td>
              <a href="<?php echo base_url('index.php/home/edit/').$tampil->kode?>" class="btn btn-primary btn-xs">Edit</a>
              <a href="<?php echo base_url('index.php/home/hapus/').$tampil->kode?>" class="btn btn-info btn-xs">Hapus</a>

            </td>
        </tr>

    </tbody>
    <?php
    }

     ?>
</table>


	<script src="<?php echo base_url('assets/js/material-kit.js'); ?>" type="text/javascript"></script>
  </body>
</html>
