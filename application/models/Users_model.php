<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function Get(){
       $query = $this->db->get('users');
       return $query->result_all();
    }

    public function Create(){
        $object = array(
            'username'  =>$this->input->post(),
            'password'  =>$this->input->post(),
            'level'     =>$this->input->post()
        );
        $query = $this->db->insert('users', $object);
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
