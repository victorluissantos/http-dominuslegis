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
</style>
<header>
  <div class="container">
    <div class="row">
        <!-- Card Projects -->
        <div class="col-md-12">
            <div class="card" style="color:black;">
                <div class="card-content">
                    <p>RESULTADO</p><img src="http://www.gifs-animados.net/profissao/profissao042.gif" />
                </div>
                <div class="card-action">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    LEGENDA
                                </th>
                                <th>
                                    QUANTIDADE
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="success">
                                <td>
                                    ACERTOS
                                </td>
                                <td>
                                    <?PHP echo $acerto; ?>
                                </td>
                            </tr>
                            <tr class="danger">
                                <td>
                                    ERROS
                                </td>
                                <td>
                                    <?PHP echo $erro; ?>
                                </td>
                            </tr>
                            <tr class="active">
                                <td>
                                    EM BRANCO
                                </td>
                                <td>
                                    <?php echo $sem_resposta; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    TOTAL DE QUESTÕES
                                </td>
                                <td>
                                    <?php echo $quantidade_questoes; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
</header>
<?php $this->load->view('footer'); ?>