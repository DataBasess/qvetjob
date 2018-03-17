<form role="form"
action="<?php echo base_url('cwcontrol/'.$page.'/update');?>"
method="post" enctype="multipart/form-data">
<input type="hidden" name="method" value="update" />
<input type="hidden" name="id" value="<?= $news['news_ID'] ?>" />


<div class="row">


  <div class="col-lg-12" style="margin-top: 20px;">

    <div class="panel panel-default">
      <div class="panel-heading">

        <strong>เพิ่มข้อมูล</strong>


      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-6">&nbsp;</div>
          <div class="col-lg-6 text-right">
            <button type="submit" class="btn btn-success ">บันทึกข้อมูล</button>
          </div>
          <div class="col-lg-12">


            <ul class="nav nav-tabs">
              <li class="item active">
               <a data-toggle="tab" href="#menu">TH</a>
             </li>
             <li class="item">
               <a data-toggle="tab" href="#menu2">EN</a>
             </li>
           </ul>


           <div class="tab-content">
            <div id="menu" class="tab-pane fade in active">

              <div class="row">
                <div class="form-group" >
                  <div class="form-group" >
                    <div class="col-lg-12">
                      <label for="">ชื่อสินค้า</label>
                      <input type="text" name="news_Name_TH" value="<?= $news['news_Name_TH'] ?>" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <br>
            </div>

            <div id="menu2" class="tab-pane fade in">
              <br>
              <div class="row">
                <div class="form-group" >
                  <div class="col-lg-12">
                    <label for="">ชื่อสินค้า</label>
                    <input type="text" name="news_Name_EN" value="<?= $news['news_Name_EN'] ?>" class="form-control">
                  </div>
                </div>
              </div>
              <br>

            </div> 

          </div>





          <br>
          <div class="row">
            <div class="col-lg-6">  
              <div class="form-group">
                <label>รูปภาพปก ขนาด 384px * 328px </label>
                <input  type="file" name="news_Images" class="Images">
              </div>  
            </div>
            <div class="col-lg-6">  
              <div class="form-group">
                <label>เอกสาร</label>
                <input  type="file" name="news_file_TH[]" id="File_TH" multiple>
              </div>  
            </div>

            <script>
              $('#File_TH').filer({
               addMore: true,
               limit: 2,
               maxSize: 10,
               extensions: ['pdf', 'doc', 'docx', 'xls', 'xlsx'],
               changeInput: true,
               showThumbs: true,
               templates: {
                box: '<ul class="jFiler-items-list jFiler-items-default"></ul>',
                item: '<li class="jFiler-item"><div class="jFiler-item-container">'+
                '<div class="jFiler-item-inner"><div class="jFiler-item-icon pull-left">{{fi-icon}}</div>'+
                '<div class="jFiler-item-info pull-left">'+
                '<div class="jFiler-item-title" title="{{fi-name}}"><input type="text" class="form-control" name="file_Title_TH[]" placeholder="ชื่อไฟล์ (TH)" style="width:200px;">{{fi-name}}</div>'+
                '<div class="jFiler-item-others"><span>size: {{fi-size2}}</span><span>type: {{fi-extension}}</span><span class="jFiler-item-status">{{fi-progressBar}}</span></div>'+
                '<div class="jFiler-item-assets"><ul class="list-inline"><li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li></ul></div></div></div></div></li>',
                itemAppend: '<li class="jFiler-item"><div class="jFiler-item-container"><div class="jFiler-item-inner"><div class="jFiler-item-icon pull-left">{{fi-icon}}</div><div class="jFiler-item-info pull-left"><div class="jFiler-item-title">{{fi-name | limitTo:35}}</div><div class="jFiler-item-others"><span>type: {{fi-extension}}</span><span class="jFiler-item-status"></span></div><div class="jFiler-item-assets"><ul class="list-inline"><li><a class="icon-jfi-trash jFiler-item-trash-action" ids="{{fi-name}}"></a></li></ul></div></div></div></div></li>',
                progressBar: '<div class="bar"></div>',
                itemAppendToEnd: true,
                removeConfirmation: true,
                _selectors: {
                 list: '.jFiler-items-list',
                 item: '.jFiler-item',
                 progressBar: '.bar',
                 remove: '.jFiler-item-trash-action'
               }
             },
             captions: {
               removeConfirmation: 'ยืนยันการลบข้อมูล',
               errors: {
                filesType: 'เฉพาะไฟล์ pdf doc docx xls xlsx เท่านั้น',
                filesSize: '{{fi-name}} ขนาดใหญ่เกินไป โปรเลือกไฟล์ขนาดไม่เกิน {{fi-maxSize}}MB.',

              }

            },
            files: [

            <?php

            if(isset($news["news_file_TH"])){
              foreach ($news["news_file_TH"] as $row_file)          

              {

                ?>

                {
                 name: "<?php echo $row_file["file_ID"]?>",
                 type: "image",
                 file: "<?php echo asset_url()?>upload/file/<?php echo $row_file["file_name_TH"]?>",


               },
               <?php }}else{?>{}<?php }?>
               ],
               onRemove: function(el){      
                 var ids = el.find(".icon-jfi-trash").attr("ids");
                 $.post('<?php echo base_url('cwcontrol/download/delete_file');?>', {id: ids});
               },
     // alert(id);
     

     afterShow: function(el){
       saveOrder();
     },
     captions: {
       removeConfirmation: 'ยืนยันการลบข้อมูล',

     },
   }); 
 </script>
</div>




</div>
<div class="clearfix"></div><hr>
<div class="col-lg-6">&nbsp;</div>
<div class="col-lg-6 text-right">
  <button type="submit" class="btn btn-success ">บันทึกข้อมูล</button>
</div>

</div>
<!-- /.row (nested) -->
</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
</div>
</form>


<script type="text/javascript">
  tinymce.init({
    selector: 'textarea.ckeditor',
    menubar : false,
    force_br_newlines : true,
    force_p_newlines : false,
    forced_root_block : '',
    height: 400, 
  //width : 1100,
  plugins: [
  "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
  "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
  "save table contextmenu directionality emoticons template paste textcolor moxiemanager colorpicker layer textpattern"
  ],    
  toolbar: 'insertfile undo redo | table | styleselect fontselect fontsizeselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | print nonbreaking hr emoticons code',


});





  saveOrder();  
  $("#list1").dragsort({ dragSelector: "img", dragBetween: true, dragEnd: saveOrder, placeHolderTemplate: "<li class='placeHolder'><div></div></li>" });

  function saveOrder() {
    $("#list1.sort").find("input#sort").each(function(k,v){
      $(v).val(k+1);
    });
    $("#aaa").find(".jFiler-input-caption").find("span").text($("#list1.sort").find("input#sort").length+" files were chosen");
    
  };
</script>

<script type="text/javascript">

  $('.Images').filer({
   limit: 1,
   showThumbs: true,
   templates: {
    box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
    item: '<li class="jFiler-item">' +
    '<div class="jFiler-item-container">' +
    '<div class="jFiler-item-inner">' +
    '<div class="jFiler-item-thumb">' +
    '<div class="jFiler-item-status"></div>' +
    '<div class="jFiler-item-info">' +
    '<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>' +
    '<span class="jFiler-item-others">{{fi-size2}}</span>' +
    '</div>' +
    '{{fi-image}}' +
    '</div>' +
    '<div class="jFiler-item-assets jFiler-row">' +
    '<ul class="list-inline pull-left">' +
    '<li>{{fi-progressBar}}</li>' +
    '</ul>' +
    '<ul class="list-inline pull-right">' +
    '<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>' +
    '</ul>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</li>',
    itemAppend: '<li class="jFiler-item">' +
    '<div class="jFiler-item-container">' +
    '<div class="jFiler-item-inner">' +
    '<div class="jFiler-item-thumb">' +
    '<div class="jFiler-item-status"></div>' +
    '<div class="jFiler-item-info">' +
    '<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>' +
    '<span class="jFiler-item-others">{{fi-size2}}</span>' +
    '</div>' +
    '{{fi-image}}' +
    '</div>' +
    '<div class="jFiler-item-assets jFiler-row">' +
    '<ul class="list-inline pull-left">' +
    '<li><span class="jFiler-item-others">{{fi-icon}}</span></li>' +
    '</ul>' +
    '<ul class="list-inline pull-right">' +
    '<li><!--<a class="icon-jfi-trash jFiler-item-trash-action" id="{{fi-name}}"></a>--></li>' +
    '</ul>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</li>',
    progressBar: '<div class="bar"></div>',
    itemAppendToEnd: false,
    removeConfirmation: true,
    _selectors: {
     list: '.jFiler-items-list',
     item: '.jFiler-item',
     progressBar: '.bar',
     remove: '.jFiler-item-trash-action'
   }
 },
 <?php if($news["news_Images"]){?>
  files: [
  {
    name: "<?php echo $news["news_ID"]?>",
    type: "image",
    file: "<?php echo asset_url()?>upload/news/<?php echo $news["news_Images"]?>"


  }

  ],
  <?php } ?>

});
</script>