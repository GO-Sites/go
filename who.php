<?php include "header.php"; ?>

<div class="cursor d-sm-none d-md-block"></div>

<section class="who">
    <div class="container">
        <div class="row">
            <div class="col-12 head">
                <h1 class="title">Um escritório de estratégia de marca,<br>design e inovação que gera valor<br>a partir da criatividade</h1>
                <img src="assets/icons/arrow-down.svg" alt="" class="arrow">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 team naty">
                <div class="overlay">
                    <h1 class="team-name"><b>Natália</b><br>Rebouças</h1>
                    <p class="function">
                        CEO 
                        <button type="button" class="cv" data-toggle="modal" data-target="#exampleModalCenter">
                            <img src="assets/icons/plus.svg" class="cv-icon">
                        </button>
                    </p>
                </div>
            </div>
            <div class="col-md-6 team jorge">
                <div class="overlay">
                    <h1 class="team-name"><b>Jorge</b><br>Carvalho</h1>
                    <p class="function">
                        Diretor de Criação
                        <button type="button" class="cv" data-toggle="modal" data-target="#exampleModalCenter">
                            <img src="assets/icons/plus.svg" class="cv-icon">
                        </button>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 team davi">
                <div class="overlay">
                    <h1 class="team-name"><b>Davi</b><br>Moura</h1>
                    <p class="function">
                        Consultor<br>de Marketing
                        <button type="button" class="cv" data-toggle="modal" data-target="#exampleModalCenter">
                            <img src="assets/icons/plus.svg" class="cv-icon">
                        </button>
                    </p>
                </div>
            </div>
            <div class="col-md-4 team alisson">
                <div class="overlay">
                    <h1 class="team-name"><b>Ali</b><br>Vieira</h1>
                    <p class="function">
                        Designer
                        <button type="button" class="cv" data-toggle="modal" data-target="#exampleModalCenter">
                            <img src="assets/icons/plus.svg" class="cv-icon">
                        </button>
                    </p>
                </div>
            </div>
            <div class="col-md-4 team lucas">
                <div class="overlay">
                    <h1 class="team-name">Lucas<br><b>Weiby</b></h1>
                    <p class="function">
                        Designer
                        <button type="button" class="cv" data-toggle="modal" data-target="#exampleModalCenter">
                            <img src="assets/icons/plus.svg" class="cv-icon">
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modais -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="assets/icons/times.svg" alt="" class="close-icon"></span>
        </button>
        <div class="container container-ps">
            <div class="row">
                <div class="col-md-4 profile">
                </div>
                <div class="col-md-8 text">
                    <div class="header">
                        <h1 class="name">Davi Moura</h1>
                        <p class="function">Consultor de Marketing</p>
                    </div>

                    <div class="body">
                        <h3 class="description">Descrição</h3>
                        <p class="description-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Quis ratione incidunt reprehenderit laudantium porro veniam quibusdam nisi? Animi 
                            incidunt architecto saepe cumque velit quasi repellendus repellat aliquid. 
                            Voluptas porro architecto, quis corrupti pariatur nam sit eum doloremque tempore 
                            soluta necessitatibus iure, autem neque minus ab sint reprehenderit laudantium beatae! 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<?php include "footer.php"; ?>