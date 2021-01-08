<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<!-- Carregando o Header do Layout -->
    
        
        <!-- Conteúdo -->
        <main role="main" class="flex-shrink-0">
			<div class="container">
				<h1 class="mt-5">Categorias de Cursos</h1>
				<p class="lead">Lista de Categorias de Cursos</p>
				<div class="row">
					<div class="col">
						<a href="<?= base_url()?>categoria/new" class="btn btn-primary">Cadastrar Nova</a>
					</div>
				
				
				</div>
				
			
				<div class="row">
					<div class="col">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Nome Categoria</th>									
									<th scope="col">Status</th>
									<th scope="col">Ação</th>						
								</tr>
							</thead>
							<tbody>
                                <?php foreach($categorias as $categoria) : ?> 
                                    <tr>
                                        <th scope="row"><?= $categoria['idcategorias'] ?></th>
                                        <td><?= $categoria['nome'] ?></td>
                                        <td><?= $categoria['status'] ?></td>								
                                        <td>
                                            <a href="<?= base_url() ?>categoria/edit/<?= $categoria['idcategorias']?>" class="btn btn-sm btn-warning">Alterar</a>
                                            <!-- <a href="#" class="btn btn-sm btn-danger">Excluir</a> -->
                                        </td>
                                    
                                    </tr>
                                <?php endforeach; ?>
								
							</tbody>
						</table>
					</div>
				
				</div>

			</div>
		</main>
    




    <!-- Carregando o footer do layout -->
	