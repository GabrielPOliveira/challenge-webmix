<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Controller {


	public function index()
	{
		$data["title"] = "Challenge Webmix - Curso";
		
		$this->load->view('layout/header', $data); //Carregando o Header do Layout
		$this->load->view('curso/cursos', $data);
		$this->load->view('layout/footer', $data); //Carregando o Footer do Layout

	}
}
