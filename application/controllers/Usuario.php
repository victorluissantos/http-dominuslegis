<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

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
		$this->load->view(strtolower(__CLASS__).'/index.php');
	}

	public function cadastrar()
	{
		try {
			$msg = array(
				'status' => FALSE,
				'msg' => 'DONT HAVE PERISSSON ACCESS IT'
				);
			if( isset($_POST) && !empty($_POST) ) {
				if( !empty($data) ) {
					$msg['msg'] = 'USUÁRIO JÁ CADASTRADO';
				}
				$this->load->model('Usuarios');
				$crud_usuarios =  new Usuarios();
				if(!$crud_usuarios->save($_POST)){
					$msg['msg'] = 'TENTE NOVAMENTE MAIS TARDE';
				} else{
					$msg['status'] = TRUE;
					$msg['msg'] = 'CADASTRO REALIZADO COM SUCESSO';
				}
			}
		} catch (Exception $e) {
			$msg['msg'] = 'Arquivo:'.__FILE__.'<br/>Linha:'.__LINE.'<br/>Error:'.$e->getMessage();
		}
		die(json_encode($msg));
	}

	public function logar()
	{
		try {
			$msg = array(
				'status' => FALSE,
				'msg' => 'DONT HAVE PERISSSON ACCESS IT'
				);
			if( isset($_POST) && !empty($_POST) ) {
				if( !empty($data) ) {
					$msg['msg'] = 'USUÁRIO JÁ CADASTRADO';
				}
				$this->load->model('Usuarios');
				$crud_usuarios =  new Usuarios();
				$data = $crud_usuarios->find($_POST);
				if( !empty($data[0]) ) {
					$msg['status'] = TRUE;
					$msg['msg'] = 'OLÁ '.$data[0]->nome;
					$_SESSION['usuario'] = $data[0];
					
					$this->load->model('Avisos');
					$crud_avisos =  new Avisos();
					$_SESSION['avisos'] = $crud_avisos->findAllCurrent();
				} else{
					$msg['status'] = FALSE;
					$msg['msg'] = 'LOGIN OU SENHA INVÁLIDOS';
				}
			}
		} catch (Exception $e) {
			$msg['msg'] = 'Arquivo:'.__FILE__.'<br/>Linha:'.__LINE.'<br/>Error:'.$e->getMessage();
		}
		die(json_encode($msg));
	}

	public function logout()
	{
		try {
			// remove all session variables
			session_unset();
			// destroy the session
			session_destroy();
			redirect(base_url('sistema/index'), 'refresh');
		} catch (Exception $e) {
			die('Arquivo:'.__FILE__.'<br/>Linha:'.__LINE.'<br/>Error:'.$e->getMessage());
		}
	}
}
