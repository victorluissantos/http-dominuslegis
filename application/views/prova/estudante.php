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
    /*BOX LIST*/
    .searchable-container {
      margin-top: 6%;
    }
    .pricing-table .plan {
      margin-left: 5%;
      margin-bottom: 10px;
      border-radius: 5px;
      text-align: center;
      background-color: #f3f3f3;
      -moz-box-shadow: 0 0 6px 2px #b0b2ab;
      -webkit-box-shadow: 0 0 6px 2px #b0b2ab;
      box-shadow: 0 0 6px 2px #b0b2ab;
    }
     
     .plan:hover {
      background-color: #fff;
      -moz-box-shadow: 0 0 12px 3px #b0b2ab;
      -webkit-box-shadow: 0 0 12px 3px #b0b2ab;
      box-shadow: 0 0 12px 3px #b0b2ab;
    }
     
     .plan {
      padding: 20px;
      color: #ff;
      background-color: #5e5f59;
      -moz-border-radius: 5px 5px 0 0;
      -webkit-border-radius: 5px 5px 0 0;
      border-radius: 5px 5px 0 0;
    }
      
    .plan-name-bronze {
      padding: 5px;
      color: #fff;
      background-color: #3CB371;
      -moz-border-radius: 5px 5px 0 0;
      -webkit-border-radius: 5px 5px 0 0;
      border-radius: 5px 5px 0 0;
     }
      
      
    .pricing-table-bronze  {
      padding: 20px;
      color: #fff;
      background-color: #f89406;
      -moz-border-radius: 5px 5px 0 0;
      -webkit-border-radius: 5px 5px 0 0;
      border-radius: 5px 5px 0 0;
    }
      
    .pricing-table .plan .plan-name span {
      font-size: 20px;
    }
     
    .pricing-three-column {
      margin: 0 auto;
    }
     
    .pricing-variable-height .plan {
      float: none;
      margin-left: 2%;
      vertical-align: bottom;
      display: inline-block;
      zoom:1;
      *display:inline;
    }
     
    .plan-mouseover .plan-name {
      background-color: #4e9a06 !important;
    }
     
    .btn-plan-select {
      padding: 8px 25px;
      font-size: 18px;
    }
</style>

<header style="overflow: auto !important;">
  <div class="container">
      <div id="box_msg_form" class="alert alert-warning-alt alert-dismissable">
        <span class="glyphicon glyphicon-certificate"></span>
          MATÉRIAS DISPONÍVEIS
        </div>
        <!-- Card Projects -->
        <div class="col-md-12">
            <div class="card" style="color:black; overflow:auto;">
                <div class="card-action">
                  <div class="col-lg-12">
                    <input type="search" class="form-control" id="input-search" placeholder="Digite aqui..." >
                  </div>
                <div class="searchable-container">
                <div class="row-fluid pricing-table pricing-three-column">
                  <?php foreach ($disciplinas as $key => $value) { ?>
                    <a href="<?php echo base_url('prova/goprova?ref='.base64_encode($value->id.':'.$value->nome)); ?>">
                        <div class="items span4 col-lg-3 plan">
                          <div class="plan-name-bronze">
                            <h4><?php echo $value->nome; ?></h4>
                            <span><img src="<?php echo $value->icone; ?>"/></span>
                          </div>
                          <?php /*
                          <ul>
                            <li class="plan-feature">Semestre: <?php echo $value->semestre; ?></li>
                            <li class="plan-feature"><?php echo $value->responsavel; ?></li>
                          </ul>
                          */?>
                        </div>
                    </a>
                    <?php } ?>
              </div>
            </div>
        </div>
    </div>
</header>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
      $(function() {    
        $('#input-search').on('keyup', function() {
          var rex = new RegExp($(this).val(), 'i');
            $('.searchable-container .items').hide();
            $('.searchable-container .items').filter(function() {
                return rex.test($(this).text());
            }).show();
        });
    });
</script>