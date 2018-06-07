<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function hello($param ='', $param2='')
	{
		echo "Hello ... $param $param2";
	}
	
	public function biodataku($nama='', $nim = '', $kelas = '' ,$tempat ='', $tanggal='',$jk='', $alamat='', $nohp='',$jurusan = '', $prodi = '' )
	{
		echo "Nama						: $nama <br>" ;
		echo "NIM						: $nim <br>";
		echo "Kelas						: $kelas <br>";
		echo "Tempat, tanggal lahir		: $tempat , $tanggal <br>";
		echo "Jenis Kelamin 			: $jk <br>";
		echo "Alamat					: $alamat <br>";
		echo "No Hp						: $nohp <br>";
		echo "Jurusan/Prodi				: $jurusan / $prodi <br>";
	}
	
}
