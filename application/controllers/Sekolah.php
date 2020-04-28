<?php 	

class Sekolah extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->library('encryption');
		// $this->load->library('encrypt');
		// $this->load->module('Models/Model');
		
		$this->load->model('M_website');
		$this->load->model('M_crud');
	}
	public function index(){
		$this->masuk();
	}

	public function masuk(){
		if($this->session->userdata("logged_in")==TRUE){
			redirect("sekolah/beranda/");
		}else{
			$data['isi'] = 'sekolah/page/sign/index';
        	$this->load->view("sekolah/layout/wrapper.php",$data);
		}
	}

	
	public function in(){
		if(!$this->input->is_ajax_request()) {
			echo "Access Denied!";
		}else{
			$post = $this->input->post(NULL,TRUE);
			$check = $this->Login($post['email'], $post['pass']);
			// var_dump($check);
			if($check=='NULL' || $check=='' || $check==null){
				echo json_encode(
					array(
						"status"=>"error",
						"pesan"=>"User Tidak DItemukan!",
						"class"=>"error",
						"redirect"=>base_url("sekolah/masuk")
					)
				);
			// }elseif($check=='MAT'){
			// 	echo json_encode(
			// 		array(
			// 			"status"=>"error",
			// 			"pesan"=>"maaf kombinasi yang anda masukan salah",
			// 			"class"=>"error",
			// 			"redirect"=>base_url("Sign")
			// 		)
			// 	);
			}else{
				// var_dump($check);
				$sess_data = array(
				'id' 		=> $check['user']->id,
		      	'username'  => $check['user']->slug,
		      	'email'     => $check['user']->email,
		      	'logged_in' => TRUE,
		      	'logged' 	=> TRUE,
				);
				$this->session->set_userdata($sess_data);
					echo json_encode(
						array(
							"status"=>"success",
							"pesan"=>"Login Berhasil",
							"class"=>"success",
							"redirect"=>base_url("sekolah/Beranda/")
						)
					);
			}
		}
	}

	public function out(){
		$this->session->sess_destroy();
		redirect('sekolah/masuk');
	}

	public function Login($username, $password){
			$this->db->where(array('email'=>$username, 'id_type'=>1));
			$user=$this->db->get('tbl_sekolah')->row();
			if($user!=NULL){
				if($this->bcrypt->check_password($password, $user->password)){
				// if($password==$this->encrypt->decode($user->password)){
					$data=array(
						"user"=>$user
					);
					return $data;
				}else{
					return $this->bcrypt->check_password($password, $user->password);
				}
			}
			
		}

	public function beranda(){
		// dd($this->bcrypt->hash_password('admin1'));
		//$this->load->view('sekolah/page/beranda/index',array('title'=>'PPDB ONLINE'));
		$data['isi'] = 'sekolah/page/beranda/index';
        $this->load->view("sekolah/layout/wrapper.php",$data);
	}

	public function siswa($action = null){
		$data['isi'] = 'sekolah/page/siswa/index';
		$this->load->view("sekolah/layout/wrapper.php",$data);
	}

	public function getSiswaFilter($action=null,$page =1 )
    {
		$pagin = $this->M_website->myPagination("tbl_siswa","id",null,10);
		$read = $this->M_crud->read_data("tbl_siswa","*","id_sekolah=1","created_at desc",null,$pagin["perPage"], ($pagin['start']));
        $table = '';
        $total = 0;
		$no = 1;
		
        if($action=='get'){
			
            if($read!=null){
				foreach ($read as $row){
					$table .= '<tr>
							<td>' . $no . '</td>
							<td>' . $row['no_register'] . '</td>
							<td>' . $row['nisn'] . '</td>
							<td>' . $row['nama'] . '</td>
							<td>' . $row['email'] . '</td>
							<td class="text-center">
							<div class="btn-group mb-2 mr-2">
								<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
								<div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -145px, 0px);">
									<a onclick="detail(' . $row['id'] . ')" class="dropdown-item" href="#">Detail</a>
									<a onclick="edit(' . $row['id'] . ')" class="dropdown-item" href="#">Edit</a>
									<a onclick="hapus(' . $row['id'] . ')" class="dropdown-item" href="#">Hapus</a>
								</div>
							</div>
							</td>
						</tr>';
					// $total = $total + ($row['hpp'] * $row['stok']);
					$no++;
				}
			}else{
				$table.='<tr><td colspan="12"><p class="text-center">Data Tidak Tersedia</p></td></tr>';
			}
		}
        echo json_encode(array('table' => $table, "pagination_link"   => $pagin['pagination_link']));
	}
	
	public function getSiswaData(){
		$id = $this->input->post('id');
		$read = $this->M_crud->get_data("tbl_siswa","*","tbl_siswa.id = $id",null,null,null, null);
		echo json_encode(array('status' => "success", "result" => $read));
	}
		
	public function updateSiswa(){
		$id = $this->input->post('_valId');
		$valNoReg = $this->input->post('_valNoReg');
		$valNama = $this->input->post('_valNama');
		$valJk = $this->input->post('_valJk');
		$valNisn = $this->input->post('_valNisn');
		$valNik = $this->input->post('_valNik');
		$valTglLh = $this->input->post('_valTglLh');
		$valTmpLh = $this->input->post('_valTmpLh');
		$valAgama = $this->input->post('_valAgama');
		$valTelp = $this->input->post('_valTelp');
		$valHp = $this->input->post('_valHp');
		$valEmail = $this->input->post('_valEmail');
		$valKebKh = $this->input->post('_valKebKh');
		$valTmpTg = $this->input->post('_valTmpTg');
		$valKend = $this->input->post('_valKend');
		$read = $this->M_crud->update_data("tbl_siswa",array('no_register'=>$valNoReg, 'nama'=>$valNama, 'jenis_kelamin'=>$valJk, 'nisn'=>$valNisn, 'nik'=>$valNik, 'tempat_lahir'=>$valTglLh, 'tgl_lahir'=>$valTmpLh, 'agama'=>$valAgama, 'telp'=>$valTelp, 'nohp'=>$valHp, 'email'=>$valEmail, 'kebutuhan_khusus'=>$valKebKh, 'tempat_tinggal'=>$valTmpTg, 'kendaraan'=>$valKend,),"tbl_siswa.id = $id");
		if($read != null){
			echo json_encode(array('status' => "success", "msg" => "Data berhasil diperbaharui!"));
		} else {
			echo json_encode(array('status' => "error", "msg" => "Data gagal diperbaharui!"));
		}
	}

	public function deleteSiswa(){
		$id = $this->input->post('id');
		$read = $this->M_crud->delete_data("tbl_siswa","tbl_siswa.id = $id");
		if($read != null){
			echo json_encode(array('status' => "success", "msg" => "Data berhasil dihapus!"));
		} else {
			echo json_encode(array('status' => "error", "msg" => "Data gagal dihapus!"));
		}
			
	}

	public function siswa_alamat($action = null){
		$data['isi'] = 'sekolah/page/siswa/siswa_alamat';
		$this->load->view("sekolah/layout/wrapper.php",$data);
	}

	public function getSiswaAlamatFilter($action=null,$page =1 )
    {
		$pagin = $this->M_website->myPagination("tbl_siswa_alamat","id",null,10);
		$read = $this->M_crud->read_data("tbl_siswa_alamat,tbl_siswa","tbl_siswa.nisn, tbl_siswa.nama,tbl_siswa_alamat.id, tbl_siswa_alamat.id_siswa, tbl_siswa_alamat.alamat, tbl_siswa_alamat.rt, tbl_siswa_alamat.rw, tbl_siswa_alamat.desa, tbl_siswa_alamat.kecamatan, tbl_siswa_alamat.kabupaten, tbl_siswa_alamat.provinsi","tbl_siswa.id_sekolah=1 AND tbl_siswa.id = tbl_siswa_alamat.id_siswa",null,null,$pagin["perPage"], ($pagin['start']));
        $table = '';
        $total = 0;
		$no = 1;
		
        if($action=='get'){
			
            if($read!=null){
				foreach ($read as $row){
					$table .= '<tr>
							<td>' . $no . '</td>
							<td>' . $row['nisn'] . '</td>
							<td>' . $row['nama'] . '</td>
							<td>' . $row['alamat'] . '</td>
							<td>' . $row['desa'] . '</td>
							<td>' . $row['rt'].'/'.$row['rw'] . '</td>
							<td>' . $row['kecamatan'] . '</td>
							<td>' . $row['kabupaten'] . '</td>
							<td>' . $row['provinsi'] . '</td>
							<td class="text-center">
							<div class="btn-group mb-2 mr-2">
								<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
								<div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -145px, 0px);">
									<a onclick="detail(' . $row['id'] . ')" class="dropdown-item" href="#">Detail</a>
									<a onclick="edit(' . $row['id'] . ')" class="dropdown-item" href="#">Edit</a>
									<a onclick="hapus(' . $row['id'] . ')" class="dropdown-item" href="#">Hapus</a>
								</div>
							</div>
							</td>
						</tr>';
					// $total = $total + ($row['hpp'] * $row['stok']);
					$no++;
				}
			}else{
				$table.='<tr><td colspan="12"><p class="text-center">Data Tidak Tersedia</p></td></tr>';
			}
		}
        echo json_encode(array('table' => $table, "pagination_link"   => $pagin['pagination_link']));
	}
	
	public function getSiswaAlamatData(){
		$id = $this->input->post('id');
		$read = $this->M_crud->get_data("tbl_siswa_alamat","*","tbl_siswa_alamat.id = $id",null,null,null, null);
		echo json_encode(array('status' => "success", "result" => $read));
	}
	
	public function updateSiswaAlamat(){
		$id = $this->input->post('_valId');
		$valAlm = $this->input->post('_valAlm');
		$valRt = $this->input->post('_valRt');
		$valRw = $this->input->post('_valRw');
		$valDes = $this->input->post('_valDes');
		$valKec = $this->input->post('_valKec');
		$valKab = $this->input->post('_valKab');
		$valProv = $this->input->post('_valProv');
		$read = $this->M_crud->update_data("tbl_siswa_alamat",array('alamat'=>$valAlm,'rt'=>$valRt,'rw'=>$valRw,'desa'=>$valDes,'kecamatan'=>$valKec,'kabupaten'=>$valKab,'provinsi'=>$valProv),"tbl_siswa_alamat.id = $id");
		if($read != null){
			echo json_encode(array('status' => "success", "msg" => "Data berhasil diperbaharui!"));
		} else {
			echo json_encode(array('status' => "error", "msg" => "Data gagal diperbaharui!"));
		}
	}

	public function deleteSiswaAlamat(){
		$id = $this->input->post('id');
		$read = $this->M_crud->delete_data("tbl_siswa_alamat","tbl_siswa_alamat.id = $id");
		if($read != null){
			echo json_encode(array('status' => "success", "msg" => "Data berhasil dihapus!"));
		} else {
			echo json_encode(array('status' => "error", "msg" => "Data gagal dihapus!"));
		}
	}

	public function siswa_prestasi($action = null){
		$data['isi'] = 'sekolah/page/siswa/siswa_prestasi';
		$this->load->view("sekolah/layout/wrapper.php",$data);
	}

	public function getSiswaPrestasiFilter($action=null,$page =1 )
    {
		$pagin = $this->M_website->myPagination("tbl_siswa_prestasi","id",null,10);
		$read = $this->M_crud->read_data("tbl_siswa_prestasi,tbl_siswa","tbl_siswa.nisn, tbl_siswa.nama, tbl_siswa_prestasi.id, tbl_siswa_prestasi.title, tbl_siswa_prestasi.tingkat, tbl_siswa_prestasi.tahun, tbl_siswa_prestasi.penyelenggara","tbl_siswa.id_sekolah=1 AND tbl_siswa.id = tbl_siswa_prestasi.id_siswa",null,null,$pagin["perPage"], ($pagin['start']));
        $table = '';
        $total = 0;
		$no = 1;
		
        if($action=='get'){
			
            if($read!=null){
				foreach ($read as $row){
					$table .= '<tr>
							<td>' . $no . '</td>
							<td>' . $row['nisn'] . '</td>
							<td>' . $row['nama'] . '</td>
							<td>' . $row['title'] . '</td>
							<td>' . $row['tingkat'] . '</td>
							<td>' . $row['tahun'] . '</td>
							<td>' . $row['penyelenggara'] . '</td>
							<td class="text-center">
							<div class="btn-group mb-2 mr-2">
								<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
								<div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -145px, 0px);">
									<a onclick="detail(' . $row['id'] . ')" class="dropdown-item" href="#">Detail</a>
									<a onclick="edit(' . $row['id'] . ')" class="dropdown-item" href="#">Edit</a>
									<a onclick="hapus(' . $row['id'] . ')" class="dropdown-item" href="#">Hapus</a>
								</div>
							</div>
							</td>
						</tr>';
					// $total = $total + ($row['hpp'] * $row['stok']);
					$no++;
				}
			}else{
				$table.='<tr><td colspan="12"><p class="text-center">Data Tidak Tersedia</p></td></tr>';
			}
		}
        echo json_encode(array('table' => $table, "pagination_link"   => $pagin['pagination_link']));
	}
	
	public function getSiswaPrestasiData(){
		$id = $this->input->post('id');
		$read = $this->M_crud->get_data("tbl_siswa_prestasi","*","tbl_siswa_prestasi.id = $id",null,null,null, null);
		echo json_encode(array('status' => "success", "result" => $read));
	}
	
	public function updateSiswaPrestasi(){
		$id = $this->input->post('_valId');
		$valNmPres = $this->input->post('_valNmPres');
		$valTkt = $this->input->post('_valTkt');
		$valThn = $this->input->post('_valThn');
		$valPenye = $this->input->post('_valPenye');
		$read = $this->M_crud->update_data("tbl_siswa_prestasi",array('title'=>$valNmPres,'tingkat'=>$valTkt,'tahun'=>$valThn,'penyelenggara'=>$valPenye),"tbl_siswa_prestasi.id = $id");
		if($read != null){
			echo json_encode(array('status' => "success", "msg" => "Data berhasil diperbaharui!"));
		} else {
			echo json_encode(array('status' => "error", "msg" => "Data gagal diperbaharui!"));
		}
	}

	public function deleteSiswaPrestasi(){
		$id = $this->input->post('id');
		$read = $this->M_crud->delete_data("tbl_siswa_prestasi","tbl_siswa_prestasi.id = $id");
		if($read != null){
			echo json_encode(array('status' => "success", "msg" => "Data berhasil dihapus!"));
		} else {
			echo json_encode(array('status' => "error", "msg" => "Data gagal dihapus!"));
		}
	}

	public function siswa_wali($action = null){
		$data['isi'] = 'sekolah/page/siswa/siswa_wali';
		$this->load->view("sekolah/layout/wrapper.php",$data);
	}

	public function getSiswaWaliFilter($action=null,$page =1 )
    {
		$pagin = $this->M_website->myPagination("tbl_siswa_wali","id",null,10);
		$read = $this->M_crud->read_data("tbl_siswa_wali,tbl_siswa","tbl_siswa.nisn, tbl_siswa.nama, tbl_siswa_wali.id, tbl_siswa_wali.nama as nama_wali, tbl_siswa_wali.nik, tbl_siswa_wali.pendidikan, tbl_siswa_wali.pekerjaan","tbl_siswa.id_sekolah=1 AND tbl_siswa.id = tbl_siswa_wali.id_siswa",null,null,$pagin["perPage"], ($pagin['start']));
        $table = '';
        $total = 0;
		$no = 1;
		
        if($action=='get'){
			
            if($read!=null){
				foreach ($read as $row){
					$table .= '<tr>
							<td>' . $no . '</td>
							<td>' . $row['nisn'] . '</td>
							<td>' . $row['nama'] . '</td>
							<td>' . $row['nama_wali'] . '</td>
							<td>' . $row['nik'] . '</td>
							<td>' . $row['pendidikan'] . '</td>
							<td>' . $row['pekerjaan'] . '</td>
							<td class="text-center">
							<div class="btn-group mb-2 mr-2">
								<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
								<div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -145px, 0px);">
									<a onclick="detail(' . $row['id'] . ')" class="dropdown-item" href="#">Detail</a>
									<a onclick="edit(' . $row['id'] . ')" class="dropdown-item" href="#">Edit</a>
									<a onclick="hapus(' . $row['id'] . ')" class="dropdown-item" href="#">Hapus</a>
								</div>
							</div>
							</td>
						</tr>';
					// $total = $total + ($row['hpp'] * $row['stok']);
					$no++;
				}
			}else{
				$table.='<tr><td colspan="12"><p class="text-center">Data Tidak Tersedia</p></td></tr>';
			}
		}
        echo json_encode(array('table' => $table, "pagination_link"   => $pagin['pagination_link']));
	}
	
	public function getSiswaWaliData(){
		$id = $this->input->post('id');
		$read = $this->M_crud->get_data("tbl_siswa_wali","*","tbl_siswa_wali.id = $id",null,null,null, null);
		echo json_encode(array('status' => "success", "result" => $read));
	}
	
	public function updateSiswaWali(){
		$id = $this->input->post('_valId');
		$valNmWali = $this->input->post('_valNmWali');
		$valTglLh = $this->input->post('_valTglLh');
		$valNik = $this->input->post('_valNik');
		$valPnd = $this->input->post('_valPnd');
		$valPkj = $this->input->post('_valPkj');
		$valPengBln = $this->input->post('_valPengBln');
		$valKebK = $this->input->post('_valKebK');
		$valHub = $this->input->post('_valHub');
		$read = $this->M_crud->update_data("tbl_siswa_wali",array('nama'=>$valNmWali,'thn_lahir'=>$valTglLh,'nik'=>$valNik,'pendidikan'=>$valPnd,'pekerjaan'=>$valPkj,'penghasilan_bulanan'=>$valPengBln,'kebutuhan_khusus'=>$valKebK,'hubungan'=>$valHub),"tbl_siswa_wali.id = $id");
		if($read != null){
			echo json_encode(array('status' => "success", "msg" => "Data berhasil diperbaharui!"));
		} else {
			echo json_encode(array('status' => "error", "msg" => "Data gagal diperbaharui!"));
		}
	}

	public function deleteSiswaWali(){
		$id = $this->input->post('id');
		$read = $this->M_crud->delete_data("tbl_siswa_wali","tbl_siswa_wali.id = $id");
		if($read != null){
			echo json_encode(array('status' => "success", "msg" => "Data berhasil dihapus!"));
		} else {
			echo json_encode(array('status' => "error", "msg" => "Data gagal dihapus!"));
		}
	}

	public function siswa_tambahan($action = null){
		$data['isi'] = 'sekolah/page/siswa/siswa_tambahan';
		$this->load->view("sekolah/layout/wrapper.php",$data);
	}

	public function getSiswaTambahanFilter($action=null,$page =1 )
    {
		$pagin = $this->M_website->myPagination("tbl_siswa_tambahan","id",null,10);
		$read = $this->M_crud->read_data("tbl_siswa_tambahan,tbl_siswa","tbl_siswa.nisn, tbl_siswa.nama, tbl_siswa_tambahan.id, tbl_siswa_tambahan.berat_badan, tbl_siswa_tambahan.jarak, tbl_siswa_tambahan.waktu_tempuh, tbl_siswa_tambahan.jml_saudara, tbl_siswa_tambahan.scan_akta, tbl_siswa_tambahan.scan_kk, tbl_siswa_tambahan.scan_skl, tbl_siswa_tambahan.scan_raport","tbl_siswa.id_sekolah=1 AND tbl_siswa.id = tbl_siswa_tambahan.id_siswa",null,null,$pagin["perPage"], ($pagin['start']));
        $table = '';
        $total = 0;
		$no = 1;
		
        if($action=='get'){
			
            if($read!=null){
				foreach ($read as $row){
					$table .= '<tr>
							<td>' . $no . '</td>
							<td>' . $row['nisn'] . '</td>
							<td>' . $row['nama'] . '</td>
							<td>' . $row['berat_badan'] . '</td>
							<td>' . $row['jarak'] . '</td>
							<td>' . $row['waktu_tempuh'] . '</td>
							<td>' . $row['jml_saudara'] . '</td>
							<td class="text-center">
							<div class="btn-group mb-2 mr-2">
								<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
								<div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -145px, 0px);">
									<a onclick="detail(' . $row['id'] . ')" class="dropdown-item" href="#">Detail</a>
									<a onclick="edit(' . $row['id'] . ')" class="dropdown-item" href="#">Edit</a>
									<a onclick="hapus(' . $row['id'] . ')" class="dropdown-item" href="#">Hapus</a>
								</div>
							</div>
							</td>
						</tr>';
					// $total = $total + ($row['hpp'] * $row['stok']);
					$no++;
				}
			}else{
				$table.='<tr><td colspan="12"><p class="text-center">Data Tidak Tersedia</p></td></tr>';
			}
		}
        echo json_encode(array('table' => $table, "pagination_link"   => $pagin['pagination_link']));
	}
	
	public function getSiswaTambahanData(){
		$id = $this->input->post('id');
		$read = $this->M_crud->get_data("tbl_siswa_tambahan","*","tbl_siswa_tambahan.id = $id",null,null,null, null);
		echo json_encode(array('status' => "success", "result" => $read));
	}
	
	public function updateSiswaTambahan(){
		$id = $this->input->post('_valId');
		$valBb = $this->input->post('_valBb');
		$valJrk = $this->input->post('_valJrk');
		$valWakTem = $this->input->post('_valWakTem');
		$valJmlSdr = $this->input->post('_valJmlSdr');
		$valScAk = $this->input->post('_valScAk');
		$valalScKk = $this->input->post('_valScKk');
		$valScSkl = $this->input->post('_valScSkl');
		$valScRpt = $this->input->post('_valScRpt');
		$read = $this->M_crud->update_data("tbl_siswa_tambahan",array('berat_badan'=>$valBb,'jarak'=>$valJrk,'waktu_tempuh'=>$valWakTem,'jml_saudara'=>$valJmlSdr,'scan_akta'=>$valScAk,'scan_kk'=>$valalScKk,'scan_skl'=>$valScSkl,'scan_raport'=>$valScRpt),"tbl_siswa_tambahan.id = $id");
		if($read != null){
			echo json_encode(array('status' => "success", "msg" => "Data berhasil diperbaharui!"));
		} else {
			echo json_encode(array('status' => "error", "msg" => "Data gagal diperbaharui!"));
		}
	}

	public function deleteSiswaTambahan(){
		$id = $this->input->post('id');
		$read = $this->M_crud->delete_data("tbl_siswa_tambahan","tbl_siswa_tambahan.id = $id");
		if($read != null){
			echo json_encode(array('status' => "success", "msg" => "Data berhasil dihapus!"));
		} else {
			echo json_encode(array('status' => "error", "msg" => "Data gagal dihapus!"));
		}
	}

	public function master_jurusan($action = null){
		$data['isi'] = 'sekolah/page/master/jurusan';
		$this->load->view("sekolah/layout/wrapper.php",$data);
	}

	public function getMasterJurusanFilter($action=null,$page =1 )
    {
		$pagin = $this->M_website->myPagination("tbl_jurusan","id",null,10);
		$read = $this->M_crud->read_data("tbl_jurusan","tbl_jurusan.id, tbl_jurusan.title","tbl_jurusan.id_sekolah=1",null,null,$pagin["perPage"], ($pagin['start']));
        $table = '';
        $total = 0;
		$no = 1;
		
        if($action=='get'){
			
            if($read!=null){
				foreach ($read as $row){
					$table .= '<tr>
							<td>' . $no . '</td>
							<td>' . $row['title'] . '</td>
							<td class="text-center">
							<div class="btn-group mb-2 mr-2">
								<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
								<div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -145px, 0px);">
									<!-- <a onclick="detail(' . $row['id'] . ')" class="dropdown-item" href="#">Detail</a> -->
									<a onclick="edit(' . $row['id'] . ')" class="dropdown-item" href="#">Edit</a>
									<a onclick="hapus(' . $row['id'] . ')" class="dropdown-item" href="#">Hapus</a>
								</div>
							</div>
							</td>
						</tr>';
					$no++;
				}
			}else{
				$table.='<tr><td colspan="12"><p class="text-center">Data Tidak Tersedia</p></td></tr>';
			}
		}
        echo json_encode(array('table' => $table, "pagination_link"   => $pagin['pagination_link']));
	}
	
	public function getMasterJurusanData(){
		$id = $this->input->post('id');
		$read = $this->M_crud->get_data("tbl_jurusan","*","tbl_jurusan.id = $id",null,null,null, null);
		echo json_encode(array('status' => "success", "result" => $read));
	}
	
	public function addMasterJurusan(){
		$id = $this->session->userdata('id');
		$valJur = $this->input->post('_valJur');
		// var_dump($valJur);
		$read = $this->M_crud->create_data("tbl_jurusan",array('title'=>$valJur, 'id_sekolah'=>$id));
		if($read != null){
			echo json_encode(array('status' => "success", "msg" => "Data berhasil ditambah!"));
		} else {
			echo json_encode(array('status' => "error", "msg" => "Data gagal ditambah!"));
		}
	}
	
	public function updateMasterJurusan(){
		$id = $this->input->post('_valId');
		$valJur = $this->input->post('_valJur');
		$read = $this->M_crud->update_data("tbl_jurusan",array('title'=>$valJur),"tbl_jurusan.id = $id");
		if($read != null){
			echo json_encode(array('status' => "success", "msg" => "Data berhasil diperbaharui!"));
		} else {
			echo json_encode(array('status' => "error", "msg" => "Data gagal diperbaharui!"));
		}
	}

	public function deleteMasterJurusan(){
		$id = $this->input->post('id');
		$read = $this->M_crud->delete_data("tbl_jurusan","tbl_jurusan.id = $id");
		if($read != null){
			echo json_encode(array('status' => "success", "msg" => "Data berhasil dihapus!"));
		} else {
			echo json_encode(array('status' => "error", "msg" => "Data gagal dihapus!"));
		}
	}
}
?>
