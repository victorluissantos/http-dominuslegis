<style type="text/css">
  /* =====Login=====*/
  body[role="login"] {
      font-family: 'Roboto', sans-serif;
    background: #045404;
    background-size: cover;
    color: #EFEFEF
  }
  [role="login"] .container {
    margin-top: 100px
  }
  [role="login"] .btn-success {
    background: #76B831;
    border: 1px solid #679F2C;
    float: right
  }
  [role="login"] label {
    font-weight: normal;
    color: #FFF
  }
  .panel-heading {
    padding: 5px 15px;
  }
  .form-inline {
    margin: 5px
  }
  .panel-footer {
    padding: 1px 15px;
    color: #A0A0A0;
  }
  hr {
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), #FFF, rgba(0, 0, 0, 0));
    margin: 5px
  }
  .profile-img {
    margin: 0 auto 10px;
    display: block;
  }
  .panel-default {
      opacity: .9;
      -webkit-box-shadow: 0px 7px 24px 1px rgba(0,0,0,0.45);
      -moz-box-shadow: 0px 7px 24px 1px rgba(0,0,0,0.45);
      box-shadow: 0px 7px 24px 1px rgba(0,0,0,0.45);
      background: transparent url('http://3rwebtech.com/bg-white.png') repeat scroll 0% 0%;
  }
</style>
<body role="login">
<div class="container" style="margin-top:70px">
<div class="row">
  <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
    <div class="panel panel-default">
    
      <div class="panel-body">
        <form role="form" action="#" method="POST">
          <fieldset>
            <div class="row">
              <div class="center-block"> <img class="profile-img" src="http://3rwebtech.com/logo2.png" class="img-responsive" alt=""> </div>
              <hr>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                <div class="form-group">
                <label>Username:</label>
                  <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
                    <input class="form-control" placeholder="Username" name="loginname" type="text" autofocus>
                  </div>
                </div>
                <div class="form-group">
                 <label>Password:</label>
                  <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i> </span>
                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                  </div>
                </div>
               
                <div class="form-group">
                 <label>
                  <input type="checkbox">
                  Keep me Logged in </label> <input type="submit" class="btn btn-success" value="Log In">
                </div>
               
              </div>
            </div>
           
          </fieldset>
        </form>
    
      </div>
    </div>
  </div>
</div>
</body>