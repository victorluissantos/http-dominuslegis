<?php $this->load->view('header'); ?>
<style type="text/css">
  .modal  {
      /*   display: block;*/
      padding-right: 0px;
      background-color: rgba(4, 4, 4, 0.8); 
  }
  .modal-dialog {
      top: 15%;
      width: 100%;
      position: absolute;
  }
  .modal-content {
      border-radius: 0px;
      border: none;
      top: 40%;
  }
  .modal-body {
    background: #18bc9c; /* fallback for old browsers */
    background: -webkit-linear-gradient(right, #18bc9c, #8DC26F);
    background: -moz-linear-gradient(right, #18bc9c, #8DC26F);
    background: -o-linear-gradient(right, #18bc9c, #8DC26F);
    background: linear-gradient(to left, #18bc9c, #8DC26F);
    font-family: "Roboto", sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;   
  }
  /* LOGIN STYLE */
  @import url(https://fonts.googleapis.com/css?family=Roboto:300);

  .login-page {
    width: 360px;
    padding: 8% 0 0;
    margin: auto;
  }
  .form {
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }
  .form input {
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
  }
  .form button {
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #4CAF50;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
  }
  .form button:hover,.form button:active,.form button:focus {
    background: #43A047;
  }
  .form .message {
    margin: 15px 0 0;
    color: #b3b3b3;
    font-size: 12px;
  }
  .form .message a {
    color: #4CAF50;
    text-decoration: none;
  }
  .form .register-form {
    display: none;
  }
</style>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <div class="login-page">
          <div id="box_msg_form" class="alert alert-info-alt alert-dismissable">
            <span class="glyphicon glyphicon-certificate"></span>
            <!--button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button-->
            <tx id="tx_msg_form"><tx>
          </div>
            <div class="form">
                <form class="register-form">
                    <p class="message">JÁ POSSUI CADASTRO? <a href="#">ENTRAR</a></p>
                    <br/>
                    <input id="uc_nome" type="text" placeholder="NOME"/>
                    <input id="uc_email" type="text" placeholder="ENDEREÇO DE EMAIL"/>
                    <input id="uc_senha" type="password" placeholder="SENHA"/>
                    <button id="btn-criar">CRIAR</button>
                </form>
                <form class="login-form">
                    <p class="message">NÃO TEM CADASTRO? <a href="#">CRIE SUA CONTA</a></p>
                    <br/>
                    <input id="lg_email" type="text" placeholder="EMAIL"/>
                    <input id="lg_senha" type="password" placeholder="SENHA"/>
                    <button id="btn-acessar" onclick="return false">ENTRAR</button>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php if( !isset($_SESSION['usuario']) || empty($_SESSION['usuario']) ) { ?>
  <header id="page-top" style="">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <img class="img-responsive" src="https://cdn1.iconfinder.com/data/icons/UltraBuuf/128/Directory.png" alt="">
                  <div class="intro-text">
                      <span class="name" title="O Mestre do Direito">Dominus Legi.S</span>
                      <hr class="star-light">
                      <p class="skills">Apreenda Jogando</p>
                      <p class="skills">Desafie seus amigos, no conhecimento jurídico</p>
                  </div>
              </div>
          </div>
      </div>
  </header>
  <div class="content-wrapper">
  <!--
      <section class="primary" id="mexplica">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                      <h2>Passo a Passo</h2>
                      <hr class="star-primary">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-4">
                      <img src="http://lorempixel.com/360/260/nature/">    
                  </div>
                  <div class="col-sm-4">
                      <img src="http://lorempixel.com/360/260/animals/">    
                  </div>
                  <div class="col-sm-4">
                      <img src="http://lorempixel.com/360/260/abstract/">    
                  </div>
              </div>
          </div>
      </section>
      -->
      <section class="success" id="Sobre">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                      <h2>Sobre</h2>
                      <hr class="star-light">
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-lg-offset-2">
                      <p>Este é o projeto de uma plataforma colaborativa de estudo para acadêmicos e simpatizantes de direito.</p>
                  </div>
                  <div class="col-lg-4">
                      <p>O Dominus Legis não visa lucros ou formação bem como especialização de profissionais na área, sendo assim não disponibiliza de certificados ou selos, porém não exime a possibilidade de parceria com instituições de ensino</p>
                  </div>
              </div>
          </div>
      </section>
      <!--
      <section class="primary" id="contact">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                      <h2>Fale Conosco</h2>
                      <hr class="star-primary">
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                      <form name="sentMessage" id="contactForm" novalidate="">
                          <div class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                  <label>Nome</label>
                                  <input type="text" class="form-control" placeholder="nome" id="nome" required="" data-validation-required-message="Please enter your nome.">
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <div class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                  <label>Email</label>
                                  <input type="email" class="form-control" placeholder="Email Address" id="email" required="" data-validation-required-message="Please enter your email address.">
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <div class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                  <label>Celular</label>
                                  <input type="tel" class="form-control" placeholder="Número celular" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <div class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                  <label>Mensagem</label>
                                  <textarea rows="5" class="form-control" placeholder="Message" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <br>
                          <div id="success"></div>
                          <div class="row">
                              <div class="form-group col-xs-12">
                                  <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </section>
      -->
      <footer class="container" style="min-height:200px; background-color:#18bc9c;color:#fff;text-align:center;padding-top:50px;">
          SANTOS L.VICTOR - CLAN SOFT © 2016
      </footer>
  </div>
<?php } else { //CASO ESTEJA LOGADO ?>
<style type="text/css">
  .addon {
  background: #fff;
  border: 1px solid #C0CAE3;
  margin-bottom: 20px;
  border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  }

  .clearfix {
  display: block;
  }
  .clearfix:after {
  content: " ";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
  overflow: hidden;
  }
  .round {
    border-radius:100%;
    display: block;
    height: 75px;
    width: 76px;
    float: left;
  }
  .alert {
    text-align: left;
  }
  .alert a{
    float: right;
    color: #CD5C5C;
  }
</style>
  <header style="height:100%; overflow: auto !important;">
    <div class="container">
      <div class="addon">
        <?php foreach ($_SESSION['avisos'] as $key => $value) { $data = explode(' ', $value->ate); ?>
          <div class="alert alert-warning-alt alert-dismissable">
            <span class="glyphicon glyphicon-certificate"></span>
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <strong><?php echo $data[0]; ?></strong> - <?php echo $value->mensagem; ?>. VOCÊ TEM: PARA ESTUDAR.<a href="<?php echo base_url('prova/estudante'); ?>">CLIQUE AQUI PARA ESTUDAR</a>
          </div>
        <?php } ?>
      </div>
    </div>
  </header>
<?php } ?>

<?php $this->load->view('footer'); ?>
<script type="text/javascript">
$(function() {
    
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

$('#btn-criar').click(function(){
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('usuario/cadastrar'); ?>",
            data: {
                nome:$('#uc_nome').val(), email:$('#uc_email').val(), senha:$('#uc_senha').val()
            },
            async: false,
            success: function(r){
                var retorno = JSON.parse(r);
                console.log(retorno.status);
                console.log(retorno.msg);
                if(retorno.status == true) {
                  $('#box_msg_form').removeClass('alert-danger-alt');
                  $('#box_msg_form').removeClass('alert-info-alt');
                  $('#box_msg_form').removeClass('alert-warning-alt');

                  $('#box_msg_form').addClass('alert-warning-alt');
                  $('#tx_msg_form').html(retorno.msg);
                  $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
                } else {
                  $('#box_msg_form').removeClass('alert-danger-alt');
                  $('#box_msg_form').removeClass('alert-info-alt');
                  $('#box_msg_form').removeClass('alert-warning-alt');

                  $('#box_msg_form').addClass('alert-danger-alt');
                  $('#tx_msg_form').html(retorno.msg);

                }
            },
            complete: function() {
                //$('#loading').css('display','none');
            }
        });
});

$('#btn-acessar').click(function(){
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url('usuario/logar'); ?>",
            data: {
                email:$('#lg_email').val(), senha:$('#lg_senha').val()
            },
            async: false,
            success: function(r){
                var retorno = JSON.parse(r);
                console.log(retorno.status);
                console.log(retorno.msg);
                if(retorno.status == true) {
                  window.location.reload();
                } else {
                  $('#box_msg_form').removeClass('alert-danger-alt');
                  $('#box_msg_form').removeClass('alert-info-alt');
                  $('#box_msg_form').removeClass('alert-warning-alt');
                  $('#box_msg_form').addClass('alert-danger-alt');
                  $('#tx_msg_form').html(retorno.msg);

                }
            },
            complete: function() {
                //$('#loading').css('display','none');
            }
        });
});

$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>