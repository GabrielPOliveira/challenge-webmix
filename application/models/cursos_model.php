<?php

class Cursos_model extends CI_Model {

        //Lista os curso
        public function index()
        {          
            return  $this->db->query('SELECT idcursos, cursos.nome as ncurso, conteudo, cursos.status, categorias.nome as ncategoria FROM `cursos`, categorias where `cursos`.`categorias` = `categorias`.`idcategorias` order BY (ncategoria)
            ')->result_array();                      
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
        
        //função para realizar a busca
        function fetch_data($query)
        {
            $this->db->select("*");
            $this->db->from("cursos");
            if($query != '')
            {
            $this->db->like('idcursos', $query);
            $this->db->or_like('nome', $query);
            $this->db->or_like('categorias', $query);
            $this->db->or_like('status', $query);           
            }
            $this->db->order_by('categorias');
            return $this->db->get();
        }
}

