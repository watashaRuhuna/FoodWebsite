<?php 
class Crud extends CI_Controller 
{
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('Crud_model');
	}
        /*Insert*/
	public function savedata()
	{
		/*load registration view form*/
		$this->load->view('login');
	
		/*Check submit button */
		if($this->input->post('submit'))
		{
			$data['email']=$this->input->post('email');
			$data['password']=$this->input->post('password');
			
			
		}
	}
	
}
?>