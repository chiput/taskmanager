<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="#">
<meta name="author" content="#">
<link rel="icon" type="image/png" sizes="16x16" href="<?=$this->baseUrl()?>img/hp-favicon.png">
<title><?=$title?></title>
<!-- Bootstrap Core CSS -->
<link href="<?=$this->baseUrl()?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Data table -->
<link href="<?=$this->baseUrl()?>plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<!-- Date picker plugins css -->
<link href="<?=$this->baseUrl()?>plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<!-- Daterange picker plugins css -->
<link href="<?=$this->baseUrl()?>plugins/bower_components/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
<link href="<?=$this->baseUrl()?>plugins/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<!-- Footable CSS -->
<link href="<?=$this->baseUrl()?>plugins/bower_components/footable/css/footable.core.css" rel="stylesheet">
<link href="<?=$this->baseUrl()?>plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<!-- Select 2 -->
<link href="<?=$this->baseUrl()?>plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
<link href="<?=$this->baseUrl()?>plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<link href="<?=$this->baseUrl()?>plugins/bower_components/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
<!-- Menu CSS -->
<link href="<?=$this->baseUrl()?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
<!-- toast CSS -->
<link href="<?=$this->baseUrl()?>plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
<!-- morris CSS -->
<link href="<?=$this->baseUrl()?>plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
<!-- Clock CSS -->
<link href="<?=$this->baseUrl()?>/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="<?=$this->baseUrl()?>css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?=$this->baseUrl()?>css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="<?=$this->baseUrl()?>css/colors/blue.css" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- <script src="http://www.w3schools.com/lib/w3data.js"></script> -->


<!-- jQuery -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/jquery/dist/jquery.min.js"></script>

</head>
<body>
<!-- Preloader -->
<div class="preloader hidden-print">
  <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
  <!-- HEADER -->

<!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top m-b-0 hidden-print">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
      <div class="top-left-part"><a class="logo"  href="#"><b><img src="<?=$this->baseUrl()?>plugins/images/harmonipermana-logo.png" width="150" alt="home" /></b><span class="hidden-xs"></span></a></div>
      <ul class="nav navbar-top-links navbar-left hidden-xs">
        <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
        <!--<li>
          <form role="search" class="app-search hidden-xs">
            <input type="text" placeholder="Search..." class="form-control">
            <a href=""><i class="fa fa-search"></i></a>
          </form>
        </li>-->
      </ul>
      <ul class="nav navbar-top-links navbar-right pull-right">
        <li class="dropdown">
            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                <img src="<?=$this->baseUrl()?>plugins/images/users/avatar.png" alt="user-img" width="36" class="img-circle">
                <b class="hidden-xs"> Admin</b>
            </a>
          <ul class="dropdown-menu dropdown-user animated">
            <!--<li><a href="#"><i class="ti-user"></i> My Profile</a></li>
            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
            <li role="separator" class="divider"></li>-->
            <li><a href="#>"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
          <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
      </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
  </nav>
  <!-- Left navbar-header -->
  <div class="navbar-default sidebar hidden-print" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <!--<li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                    </span>
                </div>
            </li>-->
            
            <li><a href="#" class="waves-effect"><i class="ti-user fa-fw"></i> <span class="hide-menu">User <span class="fa arrow"></span></span></a>
              <ul class="nav nav-second-level">
                <li><a href="<?=$this->pathFor('tampil-user')?>" class="waves-effect">Daftar User</a></li>
        </ul>
    </div>
  </div>
   <style type="text/css">
      .white-box {
      background: #ffffff;
      margin: 0;
      padding: 25px;
      width: auto;
      margin-bottom: 15px;
      border-radius: 0;
      }
  </style>
  <!-- Left navbar-header end -->
  <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            
            <div class="row">
    <div class="col-sm-12">
      <div class="white-box">
        <?php if ($this->getSessionFlash('success')): ?>
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo $this->getSessionFlash('success'); ?>
        </div>
        <?php endif; ?>

         <?php if ($this->getSessionFlash('error_messages')): ?>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <ul>
              <?php
                foreach($this->getSessionFlash('error_messages') as $key => $error) {
                ?>
                <li><?php echo $error; ?></li>
                <?php
                }
              ?>
              </ul>
            
        </div>
        <?php endif; ?>    
        
        <h3 class="box-title m-b-0">User</h3>
        <form class="form-horizontal" action="<?php echo $this->pathFor('save-user'); ?>" method="post">
        <input type="hidden" class="form-control" value="<?php echo @$user->id ?>" name="id">
        <div class="row">
            <div class="col-md-12">
                
                <div class="form-group">
                    <label class="col-md-12"> <span class="help"> Username</span></label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" value="<?php echo @$user->username ?>" name="username">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12"> <span class="help"> Password</span></label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" value="<?php echo @$user->password ?>" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12"> <span class="help"> Role</span></label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" value="<?php echo @$user->role ?>" name="role">
                    </div>
                </div>           
                <div class="form-group m-b-0">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success waves-effect waves-light m-t-10">Simpan</button>
                        <a class="btn btn-danger waves-effect waves-light m-t-10" href="javascript:window.history.back();">Batal</a>
                    </div>
                </div>
            </div>
        </div>

        </form>
      </div>
    </div>
</div>



           

        <footer class="footer text-center"> <strong>Hospitality Platform</strong> &copy; <?=date('Y')?></footer>
        </div>
      <!-- /#page-wrapper -->
    </div>
</div>
<!-- /#wrapper -->


<!-- Bootstrap Core JavaScript -->
<script src="<?=$this->baseUrl()?>bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="<?=$this->baseUrl()?>js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?=$this->baseUrl()?>js/waves.js"></script>
<!--Counter js -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/counterup/jquery.counterup.min.js"></script>
<!--Morris JavaScript -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/raphael/raphael-min.js"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/morrisjs/morris.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?=$this->baseUrl()?>js/custom.js"></script>
<script src="<?=$this->baseUrl()?>js/dashboard1.js"></script>
<!-- Sparkline chart JavaScript -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/toast-master/js/jquery.toast.js"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
<!-- React JS -->
<script src="https://fb.me/react-with-addons-15.2.1.js"></script>
<script src="https://fb.me/react-dom-15.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.34/browser.min.js"></script>
<!-- Select2 -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=$this->baseUrl()?>plugins/bower_components/multiselect/js/jquery.multi-select.js"></script>
<!-- Plugin JavaScript -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/moment/moment.js"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- Date range Plugin JavaScript -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js"></script>

<script src="<?=$this->baseUrl()?>js/numeral.js"></script>
<script type="text/javascript">

var isconfirming = false;
  // load a language
  //numeral setting
  numeral.language('id', {
      delimiters: {
          thousands: '.',
          decimal: ','
      },
      abbreviations: {
          thousand: 'k',
          million: 'm',
          billion: 'b',
          trillion: 't'
      },
      ordinal : function (number) {
          return number === 1 ? 'er' : 'ème';
      },
      currency: {
          symbol: 'Rp'
      }
  });

  // switch between languages
  numeral.language('id');


   $(document).ready(function() {
      // $.toast({
      //   heading: 'Welcome to Elite admin',
      //   text: 'Use the predefined ones, or specify a custom position object.',
      //   position: 'top-right',
      //   loaderBg:'#ff6849',
      //   icon: 'info',
      //   hideAfter: 3500,

      //   stack: 6
      // })
      //$('.myDataTable').DataTable({paging:false,pageLength:1000}); //paging causing confusion
      //delete confirmation
      $('.fa-close').parent().click(function(event) {
            return confirm('Klik ok untuk menghapus');
          });
      $('.myDataTable').on( 'init.dt', function () {
          //delete confirmation
          console.log($(this).find('.fa-close').parent().get());
            $(this).find('.fa-close').parent().unbind( "click" );

            $(this).find('.fa-close').parent().click(function(event) {

              return confirm('Klik ok untuk menghapus');
            });

      } ).DataTable({
        "order": []
      }); //paging causing confusion
      $('.footable').footable();
      $(".select2").select2();
      $('.input-daterange').datepicker({
        toggleActive: true
      });
      $('.mydatepicker').datepicker({
        autoclose:true,
        ignoreReadonly: false
      });
      $('.clockpicker').clockpicker({
          donetext: 'Done',
      });
    });

</script>
<!--Style Switcher -->
<!-- <script src="<?=$this->baseUrl()?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script> -->
<!-- Footable -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/footable/js/footable.all.min.js"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

<!-- VUEJS -->
<script src="<?=$this->baseUrl()?>js/vue.min.js"></script>
<script src="<?=$this->baseUrl()?>js/vue-resource.min.js"></script>
<script src="<?=$this->baseUrl()?>js/app/vue.checkout-add.js"></script>
<script src="<?=$this->baseUrl()?>js/app/vue.periodic-rate.js"></script>
<script src="<?=$this->baseUrl()?>js/app/vue.currency.js"></script>
<script src="<?=$this->baseUrl()?>js/app/vue.roomchange.js"></script>
<script src="<?=$this->baseUrl()?>js/app/vue.costListBuild.js"></script>
<script src="<?=$this->baseUrl()?>js/app/vue.roomrates.js"></script>
<script src="<?=$this->baseUrl()?>js/app/reservation.js"></script>
<script src="<?=$this->baseUrl()?>js/app/logistic-purchase-request.js"></script>

</body>
</html>
