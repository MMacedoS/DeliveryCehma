<?php 

define('ROTA_GERAL',"http://$_SERVER[HTTP_HOST]".'/deliverycehma');
$link="http://$_SERVER[HTTP_HOST]".'/deliverycehma/view/images/img';
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>CONECTFOOD</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500">
    <link rel="stylesheet" href="<?=ROTA_GERAL?>/view/css/bootstrap.css">
    <link rel="stylesheet" href="<?=ROTA_GERAL?>/view/css/fonts.css">
    <link rel="stylesheet" href="<?=ROTA_GERAL?>/view/css/style.css">
 
    <style>
      .text-preto{
        color: #1d1d1d;
      }

      #listaAberto{
        overflow-y: scroll;
        height:50vh;
      }
    </style>

  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container"><span></span><span></span><span></span><span></span>
        </div>
      </div>
    </div>
    <div class="page"></div>
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap rd-navbar-modern-wrap">
          <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="70px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.html">ConectFOOD</a></div>
                </div>
                <div class="rd-navbar-main-element">                 
                    <!-- RD Navbar Search-->
                    <div class="rd-navbar-search">
                      <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                      <form class="rd-search" action="#">
                        <div class="form-wrap">
                          <label class="form-label" for="rd-navbar-search-form-input">Search...</label>
                          <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="search">
                          <button class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                        </div>
                      </form>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="#pedidos">PEDIDOS</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="">HISTORIA</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="typography.html">COZINHA</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.html">CONTATO</a>
                      </li>
                    </ul>
                  </div>
                  <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                    <div class="project-hamburger"><span class="project-hamburger-arrow-top"></span><span class="project-hamburger-arrow-center"></span><span class="project-hamburger-arrow-bottom"></span></div>
                    <div class="project-hamburger-2"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                    </div>
                    <div class="project-close"><span></span><span></span></div>
                  </div>
                </div>
                
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper-->
      <section class="section swiper-container swiper-slider swiper-slider-modern" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="true" data-slide-effect="fade">
        <div class="swiper-wrapper text-left">
          <div class="swiper-slide context-dark" data-slide-bg="<?=$link;?>/messapronta.jpg">
            <div class="swiper-slide-caption">
              <div class="container">
                <div class="row justify-content-center justify-content-xxl-start">
                  <div class="col-md-10 col-xxl-6">
                    <div class="slider-modern-box">
                      <h1 class="slider-modern-title"><span data-caption-animate="slideInDown" data-caption-delay="0">Feira CEHMA</span></h1>
                      <p data-caption-animate="fadeInRight" data-caption-delay="400">4º Feira de Tecnologia, Construindo caminhos para Inovação</p>
                      <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="#" data-caption-animate="slideInLeft" data-caption-delay="400">Saiba mais</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="<?=$link;?>/frango.jpg">
            <div class="swiper-slide-caption">
              <div class="container">
                <div class="row justify-content-center justify-content-xxl-start">
                  <div class="col-md-10 col-xxl-6">
                    <div class="slider-modern-box">
                      <h1 class="slider-modern-title"><span class="preto" data-caption-animate="slideInLeft" data-caption-delay="0">Controle de Qualidade</span></h1>
                      <p data-caption-animate="fadeInRight" class="preto" data-caption-delay="400">As melhorescomidas ja servidas na américa Latina.</p>
                      <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="" data-caption-animate="slideInLeft" data-caption-delay="400">não sabe aonde tem?</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="<?=$link;?>rustico.jpg">
            <div class="swiper-slide-caption">
              <div class="container">
                <div class="row justify-content-center justify-content-xxl-start">
                  <div class="col-md-10 col-xxl-6">
                    <div class="slider-modern-box">
                      <h1 class="slider-modern-title"><span data-caption-animate="slideInDown" data-caption-delay="0">Chame a Família</span></h1>
                      <p data-caption-animate="fadeInRight" data-caption-delay="400">Chame toda a familia para comer algo de qualidade o melhor, tenha lazer e desperte o prazer através do paladar.</p>
                      <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="#" data-caption-animate="slideInUp" data-caption-delay="400">clique Aqui</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination swiper-pagination-style-2"></div>
      </section>
      
      <!-- About us-->
      <section class="section">
        <div class="parallax-container" data-parallax-img="<?=$link;?>/vinho_charuto.jpg">
          <div class="parallax-content section-xl context-dark bg-overlay-68">
            <div class="container">
              <div class="row row-lg row-50 justify-content-center border-classic border-classic-big">
                <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay="0s">
                  <div class="counter-creative">
                    <div class="counter-creative-number"><span class="counter" id="spanaberto"></span><span class="icon counter-creative-icon fl-bigmug-line-trophy55"></span>
                    </div>
                    <h6 class="counter-creative-title">Em abertos</h6>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay=".1s">
                  <div class="counter-creative">
                    <div class="counter-creative-number"><span class="counter" id='spanpreparacao'></span><span class="symbol"></span><span class="icon counter-creative-icon fl-bigmug-line-up104"></span>
                    </div>
                    <h6 class="counter-creative-title">Em preparo</h6>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay=".2s">
                  <div class="counter-creative">
                    <div class="counter-creative-number"><span class="counter" id="spanfechado"></span><span class="icon counter-creative-icon fl-bigmug-line-sun81"></span>
                    </div>
                    <h6 class="counter-creative-title">Finalizados</h6>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>

      </section>

      <!-- Icons Ruby-->
      <section class="section section-md bg-default section-top-image" id="pedidos">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0s">
              <article class="box-icon-ruby">
                <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-ruby-icon linearicons-leaf"></div>
                  </div>
                  <div class="unit-body">
                    <h4 class="box-icon-ruby-title"><a href="#abertos">Pedidos em Aberto </a></h4>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".1s">
              <article class="box-icon-ruby">
                <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-ruby-icon linearicons-shovel"></div>
                  </div>
                  <div class="unit-body">
                    <h4 class="box-icon-ruby-title"><a href="#preparo">Em Preparo</a></h4>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".2s">
              <article class="box-icon-ruby">
                <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-ruby-icon linearicons-sun"></div>
                  </div>
                  <div class="unit-body">
                    <h4 class="box-icon-ruby-title"><a href="#finalizados">Finalizados</a></h4>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

       <!-- Section CTA 2-->
       <section class="section text-center">
        <div class="parallax-container" data-parallax-img="<?=$link;?>/vinho_charuto.jpg">
          <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-40">
            <div class="container">
              <h2 class="oh font-weight-normal"><span class="d-inline-block wow slideInDown" data-wow-delay="0s">Está aprovado</span></h2>
              <p class="oh big text-width-large"><span class="d-inline-block wow slideInUp" data-wow-delay=".2s">Seus Pedidos pronto</span></p>
            </div>
          </div>
        </div>
      </section>

      <!-- Trending products-->
      <section class="section section-md bg-default" id="abertos">
        <div class="container text-preto"> EM ABERTO <input type="text" onKeyUp="buscaAberto('digitando')" id="txtaberto">
          <div class="row row-40 justify-content-center" id='listaAberto'>
          <!-- cards -->
           
          </div>
        </div>
      </section>




      <!-- Section CTA 2-->
      <section class="section text-center">
        <div class="parallax-container" data-parallax-img="<?=$link;?>/vinho_charuto.jpg">
          <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-40">
            <div class="container">
              <h2 class="oh font-weight-normal"><span class="d-inline-block wow slideInDown" data-wow-delay="0s">Our Approach</span></h2>
              <p class="oh big text-width-large"><span class="d-inline-block wow slideInUp" data-wow-delay=".2s">Our farm strictly combines the traditions of organic farming with the latest innovations to make our products healthy and safe for the clients.</span></p><a class="button button-primary button-icon button-icon-left button-ujarak wow fadeInUp" href="https://www.youtube.com/watch?v=-AhmuMqZB0s" data-lightgallery="item" data-wow-delay=".1s"><span class="icon mdi mdi-play"></span>View presentation</a>
            </div>
          </div>
        </div>
      </section>


      <section class="section section-md bg-default" id="preparo">
        <div class="container text-preto"> EM PREPARAÇÃO <input type="text" onKeyUp="buscaPrepara('digitando')" id="txtprepara">
          <div class="row row-40 justify-content-center" id="listapreparacao">
          <!-- cards -->
           
          </div>
        </div>
      </section>




      <!-- Section CTA 2-->
      <section class="section text-center">
        <div class="parallax-container" data-parallax-img="<?=$link;?>/vinho_charuto.jpg">
          <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-40">
            <div class="container">
              <h2 class="oh font-weight-normal"><span class="d-inline-block wow slideInDown" data-wow-delay="0s">Our Approach</span></h2>
              <p class="oh big text-width-large"><span class="d-inline-block wow slideInUp" data-wow-delay=".2s">Our farm strictly combines the traditions of organic farming with the latest innovations to make our products healthy and safe for the clients.</span></p><a class="button button-primary button-icon button-icon-left button-ujarak wow fadeInUp" href="https://www.youtube.com/watch?v=-AhmuMqZB0s" data-lightgallery="item" data-wow-delay=".1s"><span class="icon mdi mdi-play"></span>View presentation</a>
            </div>
          </div>
        </div>
      </section>


       <!-- Trending products-->
       <section class="section section-md bg-default" id="finalizados">
        <div class="container text-preto"> FINALIZADOS <input type="text" onKeyUp="buscaFechado('digitando')" id="txtfechado">
          <div class="row row-40 justify-content-center" id="listafechados">
          <!-- cards -->
          
          </div>
        </div>
      </section>

    
      <!-- Page Footer-->
      <footer class="section footer-variant-2 footer-modern context-dark section-top-image section-top-image-dark">
      <div class="parallax-container" data-parallax-img="<?=$link;?>vinho_charuto.jpg">
          <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-40">
        <div class="footer-variant-2-content">
          <div class="container">
            <div class="row row-40 justify-content-between">
              <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="oh-desktop">
                  <div class="wow slideInRight" data-wow-delay="0s">
                    
                    <p>4ª Feira de Tecnologia no CEHMA, localizado em Tucano-Ba, uma escola tecnica e profissional. Te oferencendo o melhor.</p>
                    <ul class="footer-contacts d-inline-block d-md-block">
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                          <div class="unit-body"><a class="link-phone" href="tel:#">+55 75 99287-2929</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                          <div class="unit-body">
                            <p><?=date('d-M-Y')?></p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                          <div class="unit-body"><a class="link-location" href="#">48790-000 ACM, Tucano, BA </a></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4">
                <div class="oh-desktop">
                  <div class="inset-top-18 wow slideInDown" data-wow-delay="0s">
                    <h5>Fale conosco</h5>
                    <p>Adicione seu email para mandar um ooi.</p>
                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                      <div class="form-wrap">
                        <input class="form-input" id="subscribe-form-5-email" type="email" name="email" data-constraints="@Email @Required">
                        <label class="form-label" for="subscribe-form-5-email">Entre com seu E-mail</label>
                      </div>
                      <button class="button button-block button-white" type="submit">inscreva</button>
                    </form>
                    <div class="group-lg group-middle">
                      <p class="text-white">Siga-nos </p>
                      <div>
                        <ul class="list-inline list-inline-sm footer-social-list-2">
                          <li><a class="icon fa fa-facebook" href="#"></a></li>
                          <li><a class="icon fa fa-twitter" href="#"></a></li>
                          <li><a class="icon fa fa-google-plus" href="#"></a></li>
                          <li><a class="icon fa fa-instagram" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
          </div>
        </div>
        <div class="footer-variant-2-bottom-panel">
          <div class="container">
            <!-- Rights-->
            <div class="group-sm group-sm-justify">
              <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span> <span>Mauricio</span>. Todos os direitos reservado a mim!
              </p>
              <p class="rights">Desenvolvido&nbsp;por&nbsp;<a href="">Gran Mouricce</a></p>
            </div>
            </div>
        </div>
      </div>
    </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="<?=ROTA_GERAL?>/view/js/core.min.js"></script>
    <script src="<?=ROTA_GERAL?>/view/js/script.js"></script>
    <!-- coded by Ragnar-->
  </body>
</html>


<script>
$( document ).ready(function() {
        update();
        buscaAberto('');
        buscaFechado('');
        buscaPrepara('');
});
function update(){
setInterval(
    function() {

$.ajax({
    url: "<?=ROTA_GERAL?>/Home/hora",
    dataType:'json',
    success: function(n){
  document.getElementById("spanaberto").innerHTML = n[0];
  document.getElementById("spanpreparacao").innerHTML = n[1];
  document.getElementById("spanfechado").innerHTML = n[2];
   
    }
});

    },

1000);

}

function buscaAberto(busca)
{
  if(busca==''){
  $.ajax({
    url: "<?=ROTA_GERAL?>/Home/busca/aberto",    
    dataType:'json',
    success: function(n){
        aberto(n);
   
    }
  });
}else{
  busca=$('#txtaberto').val();
  $.ajax({
    url: "<?=ROTA_GERAL?>/Home/busca/aberto",    
    method:'post',
    data:{busca:busca,status:'aberto'},
    dataType:'json',
    success: function(n){
        aberto(n);   
    }

});
}
}




function  aberto(dados) {

  var html='';
  if(dados.length>0){
  dados.forEach(element => {   
  console.log(element);
  html+='<div class="col-sm-12 col-md-10 col-lg-12">'+
             ' <div class="row row-30 justify-content-center pedidos">'+
                '<div class="col-sm-6 col-md-12 col-lg-6">'+
                  '<div class="oh-desktop">'+
                   ' <article class="product product-2 box-ordered-item wow slideInRight" data-wow-delay="0s">'+
                      '<div class="unit flex-row flex-lg-column">'+
                        '<div class="unit-left">'+
                          '<div class="product-figure">';
                            element.produto==1?html+='<img src="<?=$link?>/nhoque.jpg" alt="" width="100" height="100"/>':html+='<img src="<?=$link?>/fettuccine.jpg" alt="" width="100" height="100"/>';
                           html+='<div class="product-button"><a class="button button-md button-white button-ujarak" href="#">Preparar</a></div>'+
                          '</div>'+
                        '</div>'+
                        '<div class="unit-body">'+
                          '<h6 class="product-title text-preto"><a href="#">';html+=element.nome;html+='</a></h6>'+
                          '<div class="product-price-wrap">'+
                            '<div class="product-price product-price-old">$59.00</div>'+
                            '<div class="product-price">$28.00</div>'+
                          '</div><a class="button button-sm button-secondary button-ujarak" href="#">Preparar</a>'+
                        '</div>'+
                     ' </div>'+
                    '</article>'+

                  '</div>'+
            '</div>'+


              
             ' </div>'+
            '</div>';
          });
        }
            $('#listaAberto').html(html);
}
  

function buscaFechado(busca)
{
  if(busca==''){
  $.ajax({
    url: "<?=ROTA_GERAL?>/Home/busca/fechado",    
    dataType:'json',
    success: function(n){
      fechado(n);
   
    }
  });
}else{
  var valor=$('#txtfechado').val();
  // console.log(valor);
  $.ajax({
    url: "<?=ROTA_GERAL?>/Home/busca/fechado",    
    method:'post',
    data:{busca:valor,status:'fechado'},
    dataType:'json',
    success: function(n){
      fechado(n);   
    }

});
}
}


function fechado(dados) {

var html='';

if(dados.length>0){
dados.forEach(element => {   
console.log(element.produto);
html+='<div class="col-sm-12 col-md-10 col-lg-12">'+
           ' <div class="row row-30 justify-content-center pedidos">'+
              '<div class="col-sm-6 col-md-12 col-lg-6">'+
                '<div class="oh-desktop">'+
                 ' <article class="product product-2 box-ordered-item wow slideInRight" data-wow-delay="0s">'+
                    '<div class="unit flex-row flex-lg-column">'+
                      '<div class="unit-left">'+
                        '<div class="product-figure">';
                          element.produto==1?html+='<img src="<?=$link?>/nhoque.jpg" alt="" width="100" height="100"/>':html+='<img src="<?=$link?>/fettuccine.jpg" alt="" width="100" height="100"/>';
                         html+='<div class="product-button"><a class="button button-md button-white button-ujarak" href="#">Preparar</a></div>'+
                        '</div>'+
                      '</div>'+
                      '<div class="unit-body">'+
                        '<h6 class="product-title text-preto"><a href="#">';html+=element.nome;html+='</a></h6>'+
                        '<div class="product-price-wrap">'+
                          '<div class="product-price product-price-old">$59.00</div>'+
                          '<div class="product-price">$28.00</div>'+
                        '</div><a class="button button-sm button-secondary button-ujarak" href="#">Preparar</a>'+
                      '</div>'+
                   ' </div>'+
                  '</article>'+

                '</div>'+
          '</div>'+


            
           ' </div>'+
          '</div>';
        });
      }
          $('#listafechados').html(html);
}

// preparacao


function buscaPrepara(busca)
{
  if(busca==''){
  $.ajax({
    url: "<?=ROTA_GERAL?>/Home/busca/preparando",    
    dataType:'json',
    success: function(n){
      preparacao(n);
   
    }
  });
}else{
  busca=$('#txtprepara').val();
  $.ajax({
    url: "<?=ROTA_GERAL?>/Home/busca/preparando",    
    method:'post',
    data:{busca:busca,status:'preparando'},
    dataType:'json',
    success: function(n){
      preparacao(n);   
    }

});
}
}


function preparacao(dados) {

var html='';
if(dados.length>0){
dados.forEach(element => {   
console.log(element.produto);
html+='<div class="col-sm-12 col-md-10 col-lg-12">'+
           ' <div class="row row-30 justify-content-center pedidos">'+
              '<div class="col-sm-6 col-md-12 col-lg-6">'+
                '<div class="oh-desktop">'+
                 ' <article class="product product-2 box-ordered-item wow slideInRight" data-wow-delay="0s">'+
                    '<div class="unit flex-row flex-lg-column">'+
                      '<div class="unit-left">'+
                        '<div class="product-figure">';
                          element.produto==1?html+='<img src="<?=$link?>/nhoque.jpg" alt="" width="100" height="100"/>':html+='<img src="<?=$link?>/fettuccine.jpg" alt="" width="100" height="100"/>';
                         html+='<div class="product-button"><a class="button button-md button-white button-ujarak" href="#">Preparar</a></div>'+
                        '</div>'+
                      '</div>'+
                      '<div class="unit-body">'+
                        '<h6 class="product-title text-preto"><a href="#">';html+=element.nome;html+='</a></h6>'+
                        '<div class="product-price-wrap">'+
                          '<div class="product-price product-price-old">$59.00</div>'+
                          '<div class="product-price">$28.00</div>'+
                        '</div><a class="button button-sm button-secondary button-ujarak" href="#">Preparar</a>'+
                      '</div>'+
                   ' </div>'+
                  '</article>'+

                '</div>'+
          '</div>'+


            
           ' </div>'+
          '</div>';
        });
      }
          $('#listapreparacao').html(html);
}

</script>