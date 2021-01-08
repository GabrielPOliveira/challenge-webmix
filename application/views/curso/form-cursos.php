<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main role="main" class="flex-shrink-0">

    <div class="container"> 
    <h2 class="mt-5">Formulário de Cursos</h2>
    <?php if(isset($curso)) : ?>
        <form action="<?= base_url() ?>curso/update/<?= $curso['idcursos'] ?>" method="post">
    <?php else : ?>
        <form action="<?= base_url() ?>curso/store" method="post">
    <?php endif; ?>
          
            <div class="form-group">
                <div class="row">
                    <div class="col">
                            <label for="exampleFormControlInput1">Nome</label>
                            <input type="text" name="nome" class="form-control"  value="<?= isset($curso) ? $curso['nome'] : "" ?>" id="exampleFormControlInput1" placeholder="Informe o nome do curso">
                    </div>
                        <div class="col">
                            <label for="exampleFormControlSelect1">Categorias</label>
                            <select class="form-control" name="categorias" id="exampleFormControlSelect1">
                            
                                <?php if(isset($curso)) : ?>

                                    <?php foreach($categorias as $categoria) : ?>                                         
                                        <option  <?= $curso['categorias'] == $categoria['idcategorias'] ? 'selected' : '' ?> value="<?= $categoria['idcategorias']?>"> <?= $categoria['nome']?> </option>
                                    <?php endforeach; ?>  

                                <?php else : ?>

                                    <?php foreach($categorias as $categoria) : ?> 
                                                                   
                                        <option value="<?= $categoria['idcategorias'] ?>"><?= $categoria['nome'] ?></option>
                                    <?php endforeach; ?>      

                                <?php endif; ?>
                              
                            </select>
                        </div>
                   
                </div>                
             </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Conteúdo</label>
                <textarea class="form-control" name="conteudo" id="exampleFormControlTextarea1" rows="3"> <?= isset($curso) ? $curso['conteudo'] : "" ?> </textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Status</label>
                <input type="text" name="status" class="form-control" value="<?= isset($curso) ? $curso['status'] : "" ?>" id="exampleFormControlInput1" placeholder="Informe o status do curso">
            </div>
                        
            <div class="cold-md-6">
                <button type="submit" class="btn btn-success btn-xs">Salvar</button>
                <a href="<?= base_url()?>curso" class="btn btn-danger btn-xs">Cancelar</a>

            </div>
        </form>

    </div>

</main>