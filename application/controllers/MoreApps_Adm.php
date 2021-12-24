<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class MoreApps_Adm extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        cek_login();
    }

	public function index()
	{
		$data['judul'] = 'Home_Adm';
		$data['tbmoreapps'] = $this->ModelTbMoreApps->getSearch();
		//$data['feed_back'] = $this->ModelFeedback->get_feedback();
		$data['administrator'] = $this->ModelAdm->cekData(['email_adm' => $this->session->userdata('email_adm')])->row_array();

		$this->load->view('templates/topbar_2', $data);
		$this->load->view('templates_adm/header', $data);
		$this->load->view('templates_adm/index_adm', $data);
		$this->load->view('moreapps/moreapps_adm_view', $data);

        
		//$this->load->view('user/index', $data);

	}

}
?>
