<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('cursos_model');
	}


	public function index()
	{				
		$data["cursos"] = $this->cursos_model->index();	
		//print_r ($data);		 	
		$data["title"] = "Challenge Webmix - Curso";
		
		$this->load->view('layout/header', $data); //Carregando o Header do Layout
		$this->load->view('curso/cursos', $data);
		$this->load->view('layout/footer', $data); //Carregando o Footer do Layout
	}

	public function new()
	{
		$data["title"] = "Challenge Webmix - Novo Curso";

		$this->load->model('categorias_model'); //carrega modelo categoria para listar as categorias na tela de cadastro de cursos
		$data["categorias"] = $this->categorias_model->index();	

		$this->load->view('layout/header', $data); //Carregando o Header do Layout
		$this->load->view('curso/form-cursos', $data);
		$this->load->view('layout/footer', $data); //Carregando o Footer do Layout
	}

	public function store()
	{
		$curso = $_POST;
		$this->cursos_model->store($curso);		
		redirect('curso');
	}

	public function edit($id)
	{
		
		$data["curso"] = $this->cursos_model->show($id);
		$this->load->model('categorias_model'); //carrega modelo categoria para listar as categorias na tela de cadastro de cursos
		$data["categorias"] = $this->categorias_model->index();	
		//print_r($data)	;
		//exit();
		 	
		$data["title"] = "Challenge Webmix - Editar cursos";

		$this->load->view('layout/header', $data); //Carregando o Header do Layout
		$this->load->view('curso/form-cursos', $data);
		$this->load->view('layout/footer', $data); //Carregando o Footer do Layout
	}

	public function update ($id)
	{
		$curso = $_POST;
		$this->cursos_model->update($id, $curso);
		redirect('curso');		
	}

	public function delete($id)
	{
		$this->cursos_model->destroy($id);
		redirect('curso');
	}

	public function busca()
	{
		$data["cursos"] = $this->cursos_model->index();	
			
		$data["title"] = "Challenge Webmix - Curso";
		
		$this->load->view('layout/header', $data); //Carregando o Header do Layout
		$this->load->view('curso/ajaxsearch', $data);
		$this->load->view('layout/footer', $data); //Carregando o Footer do Layout
		
	}
}





