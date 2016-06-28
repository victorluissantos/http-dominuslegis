<?php $this->load->view('header'); ?>
<style type="text/css">
    header {
        height: 100%;
    }

    .card {
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
      background: white;
    }

    .card {
      margin-top: 10px;
      box-sizing: border-box;
      border-radius: 2px;
      background-clip: padding-box;
    }
    .card .card-content {
      padding: 16px;
      border-radius: 0 0 2px 2px;
      background-clip: padding-box;
      box-sizing: border-box;
    }
    .card .card-content p {
      margin: 0;
      color: inherit;
    }
    .card .card-action {
      border-top: 1px solid rgba(160, 160, 160, 0.2);
      padding: 16px;
    }
    .card .card-action a {
      color: #ffab40;
      margin-right: 16px;
      transition: color 0.3s ease;
      text-transform: uppercase;
    }
    .card .card-action a:hover {
      color: #ffd8a6;
      text-decoration: none;
    }
    . {
      float: left;
    }
    /*RADIO*/
    .funkyradio div {
      clear: both;
      overflow: hidden;
    }

    .funkyradio label {
      width: 100%;
      border-radius: 3px;
      border: 1px solid #D1D3D4;
      font-weight: normal;
    }

    .funkyradio input[type="radio"]:empty,
    .funkyradio input[type="checkbox"]:empty {
      display: none;
    }

    .funkyradio input[type="radio"]:empty ~ label,
    .funkyradio input[type="checkbox"]:empty ~ label {
      position: relative;
      line-height: 2.5em;
      text-indent: 3.25em;
      margin-top: 2em;
      cursor: pointer;
      -webkit-user-select: none;
         -moz-user-select: none;
          -ms-user-select: none;
              user-select: none;
    }

    .funkyradio input[type="radio"]:empty ~ label:before,
    .funkyradio input[type="checkbox"]:empty ~ label:before {
      position: absolute;
      display: block;
      top: 0;
      bottom: 0;
      left: 0;
      content: '';
      width: 2.5em;
      background: #D1D3D4;
      border-radius: 3px 0 0 3px;
    }

    .funkyradio input[type="radio"]:hover:not(:checked) ~ label,
    .funkyradio input[type="checkbox"]:hover:not(:checked) ~ label {
      color: #888;
    }

    .funkyradio input[type="radio"]:hover:not(:checked) ~ label:before,
    .funkyradio input[type="checkbox"]:hover:not(:checked) ~ label:before {
      content: '\2714';
      text-indent: .9em;
      color: #C2C2C2;
    }

    .funkyradio input[type="radio"]:checked ~ label,
    .funkyradio input[type="checkbox"]:checked ~ label {
      color: #777;
    }

    .funkyradio input[type="radio"]:checked ~ label:before,
    .funkyradio input[type="checkbox"]:checked ~ label:before {
      content: '\2714';
      text-indent: .9em;
      color: #333;
      background-color: #ccc;
    }

    .funkyradio input[type="radio"]:focus ~ label:before,
    .funkyradio input[type="checkbox"]:focus ~ label:before {
      box-shadow: 0 0 0 3px #999;
    }

    .funkyradio-primary input[type="radio"]:checked ~ label:before,
    .funkyradio-primary input[type="checkbox"]:checked ~ label:before {
      color: #fff;
      background-color: #337ab7;
    }

    /*LABEL*/
    .stepwizard-step p {
        margin-top: 10px;
    }

    .stepwizard-row {
        display: table-row;
    }

    .stepwizard {
        display: table;
        width: 100%;
        position: relative;
    }

    .stepwizard-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }

    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;

    }

    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }

    .btn-circle {
      width: 30px;
      height: 30px;
      text-align: center;
      padding: 6px 0;
      font-size: 12px;
      line-height: 1.428571429;
      border-radius: 15px;
    }
</style>
<?php

      // $this->data['status'] = FALSE;
      // $this->data['mensagem'] = "DONT HAVE PERMISSION ACESS ALLOW";
      // if( isset($_GET['ref']) && !empty($_GET['ref'])) {
      //   $ployer = base64_decode($_GET['ref']);
      //   $ployer = explode(':', $ployer);
      //   if( isset($ployer[0]) && isset($ployer[1]) && !empty($ployer[0]) && !empty($ployer[1]) ) {
      //     $this->data['disciplina'] = $ployer[0];
      //     $this->data['disciplina_ref'] = $ployer[1];

      //     $this->data['quantidade_questoes'] = 10;

      //     SELECIONO N NÚMERO DE QUESTOES ALEATORIAMENTE DE UM DETERMINADA MATERIA
      //     $this->load->model('Questoes');
      //     $crud_questoes =  new Questoes();
      //     $this->data['questoes'] = $crud_questoes->buildRandNQuestions($this->data['disciplina'], $this->data['quantidade_questoes'], 1);
      //     /*SALVO A PROVA*/
      //     $data['usuario_id'] = $_SESSION['usuario']->id;
      //     $data['data'] = date('Y-m-d H:m:s');
      //     $data['categoria_id'] = 1; //entra os tipos de prova
      //     $this->load->model('Provas');
      //     $crud_prova =  new Provas();
      //     $this->data['prova_id'] = $_SESSION['prova_id'] = $crud_prova->save($data);

?>
<header style="height: 100% !important; overflow: auto !important; margin-top: 0px;">
  <div class="container">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
          <?php for ($i=1; $i <= count($questoes); $i++) { 
                  if( $i == 1) { ?>
                    <div class="stepwizard-step">
                        <a href="#step-<?php echo $i; ?>" type="button" class="btn btn-primary btn-circle"><?php echo $i; ?></a>
                        <p><?php echo $i; ?></p>
                    </div>  
              <?php } else {
            ?>

              <div class="stepwizard-step">
                  <a href="#step-<?php echo $i; ?>" type="button" class="btn btn-circle"><?php echo $i; ?></a>
                  <p><?php echo $i; ?></p>
              </div>
            <?php }
            } ?>
        </div>
    </div>
    <form role="form" method="POST" action="<?php echo base_url('prova/resolve_estudante'); ?>">
      <?php foreach ($questoes as $key => $value) { ?>
        <div class="row setup-content" id="step-<?php echo $key+1; ?>">
            <div class="col-xs-12">
                    <div class="form-group">
                      <!-- Card Projects -->
                      <div class="col-md-6 col-md-offset-3">
                          <div class="card">
                              <div class="card-content" style="color:black">
                                  <b>Questão <?php echo $key+1; ?></b><p><?php echo $value->pergunta; ?></p>
                              </div>
                              <div class="card-action" style="color:black;">
                                <div class="funkyradio">
                                    <div class="funkyradio-primary">
                                        <input type="radio" name="questao<?php echo $key+1; ?>" value="<?php echo $value->id; ?>|1" id="radio1<?php echo $value->id; ?>"/>
                                        <label for="radio1<?php echo $value->id; ?>"><?php echo $value->opcao_1; ?></label>
                                    </div>
                                    <div class="funkyradio-primary">
                                        <input type="radio" name="questao<?php echo $key+1; ?>" value="<?php echo $value->id; ?>|2" id="radio2<?php echo $value->id; ?>"/>
                                        <label for="radio2<?php echo $value->id; ?>"><?php echo $value->opcao_2; ?></label>
                                    </div>
                                    <div class="funkyradio-primary">
                                        <input type="radio" name="questao<?php echo $key+1; ?>" value="<?php echo $value->id; ?>|3" id="radio3<?php echo $value->id; ?>"/>
                                        <label for="radio3<?php echo $value->id; ?>"><?php echo $value->opcao_3; ?></label>
                                    </div>
                                    <div class="funkyradio-primary">
                                        <input type="radio" name="questao<?php echo $key+1; ?>" value="<?php echo $value->id; ?>|4" id="radio4<?php echo $value->id; ?>"/>
                                        <label for="radio4<?php echo $value->id; ?>"><?php echo $value->opcao_4; ?></label>
                                    </div>
                                    <hr>
                                    <div class="funkyradio-primary">
                                      <?php if($key > 0 ) { ?>
                                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Anterior</button>
                                      <?php } ?>
                                      <?php if($key+1 == count($questoes)) { ?>
                                        <button class="btn btn-success btn-lg pull-right" type="submit">Corrigir!</button>
                                      <?php } else { ?>
                                          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Próxima</button>
                                      <?php } ?>
                                    </div>
                                </div>
                              </div>
                          </div>
                      </div>
                    </div>
            </div>
        </div>
        <?php } ?>
    </form>
  </div>
</header>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn'),
            allPrevBtn = $('.prevBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    allPrevBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

        $(".form-group").removeClass("has-error");
        prevStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});
</script>