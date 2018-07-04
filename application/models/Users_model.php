<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function Get(){
       $query = $this->db->get('user');
       return $query->result_all();
    }
    
    public function login($username,$password)
	 	{
	 		$this->db->select('*');
	 		$this->db->from('user');
	 		$this->db->where('nim',$username);
	 		$this->db->where('password',$password);
	 		$query = $this->db->get();
	 		if($query->num_rows()==1){
	 			return $query->result();
	 		}else{
	 			return false;
	 		}
	 		
	 	}

    public function GetLogin($data){
        
    }

    public function Create()
    {
        $object = array(
            'nama' => $this->input->post('nama'),
            'nip' => $this->input->post('nip'),
            'tanggal' => $this->input->post('tanggal'),
            'alamat' => $this->input->post('alamat'),
            'foto'=> $this->upload->data('file_name'),
    );
           $this->db->insert('pegawai',$object);
    }

    public function Update($id){
        $object = array(
            'username'  =>$this->input->post(),
            'password'  =>$this->input->post(),
            'level'     =>$this->input->post()
        );
        $query = $this->db->update('users', $object)->where('id', $id);
    }

    public function Delete(){
        $this->db->delete('Table')->where('id', $id);
    }

    

}

/* End of file ModelName.php */
