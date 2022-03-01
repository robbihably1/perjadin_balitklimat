<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function construct()
    {
        parent::__construct();
        
    }
    public function index()
    {
        $this->load->helper('url');
        $data['title']="PERJADIN BALITKLIMAT | Dashboard";
        $this->load->view('templates/v_template',$data);
		$this->load->view('templates/v_dashboard',$data);
        $this->load->view('templates/footer',$data);
		
    }
    public function logout(){
		$data = array(
			'email'	=> '',
			'logged_in'	=> false
		);

		$this->session->sess_destroy();
		redirect('login');
	}
}