<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller
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
		$this->template->main('admin/content/tableJadwal',$data);
	}

	function tambah(){
		$this->template->main('admin/content/inputJadwal');
	}

	function tambah_aksi()
	{ 
		$data = array(
			'tgl' => $this->input->post('tgl'),
			'imsak' => $this->input->post('imsak'),
			'subuh' => $this->input->post('subuh'),
			'terbit' => $this->input->post('terbit'),
			'dhuha' => $this->input->post('dhuha'),
			'dzuhur' => $this->input->post('dzuhur'),
			'ashar' => $this->input->post('ashar'),
			'maghrib' => $this->input->post('maghrib'),
			'isya' => $this->input->post('isya')
			);
		$this->m_data->input_data($data,'ramadhan');
		redirect('jadwal');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['ramadhan'] = $this->m_data->edit_data($where,'ramadhan')->result();
		$this->template->main('admin/content/editJadwal',$data);
	}

	function update(){
	$data = array(
			'id' => $this->input->post('id'),
			'tgl' => $this->input->post('tgl'),
			'imsak' => $this->input->post('imsak'),
			'subuh' => $this->input->post('subuh'),
			'terbit' => $this->input->post('terbit'),
			'dhuha' => $this->input->post('dhuha'),
			'dzuhur' => $this->input->post('dzuhur'),
			'ashar' => $this->input->post('ashar'),
			'maghrib' => $this->input->post('maghrib'),
			'isya' => $this->input->post('isya')
			);
 
	$where = array(
		'id' => $this->input->post('id')
	);
 
	$this->m_data->update_data($where,$data,'ramadhan');
	redirect('jadwal');
}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'ramadhan');
		redirect('jadwal');
	}

}

?>