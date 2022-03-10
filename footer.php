    

            <footer class="footer-dom mt-5">
                <div class="container">
                 <p class="my-3"><small><?php echo get_theme_mod('footer_text21'); ?> |</small>
                     <small class="sl1"> Endereço: R. Amilcar Cabral , Luanda - ANGOLA , Município de Luanda , Distrito da Maianga </small>
                     <small> <a href="#"  class="ml-5 sl1"><i class="fa fa-angle-up" style="font-size:2.5rem"></i></a></small> 
                    
                </div>
            </footer>
            
            <!--Modal-->
           

            <div class="modal fade" id="sitemodal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                           
                        <div class="modal-body">
                            <button type="button" class="close mb-1" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                             
                            <?php
                                 //adicionando formulario de busca

                            dynamic_sidebar('Busca'); 
                            
                            ?>
                        </div>
                        
                    </div>
           
                </div>
           
            </div>

          
        <?php wp_footer(); ?> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <!-- <script src="src/js/jquery.js"></script>
    <script src="src/js/popper.js"></script>
    <script src="src/js/bootstrap.js"></script> -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owlscript.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.paroller.js"></script>
  </body>
</html>