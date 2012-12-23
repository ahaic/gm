<?php 

class Contact extends CI_Controller {
	
	
	
	public function index()
	{
		//echo "sss";
		$this->load->view('drupal/page');
		
		$this->load->view('drupal/contact');
		$this->load->view('drupal/footer');
	}
	
	
	
	
	
}	
	
?>	
	