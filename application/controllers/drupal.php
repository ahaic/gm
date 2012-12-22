<?php 

class Drupal extends CI_Controller {
	
	
	
	public function index()
	{
		//echo "sss";
		$this->load->helper('url');
		$this->load->view('drupal/header');
		$this->load->view('drupal/content');
		$this->load->view('drupal/footer');
		
	}
	
	
	public function contact()
	{
		$this->load->view('drupal/page');
		
		$this->load->view('drupal/contact');
		$this->load->view('drupal/footer');
		
		
	}
	
	public function display_location()
	{
		$this->load->view('drupal/page');
		$this->load->view('drupal/display_location');
		$this->load->view('drupal/footer');
	}
	
	public function floor_plan()
	{
		$this->load->view('drupal/page');
		//$this->load->view('drupal/floor_plan');
		
		echo "Floor Plan" ;
		$this->load->view('drupal/footer');
		
		
	}
	
}	
	
?>	
	