<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    
    public function __construct(){
        parent::__construct();
        $this->load->model('Users_model');
    }
    

    public function index()
    {
        $this->load->view('admin/');
    }

    public function Login()
    {
        $this->load->library('form_validation');
 		$this->form_validation->set_rules('username','Username','trim|required');
 		$this->form_validation->set_rules('password','Password','trim|required|callback_cekDb');
 		if ($this->form_validation->run() == FALSE) {
 			$this->load->view('login/login');
 		} else {
 			redirect('dashboard','refresh');
 		}

    }
    public function cekDb($password)
 	{
 		$this->load->model('users_model');
 		$username = $this->input->post('username');
 		$result = $this->users_model->login($username,$password);
 		if($result){
 			$sess_array = array();
 			foreach ($result as $row) {
 				$sess_array = array(
 					'id'=>$row->id,
 					'username'=> $row->username,
 					'level' => $row->level
 				);
 				$this->session->set_userdata('logged_in',$sess_array);
 			}
 			return true;
 		}else{
 			$this->form_validation->set_message('cekDb',"Login Gagal Username dan Password Tidak Valid");
 			return false;
 		}
 	}

}

/* End of file Controllername.php */
