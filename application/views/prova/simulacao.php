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
    /*CHECK BOX*/
    .form-group input[type="checkbox"] {
        display: none;
    }

    .form-group input[type="checkbox"] + .btn-group > label span {
        width: 20px;
    }

    .form-group input[type="checkbox"] + .btn-group > label span:first-child {
        display: none;
    }
    .form-group input[type="checkbox"] + .btn-group > label span:last-child {
        display: inline-block;   
    }

    .form-group input[type="checkbox"]:checked + .btn-group > label span:first-child {
        display: inline-block;
    }
    .form-group input[type="checkbox"]:checked + .btn-group > label span:last-child {
        display: none;   
    }
</style>
<div class="row">
    <!-- Card Projects -->
    <div class="col-md-6 col-md-offset-3">
        <div class="card">
            <div class="card-content">
                <p>Cards for display in portfolio style material design by Google.</p>
            </div>
            <div class="card-action">
                <div class="[ form-group ]">
                <?php for ($i=0; $i < 5; $i++) { ?>
                    <input type="checkbox" name="fancy-checkbox-default" id="fancy-checkbox-default" autocomplete="off" />
                    <div class="[ btn-group ]">
                        <label for="fancy-checkbox-default" class="[ btn btn-default ]">
                            <span class="[ glyphicon glyphicon-ok ]"></span>
                            <span> </span>
                        </label>
                        <label for="fancy-checkbox-default" class="[ btn btn-default  ]">
                            Default Checkbox
                        </label>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer'); ?>