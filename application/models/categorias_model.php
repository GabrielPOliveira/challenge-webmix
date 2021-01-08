<?php

class Categorias_model extends CI_Model {

    //Lista as categorias de curso
    public function index()
    {
        return $this->db->get('categorias')->result_array();
    }

    //Inserir nova categoria no banco de dado
    public function store($categoria)
    {
        $this->db->insert('categorias', $categoria);
    }


    //Buscar categoria para edição
    public function show($id)
    {
        return $this->db->get_where('categorias', array(
            'idcategorias' => $id
        ))->row_array();
    }

    public function update($id, $categoria)
    {
        $this->db->where('idcategorias', $id);
        return $this->db->update('categorias', $categoria);
    }
}


