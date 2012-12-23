<?php 

class Floor_plan extends CI_Controller {
	
	
	
	public function index()
	{
		$this->load->view('drupal/page');
		$this->load->view('drupal/floor_plan');
		
	
		$this->load->view('drupal/footer');
		
		
	}
	
}	
	
?>	
	