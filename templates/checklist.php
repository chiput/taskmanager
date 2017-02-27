<style type="text/css">
  @import url(http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900);
  @import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700);

/* TO DO LIST
================================================== */
.tdl-holder{
  margin:0px auto;
  width: 620px; 
}

.tdl-holder h2{
  background-color: #de3f53;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  color:#fff;
  font-family:"Roboto Condensed", Arial, sans-serif;
  font-size:16px;
  font-weight: 100;
  line-height: 56px;
  padding-left: 15px;
  margin:0;
}

.tdl-holder ul, .tdl-holder li {
  list-style: none;
  margin:0;
  padding:0;
}

.tdl-holder li{
  color: #b1b2c9;
  opacity: 0.6;
  border-radius: 3px;
}

.tdl-holder li span{
  margin-left:30px;
  -webkit-transition: all .2s linear;
     -moz-transition: all .2s linear;
       -o-transition: all .2s linear;
        transition: all .2s linear; 
}

.tdl-holder label{
  cursor:pointer;
  display:block;
  line-height: 56px;
  padding: 0 15px; 
  position: relative;
}

.tdl-holder label:hover{
  background-color: #c4c9cc;
  border-radius: 5px;
  color:#8284a3;
}

.tdl-holder label a{
  color:#fff;
  display:none;
  float:right;
  font-weight: bold;
  line-height: normal;
  margin-top: 20px;
  text-align: center;
  text-decoration: none;
  -webkit-transition: all .2s linear;
     -moz-transition: all .2s linear;
       -o-transition: all .2s linear;
        transition: all .2s linear; 
}

.tdl-holder label:hover a{
  display: block;
}

.tdl-holder label a:hover{  
  color:#de3f53;
}

.tdl-holder input[type="checkbox"]{
  cursor: pointer;
  opacity: 0;
  position: absolute;
}

.tdl-holder input[type="checkbox"] + i{
  background-color: #404a6e;
  border-radius: 50%;
  display: block;
  height: 16px;
  position: absolute;
  top:20px;
  width: 16px;  
  z-index: 1;
}

.tdl-holder input[type="checkbox"]:checked + i::after{
  background-color: #6E6E96;
  border-radius: 50%;
  content: '';
  display: block;
  height:8px;
  left:4px;
  position: absolute;
  top:4px;
  width:8px;  
  z-index: 2;
}

.tdl-holder input[type="checkbox"]:checked ~ span{  
  color: #586186;
  text-decoration: line-through;
}

.tdl-holder input[type="text"]{
    background-color: #c4c9cc;
    border: 1px solid #fff;
    border-radius: 3px;
    box-shadow: none;
    color: #565656;
    height: 38px;
    max-width: 100%;
    transition: all 300ms linear 0s;
  color: #464f72;
  font-size:14px;
  margin:0;
  padding:20px 15px;
  width:620px;
}

.tdl-holder input[type="text"]:hover{
  color:#4c577f;
}

.tdl-holder input[type="text"]:focus{
  color:#171d37;
}

.tdl-holder ::-webkit-input-placeholder {color: #464f72;} /* WebKit browsers */
.tdl-holder :-moz-placeholder       {color: #464f72;} /* Mozilla Firefox 4 to 18 */
.tdl-holder ::-moz-placeholder      {color: #464f72;} /* Mozilla Firefox 19+ */
.tdl-holder :-ms-input-placeholder    {color: #464f72;} /* Internet Explorer 10+ */

.tdl-holder li.remove{
  -webkit-animation:collapseItem 300ms ease;
      animation:collapseItem 300ms ease;
  -webkit-transform-origin: 50% 0%;
    -ms-transform-origin: 50% 0%;
      transform-origin: 50% 0%;

}

.tdl-holder li.remove span{
  color: #586186;
  text-decoration: line-through;
}

@keyframes collapseItem {
    0%    { -ms-transform: perspective(500px) rotateX(0deg);transform: perspective(500px) rotateX(0deg);  }
    100%  { -ms-transform: perspective(500px) rotateX(-90deg);transform: perspective(500px) rotateX(-90deg); }
}

@-webkit-keyframes collapseItem {
    0%    { -webkit-transform: perspective(500px) rotateX(0deg);  }
    100%  { -webkit-transform: perspective(500px) rotateX(-90deg);}
}
</style>

<?php foreach ($checklists as $checklist): ?>
<div class="form-group">
  <h4 class="modal-title" id="myLargeModalLabel"><i class="ti-check-box"></i><span id="checklist-<?= $checklist->id; ?>" data-type="text" data-pk="<?= $checklist->id?>" data-title="Enter checklist name" class="editable editable-click liststyle" style="margin-left: 10px;"><?= $checklist->checklistname; ?></span></h4>
  <!-- list item -->
  <div class="tdl-holder">
    <div class="tdl-content">
      <ul>
          <li><label><input type="checkbox"><i></i><span>get up</span><a href='#' class='fa fa-trash-o'></a></label></li>
          <li><label><input type="checkbox" checked><i></i><span>stand up</span><a href='#' class='fa fa-trash-o'></a></label></li>
          <li><label><input type="checkbox"><i></i><span>don't give up the fight.</span><a href='#' class='fa fa-trash-o'></a></label></li>
          <li><label><input type="checkbox" checked><i></i><span>save the world.</span><a href='#' class='fa fa-trash-o'></a></label></li>
          <li><label><input type="checkbox"><i></i><span>do something else</span><a href='#' class='fa fa-trash-o'></a></label></li>
        </ul>
        </div>
      <input type="text" class="tdl-new" placeholder="Write new item and hit 'Enter'...">
    </div>
</div>

<!-- /* TO DO LIST */ -->
<script type="text/javascript">
  $(".tdl-new").bind('keypress', function(e){
    var code = (e.keyCode ? e.keyCode : e.which);
    if(code == 13) {
      var v = $(this).val();
      var s = v.replace(/ +?/g, '');
      if (s == ""){
        return false;
      }else{
        $(".tdl-content ul").append("<li><label><input type='checkbox'><i></i><span>"+ v +"</span><a href='#' class='fa fa-trash-o'></label></li>");
        $(this).val("");
      }
    }
  });


  $(".tdl-content a").bind("click", function(){
    var _li = $(this).parent().parent("li");
        _li.addClass("remove").stop().delay(100).slideUp("fast", function(){
          _li.remove();
        });
    return false;
  });

  // for dynamically created a tags
  $(".tdl-content").on('click', "a", function(){
    var _li = $(this).parent().parent("li");
        _li.addClass("remove").stop().delay(100).slideUp("fast", function(){
          _li.remove();
        });
    return false;
  });
</script>

<script type="text/javascript">
  $(function(){
       $('#checklist-<?= $checklist->id; ?>').editable({
       url: '<?= $this->pathFor('save-checklist');?>',
       type: 'text',
       pk: <?= $checklist->id?>,
       name: 'checklist',
       showbuttons: 'bottom',
       title: 'Enter checklist'
     });

    });
  </script>
<?php endforeach; ?>

<script src="<?=$this->baseUrl()?>https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js></script>