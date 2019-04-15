<?php
//define('WP_DEBUG', false);
require(get_template_directory().'/cms/_inc/inc_start.php');
$teste = 'cícero';
Utils::dumpa($teste);

echo '<!-- CAMINHO: ' . get_template_directory().'/cms/inc/inc_start.php -->';

$fabricante = $_GET[ 'fabricante' ];
if ( empty( $fabricante ) ) {
    $fabricante = "Fabricante";
}
$tipo = $_GET[ 'tipo' ];
if ( empty( $tipo ) ) {
    $tipo = "Tipo";
}
$solucao = $_GET[ 'solucao' ];
if ( empty( $solucao ) ) {
    $solucao = "Solução";
}

?>



<section class="filtros-treinamentos">
    <div class="container">
        <div class="sec-titulo text-center">
            <div class="titulo">Subtítulo ou chamada</div>
            <h2>Treinamentos WDC</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="<?php bloginfo('url'); ?>/treinamentos/" method="get" class="banner-search">
                    <div class="form_field tpmax">
                        <div class="form-group">
                            <div class="drop-menu">
                                <div class="select">
                                    <span class="selected">
                                        <?php echo $fabricante; ?>
                                    </span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" name="fabricante">
                                <ul class="dropeddown" style="display: none;">
                                    <li id="Todos">Todos</li>
                                    <li id="Audio Codes">Audio Codes</li>
                                    <li id="Axix">Axix</li>
                                    <li id="Barco">Barco</li>
                                    <li id="Bosch">Bosch</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="form_field tpmax">
                        <div class="form-group">
                            <div class="drop-menu">
                                <div class="select">
                                    <span class="selected">
                                        <?php echo $tipo; ?>
                                    </span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" name="tipo">
                                <ul class="dropeddown" style="display: none;">
                                    <li id="Todos">Todos</li>
                                    <li id="Webinar">Webinar</li>
                                    <li id="Presencial">Presencial</li>
                                    <li id="Certificação">Certificação</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="form_field tpmax">
                        <div class="form-group">
                            <div class="drop-menu">
                                <div class="select">
                                    <span class="selected">
                                        <?php echo $solucao; ?>
                                    </span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" name="solucao">
                                <ul class="dropeddown" style="display: none;">
                                    <li id="Todos">Todos</li>
                                    <li id="Telecom">Telecom</li>
                                    <li id="Networking">Networking</li>
                                    <li id="Segurança Física e Automação">Segurança Física e Automação</li>
                                    <li id="Comunicação Unificada">Comunicação Unificada</li>
                                    <li id="Data Center">Data Center</li>
                                    <li id="Áudio e Vídeo Profissional">Áudio e Vídeo Profissional</li>
                                    <li id="Automação Residencial">Automação Residencial</li>
                                    <li id="Segurança da Informação">Segurança da Informação</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="form_field srch-btn tpmin">
                        <button type="submit" href="#" class="btn btn-outline-primary ">
                                <i class="la la-search"></i>
                                <span>FILTRAR</span>
                            </button>
                    
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<section class="verticais treinamentos-lista bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center nav-meses">
                <div class="float-left"><a href="#"><i class="fas fa-angle-double-left"></i> Março 2019</a></div>
                <h2>Abril 2019</h2>
                <div class="float-right"><a href="#">Maio 2019 <i class="fas fa-angle-double-right"></i></a></div>
            </div>
        </div>
        <div class="row row-eq-height wow fadeIn">
            <div class="col-lg-4 col-md-6">
                <div class="vertical-item">
                    <div class="imagem">
                        <span class="encerrado">Encerrado</span>
                        <a href="http://wdcnet.com.br/treinamentos/treinamento-teste/"><img src="<?php bloginfo('template_url'); ?>/images/treinamentos/01.jpg" alt=""></a>
                    </div>
                    <div class="texto">
                        
                        <div class="info">
                            <i class="far fa-calendar-alt"></i> Data: 20 MAI 19
                        </div>
                        <h2>Título do Treinamento</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                        <a href="http://wdcnet.com.br/treinamentos/treinamento-teste/" class="bt">Leia mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="vertical-item">
                    <div class="imagem">
                        <span class="encerrado">Encerrado</span>
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/treinamentos/blog-list-2.jpg" alt=""></a>
                    </div>
                    <div class="texto">
                        <div class="info">
                            <i class="far fa-calendar-alt"></i> Data: 20 MAI 19
                        </div>
                        <h2>Título do Treinamento</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                        <a href="http://wdcnet.com.br/treinamentos/treinamento-teste/" class="bt">Leia mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="vertical-item">
                    <div class="imagem">
                        <a href="http://wdcnet.com.br/treinamentos/treinamento-teste/"><img src="<?php bloginfo('template_url'); ?>/images/treinamentos/blog-list-3.jpg" alt=""></a>
                    </div>
                    <div class="texto">
                        <div class="info">
                            <i class="far fa-calendar-alt"></i> Data: 20 MAI 19
                        </div>
                        <h2>Título do Treinamento</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                        <a href="http://wdcnet.com.br/treinamentos/treinamento-teste/" class="bt">Leia mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="vertical-item">
                    <div class="imagem">
                        <a href="http://wdcnet.com.br/treinamentos/treinamento-teste/"><img src="<?php bloginfo('template_url'); ?>/images/treinamentos/01.jpg" alt=""></a>
                    </div>
                    <div class="texto">
                        <div class="info">
                            <i class="far fa-calendar-alt"></i> Data: 20 MAI 19
                        </div>
                        <h2>Título do Treinamento</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                        <a href="http://wdcnet.com.br/treinamentos/treinamento-teste/" class="bt">Leia mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="vertical-item">
                    <div class="imagem">
                        <a href="http://wdcnet.com.br/treinamentos/treinamento-teste/"><img src="<?php bloginfo('template_url'); ?>/images/treinamentos/blog-list-2.jpg" alt=""></a>
                    </div>
                    <div class="texto">
                        <div class="info">
                            <i class="far fa-calendar-alt"></i> Data: 20 MAI 19
                        </div>
                        <h2>Título do Treinamento</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                        <a href="http://wdcnet.com.br/treinamentos/treinamento-teste/" class="bt">Leia mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="vertical-item">
                    <div class="imagem">
                        <a href="http://wdcnet.com.br/treinamentos/treinamento-teste/"><img src="<?php bloginfo('template_url'); ?>/images/treinamentos/blog-list-3.jpg" alt=""></a>
                    </div>
                    <div class="texto">
                        <div class="info">
                            <i class="far fa-calendar-alt"></i> Data: 20 MAI 19
                        </div>
                        <h2>Título do Treinamento</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                        <a href="http://wdcnet.com.br/treinamentos/treinamento-teste/" class="bt">Leia mais</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="pagination">
                <br>
                <div class="wp-pagenavi" role="navigation">
                    <span class="pages">Página 1 de 11</span><span aria-current="page" class="current">1</span>
                    <a class="page larger" title="Page 2" href="#">2</a>
                    <a class="page larger" title="Page 3" href="#">3</a>
                    <a class="page larger" title="Page 4" href="#">4</a>
                    <a class="page larger" title="Page 5" href="#">5</a>
                    <span class="extend">...</span>
                    <a class="larger page" title="Page 10" href="#">10</a>
                    <span class="extend">...</span>
                    <a class="nextpostslink" rel="next" href="#">»</a>
                    <a class="last" href="#">Última »</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="valida-certificados">
    <div class="container">
        <div class="sec-titulo text-center">
            <div class="titulo">Pesquisa de</div>
            <h2>Certificado de Treinamentos</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-center">Digite na busca o código de verificação: </p>
                <form action="">
                    <input class="form-control" type="text" placeholder="Código">
                    <input class="bt" type="submit" value="Pesquisar">
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    /*==============================================
                          Custom Dropdown
        ===============================================*/

    $( '.drop-menu' ).on( 'click', function () {
        $( this ).attr( 'tabindex', 1 ).focus();
        $( this ).toggleClass( 'active' );
        $( this ).find( '.dropeddown' ).slideToggle( 300 );
    } );
    $( '.drop-menu' ).on( "focusout", function () {
        $( this ).removeAttr( 'tabindex', 1 ).focus();
        $( this ).removeClass( 'active' );
        $( this ).find( '.dropeddown' ).slideUp( 300 );
    } );
    $( '.drop-menu .dropeddown li' ).on( 'click', function () {
        $( this ).parents( '.drop-menu' ).find( 'span' ).text( $( this ).text() );
        $( this ).parents( '.drop-menu' ).find( 'span' ).addClass( "selected" );
        $( this ).parents( '.drop-menu' ).find( 'input' ).attr( 'value', $( this ).attr( 'id' ) );
    } );
</script>