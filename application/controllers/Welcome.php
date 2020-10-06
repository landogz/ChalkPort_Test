<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	  public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

	public function index()
	{
		$this->load->model('queries');
		$datas = $this->queries->get_records();
		$this->load->view('welcome_message',['records'=>$datas]);
	}

	public function create()
	{
		$this->load->view('create');
	}
	public function recentdeleted()
	{
		$this->load->model('queries');
		$datas = $this->queries->get_deletedrecords();
		$this->load->view('recentdeleted',['records'=>$datas]);
	}

	public function logs()
	{
		$this->load->model('queries');
		$datas = $this->queries->get_logsrecords();
		$this->load->view('logs',['records'=>$datas]);
	}

	public function save()
	{
		$config['upload_path']          = './uploads/';
	    $config['allowed_types']        = 'gif|jpg|png';
		$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('profile_pic'))
	            {
	                $error = array('error' => $this->upload->display_errors());
	            }
	        else
	            {
	                $data = array('upload_data' => $this->upload->data());

					$this->form_validation->set_rules('Name','Name','required');
					$this->form_validation->set_rules('Email','Email','required');
					$this->form_validation->set_rules('Address','Address','required');
					$this->form_validation->set_rules('Contact','Address','required');

					if($this->form_validation->run())
					{
						$data = $this->input->post();

						if($this->upload->data('file_name') != '')
						{
							$data += [ "profile_pic" => $this->upload->data('file_name') ];
						}
						else{
							$data += [ "profile_pic" => "Default.png" ];
						}

						$data += [ "profile_pic" => $this->upload->data('file_name') ];
						 unset($data['submit']);
						$this->load->model('queries');
						if($this->queries->addContact($data))
							{
								

								$this->session->set_flashdata('msg','Contact Saved Successfully');
							}
							else
							{
								$this->session->set_flashdata('msg','Failed to Save!');
							}
							  return redirect('welcome');
					}
					else{
						$this->load->view('create');
					}
	            }
	}


	public function edit($id)
	{

		$this->load->model('queries');
		$datas = $this->queries->get_singlerecords($id);
		$this->load->view('update',['datas'=>$datas]);
	}

		public function update($id)
	{

					$config['upload_path']          = './uploads/';
	                $config['allowed_types']        = 'gif|jpg|png';

	                $this->load->library('upload', $config);

	                if ( ! $this->upload->do_upload('profile_pic'))
	                {
	                        $error = array('error' => $this->upload->display_errors());
	                }
	                else
	                {
	                        $data = array('upload_data' => $this->upload->data());

	                        $this->form_validation->set_rules('Name','Name','required');
							$this->form_validation->set_rules('Email','Email','required');
							$this->form_validation->set_rules('Address','Address','required');
							$this->form_validation->set_rules('Contact','Address','required');

							if($this->form_validation->run())
							{
								$data = $this->input->post();

								if($this->upload->data('file_name') != '')
								{
									$data += [ "profile_pic" => $this->upload->data('file_name') ];
								}
								
								unset($data['submit']);
								$this->load->model('queries');
								if($this->queries->UpdateContact($data,$id))
									{
										$this->session->set_flashdata('msg','Contact Updated Successfully');
									}
									else
									{
										$this->session->set_flashdata('msg','Failed to Save!');
									}
									 return redirect('welcome');
							}
							else{
								$this->load->view('create');
							}
	                }
		
	}
			public function delete($id)
				{
						$data = $this->input->post();
						unset($data['submit']);
						$this->load->model('queries');
						if($this->queries->deleteContact($id))
							{
								$this->session->set_flashdata('msg','Contact Deleted Successfully');


							}
							else
							{
								$this->session->set_flashdata('msg','Failed to Delete!');
							}
							 return redirect('welcome');
				}

	public function restore($id)
	{
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->restoreContact($id))
				{
					$this->session->set_flashdata('msg','Contact Restored Successfully');
				}
			else
				{
					$this->session->set_flashdata('msg','Failed to Restore!');
				}
			return redirect('welcome/recentdeleted');
	}
}
