<?php 	

class Landing extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->site = 'siswa';
	}
	public function index(){
		$data['title'] = 'PPDB ONLINE';
		$data['content'] = 'landing/home';
		$this->load->view('landing/index',$data);
	}

	public function auth($action=null){
		$response=array();
		if($action=='login'){
			$input=$this->input->post();
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				if($input!=null&&$input!=''){
					if($input['email']=='admin@gmail.com' && $input['password'] == 'admin'){
						$session=array(
							'idr' 	=> rand(5, 15),
							'id' 	=> '12345678',
							"email"	=> $this->site.'-'.$input['email'],
						);
						$this->session->set_userdata($session);
						$data=array(
							"url"	=> "pendaftaran?q=".$_POST['param']."&session=".password_hash($session['idr'].$session['id'],PASSWORD_BCRYPT)."&page=home"
						);
						$response=array('msg'=>'berhasil','status'=>true,'result'=>$data);
					}else{
						$response=array('msg'=>'username atau password salah','status'=>false,'result'=>'');
					}
				}
			}
		}
		echo json_encode($response);
	}
}
 ?>
