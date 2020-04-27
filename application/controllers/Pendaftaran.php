<?php


class Pendaftaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
//		$this->get = isset($_GET['session']);
		$this->control = 'pendaftaran';


	}



	public function index(){
		$data['data'] = $this->m_website->site($_GET['q']);
		$defaultHash = password_hash($data['data']['id'].$data['data']['nama'],PASSWORD_BCRYPT);
		$verifDefault=password_verify($data['data']['id'].$data['data']['nama'],isset($_GET['session']));
		$verifSession=password_verify($this->session->idr.$data['data']['id'],isset($_GET['session']));
		$check = $this->session->id!=null?$verifSession:$verifDefault;
//		var_dump($defaultHash);die();
//		if($check==true && count($_GET) == 2){
			if ($data['data'] != null) {
				$side_menu=array('home','form_pendaftaran','kelulusan','invoice');
				if($_GET['page']==$side_menu[0]||$_GET['page']==$side_menu[1]||$_GET['page']==$side_menu[2]||$_GET['page']==$side_menu[3]){
					$data['page'] = 'home';
					$data['content'] = $this->control . '/home';
					$this->load->view($this->control . '/wrapper', $data);
				}
				else{
					$this->load->view('welcome_message');
				}
			}
			else {
				$this->load->view('welcome_message');
			}
//		}
//		else {
//			$this->load->view('welcome_message');
//		}

	}

	public function pendaftaran($action=null){
		$data=$this->data;
		$data['page'] = 'form_pendaftaran';
		$data['content']=$this->control.'/'.$data['page'];
		if($action=='simpan'){
			$namaLengkap='nama_lengkap';//1
			$namaPanggilan='nama_panggilan';//2
			$jk='jenis_kelamin';//3
			$tmpLahir='tempat_lahir';//4
			$tglLahir='tanggal_lahir';//5
			$anakKeBerapa='anak_ke_berapa';//6
			$jmlAnakKandung='jumlah_anak_kandung';//7
			$jmlAnakTiri='jumlah_anak_tiri';//8
			$jmlAnakAngkat='jumlah_anak_angkat';//9
			$statusAnak='status_anak';//10
			$bahasa='bahasa';//11
			$agama='agama';//12
			$alamatSiswa='alamat_siswa';//13
			$rt='rt';//14
			$rw='rw';//15
			$kel='kelurahan';//16
			$kec='kecamatan';//17
			$kota='kota';//18
			$telp='telepon';//19
			$email='email';//20
			$tingalPada='tinggal_pada';//21
			$pergiDengan='pergi_dengan';//22
			$jarak='jarak';//23
			$beratBadan='berat_badan';//24
			$tinggiBadan='tinggi_badan';//25
			$golonganDarah='golongan_darah';//26
			$riwayatPenyakit='riwayat_penyakit';//27
			$namaAyah='nama_ayah';//28
			$namaIbu='nama_ibu';//29
			$tmpLahirAyah='tempat_lahir_ayah';//30
			$tglLahirAyah='tanggal_lahir_ayah';//31
			$tmpLahirIbu='tempat_lahir_ibu';//32
			$tglLahirIbu='tanggal_lahir_ibu';//33
			$alamatOrtu='alamat_ortu';//34
			$rtOrtu='rt_ortu';//35
			$rwOrtu='rw_ortu';//36
			$kecOrtu='kecamatan_ortu';//37
			$kelOrtu='kelurahan_ortu';//38
			$kotaOrtu='kota_ortu';//39
			$emailOrtu='email_ortu';//40
			$input=$this->input->post();
//		$data=array(
//			$namaLengkap=>$input[$namaLengkap],
//			$namaPanggilan=>$input[$namaPanggilan],
//			$jk=>$input[$jk],
//			$tmpLahir=>$input[$tmpLahir],
//			$tglLahir=>$input[$tglLahir],
//			$anakKeBerapa=>$input[$anakKeBerapa],
//			$jmlAnakKandung=>$input[$jmlAnakKandung],
//			$jmlAnakTiri=>$input[$jmlAnakTiri],
//			$jmlAnakAngkat=>$input[$jmlAnakAngkat],
//			$statusAnak=>$input[$statusAnak],
//			$bahasa=>$input[$bahasa],
//			$agama=>$input[$agama],
//			$alamatSiswa=>$input[$alamatSiswa],
//			$rt=>$input[$rt],
//			$rw=>$input[$rw],
//			$kel=>$input[$kel],
//			$kec=>$input[$kec],
//			$kota=>$input[$kota],
//			$email=>$input[$email],
//			$telp=>$input[$telp],
//			$tingalPada=>$input[$tingalPada],
//		);
			$result=array();
			foreach($this->input->post() as $row){
				array_push($result,$row);
			}
			$this->session->unset_userdata('res_daftar');
//		$this->session->sess_destroy();
			$this->session->set_userdata(array('res_daftar'=>$result));
			echo json_encode(array('res'=>$result));
		}
		else{
			$this->load->view($this->control.'/wrapper',$data);
		}


	}

	public function transfer(){
		$session = array(
			'id'=>$_POST['id'],
			'idr'=>$_POST['idr'],
			'email'=>$_POST['emails'],
			'nama'=>$_POST['namas'],
		);
		$this->session->set_userdata($session);
		echo json_encode(array('msg'=>'berhasil','status'=>true));
	}

	public function auth($action=null){
		$response=array();
		if($action=='login'){
			$input=$this->input->post();
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				if($input!=null&&$input!=''){
					$site = $this->m_website->site($input['param']);
					$dataUser = array(
						'id_sekolah' => $site['id'],
						'nama'=>$input['nama'],
						'email'=>$input['email'],
						'password'=>password_hash($input['password'],PASSWORD_BCRYPT),
						'type_login'=>0
					);
					$this->m_crud->create_data("tbl_user",$dataUser);
					$read=$this->m_crud->get_data("tbl_user","*","email='".$input['email']."'");
					$session=array(
						'idr' 	=> $input['param'].rand(5, 15),
						'ids' 	=> $input['param'].$read['id_sekolah'],
						'id' 	=> $input['param'].$read['id'],
						"email"	=> $input['param'].$read['email'],
						"nama"	=> $read['nama']
					);
					$data=array(
						'result'=> $session,
						"url"	=> "pendaftaran?q=".$input['param']
					);
					$response=array('msg'=>'berhasil','status'=>true,'result'=>$data);
				}
			}
			echo json_encode($response);
		}
		elseif ($action == 'cek_email') {
			$where = "email='".$_POST['email']."'";
			$cek_email = $this->m_crud->get_data("tbl_user", "email", "$where");
			if ($cek_email == null) {
				echo 'true';
			} else {
				echo 'false';
			}
		}

	}

	public function logout(){
		$this->session->unset_userdata();
		$this->session->sess_destroy();
		ob_clean();
		redirect('pendaftaran?q='.$_GET['q']);
	}
}
