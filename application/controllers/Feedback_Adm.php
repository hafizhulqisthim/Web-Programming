<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Feedback_Adm extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        cek_login();
    }

	public function index()
	{
		$data['judul'] = 'Home_Adm';
		$data['feed_back'] = $this->ModelFeedback->getSearch();
		$data['administrator'] = $this->ModelAdm->cekData(['email_adm' => $this->session->userdata('email_adm')])->row_array();

		$this->load->view('templates/topbar_2', $data);
		$this->load->view('templates_adm/header', $data);
		$this->load->view('templates_adm/index_adm', $data);
        //$this->load->view('templates_adm/sidebar', $data);
		$this->load->view('prof_adm/feedback_adm_view', $data);

        
		//$this->load->view('user/index', $data);

	}

	public function input_feedback()
	{
		$data = 
		[
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'comment' => $this->input->post('comment'),
		];

		$this->ModelFeedback->add_feedback($data,'feedback');
		redirect('home');
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Data';
		$where = array('id'=> $id);
		$data['feed_back'] = $this->ModelFeedback->edit_data($where, 'feedback')->result();

		$this->load->view('templates/topbar_lain', $data);
		$this->load->view('edit',$data);
		
	}

	public function update()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$comment = $this->input->post('comment');

		$data = array(
			'name' => $name, 
			'email' => $email, 
			'comment' => $comment,
		);

		$where = array('id' => $id);

		$this->ModelFeedback->update_data($where, $data, 'feedback');
		redirect('home');
	}

	public function delete($id)
	{	
		$where = array('id' => $id);
		$this->ModelFeedback->delete_data($where,'feedback');
		redirect('home');
	}

}
?>
