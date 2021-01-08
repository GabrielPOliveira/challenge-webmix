<?php

class Cursos_model extends CI_Model {

        //Lista os curso
        public function index()
        {
            //return $this->db->get('cursos')->result_array();
           
            //$this->db->join('cursos', 'cursos.categorias = categorias.idcategorias', 'left')->get()->result_array();

            // $this->db->select('SELECT idcursos, cursos.nome as ncurso, conteudo, cursos.status, categorias.nome as cnome FROM
            //  `cursos`, categorias where `cursos`.`categorias` = `categorias`.`idcategorias` order BY (cnome)
            // ', FALSE);

            return  $this->db->query('SELECT idcursos, cursos.nome as ncurso, conteudo, cursos.status, categorias.nome as ncategoria FROM `cursos`, categorias where `cursos`.`categorias` = `categorias`.`idcategorias` order BY (ncategoria)
            ')->result_array();
            
           //return $this->db->get()->result_array();

        }
        
        //Inserir novo curso no banco de dado
        public function store($curso)
        {
            $this->db->insert('cursos', $curso);
        }
        
        //Buscar curso para edição
        public function show($id)
        {
            return $this->db->get_where('cursos', array(
                'idcursos' => $id
            ))->row_array();
        }

        //Função para fazer update dos dados 
        public function update($id, $curso)
        {
            $this->db->where('idcursos', $id);
            return $this->db->update('cursos', $curso);
        }

        //Função para fazer o delete dos dados 
        public function destroy($id)
		{
			$this->db->where("idcursos", $id);
			return $this->db->delete("cursos");
		}

}