<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="<?=$this->baseUrl()?>plugins/images/favicon.png">
<title><?= $title; ?></title>
<!-- Bootstrap Core CSS -->
<link href="<?=$this->baseUrl()?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="<?=$this->baseUrl()?>css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?=$this->baseUrl()?>css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="<?=$this->baseUrl()?>css/colors/default.css" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Caveat+Brush');
    .bg-login {
      background: #39677b no-repeat center center / cover !important;
      height: 100%;
      position: fixed;
    }
    .tit-logo {
      padding-left: 570px;
      padding-top: 30px;
    }
    .title-in {
      margin: 0px 0px 12px;
      font-family: 'Caveat Brush', cursive;
      font-weight: 500;
      font-size: 30px;
      text-align: center;
      color: #39677b;
    }
    .title-up {
      margin: 0px 0px 12px;
      font-family: 'Caveat Brush', cursive;
      font-weight: 500;
      font-size: 20px;
      text-align: center;
      color: #39677b;
    }
    .white-box {
    background: #ffffff;
    margin: 0;
    padding: 25px;
    width: auto;
    margin-bottom: 15px;
    border-radius: 0;
    }
</style>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>

<section id="wrapper" class="bg-login">
<div class="col-md-12 m-r-10">
  <div class="tit-logo"><img src="<?=$this->baseUrl()?>plugins/images/harmonipermana-logo.png" width="200" /></div>
</div>
  <div class="login-box">
    <div class="white-box">
      <h3 class="title-in m-b-20">Sign In</h3>
      <!-- 
      <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
      </div>
       -->
      <form class="form-horizontal form-material" id="loginform" action="<?= $this->pathFor('check-user'); ?>" method="post">
<<<<<<< HEAD
        <h3 class="title-in m-b-20">Sign In</h3>
=======
>>>>>>> upstream/master
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" name="username" type="text" required="" placeholder="Username">
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control" name="password" type="password" required="" placeholder="Password">
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
          </div>
        </div>
        <div class="form-group m-b-0">
          <div class="col-sm-12 text-center">
            <p>Don't have an account? <a href="register.html" class="title-up m-l-5">Sign Up</a></p>
          </div>
        </div>
      </form>
      <form class="form-horizontal" id="recoverform" action="index.html">
        <div class="form-group ">
          <div class="col-xs-12">
            <h3>Recover Password</h3>
            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Email">
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- jQuery -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?=$this->baseUrl()?>bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

<!--slimscroll JavaScript -->
<script src="<?=$this->baseUrl()?>js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?=$this->baseUrl()?>js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?=$this->baseUrl()?>js/custom.js"></script>
<!--Style Switcher -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>