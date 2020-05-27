<!DOCTYPE html>
<html lang="pt-br">
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TecTag - Desenvolvimento  de sites e páginas Web</title>
                
        <link rel="icon" href="img/icon.png">
        
        <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--font awesome-->
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!--MATERIALIZE CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <!--MATERIALIZE CSS -->
        <link rel="stylesheet" href="css/custom.css">
   </head>
   <body>
    <!--home -->
       <header>
                <!--menu mobile --> 
                 <ul class="side-nav" id="menu-mobile">
                    <li><a class="hide-menu" href="#home">Home</a></li>
                    <li><a class="hide-menu" href="#sobre">Sobre a TecTag</a></li>
                    <li><a class="hide-menu" href="#servicos">Serviços</a></li>
                    <li><a class="hide-menu" href="#contato">Contato</a></li>
                </ul>
           <div class="navbar-fixed">
           <nav class="navbar z-depth 0">
               <div class="nav-wrapper container">
                   <h1 class="logo_text">TecTag - Desenvolvimento </h1>
                       <a href=""><img class="logo_img right" src="img/arte.png" alt="TecTag Desenvolvimento"></a>

                        <ul class="light hide-on-med-and-down">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#sobre">Sobre a TecTag</a></li>
                            <li><a href="#servicos">Serviços</a></li>
                            <li><a href="#contato">Contato</a></li>
                        </ul>

                        

                        <a href="#" data-activates="menu-mobile" class="button-collapse left" ><i class="material-icons">menu
                         </i></a>
               </div>

           </nav>
           </div>
       </header>
       <section class="home bloco scrollspy" id="home">
            <div class="row container banner">
                    <div class="col s12 center">
                    <h2 class="white-text">Os melhores sites estão aqui</h2>
                     <p class="white-text light">Aqui você encontra sites que tem a cara do seu negócio, se não encontrar criamos um exclusivo para você.
                    </p>
                    
                    <div class="row">
                       <a  href="#sobre" class="btn btn-large blue-logo">Sobre a Tectag</a>
                        <a href="#contato" class="btn btn-large white black-text">Contato</a>
                </div>
                </div>
            </div>
       </section>
        <!--SOBRE-->
       <section class="sobre bloco scrollspy" id="sobre">
         <div class="row container">
             <div class="col s12 center">
                 <h2 class="light">Sobre a TecTag</h2>
             </div>
             <div class="col s12 l6">
                 <p class="light">
                    Focado em criação e desenvolvimento de <b>sites ou páginas web</b> com o objetivo 
                    claro de aumentar a percepção do público sobre a sua empresa, produtos e/ou serviços. A TecTag trabalha com 
                    as melhores tecnologias do mercado, para que possamos oferecer sites que atenda a todo e qualquer seguimento, aplicando 
                    as melhores ferramentas para desing responsivo para assegurar total acessibilidade e também técnicas  de SEO para garantir
                    melhor visibilidade de sua página nos buscadores.
                 </p> 
            </div>

            <div class="col s12 l6">
                <div class="carousel carousel-slider" data-indicators="true">
                  <a href="#" class="carousel-item">
                      <img  alt="Imagem intitucional"  height="330"src="img/lg.jpg">
               </a>
               <a href="#" class="carousel-item">
                   <img  alt="Imagem intitucional" src="img/responsivo.png">
            </a>
            <a href="#" class="carousel-item">
               <img  alt="Imagem intitucional" src="img/seo1.jpg">
            </a>  
               
           </div>
        </div> 
         </div>
         
         <div class="row blue-logo gestao"> <!--a cor azul estava aqui-->
            <div class="container">
                         <article class="item col s12 m6 center">
                             <span class=" icon"><i class="material-icons medium">poll</i></span>
                                 <h3 class="light">Gestão de páginas ativas </h3>
                                      <p class="light">Ferramentas de monitoramento são usadas constantemente
                                          para assegurar um bom uso dos <b>sites</b>, e identificar possíveis falhas para melhorar
                                          o seu acesso.  
                                           </p>
                             </article>

                         <article class="item col s12 m6 center">
                            <span class="icon"><i class="material-icons medium">show_chart</i></span>
                             <h3 class="light">Otimização</h3>
                                 <p class="light">Sua página web entre as primeiras nos buscadores graças as melhores técnicas e ferramante de otimização. </p>
                       
                </div>
            </div>
    </section>
                  <!-- SERVIÇOS -->
    <section class="servicos bloco scrollspy" id="servicos">
        <div class="row container">
            <div class="col s12 center">
                <h2 class="light white-text">Serviços</h2>
                <p class="light white-text">A TecTag trabalha focada no que há de melhor no mercado de web design e desenvolvimento,
                    sendo assim temos serviços para atender a todos, veja nossos serviços e descubra o que falta no seu negócio. </p>

            </div>
        </div>
            <div class="row container">
            
                                    <!-- web sites -->
            <article class="col s12 m12 l4">
                <div class="card">
                    <div class="card-image" id="im">
                        <img src="img/sites.png" alt="sites" class="materialboxed">
                            <a  href="#sites-modal" class="btn btn-floating halfway-fab blue-logo pulse modal-trigger">
                                <i class="material-icons">more_horiz</i>
                            </a>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Desenvolvimento de Sites</h3>
                        <p class="light">Desenvolvimento de <b>sites</b> institucionais, se nossos modelos
                             não atender seu negócio, desenvolvemos sua página totalmente exclusiva. </p>
                    
                    </div>
                </div>
            </article>

                     <!--MODAL Sites-->
                     <div class="modal" id="sites-modal">
                     <div class="modal-content">
                         <h5 class="light">Por que ter um <b>site</b>?</h5>
                          <ul class="collection">
                            <li class="collection-item">O seu negócio aberto 24 horas por dia, durante os 365 dias do ano; </li>
                            <li class="collection-item">Apresenta uma imagem profissional – uma excelente maneira de induzir confiança e credibilidade; </li>
                            <li class="collection-item">É possível desenvolver um marketing mais eficiente – você poderá criar anúncios mais econômicos
                                 que faça referência ao seu site, assim no seu site você detalha ainda mais as características do seu produto ou serviço; </li>
                            <li class="collection-item">O seu catálogo ou portfólio pode ser alterado a qualquer momento – é mais fácil, econômico e rápido
                                 de alterar que o material impresso. As suas capacidades são quase ilimitadas e permitem melhores informações aos seus clientes; </li>
                            <li class="collection-item">Sua marca acessível de qualquer lugar na palma da mão; </li>
                            <li class="collection-item">Visibilidade aumentada – um site bem organizado passa a impressão de que uma empresa é maior do que ela 
                            realmente é. Isso naturalmente, gera credibilidade no mercado que já consagrou muitas empresas algumas possivelmente maiores que a sua. </li>

                    </div>

                    <div class="modal-footer">
                        <a class="btn blue-logo modal-action modal-close">Sair</a>
                    </div>
                </div> 
                         <!-- responsivo -->
            <article class="col s12 m12 l4">
                <div class="card">
                    <div class="card-image">
                        <img src="img/responsive.png" alt="responsivo" class="materialboxed">
                            <a href="#responsivo-modal"class=" btn btn-floating halfway-fab blue-logo  pulse modal-trigger">
                                <i class="material-icons">more_horiz</i>
                            </a>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Aplicação <b>responsiva</b></h3>
                        <p class="light texto-justificado">Nossos <b>sites</b> são desenvolvidos com as melhores tecnologias,
                            com objetivo de oferecer praticidade, elegância e funcionalidade, independente do dispositivo 
                        que seus clientes estejam usando, desktop, tablet ou mobile.  </p>
                    
                    </div>
                 </div>
            </article>

             <!--MODAL responsivo-->
             <div class="modal" id="responsivo-modal">
                <div class="modal-content">
                     
                   <h5 class="light">Quais as vantagens do web desing responsivo</h5>
                   <ul class="collection">
                       <li class="collection-item"><b>Excelente experiência do usuário</b><br>
                         Web design responsivo é permitir uma
                           ótima experiência ao usuário, independente se está em desktop, smartphone, tablet ou smart-tv.
                            Responsividade atende tanto o profissional ocupado durante o dia quanto o 
                            estudante que precisa encontrar resultados para as pesquisas de estudo. Sem rolagem ou
                             redimensionamento para que seu site seja acessado em seu dispositivo preferido.</li>
                       <li class="collection-item"><b>Baixo custo</b> <br>
                        As vantagens em ter um único site que se adéqua
                         a qualquer tipo de uso em todos os dispositivos são significativas quando comparadas a ter dois 
                         sites separados, que seria bem mas caro desenvolver e manter os  dois. </li>

                     <li class="collection-item"><b>Recomendado pelo Google</b> <br>
                                Com 67% de participação do mercado de buscas na internet, quando o Google fala, profissionais do
                                 marketing ouvem. Google afirma que web design responsivo é sua configuração recomendada para celulares, 
                                 e ainda declara que web design responsivo é hoje a melhor prática a ser usada nesta indústria. </li>

                                         
                       </ul> 
               </div>

               <div class="modal-footer">
                   <a class="btn blue-logo modal-action modal-close">Sair</a>
               </div>
           </div> 
           

                     <!-- |SEO -->
            <article class="col s12 m12 l4">
                <div class="card">
                    <div class="card-image">
                        <img src="img/seo.jpg" alt="SEO" class="materialboxed">
                            <a href="#seo-modal"class=" btn btn-floating halfway-fab blue-logo pulse modal-trigger">
                                <i class="material-icons">more_horiz</i>
                            </a>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">SEO - otimização de <b>sites</b></h3>
                        <p class="light">Com a otimização ou técnicas de <b>SEO</b> sigla para "Search Engine Optimization", que em português,
                            tem o significado (Otimização para Mecanismos de Buscas). em outras palavras é uma maneira de fazer com 
                        que o site esteja sempre em destaque nas buscas relacionadas ao seu conteúdo.  </p>
                    
                    </div>
                </div>
            </article>
                <!--MODAL SEO-->
 <div class="modal" id="seo-modal">
    <div class="modal-content">
        <h5 class="light">A importância de SEO em seu <b>site</b>!</h5>
        
      
       <ul class="collection">
           <li class="collection-item"><b>Aumenta o tráfego</b><br>
            Uma das melhores formas de aumentar o tráfego no site é sem dúvida investindo na utilização do
             conjunto de técnicas do SEO. Pois, ele adequa o conteúdo do seu site para os requisitos de otimização
              exigidos em mecanismos de busca como o Google e atrai as pessoas adequadas para o seu site.
        </li>
        <li class="collection-item"><b>Maior retorno sobre Investimento</b><br>
            O aumento do ROI é mais um dos aspectos que fazem com que o SEO seja uma excelente estratégia a ser 
            implementada. Na medida em que são aplicadas as técnicas de SEO no seu site, a denominada taxa de conversão,
             ou seja, quando um visitante do seu site passa a comprar o seu produto e/ou serviço, aumenta.
            Isso faz com que o investimento que você fez ao utilizar o SEO retorne em forma de lucro. 

        </li>
        <li class="collection-item"><b>Melhora a experiência do usuário</b><br>
              Quando o site é editado, a navegação nele é melhorada, isso faz com que as taxas de rejeição diminuam.
            Quanto melhor for o seu site, maiores serão as taxas de conversão e o tráfego de pessoas no mesmo.
        <li class="collection-item"><b>Aumenta a Autoridade de sua marca no seguimento </b><br>
            Quando as técnicas de SEO são aplicadas adequadamente e o site possui um conteúdo de qualidade, ele se torna a principal 
            referência dos usuários no seu nicho de mercado. E é isso que evidencia que o SEO é um caminho certo para o sucesso.
        </li>

          
            </ul>
   </div>

   <div class="modal-footer">
       <a class="btn blue-logo modal-action modal-close">Sair</a>
   </div>
</div> 
                        
      

                <div class="modal-footer">
                </div>
            </div>
        </div>
    </section>

  

    

    <!--CONTATO-->
    <div class="row container">
</div>
    <section class=" contato bloco scrollspy" id="contato">
        <div class="row container">
            <div class="col s12 center">
                <h2 class="titulo light">Contato</h2>
        </div>
       
                <div class="col s12 m6 l6">
                    <div class="informacoes white-text"> 
                        <h4> para mais informações  </h4> 
                        <p>Desenvolvimento de sites <br><br>
                            Registro de domínio e hospedagem <br><br>
                            Desenvolvimento de sites mais domínio e hospedagem <br><br>
                            Avaliação para tornar seu site responsivo <br><br>
                            Serviços de SEO para seu site <br><br>
                            Consultoria sobre monitoramento de trafego do seu site 
                            <br><br><br><br></p> 
                        
                        
                        <h4> entre em contato</h4>
                        <p class="light"> (14) 99743-6867 <br>
                    
                        
                        </p>
                       
                        
                    </div>
                </div>
                <div class="col s12 m6 l6">
                    <div class="formulario white black-text">
                        <h4> Dúvidas/Orçamentos/visita</h4>
                        <p class="light">Solicite um orçamemto ou visita sem compromisso;<br>
                        Sugestões e críticas são bem vindas!
                        </p>
                            <form action="enviar-email.php" method="post">

                                <div class="input-field">
                                    
                                    <input type="text" name="name" id="name">
                                    <label for="name"> Seu nome</label>
                                    
                                </div>
                                <div class="input-field">
                                   
                                    <input type="email" name="email" id="email">
                                    <label for="email"> Seu e-mail</label>
                                </div>
                                <div class="input-field">
                                    
                                    <input type="text" name="subject" id="subject">
                                    <label for="subject">Assunto</label>

                                </div>
                                <div class="input-field">
                                     <textarea id="message" name="message" class="materialize-textarea"></textarea>
                                    <label for="message">Menssagem</label>

                                </div>

                                <button class="btn blue-logo" type="submit">Enviar</button>

                                </form>
                        </div>
                 </div>
              
        </div>

    </section>
    <!--dEPOIMENTOS-->

    

          

    </div>

     <!-- RODAPÉ -->
     <footer class="rodape">
        <div class="row container center">
            <img src="img/arte.png" class="logo_img">
            <p class="light white-text">© TecTag 2020 - Todos os direitos reservados </p>
        </div>  
        <div>

</div>      
    </footer>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- MATERIALIZE JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <!-- JAVASCRIPT--> <!-- codigos de inicialização -->
    <script>
        $(document).ready(function(){
            //menu mobile
         $(".button-collapse").sideNav(); 
         // link interno
         $(".scrollspy").scrollSpy({         //elemento que suavisa o movimento scroll
             scrollOffset: 0
         });
            // carousel
            $(".carousel.carousel-slider").carousel({
                fullWidth:true
            });
            setInterval(function(){
                $('.carousel').carousel('next');
            },4000);
            //MODAL
            $(".modal").modal();
            // TABS
            $("ul.tabs").tabs();
        });
        $(window).on("scroll",function(){                  
            if ($(window).scrollTop() > 100){
                $(".navbar").addClass("nav-color");     // quando realiza scroll na pagina ele preenche nav com nav color
            } else {
                $(".navbar").removeClass("nav-color");     // quando volta o scroll para parte superio ele remove a cor novamente
            }
        });
    </script>
     

        <?php

        if (isset($_GET['status'])):
            if($_GET['status'] == "sucesso"):
            echo "<script>Materialize.toast('Enviado com sucesso!', 4000);</script>";
            else:
                echo "<script>Materialize.toast('Erro ao enviar', 4000);</script>";
            endif;
        endif;
        ?>
<!--botão do whatsapp-->
        <script type="text/javascript">
            (function () {
                var options = {
                    whatsapp: "+55(14)997436867", // WhatsApp number
                    call_to_action: "Fale Conosco Agora!", // Call to action
                    position: "right", // Position may be 'right' or 'left'
                };
                var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
                var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
            })();
        </script>
    
</body>


</html>
