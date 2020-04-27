<?php

class Ppdb extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->control = 'ppdb';
		$this->site = $this->m_website->site($this->uri->segment(1));
	}

	public function index(){
		$site = $this->m_website->site($this->uri->segment(1));
		$this->session->set_userdata(array("sess_sch"=>$site));
		$data['data'] =  $site;
		$data['content'] = $this->control.'/home';
		$data['page']='';
		if ($data['data']) {
			$side_menu=array('home','form_pendaftaran','kelulusan','invoice');
			if(isset($_GET['v'])){
				if(isset($_GET['v'])==array_search($_GET['v'],$side_menu)){
					$data['content'] = $this->control.'/'.$_GET['v'];
					$data['page'] = $_GET['v'];
				}
				if($_GET['v']=='logout'){
					ob_clean();
//					$this->session->sess_destroy();
					$this->session->unset_userdata('sess_login');
					redirect($site['slug']);
				}
			}
			$this->load->view("ppdb/wrapper",$data);
		}
		else {
			echo 'anyinh';
		}
	}

	public function pendaftaran(){
		$response=array();
		$input=$this->input->post();
		$this->db->trans_begin();
		$dataSiswa=array(
			"id_sekolah"=>$input['id_sekolah'],
			"id_user"=>$input['id_siswa'],
			"no_register"=>$this->m_website->generate_code("REG",1),
			"nama"=>$input['nama'],
			"jenis_kelamin"=>$input['jenis_kelamin']=="L"?0:1,
			"nisn"=>$input['nisn'],
			"nik"=>$input['nik_siswa'],
			"tempat_lahir"=>$input['tempat_lahir'],
			"tgl_lahir"=>$input['tgl_lahir'],
			"agama"=>$input['agama'],
			"telp"=>$input['telp'],
			"nohp"=>$input['nohp'],
			"email"=>$input['email'],
			"kebutuhan_khusus"=>$input['kebutuhan_khusus'],
			"tempat_tinggal"=>$input['tempat_tinggal'],
			"kendaraan"=>$input['kendaraan'],
		);
		$this->m_crud->create_data("tbl_siswa",$dataSiswa);
		$dataAlamat=array(
			"id_siswa"=>$input['id_siswa'],
			"alamat"=>$input['alamat'],
			"rt"=>$input['rt'],
			"rw"=>$input['rw'],
			"desa"=>$input['kelurahan'],
			"kecamatan"=>$input['kecamatan'],
			"kabupaten"=>$input['kota'],
			"provinsi"=>$input['provinsi'],
		);
		$this->m_crud->create_data("tbl_siswa_alamat",$dataAlamat);
		$dataOrtu=array();
		for($i=1;$i<$_POST['nomor'];$i++){
			$dataOrtu[]=array(
				"id_siswa"=>$input['id_siswa'],
				"nama"=>$input['nama_ortu_'.$i],
				"thn_lahir"=>$input['tahun_lahir_'.$i],
				"nik"=>$input['nik_ortu_'.$i],
				"pendidikan"=>$input['pendidikan_'.$i],
				"pekerjaan"=>$input['pekerjaan_'.$i],
				"penghasilan_bulanan"=>$input['penghasilan_bulanan_'.$i],
				"kebutuhan_khusus"=>$input['kebutuhan_khusus_ortu_'.$i],
				"hubungan"=>$input['hubungan_'.$i],
			);
		}
		$this->db->insert_batch("tbl_siswa_wali",$dataOrtu);
		$config['upload_path'] = './assets/upload/kk/';   // Directory
		$config['allowed_types'] = 'jpg|jpeg|bmp|png';  //type of images allowed
		$config['max_size'] = '30720';   //Max Size
		$config['encrypt_name'] = TRUE;   // For unique image name at a time
		$this->load->library('upload', $config);  //File Uploading library
		$this->upload->do_upload('scan_kk');  // input name which have to upload
		$scan_kk=$this->upload->data();   //variable which store the path

		$config2['upload_path'] = './assets/upload/akta/';   // Directory
		$config2['allowed_types'] = 'jpg|jpeg|bmp|png'; //type of images allowed
		$config2['max_size'] = '30720';   //Max Size
		$config2['encrypt_name'] = TRUE;   // For unique image name at a time
		$this->upload->initialize($config2); //we can not use upload library again and again it will not initialize again and again so thats why i have used initialize
		$this->upload->do_upload('scan_akta');  // File Name
		$scan_akta=$this->upload->data(); // store the name of the file

		$config3['upload_path'] = './assets/upload/raport/';   // Directory
		$config3['allowed_types'] = 'jpg|jpeg|bmp|png'; //type of images allowed
		$config3['max_size'] = '30720';   //Max Size
		$config3['encrypt_name'] = TRUE;   // For unique image name at a time
		$this->upload->initialize($config3); //we can not use upload library again and again it will not initialize again and again so thats why i have used initialize
		$this->upload->do_upload('scan_raport');  // File Name
		$scan_raport=$this->upload->data(); // store the name of the file

		$config4['upload_path'] = './assets/upload/skl/';   // Directory
		$config4['allowed_types'] = 'jpg|jpeg|bmp|png'; //type of images allowed
		$config4['max_size'] = '30720';   //Max Size
		$config4['encrypt_name'] = TRUE;   // For unique image name at a time
		$this->upload->initialize($config4); //we can not use upload library again and again it will not initialize again and again so thats why i have used initialize
		$this->upload->do_upload('scan_skl');  // File Name
		$scan_skl=$this->upload->data(); // store the name of the file

		$dataTambahan=array(
			"id_siswa"=>$input['id_siswa'],
			"berat_badan"=>$input['berat_badan'],
			"jarak"=>$input['jarak'],
			"waktu_tempuh"=>$input['waktu_tempuh'],
			"jml_saudara"=>$input['jml_saudara'],
			"scan_akta"=>$scan_akta['file_name'],
			"scan_kk"=> $scan_kk['file_name'],
			"scan_skl"=>$scan_skl['file_name'],
			"scan_raport"=>$scan_raport['file_name'],
		);

		$this->m_crud->create_data("tbl_siswa_tambahan",$dataTambahan);

		$dataPrestasi=array(
			"id_siswa"=>$input['id_siswa'],
			"title"=>$input['title'],
			"tingkat"=>$input['tingkat'],
			"tahun"=>$input['tahun'],
			"penyelenggara"=>$input['penyelenggara'],
		);
		$this->m_crud->create_data("tbl_siswa_prestasi",$dataPrestasi);

		$dataKelulusan=array(
			"id_siswa"=>$input['id_siswa'],
			"id_sekolah"=>$input['id_sekolah'],
			"status"=>0
		);
		$this->m_crud->create_data("tbl_kelulusan",$dataKelulusan);
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$response=array("status"=>"failed","msg"=>"terjadi kesalahan","result"=>'');
		}else {
			$this->db->trans_commit();
			$response=array("status"=>"failed","msg"=>"berhasil","result"=>$input);

		}
		echo json_encode($response);

	}

	public function kelulusan(){
		$where="tk.id_sekolah='".$this->session->sess_sch['id']."'";
		if(isset($_POST['any'])!=null && $_POST['any']){
			$where.="AND ts.no_register like '%".$_POST['any']."%' OR ts.nama like '%".$_POST['any']."%' OR ts.email like '%".$_POST['any']."%'";
		}
		$read_data = $this->m_crud->join_data("tbl_kelulusan tk","tk.*,ts.no_register,ts.nama,ts.email,ts.jenis_kelamin",array("tbl_siswa ts"),array("ts.id=tk.id_siswa"),$where);
		$result='';
		if($read_data!=null){
			foreach($read_data as $row){
				$result.='
				<tr>
					<td class="text-bold-500">'.$row["no_register"].'</td>
					<td>'.$row["nama"].'</td>
					<td class="text-bold-500">'.$row["email"].'</td>
					<td>'.$row["jenis_kelamin"].'</td>
					<td>'.$row["status"].'</td>
				</tr>
				';
			}
		}else{
			$result.='<tr><td colspan="6" align="center">Data Tidak Tersedia</td></tr>';
		}
		echo json_encode(array('result_table'=>$result));
	}

	public function transfer(){
		$this->db->trans_begin();
		$dataUser=array(
			"id_sekolah"=>$this->session->data_user['id_sekolah'],
			"nama"=>$this->session->data_user['nama'],
			"email"=>$this->session->data_user['email'],
			"password"=>$this->session->data_user['password'],
			"type_login"=>$this->session->data_user['type_login'],
		);
		$this->m_crud->create_data("tbl_user",$dataUser);
		$read=$this->m_crud->get_data("tbl_user","id,nama","email='".$dataUser['email']."'");
		$dataInvoice = array(
			"id_bank"=>$_POST['id_bank'],
			"id_user"=>$read['id'],
			"id_sch"=>$this->session->data_user['id_sekolah'],
			"no_invoice"=>$this->m_website->generate_code("INV",$this->session->data_user['id_sekolah']),
			"jumlah"=>$_POST['nominal'],
			"pengirim"=>$read['nama'],
			"status"=>0
		);
		$this->m_crud->create_data("tbl_invoice",$dataInvoice);
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			echo json_encode(array('msg'=>'gagal','status'=>false));
		}else {
			$this->db->trans_commit();
			$this->session->unset_userdata('data_user');

			echo json_encode(array('msg'=>'berhasil','status'=>true,'result'=>$this->session->all_userdata()));

		}

	}
	public function auth($action=null){
		$response=array();
		if($action=='register'){
			$input=$this->input->post();
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				if($input!=null&&$input!=''){
					$dataUser = array(
						'id_sekolah' => $input['id_sch'],
						'nama'=>$input['nama'],
						'email'=>$input['email'],
						'password'=>password_hash($input['password'],PASSWORD_BCRYPT),
						'type_login'=>0
					);
					$this->session->set_userdata(array('data_user'=>$dataUser));
					$response=array('msg'=>'berhasil','status'=>true,'result'=>$this->session->data_user);
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
		elseif($action=='login'){
			$input=$this->input->post();
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				if($input!=null&&$input!=''){
					$read=$this->m_crud->get_data("tbl_user","*","email='".$input['emails']."'");
					if($read!=null){
						if(password_verify($input['passwords'],$read['password'])){
							$session=array(
								'idr' 	=> $input['param'].rand(5, 15),
								'id_sekolah' => $read['id_sekolah'],
								'id' 	=> $input['param'].$read['id'],
								"email"	=> $input['param'].$read['email'],
								"nama"	=> $read['nama'],
								"uid"	=> $read['id']
							);
							$this->session->set_userdata(array('sess_login'=>$session));
							$response=array('msg'=>'berhasil','status'=>true,'result'=>$session);
						}else{
							$response=array('msg'=>'password tidak sesuai','failed'=>true,'result'=>'');
						}
					}
					else{
						$response=array('msg'=>'email atau password tidak sesuai','failed'=>true,'result'=>'');
					}
				}
			}
			echo json_encode($response);
		}

	}

	public function generate_code(){
		echo json_encode(array('no_register'=>$_POST['noreg']));
	}
}
