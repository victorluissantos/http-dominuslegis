<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prova extends CI_Controller {

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

	public function nova()
	{
		$this->load->view(strtolower(__CLASS__).'/nova.php');
	}

	public function filtro()
	{
		$this->load->view(strtolower(__CLASS__).'/filtro.php');
	}

	public function goprova()
	{
		try {
			if( isset($_GET['ref']) && !empty($_GET['ref'])) {
				$ployer = base64_decode($_GET['ref']);
				$ployer = explode(':', $ployer);
				if( isset($ployer[0]) && isset($ployer[1]) && !empty($ployer[0]) && !empty($ployer[1]) ) {
					$this->data['disciplina'] = $ployer[0];
					$this->data['disciplina_ref'] = $ployer[1];

					$this->data['quantidade_questoes'] = 10;

					/*SELECIONO N NÚMERO DE QUESTOES ALEATORIAMENTE DE UM DETERMINADA MATERIA*/
					$this->load->model('Questoes');
					$crud_questoes =  new Questoes();
					$this->data['questoes'] = $crud_questoes->buildRandNQuestions($this->data['disciplina'], $this->data['quantidade_questoes'], 1);
					/*SALVO A PROVA*/
					$data['usuario_id'] = $_SESSION['usuario']->id;
					$data['data'] = date('Y-m-d H:m:s');
					$data['categoria_id'] = 1; //entra os tipos de prova
					$this->load->model('Provas');
					$crud_prova =  new Provas();
					$this->data['prova_id'] = $_SESSION['prova_id'] = $crud_prova->save($data);
				}
			}
		} catch (Exception $e) {
			die('Arquivo:'.__FILE__.'<br/>Linha:'.__LINE__.'<br/>Error:'.$e->getMessage());
		}
		$this->load->view(strtolower(__CLASS__).'/prova.php', $this->data);
	}

	public function resolve_estudante()
	{
		try {
			if( !empty($_POST)) {
				$this->data['quantidade_questoes'] = 10;
				$this->data['acerto'] = 0;
				$this->data['erro'] = 0;
				$this->data['sem_resposta'] = 0;

				/*SELECIONO N NÚMERO DE QUESTOES ALEATORIAMENTE DE UM DETERMINADA MATERIA*/
				$this->load->model('Questoes');
				$crud_questoes =  new Questoes();
				for ($i=1; $i <= count( $_POST); $i++) { 
					$questao = explode('|', $_POST['questao'.$i]);
					$correta = $crud_questoes->findById($questao[0]);
					if($correta[0]->resposta == $questao[1])
						$this->data['acerto'] = $this->data['acerto'] + 1;
					else
						$this->data['erro'] = $this->data['erro'] + 1;
				}
				$this->data['sem_resposta'] = (($this->data['erro']+$this->data['acerto']) - 10)*-1;
			} else {
				redirect('/sistema/index', 'refresh');
			}
		} catch (Exception $e) {
			die('Arquivo:'.__FILE__.'<br/>Linha:'.__LINE__.'<br/>Error:'.$e->getMessage());
		}
		$this->load->view(strtolower(__CLASS__).'/resultado_estudante.php', $this->data);
	}


	public function estudante()
	{
		try {
			$this->load->model('Disciplinas');
			$crud_disciplinas =  new Disciplinas();
			$this->data['disciplinas'] = $crud_disciplinas->findAll();
			
			$this->load->view(strtolower(__CLASS__).'/estudante.php', $this->data);
		} catch (Exception $e) {
			die('Arquivo:'.__FILE__.'<br/>Linha:'.__LINE__.'<br/>Error:'.$e->getMessage());
		}
	}

}