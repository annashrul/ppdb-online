<?php 	

class Sekolah extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('encryption');
		$this->load->library('encrypt');
		// $this->load->module('Models/Model');
	}
	public function index(){
		$this->masuk();
	}

	public function masuk(){
		if($this->session->userdata("logged_in")==TRUE){
			redirect("sekolah/beranda/".bin2hex($this->encrypt->encode($this->session->userdata("username"))));
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
							"redirect"=>base_url("sekolah/Beranda/".bin2hex($this->encrypt->encode($this->session->userdata("username"))))
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
		$read = $this->M_crud->read_data("tbl_siswa","*","id_sekolah=1",null,null,$pagin["perPage"], ($pagin['start']));
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
								<div class="btn-group dropdown">
									<button type="button" class="btn btn-success waves-effect btn-rounded btn-custom btn-sm dropdown-toggle" data-toggle="dropdown"> Pilih <span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li>
											<a onclick="detail(' . $row['id'] . ')"
											class="waves-effect"><i class="fa fa-tasks"></i>&nbsp;Detail</a>
										</li>
										<li>
											<a onclick="edit(' . $row['id'] . ')"
											class="waves-effect"><i class="fa fa-edit"></i>&nbsp;Edit</a>
										</li>
										<li>
											<a onclick="hapus(' . $row['id'] . ')"
											class="waves-effect"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
										</li>
									</ul>
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
		echo json_encode(array('status' => "success", "msg" => "Data berhasil diperbaharui!"));
	}

	public function deleteSiswaAlamat(){
		$id = $this->input->post('id');
		$read = $this->M_crud->delete_data("tbl_siswa_alamat","tbl_siswa_alamat.id = $id");
		echo json_encode(array('status' => "success", "msg" => "Data berhasil dihapus!"));
	}
}
?>
