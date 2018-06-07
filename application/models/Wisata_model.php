<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        
    }
    
    public function Getdata_wisata()
    {
        $query= $this->db->get('data_wisata');
		return $query->result();
    }
    
    public function insertWisata()
    {   
        $object = array(
            'nama' => $this->input->post('nama'),
            'lokasi' => $this->input->post('lokasi'),
            'tarif' => $this->input->post('tarif'),
            'tanggal' => $this->input->post('tanggal'),
            'gambar' => $this->upload->data('file_name'),
    );
           $this->db->insert('data_wisata',$object);
    }

    public function getWisata($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('data_wisata');
        return $query->result();
    }
    public function gambar($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('data_wisata')->row();
  }

    public function UpdateById($id)
    {
        $object = array(
            'nama' => $this->input->post('nama'),
            'lokasi' => $this->input->post('lokasi'),
            'tarif' => $this->input->post('tarif'),
            'tanggal' => $this->input->post('tanggal'),
            'gambar' => $this->upload->data('file_name'),
    );
        $this->db->where('id',$id);
        $this->db->update('data_wisata',$object);    
    }

    public function Delete($id)
    {
       
        $this->db->where('id',$id);
        $this->db->delete('data_wisata');
    
    }

}

/* End of file Wisata_model.php */
