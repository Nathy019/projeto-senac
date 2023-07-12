<?php
include "./includes/cabecalho.php"
?>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <!-- inicio carossel -->
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
    <!-- fim carossel -->
</div>
<div class="card m-5 p-2" style="max-width: 540rem;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="imagem/fotodani.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Prazer sou o Daniel</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<!--

colocar um card com a foto dele e a descrição do pq ele começou a tatutar em baixo o insta dele para seguir a pagina dele

fazendo cards tematicos com o portifolio dele e colocando um botão e na hora que clicar aparecer uma aba de notifição com a legenda da foto

colocar dois cards com a bio e esquipamentos que ele utiliza e colocando uma legenda

-->


<?php
include "./includes/rodape.php"

?>