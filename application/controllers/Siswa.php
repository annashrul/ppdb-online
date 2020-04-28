<?php 	

class Siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
//		if(authorization()==false)exitApp();
		$this->get = isset($_GET['session']);
//		if(isset($_GET['session']) == null){
//			echo 'eweh get';die();
//		}else{
//			if(authorization()==false)exitApp();
//		}
	}

	public function index(){

		if($this->get == null){
			redirect('siswa/auth');
		}else{
			if(authorization()==true) {
				$data['title'] = 'PPDB ONLINE';
				$data['content'] ='siswa/'.base64_decode($_GET['q']);
				$data['page'] = base64_decode($_GET['q']);
				$this->load->view('siswa/index', $data);
			}else{
				exitApp();
			}
		}
	}


}
