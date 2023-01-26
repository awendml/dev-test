<?php 

class Conn extends CI_Controller {
	public function index(){
		$this->load->model('m_dev');
		$data['kategori']= $this->m_dev->get_data();

		$this->load->view('v_dev',$data);
	}
}