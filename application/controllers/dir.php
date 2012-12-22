<?php 

class Dir extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	
	public function index($dir='/mnt/movies/')
	
	{
		
		echo dirname('/mnt/movies/Photo/06.jpg');
		$this->load->helper('url');
		$data['base_url']=base_url();
		$data['dir']=$dir;
		$data['files']=scandir($dir);
		
		$this->load->view('templates/header',$data);
		$this->load->view('templates/footer');
	
	}
	
	public function view($dir='')
	{
		if (empty($dir))
		{
			$root = urldecode('%2Fmnt%2Fmovies');
			echo $root;
			$data['dir']=$dir;
			#$root = '/mnt/movies/';
			$data['files']=scandir($root);
			$this->load->view('templates/header',$data);
			echo "<hr>";
			$this->load->view('templates/footer');
			
		}
		
		else 
		{
			echo $dir;
			$scan_dir = urldecode($dir);
		
			echo "---  ".$scan_dir."<p>";
			//echo "current dir : ".getcwd().'<p>';
			//echo dirname('/mnt/moives/Photo/06.jpg');
			
			
		}
	
		
		
		
		
	}
	
	public function say()
	{
		echo "says";
	}
}



?>