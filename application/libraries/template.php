<?php

class Template {
	protected $_ci;

	function __construct(){
        $this->_ci = &get_instance();
    }

	function main($content, $data = NULL) {
		$data['menu'] = $this->_ci->load->view('admin/template/menu', $data, TRUE);
		$data['topbar'] = $this->_ci->load->view('admin/template/topbar', $data, TRUE);
		$data['content'] = $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] = $this->_ci->load->view('admin/template/footer', $data, TRUE);
		$data['logoutmodal'] = $this->_ci->load->view('admin/template/logout-modal', $data, TRUE);
		
		$this->_ci->load->view('admin/template/index', $data);
	}
}