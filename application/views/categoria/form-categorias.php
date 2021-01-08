<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main role="main" class="flex-shrink-0">

    <div class="container"> 
    <h2 class="mt-5">Formulário de Categorias</h2>
    <?php if(isset($categoria)) : ?>
        <form action="<?= base_url() ?>categoria/update/<?= $categoria['idcategorias'] ?>" method="post">
    <?php else : ?>
        <form action="<?= base_url() ?>categoria/store" method="post">
    <?php endif; ?>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nome</label>
                <input type="text" name="nome" class="form-control"  value="<?= isset($categoria) ? $categoria['nome'] : "" ?>" id="exampleFormControlInput1" placeholder="Informe o nome da Categoria">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Status</label>
                <input type="text" name="status" class="form-control" value="<?= isset($categoria) ? $categoria['status'] : "" ?>" id="exampleFormControlInput1" placeholder="Informe o status da Categoria">
            </div>
            
            <div class="cold-md-6">
                <button type="submit" class="btn btn-success btn-xs">Salvar</button>
                <a href="<?= base_url()?>categoria" class="btn btn-danger btn-xs">Cancelar</a>

            </div>
        </form>

    </div>

</main>