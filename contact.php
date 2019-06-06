<?php include "header.php"; ?>

<div class="cursor d-sm-none d-md-block"></div>

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="title">Dê início ao seu projeto</h2>
                        <form>
                            Me chamo <input type="text" class="form-control" placeholder="Nome e sobrenome">, representante da empresa  <input type="text" class="form-control" placeholder="Nome da empresa"> 
                            e quero iniciar meu projeto!<br>
                            Vocês podem entrar em contato comigo pelo telefone <input type="text" class="form-control" placeholder="(xx) xxxx-xxxx"> ou através do e-mail <input type="text" class="form-control" placeholder="email@exemplo.com.br">.<br>
                            <div class="form-row services">
                                <div class="form-group col-md-2">
                                    Estou interessado em:
                                </div>
                                <div class="form-group col-md-10">
                                    <input type="checkbox" id="check1" class="checkbox" /><label for="check1" class="label-check">Branding</label>
                                    <input type="checkbox" id="check2" class="checkbox" /><label for="check2" class="label-check">Web</label>
                                    <input type="checkbox" id="check3" class="checkbox" /><label for="check3" class="label-check">Design de Embalagem</label>
                                    <input type="checkbox" id="check4" class="checkbox" /><label for="check4" class="label-check">Editorial</label>
                                    <input type="checkbox" id="check5" class="checkbox" /><label for="check5" class="label-check">Sinalética</label>
                                    <input type="checkbox" id="check6" class="checkbox" /><label for="check6" class="label-check">Comunicação Corporativa</label>
                                </div>
                            </div>
                            <button type="submit" class="button">Let's GO!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>