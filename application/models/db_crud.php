<?php
/**
 *
 */
class Db_crud extends CI_ModeL
{

  function ambil_tabel(){
  return $this->db->get('kaset'); //ambil database
  }


function simpan($data){
  return $this->db->insert('kaset',$data); // simpan data
}
function edit($kode,$data){
$this->db->where('kode', $kode);
  return $this->db->update('kaset',$data); // edit data
}

function getedit($kode){
  $this->db->where('kode', $kode);
  return $this->db->get('kaset')->row();
}
function gethapus($kode){
  $this->db->where('kode', $kode);
  return $this->db->delete('kaset');
}



}


 ?>
