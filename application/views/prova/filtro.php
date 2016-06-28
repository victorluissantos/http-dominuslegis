<?php $this->load->view('header'); ?>
<style type="text/css">
  .addon {
  background: #fff;
  border: 1px solid #C0CAE3;
  margin-bottom: 20px;
  border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  }

  .addon li {
  padding: 10px;
  border-top: 1px solid #eee;
  overflow: hidden;
  }
  .addon li {
  list-style:none;
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

  li {
  display: list-item;
  text-align: -webkit-match-parent;
  } ul {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
  }
   ul {
  list-style: none;
  }
  .round {
    border-radius:100%;
    display: block;
    height: 75px;
    width: 76px;
    float: left;
  }
  .addon li em.extra {
  background-position: -118px 0;
  }
  .addon p {
  padding: 10px 15px;
  margin: 0;
  font: 600 16px/22px "myriad-pro",Arial,"Helvetica Neue",Helvetica,sans-serif;
  }
  p {
  display: block;
  -webkit-margin-before: 1em;
  -webkit-margin-after: 1em;
  -webkit-margin-start: 0px;
  -webkit-margin-end: 0px;
  }

  .addon li .legend-info {
  float: left;
  margin-left: 10px;
  width: 70%;
  }

  .addon strong {
  display: block;
  margin: 0 0 4px;
  }

  strong {
  font-weight: bold;
  }
</style>
<header style="height:90% !important; overflow: auto !important;">
  <div class="container">
    <div class="row">
      <div id="box_msg_form" class="alert alert-warning-alt alert-dismissable">
        <span class="glyphicon glyphicon-certificate"></span>
        <!--button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button-->
        SELECIONE A MODALIDADE QUE DESEJA JOGAR:
      </div>
      <div class="addon">
        <ul>
          <li class="clearfix">
            <a href="<?php echo base_url('prova/estudante'); ?>">
              <img class="round" src="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Student-3-128.png">
              <div class="legend-info">
              <strong>Estudante</strong> Prova sem tempo pré-estabelecido, com possibilidade de seleção de materia e nivel das questões
              </div>
            </a>
          </li>
          <li class="clearfix" onClick="alert('Modalidade não disponível no momento'); return false;">
            <a href="<?php echo base_url('prova/simulacao'); ?>">
              <img class="round" src="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Coding-Html-128.png">
              <div class="legend-info">
                <strong>Simulação</strong> Prova sem tempo estabelecido, com máterias de todos os niveis e contextos para filtro ou randomizada.
              </div>
            </a>
          </li>
          <li class="clearfix" onClick="alert('Modalidade não disponível no momento'); return false;">
            <a href="<?php echo base_url('prova/duelo'); ?>">
              <img class="round" src="https://cdn2.iconfinder.com/data/icons/circle-icons-1/64/security-128.png">
              <div class="legend-info">
                <strong>Duelo</strong> Prova cronometrada, posteriormente enviada a um amigo, o qual devera responde-la em mesmo tempo ou inferior, com objetivo de obter maior números de acertos em menor tempo.
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
<?php $this->load->view('footer'); ?>