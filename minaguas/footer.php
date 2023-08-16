<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package Newsup
 */
$you_missed_enable = esc_attr(get_theme_mod('you_missed_enable','true'));
            if($you_missed_enable == true){
?>
  <div class="container-fluid mr-bot40 mg-posts-sec-inner">
        <div class="missed-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="mg-sec-title">
                        <h4>UBICACIÓN</h4>
                    </div>
                </div>   
            </div>
            <div class="row">
                <div class="col-md-9" style="width: 100%">
                    <iframe width="100%" height="400" frameborder="0"
                        scrolling="no" marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=centro%20financiero%20latino%20caracas+(Mi%20nombre%20de%20egocios)&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    </iframe>
                </div>
                <div class="col-md-3">
                    <div>
                    <small>
                        <h3 class="text-secondary">Dirección:</h3>
                        <h6 class="text-secondary">
                            Av. Urdaneta, Centro Financiero Latino (C.F.L.),
                            Municipio Bolivariano Libertador del Distrito Capital, Parroquia La
                            Candelaria, Caracas - Venezuela.
                        </h6>
                        <h3 class="text-secondary">Contáctenos:</h3>
                        <h6 class="text-secondary" class="fas fa-note">Teléfono: <br>
                            <span>+58 212 564 7244</span>
                        </h6>
                        <h6 class="text-secondary">Correos: 
                            <br><span>oac@minaguas.gob.ve</span>
                            <br><span>correspondencia@minaguas.gob.ve</span>
                            <br><span>denuncias@minaguas.gob.ve</span>
                        </h6>
                        <h3 class="text-secondary">Horario:</h3>
                        <h6 class="text-secondary">Lunes a Viernes 8:30 am a 4:30 pm</h6>
                    </small>
                    </div>
                </div>
            </div> 
        </div>
    </div>
<?php } ?>
<!--==================== FOOTER AREA ====================-->
    <?php $newsup_footer_widget_background = get_theme_mod('newsup_footer_widget_background');
    $newsup_footer_overlay_color = get_theme_mod('newsup_footer_overlay_color'); 
   if($newsup_footer_widget_background != '') { ?>
    <footer style="background-image:url('<?php echo esc_url($newsup_footer_widget_background);?>');">
     <?php } else { ?>
    <footer> 
    <?php } ?>
        <div class="overlay" style="background-color: white;">
                <!--Start mg-footer-widget-area-->
                 <?php if ( is_active_sidebar( 'footer_widget_area' ) ) { ?>
                <div class="mg-footer-widget-area">
                    <div class="container-fluid">
                        <div class="row">
                          <?php  dynamic_sidebar( 'footer_widget_area' ); ?>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/container-->
                </div>
                 <?php } ?>
                <!--End mg-footer-widget-area-->
                <!--Start mg-footer-widget-area-->
                <div class="mg-footer-bottom-area">
                    <div class="cont-princ-slider">
                        <div class="slier-prin">
                            <a class="ente" href="https://hidrocapital.com.ve/"><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'hidrocapital' ) ); ?>" alt="Hidrocapital"/></a>
                            <a class="ente" href="https://hidrocentro.gob.ve/hc/"><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'hidrocentro' ) ); ?>" alt="Hidrocentro"/></a>
                            <a class="ente" href=""><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'hidrocaribe' ) ); ?>" alt="Hidrocaribe"/></a>
                            <a class="ente" href="http://www.hidrolago.gov.ve/"><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'hidrolago' ) ); ?>" alt="Hidrolago"/></a>
                            <a class="ente" href=""><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'hidrofalcon' ) ); ?>" alt="Hidrofalcón"/></a>
                            <a class="ente" href=""><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'hidrosuroeste' ) ); ?>" alt="Hidrosuroeste"/></a>
                            <a class="ente" href=""><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'hidropaez' ) ); ?>" alt="Hidropaez"/></a>
                            <a class="ente" href="https://tubhelca.com/"><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'tubhelca' ) ); ?>" alt="Tubhelca"/></a>
                            <a class="ente" href=""><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'hidrollanos' ) ); ?>" alt="HIDROLLANOS"/></a>
                            <a class="ente" href="http://hidrolara.lara.gob.ve/"><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'hidrolara' ) ); ?>" alt="Hidrolara"/></a>
                            <a class="ente" href=""><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'hidrobolivar' ) ); ?>" alt="Hidrobolívar"/></a>
                            <a class="ente" href=""><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'hidroandes' ) ); ?>" alt="Hidroandes"/></a>
                            <a class="ente" href="http://www.minec.gob.ve/hidroportuguesa-puso-en-funcionamiento-planta-de-aguas-servidas-de-la-pimpinela/"><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'hidroportuguesa' ) ); ?>" alt="Hidroportuguesa"/></a>
                            <a class="ente" href=""><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'hidroven' ) ); ?>" alt="HIDROVEN"/></a>
                            <a class="ente" href="http://www.monagas.gob.ve/aguasdemonagas/index.php/contacto"><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'aguasdemonagas' ) ); ?>" alt="Aguas de Monagas"/></a>
                            <a class="ente" href=""><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'aguasdeyaracuy' ) ); ?>" alt="Aguas de Yaracuy"/></a>
                            <a class="ente" href="http://www.aguasdemerida.com.ve/drupal/"><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'aguasdemerida' ) ); ?>"  alt="Aguas de Merida"/></a>
                            <a class="ente" href=""><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'hidroamazonas' ) ); ?>" alt="Hidroamazonas"/></a>
                            <a class="ente" href=""><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'hidrologicadelta' ) ); ?>" alt="Hidrodelta"/></a>
                            <a class="ente" href=""><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'aguasdecojedes' ) ); ?>" alt="Aguas de Cojedes"/></a>
                            <a class="ente" href="https://www.aguasdeelejido.es/"><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'aguasdeejido' ) ); ?>" alt="Aguas de Ejido"/></a>
                            <a class="ente" href="https://fonaguas.com.ve/"><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'fonaguas' ) ); ?>" alt="FONAGUAS"/></a>
                            <a class="ente" href=""><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'shtrujillano' ) ); ?>" alt="Sistema Hidráulico Trujillano"/></a>
                            <a class="ente" href=""><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'inasa' ) ); ?>" alt="INASA"/></a>
                            <a class="ente" href="https://www.enmohca.gob.ve/site/"><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'enmohca' ) ); ?>" alt="ENMOHCA"/></a>
                            <a class="ente" href=""><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'yacambu' ) ); ?>" alt="YACAMBU"/></a>
                            <a class="ente" href="190.202.34.35/hidrosgc/"><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'hidrosgc' ) ); ?>" alt="HIDROSGC"/></a>
                            <a class="ente" href="https://hidroweb.inorca.es/hidroweb/login"><img src="<?php echo esc_url(get_theme_support( 'custom-header', 'hidroweb' ) ); ?>" alt="HIDROWEB"/></a>
                        </div>
                    </div>
                    <!--/container-->
                </div>
                <!--End mg-footer-widget-area-->

                <div class="mg-footer-copyright p-0">
                    <div class="row text-center p-0 m-0">
                        <div class="col-md-3 text-xs my-auto">
                            <?php $image = get_theme_support( 'custom-header', 'left-image' ); ?>
                            <img src="<?php echo esc_url( $image ); ?>" alt="MINAGUAS" style="width: 75%;">
                        </div>
                        <div class="col-md-6 text-xs text-white">
                            <small>
                                <span style="font-size: 20px;">Ministerio del Poder Popular de Atención de las Aguas</span>
                                <br> <span style="font-size: 15px;">Desarrollado por la Dirección de Sistemas y Desarrollos de Tecnologías</span>
                                <br> De la Oficina de Tecnologías de la Información y la Comunicación MPPAA
                                <br><span>tecnologia@minaguas.gob.ve</span>
                                <br> Copyright &copy;<script> document.write(new Date().getFullYear());</script>
                                <br>
                            </small>
                        </div>
                        <?php $image = get_theme_support( 'custom-header', 'right-image' ); ?>
                        <div class="col-md-3 text-white p-0 m-0" 
                        style="background-image: url('<?php echo esc_url( $image ); ?>'); 
                                background-size: 100% 100%;
                                background-repeat: no-repeat; 
                                background-position: top center; 
                                align-items: center;">
                            <!-- <div class="row"> -->
                                <!-- IMG Tradicional-->
                                
                                <!-- IMG Navidad  
                                <img src="http://minaguas.gob.ve/wp-content/uploads/2021/11/LOGO_NAV_MINAGUAS.png" alt="MINAGUAS"> -->
                            <!-- </div> -->
                            <!-- <div class="row">
                                <span>RIF: G-20012771-6</span>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!--/overlay-->
        </footer>
        <!--/footer-->
    </div>
  </div>
    <!--/wrapper-->
    <!--Scroll To Top-->
    <a href="#" class="ta_upscr bounceInup animated"><i class="fas fa-angle-up"></i></a>
    <!--/Scroll To Top-->
<!-- /Scroll To Top -->
<?php wp_footer(); ?>
</body>
</html>