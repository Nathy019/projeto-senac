<?php
include "./includes/cabecalho.php"
?>
<!-- inicio carossel -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner mx-auto p-2" style=" height:40rem;  width:50rem; opacity:0.4;">
        <div class="carousel-item active ">
            <img src="imagem/tatu1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imagem/tatu2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imagem/tatu3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imagem/tatu4.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imagem/tatu5.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imagem/tatucop6.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <!-- inicio indicadores -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>
    <!-- fim indicadores -->
</div>
<!-- fim carossel -->

<!-- Começo da parte da historia dele -->
<div class="card text-bg-secondary bg-opacity-10 m-5 p-2" style="max-width: 540rem;">
    <div class="row g-0">
        <div class="col-md-4 ">
            <img src="imagem/fotodani.jpg" class="img-fluid rounded-start" alt="foto do daniel">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title text-center p-5">Prazer sou o Daniel</h5>
                <p class="card-text lh-lg text-lg-start">Acabei entrando na tattoo por conta da época de escola,
                    que desenhava em todo mundo de canetinha
                    e tudo que precisava de desenho sempre ficou
                    por minha conta, até que quando pude procurei
                    alguns amigos e tatuadores pra me ajudarem
                    a começar na área, hoje fazem 2 anos que tatuo,
                    comecei por hobby e consequentemente
                    hoje é de onde vem minha maior renda.</p>
            </div>
        </div>
    </div>
</div>
<!-- Fim da parte da historia dele -->

<!-- começo do portifolio -->
<div class="card text-bg-secondary bg-opacity-10 m-5 p-2" style="width: 18rem;">
    <img src="imagem/tatu1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title text-center">Primeira foto</h5>
        <a href="portifolio/foto1.php" class="btn btn-primary">VER DESCRIÇÃO</a>
    </div>
</div>
<!--
fazendo cards tematicos com o portifolio dele e colocando um botão e na hora que clicar aparecer uma aba de notifição com a legenda da foto

colocar dois cards com a bio e esquipamentos que ele utiliza e colocando uma legenda

-->


<?php
include "./includes/rodape.php"

?>