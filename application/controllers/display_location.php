<?php 

class Display_location extends CI_Controller {
	
	
	
	public function display_location()
	{
		$this->load->view('drupal/page');
		$this->load->view('drupal/display_location');
		$this->load->view('drupal/footer');
	}
	

}	
	
?>	
	