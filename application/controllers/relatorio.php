<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorio  extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
 
	public function index()
	{		

		$this->load->model('Relatorio_model', 'model', TRUE);

		$autores = $this->model->listar_autores();


		foreach ($autores as $autor) {
			
				$relatorio['nome_autor'] = $autor->author_name;

				$busca_total_ebooks = $this->model->contar_ebooks($autor->author_id);

				$relatorio['total_ebooks'] = $busca_total_ebooks['total'];

				$busca_total_vendas = $this->model->somar_vendas($autor->author_id);
				$relatorio['valor_vendas'] = $busca_total_vendas['total'];

				$data['dados'][$autor->author_id]=$relatorio;

		}

		$this->load->view('relatorio_vendas.php',$data);


	}	
	

}
