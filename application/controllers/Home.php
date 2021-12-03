<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        cek_login();
    }

	public function index()
	{
		$data['judul'] = 'Unlist3';
		$data['slogan1'] = 'EACH UNAVAILABLE WAS HERE!';
		$data['slogan2'] = 'Take into yours';
		$data['footer_quotes'] = '“Understanding is the bridge between two minds; love is the bridge between two souls.”';

		$data['applikasi'] = $this->ModelAplikasi->get_aplikasi();
		$data['feed_back'] = $this->ModelFeedback->get_feedback();
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
        


		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('home', $data);
		$this->load->view('templates/footer', $data);
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
