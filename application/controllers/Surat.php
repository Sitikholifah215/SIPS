<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Surat_model');
    }
    
    public function index()
    {
        $this->load->view('admin/data_organisasi') ;
       // $this->create();
        // $this->Dashboard();
        // $this->load->view('surat/dashboard');        
    }

    
    public function Dashboard()
    {
        $this->load->view('surat/dashboard');
    }

    public function Maintenance()
    {
        // $data['data'] = $this->Wisata_model->Getdata_wisata();
		// $this->load->view('Wisata/Maintenance', $data);
    }

    public function Aboutus()
    {
        $this->load->view('Wisata/Contact');
    }

    public function Create()
    {
        // $this->form_validation->set_rules('nama','Nama','trim|required');
        // $this->form_validation->set_rules('lokasi','Lokasi','trim|required');
        // $this->form_validation->set_rules('tarif','Tarif','trim|required');
        // $this->form_validation->set_rules('tanggal','Tanggal','trim|required');
        
        // load model
        // // $this->load->model('Wisata_model');

        // if($this->form_validation->run()==FALSE)
        // {
            $this->load->view('admin/tambah_user');
        // }
        // else
        // {
        //     $config['upload_path']      = './assets/gambar_wisata/';
        //     $config['allowed_types']    = 'gif|jpg|png';
        //     $config['max_size']         = '1000000000';
        //     $config['max_width']        = '10240';
        //     $config['max_height']       = '6780';

        //     $this->load->library('upload', $config) ;
            
        //     if(! $this->upload->do_upload('gambar'))
        //     {
        //         $error = array('error' => $this->upload->display_errors());
        //         $this->load->view('Wisata/Input', $error);
        //        // print_r($error);
        //     }
        //     else
        //     {
        //         $this->Wisata_model->insertWisata();
        //         $this->load->view('Wisata/Input_sukses');
        //     }
        }    

    public function Update($id)
    {
        $this->form_validation->set_rules('nama','Nama','trim|required');
        $this->form_validation->set_rules('lokasi','Lokasi','trim|required');
        $this->form_validation->set_rules('tarif','Tarif','trim|required');
        $this->form_validation->set_rules('tanggal','Tanggal','trim|required');

        $data['data_wisata']= $this->Wisata_model->getWisata($id);

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('Wisata/Edit_input', $data);
        }
        else
        {
            $config['upload_path']      = './assets/gambar_wisata/';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['max_size']         = '1000000000';
            $config['max_width']        = '10240';
            $config['max_height']       = '6780';

            $this->load->library('upload', $config) ;
            
            if(! $this->upload->do_upload('gambar'))
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Wisata/Edit_input', $error);
                // print_r($error);
            }
            else
            {
                $this->Wisata_model->UpdateByid($id);
                $this->load->view('Wisata/Edit_input_sukses');
            }
        }
    }
    
    public function Delete($id)
    {
        $this->Wisata_model->delete($id);
        $this->load->view('Wisata/Hapus');
    }

}

/* End of file Wisata.php */
