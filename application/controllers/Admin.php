<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();		
		$this->load->library('template');		
		$this->load->model('m_data');
        $this->load->helper('url');

	if($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}

	}
 
	function index(){
		$data['ramadhan'] = $this->m_data->tampil_jadwal()->result();
		$this->template->main('admin/content/dashboard',$data);
	}

	function about(){
		$this->template->main('admin/content/about');
	}

}

?>