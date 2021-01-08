<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


		<!-- Conteúdo -->
		<main role="main" class="flex-shrink-0">
			<div class="container">
				<h1 class="mt-5">Cursos</h1>
				<p class="lead">Lista de cursos</p>
				<div class="row">
					<div class="col">
						<a href="<?= base_url()?>curso/new" class="btn btn-primary">Cadastrar Novo</a>
						<a href="<?= base_url()?>curso/busca" class="btn btn-success">Buscar</a>
					</div>
					<div class="col">																
					</div>							
				</div>
								
				<div class="row">
					<div class="col">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Nome Curso</th>
									<th scope="col">Categoria</th>									
									<th scope="col">Status</th>
									<th scope="col">Ação</th>						
								</tr>
							</thead>
							<tbody>
								<?php foreach($cursos as $curso) : ?> 
										<tr>
										<th scope="row"><?= $curso['idcursos'] ?></th>
										<td><?= $curso['ncurso'] ?></td>
										<td><?= $curso['ncategoria'] ?></td>										
										<td><?= $curso['status'] ?></td>
										<td>
											<a href="<?= base_url() ?>curso/edit/<?= $curso['idcursos']?>" class="btn btn-sm btn-warning">Alterar</a>											
											<a href="javascript:goDelete(<?= $curso['idcursos']?>)" class="btn btn-sm btn-danger">Excluir</a>
										</td>
										
										</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				
				</div>

			
		</main>

	<script>
		function goDelete(id)
		{
			var myUrl = 'curso/delete/'+id;			
			bootbox.confirm({
				title: "Exclusão de Curso?",
				message: "Você tem certeza que deseja excluir o curso ?",
				buttons: {
					confirm: {
						label: 'Sim',
						className: 'btn-success'
					},
					cancel: {
						label: 'Não',
						className: 'btn-danger'
					}
				},
				callback: function (result) {
					//console.log('This was logged in the callback: ' + result);
					if(result == true)
					{
						window.location.href = myUrl;
					}					
				}
			});
			//bootbox.alert('Registro excluído com sucesso.');
		}
	</script>
