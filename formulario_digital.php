<?php
/*
Template Name: Formularios digitais
*/
?>
<?php get_header(); ?>

<section>
 <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="padding-top:11rem">
       <div class="carousel-inner">
         
         <div class="carousel-item active">
           <img src="<?php bloginfo('template_url'); ?>/assets/IMG_5168.jpg"   class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                   <div class="carousel-dom2 element-animate">
                     <h2 class="mb-3">Formulários Digitais</h2>
                     <div class="carousel-a">
                     <a href="https://www.sme.gov.ao/formularios-digitais/formularios-digitais/" class="">Serviços </a> <i class="fa fa-angle-right" style="font-size:1.2rem"></i>
                     Formulários Digitais
                     </div>
                   </div>

               </div>
         </div>

       </div>
     </div>
   </section>

  <!--Mobile-->
  <?php include('mobile_sme.php') ?>
  <!--Mobile fim-->

<div class="container">
  <div class="row my-5" style="padding-top:5rem">
   <div class="col-md-3 col-lg-3 mb-4">

      <div class="list-group mb-2">
         <a href="https://www.sme.gov.ao/formularios-digitais/formularios-digitais/" class="list-group-item list-group-item-action active" style="text-shadow:2px 2px 3px rgba(117, 106, 106, 0.8);">Formulários Digitais</a>     
      </div>
                
    </div>

    <div class="col-md-9 col-lg-9">
         <h4 style="font-weight:bold">BAIXAR OS SEGUINTES FORMULÁRIOS DIGITAIS </h4>
         
         <div style="font-weight:bold" class="my-3">
         <a href="<?php bloginfo('template_url'); ?>/formularios/FORMULÁRIO DE PEDIDO DE VISTOS.pdf" target="_blank" style="color:white;text-decoration:none;color:black">
         FORMULÁRIO DIGITAL DE PEDIDO DE VISTOS
          <i class="fa fa-file" style="font-size:29px;color:red"></i></a>
         </div>

          <div style="font-weight:bold" class="mb-3">
          <a href="<?php bloginfo('template_url'); ?>/formularios/FORMÁLARIO DE PEDIDO DE PASSAPORTE.pdf" target="_blank" style="color:white;text-decoration:none;color:black">
          FORMULÁRIO DIGITAL DE PEDIDO DE PASSAPORTE
          <i class="fa fa-file" style="font-size:29px;color:red"></i></a>
         </div>

          <div style="font-weight:bold" class="mb-3">
          <a href="<?php bloginfo('template_url'); ?>/formularios/FORMULÁRIO DE PEDIDO DE TÍTULO DE RESIDÊNCIA.pdf" target="_blank" style="color:white;text-decoration:none;color:black">
          FORMULÁRIO DIGITAL DE PEDIDO DE TÍTULO DE RESIDÊNCIA 
         <i class="fa fa-file" style="font-size:29px;color:red"></i></a>
         </div>

         <h5 class="mt-5" style="font-weight:bold">FORMULÁRIOS DIGITAIS</h5>

         <p style="text-align:justify">O Serviço de Migração e Estrangeiros optou pela utilização de formulários digitais que nada mais é que a informatização dos actuais formulários, passando a estar disponíveis na Internet e no portal institucional do SME, para que sejam preenchidos preferencialmente de forma digital, ou em alternativa, preenchidos manualmente.</p>

         <h5 class="mt-2" style="font-weight:bold">CUSTO DE VENDA</h5>
         <p style="text-align:justify">Não havendo custo de produção, e ficando para o utente a responsabilidade de imprimir, os formulários digitais não serão objecto de venda.</p>

         <h5 class="mt-2" style="font-weight:bold">UTILIZAÇÃO HÍBRIDA</h5>
         <p style="text-align:justify">Havendo ainda em circulação formulários, é de todo recomendável a utilização híbrida destes, ou seja, passa a ser aceite o formulário digital desprovido de qualquer custo, todavia, para quem não seja portador este, pode optar pela compra.</p>
         <p style="text-align:justify">Entretanto, é de todo recomendável a utilização do original, porém serão aceites fotocópias, desde que estejam em bom estado.</p>

         
   </div>

  </div>
</div>


</div>
<?php get_footer(); ?>