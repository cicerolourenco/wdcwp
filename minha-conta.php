<section class="page-blog">
    <div class="container">
        <div class="sec-titulo text-center">
            <h2>Minha Conta</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <aside class="widget-area right-widget-area" style="">
                    <section class="widget widget_categories border-li">
                        <div class="bloco-cliente">
                            <p class="float-left">Olá <strong>João</strong>, bem-vindo!</p>
                            <p class="float-right"><a href="#"><i class="fas fa-sign-out-alt"></i> Sair</a></p>
                        </div>
                    </section>
                    <section class="widget widget_categories border-li">
                        <h3 class="widget-title">Treinamentos Cadastrados</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Treinamentos</th>
                                    <th scope="col">Datas</th>
                                    <th scope="col">Mais informações</th>
                                    <th scope="col">Inscrições</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">Nome do Treinamento</a></td>
                                    <td>18 Ago 2019</td>
                                    <td class="text-center"><a href="#"><i class="fas fa-clipboard-list"></i> Acessar</a></td>
                                    <td class="text-center"><a href="#"><i class="fas fa-window-close"></i> Cancelar Inscrição</a></td>
                                </tr>
                                 <tr>
                                    <td><a href="#">Nome do Treinamento</a></td>
                                    <td>18 Ago 2019</td>
                                     <td class="text-center"><a href="#"><i class="fas fa-clipboard-list"></i> Acessar</a></td>
                                     <td class="text-center"><a href="#"><i class="fas fa-window-close"></i> Cancelar Inscrição</a></td>
                                </tr>
                                 <tr>
                                    <td><a href="#">Nome do Treinamento</a></td>
                                    <td>18 Ago 2019</td>
                                     <td class="text-center"><a href="#"><i class="fas fa-clipboard-list"></i> Acessar</a></td>
                                     <td class="text-center"><a href="#"><i class="fas fa-window-close"></i> Cancelar Inscrição</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                    <section class="widget widget_categories border-li">
                        <h3 class="widget-title">Treinamentos que Participou</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Treinamentos</th>
                                    <th scope="col">Datas</th>
                                    <th scope="col">Certificados</th>
                                    <th scope="col">Arquivos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">Nome do Treinamento</a></td>
                                    <td>18 Ago 2019</td>
                                    <td class="text-center"><a href="#"><i class="fas fa-print"></i> Imprimir</a></td>
                                    <td class="text-center"><a href="#"><i class="fas fa-file-export"></i> Acessar</a></td>
                                </tr>
                                 <tr>
                                    <td><a href="#">Nome do Treinamento</a></td>
                                    <td>18 Ago 2019</td>
                                     <td class="text-center"><a href="#"><i class="fas fa-print"></i> Imprimir</a></td>
                                    <td class="text-center"><a href="#"><i class="fas fa-file-export"></i> Acessar</a></td>
                                </tr>
                                 <tr>
                                    <td><a href="#">Nome do Treinamento</a></td>
                                    <td>18 Ago 2019</td>
                                     <td class="text-center"><a href="#"><i class="fas fa-print"></i> Imprimir</a></td>
                                    <td class="text-center"><a href="#"><i class="fas fa-file-export"></i> Acessar</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </aside>
            </div>
            

        </div>
    </div>
</section>
<section class="valida-certificados bg-white">
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
<script src="<?php bloginfo('template_url'); ?>/vendor/jquery-mask/jquery.mask.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/vendor/jquery-validate/jquery.validate.min.js"></script>
<script>
    $( document ).ready( function () {

        // Exibe campos de acordo com o tipo de pessoa
        $( '.tipopessoa' ).change( function () {
            var tipo = $( this ).val();
            //console.log(tipo);
            if ( tipo == "Pessoa Física" ) {
                $( '.empresa' ).css( 'display', 'none' );
                $( '.pessoa' ).css( 'display', 'block' );
                $( 'input[name="cpf"]' ).rules( "add", {
                    required: true
                } );
                $( 'input[name="empresa"]' ).rules( "add", {
                    required: false
                } );
                $( 'input[name="cnpj"]' ).rules( "add", {
                    required: false
                } );
                $( 'input[name="cargo"]' ).rules( "add", {
                    required: false
                } );
            } else {
                $( '.empresa' ).css( 'display', 'block' );
                $( '.pessoa' ).css( 'display', 'none' );
                $( 'input[name="cpf"]' ).rules( "add", {
                    required: false
                } );
                $( 'input[name="empresa"]' ).rules( "add", {
                    required: true
                } );
                $( 'input[name="cnpj"]' ).rules( "add", {
                    required: true
                } );
                $( 'input[name="cargo"]' ).rules( "add", {
                    required: true
                } );
            }
        } );

        /* Formulário de Cadastro */

        var form = $( ".cadastro" );

        /* Máscara dos campos */

        var SPMaskBehavior = function ( val ) {
                return val.replace( /\D/g, '' ).length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            },
            spOptions = {
                onKeyPress: function ( val, e, field, options ) {
                    field.mask( SPMaskBehavior.apply( {}, arguments ), options );
                }
            };

        $( 'input[name="telefone"' ).mask( SPMaskBehavior, spOptions );
        $( 'input[name="celular"' ).mask( SPMaskBehavior, spOptions );
        $( 'input[name="cep"]' ).mask( '00000-000' );
        $( 'input[name="data"]' ).mask( '00/00/0000' );
        $( 'input[name="cpf"]' ).mask( '000.000.000-00', {
            reverse: true
        } );
        $( 'input[name="cnpj"]' ).mask( "99.999.999/9999-99" );

        /* Função para validar os campos */
        form.validate( {
            errorPlacement: function errorPlacement( error, element ) {
                element.after( error );
            },
            errorElement: 'p',
            rules: {
                Name: "required",
                email: {
                    required: true,
                    email: true
                },

            },
        } );

        $.extend( $.validator.messages, {
            required: "Campo obrigatório.",
            remote: "Please fix this field.",
            email: "E-mail inválido.",
            url: "Please enter a valid URL.",
            date: "Please enter a valid date.",
            dateISO: "Please enter a valid date (ISO).",
            number: "Please enter a valid number.",
            digits: "Please enter only digits.",
            creditcard: "Please enter a valid credit card number.",
            equalTo: "Please enter the same value again.",
            accept: "Please enter a value with a valid extension.",
            maxlength: $.validator.format( "Please enter no more than {0} characters." ),
            minlength: $.validator.format( "Please enter at least {0} characters." ),
            rangelength: $.validator.format( "Please enter a value between {0} and {1} characters long." ),
            range: $.validator.format( "Please enter a value between {0} and {1}." ),
            max: $.validator.format( "Please enter a value less than or equal to {0}." ),
            min: $.validator.format( "Please enter a value greater than or equal to {0}." )
        } );
    } );
</script>