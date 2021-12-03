<?php 
Class MoreApps extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        cek_login();
    }

	public function index()
	{
		$data['judul'] = 'More Apps';
		$data['tbmoreapps'] = $this->ModelTbMoreApps->getSearch();

		//$data['tbmoreapps'] = $this->ModelTbMoreApps->get_tb_moreapps();
		//$data['feed_back'] = $this->ModelFeedback->get_feedback();
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		//$data['anggota'] = $this->ModelUser->getUserLimit()->result_array();

		$this->load->view('templates/topbar_lain', $data);
		$this->load->view('moreapps/index', $data);

		
	}

	public function search(){
		//$data['judul'] = 'Profile';
		$data['judul_more'] = 'Moreapps';

		$data['tbmoreapps'] = $this->ModelTbMoreApps->get_tb_moreapps();

		//$keyword = $this->input->post('keyword');
		//$data['tbmoreapps'] = $this->ModelTbMoreApps->get_keyword($keyword);

		
		
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

		//$data['feed_back'] = $this->ModelFeedback->get_feedback();
		//$data['anggota'] = $this->ModelUser->getUserLimit()->result_array();


		

		$this->load->view('templates/topbar_lain', $data);
		$this->load->view('moreapps/index', $data);

	}

}
?>
