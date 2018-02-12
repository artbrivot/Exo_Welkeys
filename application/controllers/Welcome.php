<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
        parent::__construct();
    }

	public function index()
	{

		$this->load->helper('url');
		$this->load->view('home');
	}
	public function inscription()
	{
		$this->load->view('inscription');
	}	
	public function dashboardAdmin()
	{
		$this->load->view('dashBoardAdmin');
	}	
	public function dashboardUser()
	{
		$this->load->view('dashboardUser');
	}
	public function connection()
	{
		$this->load->view('connexion');
	}
	public function register()
	{
		$this->load->database();
		if(isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['mail']))
			{
				$data = array(
		        'Nom' => $_GET['nom'],
		        'Prenom' => $_GET['prenom'],
		        'Email' => $_GET['mail']
							  );
				$this->db->insert('comptes', $data);
				$this->load->view('connexion');
			}
	}
	public function login(){
      
 		$this->load->database();
 		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        //Récupérer les données saisies envoyées en POST
        $email = $this->input->post('email');
        $nom = $this->input->post('nom');
        $this->form_validation->set_rules('email', '"Email"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('nom', '"Nom"', 'trim|required|xss_clean');
        
        $result = $this->db->select('Email,Nom')
            ->from('comptes')
            ->where('Email', $email)
            ->where('Nom', $nom)
            ->get()
            ->result();
        	echo $this->form_validation->run();
        
        
}

}
