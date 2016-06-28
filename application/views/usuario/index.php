<?php $this->load->view('header'); ?>
<style type="text/css">
    .profile 
    {
        min-height: 355px;
        display: inline-block;
        }
    figcaption.ratings
    {
        margin-top:20px;
        }
    figcaption.ratings a
    {
        color:#f1c40f;
        font-size:11px;
        }
    figcaption.ratings a:hover
    {
        color:#f39c12;
        text-decoration:none;
        }
    .divider 
    {
        border-top:1px solid rgba(0,0,0,0.1);
        }
    .emphasis 
    {
        border-top: 4px solid transparent;
        }
    .emphasis:hover 
    {
        border-top: 4px solid #1abc9c;
        }
    .emphasis h2
    {
        margin-bottom:0;
        }
    span.tags 
    {
        background: #1abc9c;
        border-radius: 2px;
        color: #f5f5f5;
        font-weight: bold;
        padding: 2px 4px;
        }
    .dropdown-menu 
    {
        background-color: #34495e;    
        box-shadow: none;
        -webkit-box-shadow: none;
        width: 250px;
        margin-left: -125px;
        left: 50%;
        }
    .dropdown-menu .divider 
    {
        background:none;    
        }
    .dropdown-menu>li>a
    {
        color:#f5f5f5;
        }
    .dropup .dropdown-menu 
    {
        margin-bottom:10px;
        }
    .dropup .dropdown-menu:before 
    {
        content: "";
        border-top: 10px solid #34495e;
        border-right: 10px solid transparent;
        border-left: 10px solid transparent;
        position: absolute;
        bottom: -10px;
        left: 50%;
        margin-left: -10px;
        z-index: 10;
        }
</style>
<header style="overflow: auto !important; margin-top: 0px;">
    <div class="container text">
        <div class="row">
        	<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        	 <div class="well profile">
                <div class="col-sm-12">
                    <div class="col-xs-12 col-sm-8">
                        <h2><?php echo $_SESSION['usuario']->nome; ?></h2>
                        <p><strong>Nivel: </strong> <?php echo $_SESSION['usuario']->perfil; ?> </p>
                        <p><strong>Interesses: </strong> Criminal e Latim
                        <p><strong>Habilidade: </strong
                            <span class="tags">CPP</span> 
                            <span class="tags">Civil</span>
                        </p>
                    </div>             
                    <div class="col-xs-12 col-sm-4 text-center">
                        <figure>
                            <img src="https://cdn1.iconfinder.com/data/icons/UltraBuuf/128/A_Young_Leo.png" alt="" class="img-circle img-responsive">
                            <figcaption class="ratings">
                                <p>Fama
                                <a href="#">
                                    <span class="fa fa-star"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-star"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-star"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-star"></span>
                                </a>
                                <a href="#">
                                     <span class="fa fa-star-o"></span>
                                </a> 
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>            
                <div class="col-xs-12 divider text-center">
                    <div class="col-xs-12 col-sm-4 emphasis">
                        <h2><strong> 20,7G </strong></h2>                    
                        <p><small>Pontos</small></p>
                        <a href="<?php echo base_url('prova/filtro'); ?>" class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Jogar </a>
                    </div>
                    <div class="col-xs-12 col-sm-4 emphasis">
                        <h2><strong>245</strong></h2>                    
                        <p><small>Vitórias</small></p>
                        <button class="btn btn-info btn-block"><span class="fa fa-user"></span> Desafios </button>
                    </div>
                    <div class="col-xs-12 col-sm-4 emphasis">
                        <h2><strong>43</strong></h2>                    
                        <p><small>Amigos</small></p>
                        <div class="btn-group dropup btn-block">
                          <button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Options </button>
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu text-left" role="menu">
                            <li><a href="#"><span class="fa fa-envelope pull-right"></span> Mural</a></li>
                            <li><a href="#"><span class="fa fa-envelope pull-right"></span> Mensagens</a></li>
                            <li><a href="#"><span class="fa fa-list pull-right"></span> Gerenciar Amigos  </a></li>
                            <li class="divider"></li>
                            <li><a href="#"><span class="fa fa-warning pull-right"></span>Editar Meu Perfil</a></li>
                            <li class="divider"></li>
                            <li><a href="#" class="btn disabled" role="button"> Avançar </a></li>
                          </ul>
                        </div>
                    </div>
                </div>
        	 </div>                 
        	</div>

            <div class="col-md-offset-2 col-md-8">
                <div class="well profile" style="min-height: 0;">
                    <div class="col-sm-12">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/JLr2kX_ldzE" frameborder="0" allowfullscreen></iframe>
                      <div class="alert alert-info-alt alert-dismissable">
                        <span class="glyphicon glyphicon-certificate"></span>
                          <strong>Ciencias Politicas</strong> - Video explicando sobre as urnas eletronicas
                      </div>
                    </div>            
                </div>                 
            </div>

            <div class="col-md-offset-2 col-md-8">
                <div class="well profile" style="min-height: 0;">
                    <div class="col-sm-12">
                      <div class="alert alert-info-alt alert-dismissable">
                        <span class="glyphicon glyphicon-certificate"></span>
                        <strong>Ciencias Politicas:</strong> O Paradoxo de Condorcet e o Teorema da Impossibilidade de Arrow <br/>
                        “O Marquês de Condorcet, em 1785, quatro anos antes da Revolução Francesa, dava conta de um paradoxo associado ao uso da regra da maioria. O uso desta regra poderia levar a decisões inconclusivas caso se verificassem certas configurações quanto às preferências dos votantes. <a href="https://economianostra.wordpress.com/2013/05/13/o-paradoxo-de-condorcet-e-o-teorema-da-impossibilidade-de-arrow/" target="_blank">CONTEÚDO COMPLETO</a>
                      </div>
                    </div>            
                </div>                 
            </div>

        </div>
<?php $this->load->view('footer'); ?>