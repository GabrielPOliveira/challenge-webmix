<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('categorias_model');

	}

	
	public function index()
	{
		
		
		$data["categorias"] = $this->categorias_model->index();	
		 	
		$data["title"] = "Challenge Webmix - Categorias";

		$this->load->view('layout/header', $data); //Carregando o Header do Layout
		$this->load->view('categoria/categorias', $data);
		$this->load->view('layout/footer', $data); //Carregando o Footer do Layout

	}

	public function new()
	{
		$data["title"] = "Challenge Webmix - Nova Categorias";
		$this->load->view('layout/header', $data); //Carregando o Header do Layout
		$this->load->view('categoria/form-categorias', $data);
		$this->load->view('layout/footer', $data); //Carregando o Footer do Layout

	}

	public function store()
	{
		$categoria = $_POST;

		
		$this->categorias_model->store($categoria);
		
		redirect('categoria');
	}

	public function edit($id)
	{
		
		$data["categoria"] = $this->categorias_model->show($id);	
		 	
		$data["title"] = "Challenge Webmix - Editar Categorias";

		$this->load->view('layout/header', $data); //Carregando o Header do Layout
		$this->load->view('categoria/form-categorias', $data);
		$this->load->view('layout/footer', $data); //Carregando o Footer do Layout
	}

	public function update ($id)
	{
		$categoria = $_POST;
		
		$this->categorias_model->update($id, $categoria);
		redirect('categoria');
		


	}
}
