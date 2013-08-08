<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CI_Front_Template
{
	
    
	public function __construct()
	{	
		$this->CI =& get_instance();
	}
	
	public function load_template($data=array("content"=>"" , "title"=>""))
	{
        $headerdata = $data;
		$this->CI->load->view("front/template/header",$headerdata);
		$this->CI->load->view("front/".$data["view_file"],$data);		
		$this->CI->load->view("front/template/footer");	
    }
    
}
?>