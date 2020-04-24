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

	public function pendaftaran(){
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
		$this->session->set_userdata(array('res_daftar'=>$result));
		echo json_encode(array('res'=>$result));
	}

	public function auth(){
		$res=$this->session->userdata('res_daftar');
		echo '<pre>';
		var_dump($res);
		$this->load->view('siswa/auth');
	}

	public function logout(){
		$this->session->unset_userdata();
		$this->session->sess_destroy();
		ob_clean();
		redirect();
	}
}
