<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

		<!-- Conteúdo -->
		<main role="main" class="flex-shrink-0">
			<div class="container">
				<h1 class="mt-5">Cursos</h1>
				<p class="lead">Busca de cursos</p>
				<div class="row">
					<div class="col">
                        <a href="<?= base_url()?>curso/new" class="btn btn-primary">Cadastrar Novo</a>                    
						<a href="<?= base_url()?>curso" class="btn btn-info">Voltar para Listagem</a>
						<!-- <a href="<?= base_url()?>curso/busca" class="btn btn-success">Buscar</a> -->
					</div>
					<div class="col">					
						
						<div class="form-group">
							<div class="input-group">                                                                                     
								<input type="text" name="search_text" id="search_text" placeholder="Busca" class="form-control" />
							</div>
						</div>
					</div>							
				</div>
			
	
                 <div id="result">
                                        
                 </div>
                <div style="clear:both"></div>
  
		</main>

