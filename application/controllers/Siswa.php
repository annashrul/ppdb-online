<?php 	

class Siswa extends CI_Controller
{
	public function index(){
		// dd($this->bcrypt->hash_password('admin1'));
        $this->load->view('landing/index',array('title'=>'PPDB ONLINE'));
	}

}
 ?>