<?php

function assets($path){
    return base_url().'assets/'.$path;
}

function dd($arr){
    var_dump($arr);die();
}

function urls($path){
    return base_url().'site/'.$path;
}

function getImage($filename){
    return base_url().'upload/'.$filename;
}

function getFile($filename){
    return base_url().'files/'.$filename;
}

function _uploadImage($image='image'){
    $dis = & get_instance();
    $config['upload_path']          = './upload/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = time();
    $config['overwrite']			= true;
    $config['max_size']             = 3064; // 3MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $dis->load->library('upload', $config);

    if ($dis->upload->do_upload($image)) {
        return $dis->upload->data("file_name");
    }else{
        $error = array('error' => $dis->upload->display_errors());
        // dd($error);
    }
    
    return "default.jpg";
}

function _uploadFiles(){
    $dis = & get_instance();
    $config['upload_path'] = './files/'; //path folder
    $config['allowed_types'] = 'pdf|ppt|pptx|xlsx|xls|doc|docx|ppt|pptx|zip'; //type yang dapat diakses bisa anda sesuaikan
    // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
    $raw_name = explode('.',$_FILES['fileupload']['name']);
    // dd($raw_name);
    $nameoffile=url_title($raw_name[0], 'dash', true);
    $config['file_name'] = $nameoffile.'_'.time();

    // $dis->upload->initialize($config);
    $dis->load->library('upload', $config);

    if(!empty($_FILES['fileupload']['name']))
    {
        if ($dis->upload->do_upload('fileupload'))
        {
            $gbr = $dis->upload->data();
            $file=$gbr['file_name'];
            return $file;
        }else{
            return false;
        }
            
    }else{
        return false;
    }
    
}


if (!function_exists('mySession')) {
	function mySession($session)
	{
		$ci = &get_instance();
		$ci->load->library('session');
		return $ci->session->userdata($session);
	}
}

if (!function_exists('exitApp')) {
	function exitApp()
	{
		$ci = &get_instance();
		$ci->load->library('session');
		$ci->session->unset_userdata();
		$ci->load->driver('cache');
		$ci->session->sess_destroy();
		$ci->cache->clean();
		ob_clean();
		redirect();
	}
}

if (!function_exists('uniq')) {
	function uniq()
	{
		return password_hash(mySession("idr").mySession("id"),PASSWORD_BCRYPT);
	}
}

if (!function_exists('json')) {
	function json($status,$msg,$data)
	{
		return json_encode(array("status"=>$status,"msg"=>$msg,"result"=>$data));
	}
}
if (!function_exists('authorization')) {
	function authorization()
	{
		if(password_verify(mySession("idr").mySession("id"),$_GET['session'])){
			return true;
		}else{
			return false;
		}
	}
}
if (!function_exists('q')) {
	function q($param,$arg)
	{
		if($param==1){
			return '&q='.base64_encode($arg);
		}else{
			return '&oq='.base64_encode($arg);
		}

	}
}
if (!function_exists('rplc_')) {
	function rplc_($text)
	{
		return str_replace("_"," ",$text);
	}
}
