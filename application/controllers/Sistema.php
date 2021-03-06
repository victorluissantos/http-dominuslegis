<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistema extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		if( isset($_SESSION['usuario']) && !empty($_SESSION['usuario']) ) { //verifico se esta logado e busco os avisos
			$this->load->model('Avisos');
			$crud_avisos =  new Avisos();
			$_SESSION['avisos'] = $crud_avisos->findAllCurrent();
		}

		$this->load->view(strtolower(__CLASS__).'/index.php');
	}
}
