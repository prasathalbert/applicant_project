<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	public $msg;
	public function __construct()
	{	
		parent::__construct();
        $this->load->model("users_model");	
	}
    
    public function index()
	{
	    $data = array(
						"view_file" => "contact/list",
						"title"=>"Contact Form",
						"content_title"=>"Contact Form",
						"content"=>"",
                        "user_list"=>$this->users_model->getUser(),
						"error"=>$this->msg
						);
		$this->front_template->load_template($data);
	}
    public function view($id="")
	{
	   if($id=="")
        redirect(site_url("contact/"));	
	    $data = array(
						"view_file" => "contact/view",
						"title"=>"Contact view",
						"content_title"=>"Contact view",
						"content"=>"",
                        "user_list"=>$this->users_model->getUser(array("id"=>$id)),
						"error"=>$this->msg
						);
		$this->front_template->load_template($data);
	}
	public function add()
	{
	    $data = array(
						"view_file" => "contact/add",
						"title"=>"Contact Form",
						"content_title"=>"Contact Form",
						"content"=>"",
						"error"=>$this->msg
						);
		$this->front_template->load_template($data);
	}
    
    public function save()
	{
	   
        $this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if ($this->form_validation->run() == FALSE)
		{
		   $this->phpsession->flashsave("succ_msg",validation_errors());
		  redirect(site_url("contact/add"));	
		}
        else
        {
            $ins_array = array(
						"name"=>$this->input->post("username"),												
						"email"=>$this->input->post("email"));
		    $insrtid=$this->users_model->insert($ins_array);
            
        	$this->phpsession->flashsave("succ_msg","<p>Added successfully</p>");
    				redirect(site_url("contact/"));	
        }
	}
    public function delete($id="")
	{
	   if($id=="")
        redirect(site_url("contact/"));	
        $this->users_model->delete(array("id"=>$id));
        $this->phpsession->flashsave("succ_msg","<p>Deleted successfully</p>");
        redirect(site_url("contact/"));	
	    
	}
    
	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */