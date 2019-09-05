<?php

class Home extends CI_Controller{



  function tambah(){ //kalau kia ingin membuka filenya kita tinggal memasukan nama fungsion tsb
    if (@$_POST['submit']) {
      $data = array(
        'kode'=> $this->input->post('kode'), // kita ambil artibut dari database
        'judul'=> $this->input->post('judul'), // kita ambil artibut dari database
        'letak'=> $this->input->post('letak'), // kita ambil artibut dari database
        'genre'=> $this->input->post('genre'), // kita ambil artibut dari database
        'kondisi'=> $this->input->post('kondisi'), // kita ambil artibut dari database
        'tahun'=> $this->input->post('tahun'), // kita ambil artibut dari database
      );
      $this->load->model('db_crud'); // load database
      $simpan = $this->db_crud->simpan($data); // simpan data / tambah data // "db_crud" adalah load database tsb
      if ($simpan) { // fungsi
        redirect(base_url(),'refresh'); // auto reload ke halaman utama
      }

    }else {
      $this->load->view('tambah');
    }
  }


function edit($kode){
  if (@$_POST['submit']) {
      $data = array(
        'kode'=> $this->input->post('kode'), // kita ambil artibut dari database
        'judul'=> $this->input->post('judul'), // kita ambil artibut dari database
        'letak'=> $this->input->post('letak'), // kita ambil artibut dari database
        'genre'=> $this->input->post('genre'), // kita ambil artibut dari database
        'kondisi'=> $this->input->post('kondisi'), // kita ambil artibut dari database
        'tahun'=> $this->input->post('tahun'), // kita ambil artibut dari database
      );
      $this->load->model('db_crud'); // load database
      $edits = $this->db_crud->edit($kode ,$data); // simpan data / tambah data // "db_crud" adalah load database tsb
      if ($edits) { // fungsi
        redirect(base_url(),'refresh'); // auto reload ke halaman utama
      }

    }else {
      $this->load->model('db_crud'); // load database
      $edit['tampil'] = $this->db_crud->getedit($kode); // get edit diambil dari model
      $this->load->view('edit', $edit); // variabel $edit di ambil dari $ edit di atas.. ingat
    }


}

function hapus($kode){
  $this->load->model('db_crud'); // load database
  $hapus = $this->db_crud->gethapus($kode);
  if ($hapus) {
    redirect(base_url(),'refresh');
  }else {
    echo "Gagal Hapus";
  }
}

function index(){
  $this->load->model('db_crud'); //load database
  $data['data'] = $this->db_crud->ambil_tabel()->result(); //fungsi dari array
  $this->load->view('tampil', $data);// buka dengan http://localhost/codeigniter/index.php/home/
}

}

 ?>
