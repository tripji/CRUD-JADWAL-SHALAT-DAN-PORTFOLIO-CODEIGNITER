<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
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
		$data['admin'] = $this->m_data->tampil_user()->result();
		$this->template->main('admin/content/tableUser',$data);
	}

	function tambah(){
		$this->template->main('admin/content/inputUser');
	}

	function tambah_aksi()
	{ 
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);
		$this->m_data->input_data($data,'admin');
		redirect('user');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['admin'] = $this->m_data->edit_data($where,'admin')->result();
		$this->template->main('admin/content/editUser',$data);
	}

	function update(){
	$data = array(
			'id' => $this->input->post('id'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);
 
	$where = array(
		'id' => $this->input->post('id')
	);
 
	$this->m_data->update_data($where,$data,'admin');
	redirect('user');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'admin');
		redirect('user');
	}

}

?>