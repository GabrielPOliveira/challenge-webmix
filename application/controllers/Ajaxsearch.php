<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxsearch extends CI_Controller {

 function index()
 {
  $this->load->view('ajaxsearch');
 }

 function fetch()
 {
  $output = '';
  $query = '';
  $this->load->model('cursos_model');
  if($this->input->post('query'))
  {
   $query = $this->input->post('query');
  }
  $data = $this->cursos_model->fetch_data($query);
  $output .= '
  <div class="row">
  <div class="col">
      <table class="table">
          <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome Curso</th>
                  <th scope="col">Categoria</th>                  
                  <th scope="col">Status</th>                  					
              </tr>
          </thead>
					
  ';
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {
    $output .= '
    <tbody>   
        <tr>
        <td>'.$row->idcursos.'</td>
        <td>'.$row->nome.'</td>
        <td>'.$row->categorias.'</td>
        <td>'.$row->status.'</td>       
        </tr>
    </tbody>
    ';
   }
  }
  else
  {
   $output .= '<tr>
       <td colspan="5">Nenhum dado encontrado</td>
      </tr>';
  }
  $output .= '</table>';
  echo $output;
 }
 
}
