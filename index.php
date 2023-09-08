<?php require_once 'config.php'; ?>
<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= SITE_NAME ?>: Faça já sua cotação</title>
    <link rel="icon" href="assets/img/favicon-rs-web-consultoria-de-marketing.webp">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="homepage-5">
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- <a id="whatsapp-fixed" href="<?= WHATSAPP_LINK ?>" title="Entre em contato conosco atráves do WhatsApp: <?= WHATSAPP_NUMBER ?>" target="_blank" rel="nofollow"><i class="fab fa-whatsapp" style="color:#fff;"></i></a> -->
    <a href="javascript:void(0);" onclick="chamaZap()" style="position:fixed; z-index:15; bottom:75px; right:15px;"><img src="assets/img/btn-whatsapp.png" class="btn-whatsapp " title="Cotação rápida via WhatsApp" alt="Cotação rápida via WhatsApp"></a>

    <div class="main">
        <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="/">
                    <img class="navbar-brand-regular" src="assets/img/<?= LOGOTIPO_W ?>" style="width:200px" alt="brand-logo">
                    <img class="navbar-brand-sticky" src="assets/img/<?= LOGOTIPO ?>" style="width:200px" alt="sticky brand-logo">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-inner">
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <nav>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="nav-item"><a class="nav-link scroll" href="#home">Início</a></li>
                            <li class="nav-item"><a class="nav-link scroll" href="#features">Serviços</a></li>
                            <li class="nav-item"><a class="nav-link scroll" href="#feedbacks">Feedbacks</a></li>
                            <li class="nav-item"><a class="nav-link scroll" href="#contact">Contatos</a></li>
                            <li class="nav-item" style="padding-top:30px"><a class="" href="javascript:chamaZap()" style="color:white;">WhatsApp</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <!-- ***** Área do formulário ***** -->
        <section id="home" class="section welcome-area bg-overlay d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-lg-6">
                        <div class="welcome-intro">
                            <h1 class="text-white">Criamos o Seu Site Profissional</h1>
                            <p class="text-white my-4">Preencha o formulário ao lado e faça o seu pedido de forma rápida e prática, te responderemos o mais rápido possível e estaremos à disposição para tirar qualquer dúvida.</p>

                            <div class="button-group store-buttons d-flex">
                                <a href="javascript:chamaZap()" class="btn whatsapp-btn text-uppercase">Cotação no WhatsApp</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="contact-box bg-white text-center rounded p-4 p-sm-4 mt-5 mt-lg-0 shadow-lg">
                            <form id="quotation-form" method="post" action="send-quotation.php">
                                <input type="hidden" name="action" value="send-quotation">
                                <?php if ($_SERVER['QUERY_STRING'] !== '') { ?>
                                <input type="hidden" name="argv" value="<?= $_SERVER['QUERY_STRING'] ?>">
                                <?php } ?>
                                <div class="row">
									
                                    <div class="col-3">
                                        <div class="form-group">
											<input type="text" class="form-control" name="name" id="name" placeholder="Seu nome" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
											<input type="email" class="form-control" name="email" id="email" placeholder="Seu e-mail" required>
                                        </div>
                                    </div>
									<div class="col-3">
                                        <div class="form-group">
											<input type="text" class="form-control" name="phone" id="phone" placeholder="WhatsApp">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="atuacao" id="atuacao" placeholder="Sua área de Atuação">
                                        </div>
                                    </div>
									
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" id="message" placeholder="Envie sua Mensagem" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-bordered w-100 mt-3 mt-sm-4" id="submit" type="submit" disabled="disabled">Solicitar cotação</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shape Bottom -->
            <div class="shape-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="shape-fill" fill="#FFFFFF" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7  c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4  c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                </svg>
            </div>
        </section>
        <!-- ***** Welcome Area End ***** -->

        <!-- ***** Área de serviços ***** -->
        <section id="features" class="section features-area style-two overflow-hidden ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3">
                                <i class="far fa-lightbulb text-primary mr-1"></i>
                                Nossos
                                <span class="text-primary">Serviços</span>
                            </span>
                            <h2>Somos Especialistas em Sites Profissionais</h2>
                            <p class="d-none d-sm-block mt-4">Trabalhamos a mais de 10 anos criando sites para empresas de todo o Brasil. Entre em Conosco e Alavanque os Resultados da Sua Empresa.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach (SERVICES as $key => $service): ?>
                    <div class="col-12 col-md-6 col-lg-4 my-3 res-margin">
                        <div class="image-box text-center icon-1 p-4 wow fadeInLeft" data-aos-duration="2s" data-wow-delay="0.4s"   style="height:300px">
                            <!-- <div class="featured-img mb-3">
                                <img class="avatar-sm" src="assets/img/<?= $service['image'] ?>" alt="">
                            </div>  -->
                            <div class="icon-text">
                                <h3 class="mb-2"><?= $service['title'] ?></h3>
                                <p><?= $service['text'] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- ***** Fim da área de serviços ***** -->

        <!-- ***** Chamada para ação ***** -->
        <section class="section download-area overlay-dark ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-9">
                        <div class="download-text text-center">
                            <h2 class="text-white">Faça já sua cotação</h2>
                            <p class="text-white my-3 d-none d-sm-block">Nossa equipe está pronta para lhe atender e tirar todas as suas dúvidas a cerca de como trabalhamos para realizar o melhor serviço criação de site profissional para você.</p>
                            <div class="button-group store-buttons d-flex justify-content-center">
                                <a href="javascript:chamaZap()" class="btn whatsapp-btn text-uppercase">Cotação no WhatsApp</a>
                                <a href="#welcome" class="btn btn-bordered text-uppercase">Solicitar cotação via e-mail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Fim da chamada para ação ***** -->

        <!-- ***** Área de feedbacks ***** -->
        <section id="feedbacks" class="section testimonial-area ptb_100">
            <div class="container text-center">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="testimonials owl-carousel">
                            <?php foreach (FEEDBACKS as $key => $feedback): ?>
                            <div class="single-testimonial p-3 p-md-5">
                                <img src="assets/img/<?= $feedback['image'] ?>" class="mx-auto d-block" alt="">
                                <h4 class="client-name mt-4 mb-2"><?= $feedback['name'] ?></h4>
                                <div class="client-rating mt-2 mb-3">
                                    <?php for ($i=0; $i < $feedback['stars']; $i++) { ?>
                                    <i class="fas fa-star"></i>
                                    <?php } ?>
                                </div>

                                <div class="client-description">
                                    <div class="client-text">
                                        <p><?= $feedback['text'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Fim da área de feedbacks ***** -->

        <!-- ***** Área de contato ***** -->
        <section id="contact" class="contact-area bg-gray ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Fale Conosco</h2>
                            <p class="d-none d-sm-block mt-4">Nós adoramos ouvir e esperamos ansiosamente falar com você para fazer o mais novo site da sua empresa. Entre em contato conosco para fazer uma cotação e nós retornaremos o mais rápido possível.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-12 col-md-5">

                        <div class="contact-us">
                            <ul>
                                <li class="py-2">
                                    <a class="media" href="#">
                                        <div class="social-icon mr-3">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <span class="media-body align-self-center">Somos de São Paulo - SP. Atendemos Todo o Brasil.<br></span>
                                    </a>
                                </li>
                               
                                <li class="py-2">
                                    <a class="media" target="_blank" href="<?= EMAIL_LINK ?>">
                                        <div class="social-icon mr-3">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <span class="media-body align-self-center"><?= EMAIL_TEXT ?></span>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a class="media" href="javascript:chamaZap()">
                                        <div class="social-icon mr-3">
                                            <i class="fab fa-whatsapp"></i>
                                        </div>
                                        <span class="media-body align-self-center"><?= WHATSAPP_NUMBER ?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
    
                    </div>
                    <div class="col-12 col-md-6 pt-4 pt-md-0">
                        <div class="contact-box text-center">
                        <h4 class="client-name mt-4 mb-2">Empresa Parceira para Atendimento</h2>

                            <iframe src="<?= MAP_LINK ?>" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Fim da área de contato ***** -->

        <div class="height-emulator d-none d-lg-block"></div>

        <!-- ***** Área do footer ***** -->
        <footer class="footer-area footer-fixed">
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Copyright Area -->
                            <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                                <!-- Copyright Left -->
                                <div class="copyright-left">&copy; 2023 Todos os direitos reservados.</div>
                                <!-- Copyright Right -->
                                <div class="copyright-right">Feito com <i class="fas fa-heart" style="color:f00;"></i> por <a href="https://rsweb.com.br" target="_BLANK">RS Web - Soluções Digitais</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ***** Fim da área do footer ***** -->
    </div>
    
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Cotação no WhatsApp</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p class="mb-4">Para que possamos lhe atender melhor e agilizar o atendimento, pedimos que nos informe os campos abaixo antes de abrir o WhatsApp</p>
					<form id="quotation-zap-form">
						<div class="row">
							
							
							<div class="col-6 col-md-7">
								<div class="form-group">
									<input type="text" class="form-control" name="name" id="name" placeholder="Seu nome" required="required">
								</div>
							</div>
							<div class="col-6 col-md-5">
								<div class="form-group">
									<input type="tel" class="form-control" name="whatsapp" id="whatsapp" placeholder="Seu WhatsApp" required="required">
								</div>
							</div>
                            <div class="col-12 col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" name="atuacao" id="atuacao" placeholder="Sua área de Atuação" required="required">
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" form="quotation-zap-form" class="btn btn-primary">Abrir WhatsApp</button>
				</div>
			</div>
		</div>
	</div>

    <script src="assets/js/jquery/jquery.min.js"></script>
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    <script src="assets/js/active.js"></script>
	
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-165469352-2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-165469352-2');
	</script>
	
	<script>
    $(document).ready(function() {
        setInterval(() => {
            var filled = $('#name').val() !== '' && $('#phone').val() !== '' && $('#email').val() !== '' &&
                        $('#origin').val() !== '' && $('#destination').val() !== '' && $('#message').val() !== '';

            if (filled) {
                $('#submit').removeAttr('disabled');
            } else {
                $('#submit').attr('disabled', 'disabled');
            }
        }, 1000);
    });
	
	function chamaZap() {
		$('#staticBackdrop').modal('show');
	}
	
	$('#quotation-zap-form').submit(function(e) {
		e.preventDefault();
		var name        = $('#quotation-zap-form input[name=name]').val();
		var origin 		= $('#quotation-zap-form input[name=origin]').val();
		var destination = $('#quotation-zap-form input[name=destination]').val();
		var note_cost 	= $('#quotation-zap-form input[name=note_cost]').val();
		var quantity 	= $('#quotation-zap-form input[name=quantity]').val();
		var weight 		= $('#quotation-zap-form input[name=weight]').val();		
		var whatsapp    = $('#quotation-zap-form input[name=whatsapp]').val();		
		
		var text  = `Olá <?= SITE_NAME ?>, me chamo *${name}* fazer uma cotação de site profissional!%0A%0A`;
			text += `*Meu WhatsApp:* ${whatsapp}%0A`;
		
		$.get('whatsapp-quotations.php', {name:'', text});
		
		var whats_link = '<?= str_replace(['(', ')', ' ', '-'], '', WHATSAPP_NUMBER) ?>';
		window.open(`https://api.whatsapp.com/send?phone=+55${whats_link}&text=${text}`, 'blank');
	});
    </script>
</body>

</html>