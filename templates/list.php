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
<!-- xeditable css -->
<link href="<?=$this->baseUrl()?>plugins/bower_components/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet" />
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

<!-- jQuery -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/jquery/dist/jquery.min.js"></script>

<style type="text/css">
   ul.board {
      list-style: none;
      padding: 0;
      margin: 0;
   }
   ul.board li {
      margin: 5px;
      margin-top: 20px;
      margin-top: 20px;
      border-radius: 5px;
      height: 120px;
      font-size: 18px;
      background: #fcfcfc;
      padding: 10px;
   }
   ul.board li span {
      color: #fff;
   }
   span.create-board {
      color: #9d9d9d !important;
   }
   .background {
      background: #39677b !important;
   }
   .myadmin-dd .dd-list .dd-item .dd-handle {
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: normal;
      width: 100%;
      margin-bottom: 5px;
      cursor: pointer;
  }
  .nameBoard {
      color: #39677b;
      font-size: 25px;
      border-bottom: 0 !important;
  }
  .liststyle {
      border-bottom: 0 !important;
      font-size: 16px;
      font-weight: 400;
  }
  .panel-action {
      margin-top: 10px;
  }
  .myadmin-dd .dd-list .dd-item button.text-left {
    height: auto;
    font-size: 16px;
    margin: 0;
    color: #fff;
    width: 80px;
  }
  .myadmin-dd .dd-list .dd-item .editable-buttons button {
    height: auto;
    font-size: 14px;
    margin: 0 5px;
    width: auto;
    color: #fff;
  }
  .scrollbarheight {
    /*width: 10000px;*/
    /* overflow-y: auto; */
    position: relative;
    white-space: nowrap;
  }
  .col-md-3-dsa {
    width: 283px;
    margin-left: 20px;
    position: relative;
    display: inline-flex;
  }
  .white-box {
    white-space: normal;
  }
  .myadmin-dd .dd-list .dd-item .col-xs-3 button {
    font-family: 'Poppins', sans-serif;
    margin: 0 0 10px;
    width: 100%;
    padding: 10px 10px 10px 20px;
    color: #fff;
    text-align: left;
    font-size: 15px;
  }
  button#update {
    margin: 15px 0;
    width: auto;
    font-size: 16px;
    color: #fff;
  }
  .button_default, .button_default.disabled {
    background: #39677b !important;
    border: 1px solid #849db5;
  }
  .button_default:hover {
    background : #39677b !important;
    opacity: 0.7;
  }
  .header {
    border-bottom: 1px solid #e5e5e5;
    text-align: center; 
    font-size: 16px;
    color: #2f4f4f;
  }
  .panel-body {
    width: 300px;
    height: 200px;
  }
  .form {
    padding-right: 5px;
    padding-left: 5px;
    padding-top: 5px;
    padding-bottom: 5px;
  }
  .modal-body .editable-input {
    width: 100%;
  }
  .editable-input textarea.form-control {
    height: auto;
    width: 100%;
  }
  .editableform .control-group {
    width: 100%;
  }
  .editable-container.editable-inline {
    width: 100%;
  }
  .editable-click, a.editable-click, a.editable-click:hover {
    border-bottom: 0;
    cursor: pointer;
  }
</style>
</head>
<body>

<div class="preloader hidden-print">
  <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
      <div class="top-left-part"><a class="logo" href="#"><b><img src="<?=$this->baseUrl()?>plugins/images/harmonipermana-logo.png" width="150" alt="home" /></b><span class="hidden-xs"></span></a></div>
      <ul class="nav navbar-top-links navbar-right pull-right">
        
        <!-- /.dropdown-user -->
        <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><img src="<?=$this->baseUrl()?>plugins/images/users/avatar.png" alt="user-img" width="36" class="img-circle"> </a>
          <ul class="dropdown-menu dropdown-user animated flipInY">
            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
          <!-- /.dropdown-user -->
        </li>
      </ul>
    </div>
  </nav>

<!-- Left navbar-header -->
  <div class="navbar-default sidebar hidden-print" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            
        <li><a href="<?=$this->pathFor('tampil-board')?>" class="waves-effect"><i class="icon-list fa-fw"></i> <span class="hide-menu">Job Desc <span class="fa arrow"></span></span></a>
                </li>
        </ul>
    </div>
  </div>
<!-- Left navbar-header end -->

  <!-- Page Content -->
    <div id="page-wrapper" style="min-height: 601px;">
    <!-- Header -->
    <div id="header" style="margin-left: 5px;">
            <div class="">
              <div class="btn-group m-r-10">
                <button aria-expanded="false" data-toggle="dropdown" class="btn btn-infoheader dropdown-toggle waves-effect waves-light" type="button"><img src="<?=$this->baseUrl()?>plugins/images/trellohp.png">Board </button>

                    <ul class="nav navbar-top-links navbar-left hidden-xs">
                      <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                      <li>
                        <form role="search" class="app-search hidden-xs">
                          <input type="text" placeholder="Search..." class="form-control">
                          <a href=""><i class="fa fa-search"></i></a>
                        </form>
                      </li>
                    </ul>

                <ul role="menu" class="dropdown-menu">
                <li><i class="fa fa-clock-o" aria-hidden="true"></i> Recent Boards</li>
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                <li><img src="<?=$this->baseUrl()?>plugins/images/trellohp.png">Personal Boards</li>
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                  <li><a href="#">Create new boards</a></li>
                  <li><a href="#">Always Keep this menu open</a></li>
                  <li><a href="#">See closed boards</a></li>
                </ul>

                <div class="right">
                <div class="btn-group m-r-10">
                <div class="dropdown"  style="z-index: 99;">
                <button aria-expanded="false" data-toggle="dropdown" class="btn btn-infoheader dropdown-toggle waves-effect waves-light" type="button"><i class="fa fa-bell-o" aria-hidden="true"></i></button>
                <ul role="menu" class="dropdown-menu animated flipInX">
                  <a href="#"></a>
                  <li><a href="#"><center>Notification</center></a></li>
                  <li class="divider"></li> 
                </ul>
                </div>
                </div>

                <div class="btn-group m-r-10">
                <div class="dropdown" style="z-index: 99;">
                <button aria-expanded="false" data-toggle="dropdown" class="btn btn-infoheader dropdown-toggle waves-effect waves-light" type="button"><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                <ul role="menu" class="dropdown-menu animated flipInX">
                  <a href="#"></a>
                  <li><a href="#"><center>Information</center></a></li>
                  <li class="divider"></li> 
                </ul>
                </div>
                </div>

                <div class="btn-group m-r-10">
                <div class="dropdown" style="z-index: 99;">
                <button aria-expanded="false" data-toggle="dropdown" class="btn btn-infoheader dropdown-toggle waves-effect waves-light" type="button">Admin</button>
                <ul role="menu" class="dropdown-menu animated flipInX">
                  <a href="#"></a>
                  <li><a href="#"><center>Admin</center></a></li>
                  <li class="divider"></li>
                  <li><a href="#">Profil</a></li>
                  <li><a href="#">Cards</a></li>
                  <li><a href="#">Settings</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Help</a></li>
                  <li><a href="#">Shortcuts</a></li>
                  <li><a href="#">Change Language...</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Log Out</a></li>
                </ul>
                </div>
                </div>

                <div class="btn-group m-r-10">
                <div class="dropdown" style="z-index: 99;">
                <button aria-expanded="false" data-toggle="dropdown" class="btn btn-infoheader dropdown-toggle waves-effect waves-light" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                 <ul role="menu" class="dropdown-menu animated flipInX">
                  <a href="#"></a>
                  <li><a href="#"><center>Create</center></a></li>
                  <li class="divider"></li>
                  <li><a href="#">Create Bords...<p style="font-size: 11px; color: #000;">Lorem Ipsum Lorem Ipsum Lorem Ipsum</p></a></li>             
                  <li><a href="#">Create Personal Team...<p style="font-size: 11px; color: #000;">Lorem Ipsum Lorem Ipsum Lorem Ipsum</p></a></li> 
                  <li><a href="#">Create Business Team...<p style="font-size: 11px; color: #000;">Lorem Ipsum Lorem Ipsum Lorem Ipsum</p></a></li> 
                </ul>
                </div>
                </div>
              </div>
              </div>
              </div>
              </div>
    <!-- content -->
     <div class="row bg-title" style="margin-left: 5px;">
        <div class="col-sm-6 col-xs-9">
          <a href="#" id="inline-filename" data-type="text" data-pk="<?= @$boards->id; ?>" data-title="Enter filename" class="editable editable-click nameBoard" style="display: inline;"><span><?= @$boards->boardname; ?></span></a>
          <script type="text/javascript">
          $(function(){
            //inline
               $('#inline-filename').editable({
               url: '<?= $this->pathFor('save-board'); ?>',
               type: 'text',
               pk: <?= @$boards->id; ?>,
               name: 'boardname',
               title: 'Enter boardname',
               mode: 'inline'
             });

            });
          </script>
        </div>
      </div>
    <script type="text/javascript">
      window.onload=function(){
      document.getElementById("#scroll-auto-width").offsetWidth;
    }
    </script>
    <div id="style-1" class="container-fluid" style="flex-grow: 1;overflow-y: auto;position: relative;white-space: nowrap;padding: 0 0;margin: 0 25px;margin-bottom: 25px;">
    <div id="scroll-auto-width" class="scrollbarheight" id="style-1">
      <!-- isi content -->
        <?php foreach($lists as $list): ?>
        <div class="col-md-3-dsa">
          <div class="white-box">
      
              <a href="#" id="inline-namecard-<?= $list->id; ?>" data-type="text" data-pk="<?= $list->id?>" data-title="Enter namecard" class="editable editable-click liststyle" style="display: inline;"><?= $list->listname;?></a>
              <script type="text/javascript">
              $(function(){
                   $('#inline-namecard-<?= $list->id; ?>').editable({
                   url: '<?= $this->pathFor('save-list');?>',
                   type: 'text',
                   pk: <?= $list->id?>,
                   name: 'namelist',
                   title: 'Enter namelist',
                   mode: 'inline'
                 });

                });
              </script>
     
              
              <div class="panel-action">
              <div class="myadmin-dd dd" id="nestable">
                <ol id="card-list" class="dd-list">
                <div class="scrollbar" id="style-1">
                  <li class="dd-item " data-id="1">
                      <?php foreach ($list->details as $card):
                        ?>
                          <div class="dd-handle btn-block btn-default" data-toggle="modal" data-target=".bs-example-modal-lg-<?= $card->id; ?>"><?= $card->cardname;?></div>
                          <div class="modal fade bs-example-modal-lg-<?= $card->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                          <!-- modal dialog -->
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin: 0;">×</button>
                                  <h4 class="modal-title" id="myLargeModalLabel"><i class="ti-clipboard"></i> <?= $card->cardname;?></h4>
                                </div>
                                <div class="modal-body">
                                  <div class="row">
                                    <div class="col-lg-12">
                                      <div class="col-xs-9">
                                        <div class="form-group">
                                          <h4>Description</h4>
                                          <label id="card-<?= $card->id;?>" data-type="textarea" data-pk="<?= $card->id;?>" data-placeholder="Your comments here..." data-title="Enter comments" class="control-label"><?= $card->description; ?></label>
                                          <!-- akhir tampilan form edit -->
                                        </div>
                                        <div class="mdl-card__supporting-text">
                                        <form id="comments<?= $card->id;?>">
                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label is-upgraded" data-upgraded=",MaterialTextfield">
                                            <label class="control-label" for="textarea"><i class="ti-comments"></i> Add Comment</label>
                                            <br>
                                            <input type="text" name="idcard" value="<?= $card->id;?>" class="hide">
                                            <input type="text" name="iduser" value="<?= $_SESSION['id']; ?>" class="hide">
                                            <textarea name="comment" type="submit" class="form-control status-box mdl-textfield__input" id="textarea" rows="8" placeholder="Add your comment...."></textarea>
                                            <!-- <label class="mdl-textfield__label" for="sample3">Say something...please </label> -->
                                          </div>

                                          <button id="update" class="btn btn-block btn-success"> Comment</button>
                                        </form>
                                        <script type="text/javascript">
                                         $('form#comments<?= $card->id;?>').submit(function( event ) {
                                            event.preventDefault();
                                            $.ajax({
                                                url: '<?= $this->pathFor('comment-save');?>',
                                                type: 'post',
                                                data: $('form#comments<?= $card->id;?>').serialize(), // Remember that you need to have your csrf token included
                                                dataType: 'json',
                                                success: function( _response ){
                                                    // Handle your response..
                                                },
                                                error: function( _response ){
                                                    // Handle error
                                                }
                                            });
                                            $('textarea.status-box.mdl-textfield__input').val('');
                                         });
                                        </script>
                                      </div>
                                      </div> 
                                      <div class="col-xs-3">
                                        <h3>Add</h3>
                                          <div class="dropdown open">
                                          <button type="button" class="dropdown-toggle btn waves-effect btn-style btn-rounded button_default text-left" data-toggle="dropdown" aria-expanded="true"><li class="ti-check-box"> Checklist</li></button>
                                          <div class="dropdown-menu animated flipInY" "="">
                                          <div class="panel-body">
                                          <div class="header">
                                              Add Checklist
                                          </div>
                                          <div class="form m-t-5">
                                            <form action="" method="POST">
                                              <div class="form-body">
                                                  <div class="row">
                                                      <div class="form-group">
                                                        <label class="control-label">Title</label>
                                                        <input type="text" id="firstName" class="form-control" placeholder="add your list . . ." name="listname">
                                                      </div>
                                                  </div>
                                            </div>
                                              <div class="form-actions">
                                                  <button type="button" class="btn waves-effect btn-style btn-rounded button_default text-left" style="text-align: center; width: 100px; float: left;">Add</button>
                                              </div>
                                          </form>
                                          </div>
                                          </div>
                                          </div>
                                          </div>
                                          <button type="button" class="btn waves-effect btn-style btn-rounded button_default text-left collapseble"><li class="ti-calendar"> Due date</li> </button>
                                          <button type="button" class="btn waves-effect btn-style btn-rounded button_default text-left collapseble"><li class="ti-link"> Attachment</li></button>
                                      </div>
                                        </div>
                                        </div>
                                    </div>
                              </div>
                            </div>
                            <!-- modal dialog end -->
                          </div>
                          <!-- tampil dialog comment end -->
                          <script type="text/javascript">
                          $(function(){
                               $('#card-<?= $card->id;?>').editable({
                               url: '<?= $this->pathFor('save-card');?>',
                               pk: <?= $card->id?>,
                               name: 'carddesc',
                               title: 'Enter card description',
                               showbuttons: 'bottom',
                               mode: 'inline',
                               row: 5,
                               cols: 10
                             });

                            });
                          </script>
                      <?php endforeach; ?>
                  </li>
                  </div>
                    <a class="btn btn-block btn-default m-t-10 show-<?= $list->id; ?>">Add a Card ...</a>
                    <form action="<?= $this->pathFor('save-card'); ?>" method="POST">
                      <div class="m-t-15 lihat-<?= $list->id; ?> dn" style="display: none;">
                          <input type="text" name="board" value="<?php echo @$boards->id ?>" class="hidden">
                          <input type="text" name="idlist" class="hidden" value="<?= $list->id; ?>">
                          <textarea class="form-control form-control-line" name="cardname" rows="3"></textarea>
                          <button type="submit" class="btn btn-info m-t-20">Add</button> 
                        </div>
                    </form>
                </ol>
              </div>
            </div> 
          </div>
        </div>
          <script>
            $(document).ready(function(){
                $("a.show-<?= $list->id; ?>").click(function(){
                    $(".lihat-<?= $list->id; ?>").toggle();
                });
            });
          </script>
        <?php endforeach; ?>
        <div class="col-md-3-dsa">
            <button type="button" class="btn btn-block btn-rounded btn-default showtop" data-target="#add-list" data-toggle="modal">Add a List ...</button>
            <!-- Start an Alert -->
        </div>
        <div id="add-list" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; padding-right: 17px;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Add a List</h4></div>
                    <div class="modal-body">
                        <form action="<?= $this->pathFor('save-list'); ?>" method="POST">
                            <div class="form-group">
                                <div class="col-md-10 m-b-20">
                                    <input type="text" name="idboard" value="<?php echo @$boards->id ?>" class="hidden">
                                    <input type="text" name="listname" class="form-control" placeholder="Add a List . . . "> 
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info">Save</button>
                        </form>
                    </div>
                </div>
                </div>
                </div>
                <!-- /.modal-content -->
                <div class="clear"></div>
            </div>
            <!-- /.modal-dialog -->
        </div>

      <div class="right-sidebar">
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="slimscrollright" style="overflow: hidden; width: auto; height: 100%;">
          <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>

        </div><div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
      </div>
      <!-- /.right-sidebar -->
    </div>
    <!-- /.container-fluid -->
   <footer class="footer text-center"> <strong>Hospitality Platform</strong> &copy; <?=date('Y')?></footer>
  </div>
</div>

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
<script src="<?=$this->baseUrl()?>plugins/bower_components/nestable/jquery.nestable.js"></script>

<noscript>&lt;img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=m/hBm1akKd60bm" style="display:none" height="1" width="1" alt=""&gt;</noscript>

<!-- Rename File -->
<script type="text/javascript" src="<?=$this->baseUrl()?>plugins/bower_components/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

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

<script src="//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>

  <script src="<?=$this->baseUrl()?>cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?=$this->baseUrl()?>cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="<?=$this->baseUrl()?>//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?=$this->baseUrl()?>https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
<script src="<?=$this->baseUrl()?>https://code.getmdl.io/1.1.2/material.min.js"></script>
</body>
</html>