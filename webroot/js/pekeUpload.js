/*
 *  PekeUpload 1.0.6 - jQuery plugin
 *  written by Pedro Molina
 *  http://www.pekebyte.com/
 *
 *  Copyright (c) 2013 Pedro Molina (http://pekebyte.com)
 *  Dual licensed under the MIT (MIT-LICENSE.txt)
 *  and GPL (GPL-LICENSE.txt) licenses.
 *
 *  Built for jQuery library
 *  http://jquery.com
 *
 */
var pickId="";
var btnId="";

(function($) {

  $.fn.pekeUpload = function(options){

    // default configuration properties
    var defaults = {
      onSubmit:       false,
      btnText:        "Browse files...",
      url:        "upload",
      theme:        "custom",
      field:        "file",
      data:         null,
      multi:        true,
      showFilename:       true,
      showPercent:        true,
      showErrorAlerts:    true,
      allowedExtensions:  "",
      invalidExtError:    "Invalid File Type",
      maxSize:      0,
      sizeError:      "Size of the file is greather than allowed",
      onFileError:        function(file,error){},
      onFileSuccess:      function(file,data){}
    };

    var options = $.extend(defaults, options);

    //Main function
    var obj;
    var file = new Object();
    var fileinput = this;
    this.each(function() {
      obj = $(this);
      $(this).removeClass('loco');

      //HTML code depends of theme
      if (options.theme == "bootstrap"){
      var html = '<a href="javascript:void(0)" class="btn btn-primary btn-upload"> <span class="icon-upload icon-white"></span> '+options.btnText+'</a><div class="pekecontainer"></div>';
      }
      if (options.theme == "custom"){
        var html = '<a href="javascript:void(0)" class="btn-pekeupload">'+options.btnText+'</a><div class="pekecontainer"></div>';
      }
      obj.after(html);
      obj.hide();
      //Event when clicked the newly created link
      obj.next('a').click(function(){
          btnId = $(this).parent().find('input').attr('id');
          btt = $(this).parent().find('input').attr('data-id');
          dataimg = $(this).parent().find('input').attr('data-img');
          obj.click();
        
      });
      //Event when user select a file
      obj.change(function(){
        pickId=this.id;
        file.name = obj.val().split('\\').pop();
        file.size = (obj[0].files[0].size/1024)/1024;
        if (validateresult()==true){
          if (options.onSubmit==false){
            UploadFile();
          }
          else{
            obj.next('a').next('div').prepend('<br /><span class="filename">'+file.name+'</span>');
            obj.parent('form').bind('submit',function(){
              obj.next('a').next('div').html('');
              UploadFile();
              });
          }
        }
      });
    });
    //Function that uploads a file
    function UploadFile(){
      var error = true;
      if (options.theme=="bootstrap"){
        var htmlprogress = '<div class="file"><div class="filename"></div><div class="progress progress-striped"><div class="bar pekeup-progress-bar" style="width: 0%;"><span class="badge badge-info"></span></div></div></div>';
      }
      if (options.theme=="custom"){
        var htmlprogress = '<div class="file"><div class="filename"></div><div class="progress-pekeupload"><div class="bar-pekeupload pekeup-progress-bar" style="width: 0%;"><span></span></div></div></div>';
      }
      obj.next('a').next('div').prepend(htmlprogress);
      var formData = new FormData();
      formData.append(options.field, obj[0].files[0]);
      formData.append('data', options.data);

      $.ajax({
            url: options.url,
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(data){
              var percent = 100;
              obj.next('a').next('div').find('.pekeup-progress-bar:first').width(percent+'%');
                obj.next('a').next('div').find('.pekeup-progress-bar:first').text(percent+"%");

                if (data[0]==1){
                  if (options.multi==false){
                    //obj.attr('disabled','disabled');
                  }

                  nombreImg=data[1].split(".");
                  obj.attr('data-img','image'+nombreImg[0]); 
                  loco = btnId.split("file");
                
                  //console.log(btt);
                      imgp=loco[1];
                 
                  //console.log(data[1]);

                  //<div style="background-image: url('+WEBROOT+'files/'+data[1]+');width: 20%;height: 100px;" class="img-polaroid"></div>

                  $('.image-placeholder'+imgp).html('<img src="'+WEBROOT+'files/'+data[1]+'" style="width: 100%;" class="img-polaroid"></img>');
                  //$('.image-placeholder'+imgp).html('<img src="'+WEBROOT+'files/'+data[1]+'" class="img-polaroid" style="width: 100%;"></img><div class="removeIMG'+data[2]+'" onclick="removeImg(\''+data[1]+'\',true);" id="'+nombreImg[0]+'_jpg" style="position: absolute; top: -33px; right: 18px;  background-color: rgba(0,0,0,0); cursor: pointer" title="Borrar"><i class="icon-remove" style="color:red;"></i></div>');
                  
                  //console.log(dataimg);

                  if(imgp==1) {
                    var p = 0;
                    $( ".imageHiddenContent input[type=hidden]" ).each(function( index ) {
                      $(this).remove();
                      $('.imageHiddenContent1').html('<input type="hidden" value="'+data[1]+'" id="ProductoImg1" name="data[Producto][imagen_principal]">');
                      p = 1;
                    });
                    if(p==0){
                      $('.imageHiddenContent1').html('<input type="hidden" value="'+data[1]+'" id="ProductoImg1" name="data[Producto][imagen_principal]">');     
                    }
                  }

                  if(imgp==2){
                    var p = 0;
                    $( ".imageHiddenContent input[type=hidden]" ).each(function( index ) {
                      $(this).remove();
                      $('.imageHiddenContent2').html('<input type="hidden" value="'+data[1]+'" id="ProductoImg2" name="data[Producto][imagen_2]">');
                      p = 1;
                    });
                    if(p==0){
                      $('.imageHiddenContent2').html('<input type="hidden" value="'+data[1]+'" id="ProductoImg2" name="data[Producto][imagen_2]">');     
                    }
                  }
                  
                  if(imgp==3){
                    var p = 0;
                    $( ".imageHiddenContent input[type=hidden]" ).each(function( index ) {
                      $(this).remove();
                      $('.imageHiddenContent3').html('<input type="hidden" value="'+data[1]+'" id="ProductoImg3" name="data[Producto][imagen_3]">');
                      p = 1;
                    });
                    if(p==0){
                      $('.imageHiddenContent3').html('<input type="hidden" value="'+data[1]+'" id="ProductoImg3" name="data[Producto][imagen_3]">');     
                    }
                  }
                  
                  if(imgp==4){
                    var p = 0;
                    $( ".imageHiddenContent input[type=hidden]" ).each(function( index ) {
                      $(this).remove();
                      $('.imageHiddenContent4').html('<input type="hidden" value="'+data[1]+'" id="ProductoImg4" name="data[Producto][imagen_4]">');
                      p = 1;
                    });
                    if(p==0){
                      $('.imageHiddenContent4').html('<input type="hidden" value="'+data[1]+'" id="ProductoImg4" name="data[Producto][imagen_4]">');     
                    }
                  }
                  
                  if(imgp==5){
                    var p = 0;
                    $( ".imageHiddenContent input[type=hidden]" ).each(function( index ) {
                      $(this).remove();
                      $('.imageHiddenContent5').html('<input type="hidden" value="'+data[1]+'" id="ProductoImg5" name="data[Producto][imagen_5]">');
                      p = 1;
                    });
                    if(p==0){
                      $('.imageHiddenContent5').html('<input type="hidden" value="'+data[1]+'" id="ProductoImg5" name="data[Producto][imagen_5]">');     
                    }
                  }

                   if(imgp==9){
                    var p = 0;
                    $( ".imageHiddenContent input[type=hidden]" ).each(function( index ) {
                      $(this).remove();
                      $('.imageHiddenContent9').html('<input type="hidden" value="'+data[1]+'" id="ProductoImg5" name="data[Consejo][imagen]">');
                      p = 1;
                    });
                    if(p==0){
                      $('.imageHiddenContent9').html('<input type="hidden" value="'+data[1]+'" id="ProductoImg5" name="data[Consejo][imagen]">');     
                    }
                  }

                   if(imgp==11){
                    var p = 0;
                    $( ".imageHiddenContent input[type=hidden]" ).each(function( index ) {
                      $(this).remove();
                      $('.imageHiddenContent11').html('<input type="hidden" value="'+data[1]+'" id="ProductoImg5" name="data[Linea][0][imagen]">');
                      p = 1;
                    });
                    if(p==0){
                      $('.imageHiddenContent11').html('<input type="hidden" value="'+data[1]+'" id="ProductoImg5" name="data[Linea][0][imagen]">');     
                    }
                  }



                   if(imgp==12){
                    var p = 0;
                    $( ".imageHiddenContent input[type=hidden]" ).each(function( index ) {
                      $(this).remove();
                      $('.imageHiddenContent12').html('<input type="hidden" value="'+data[1]+'" id="ProductoImg5" name="data[Linea][1][imagen]">');
                      p = 1;
                    });
                    if(p==0){
                      $('.imageHiddenContent12').html('<input type="hidden" value="'+data[1]+'" id="ProductoImg5" name="data[Linea][1][imagen]">');     
                    }
                  }



                   if(imgp==13){
                    var p = 0;
                    $( ".imageHiddenContent input[type=hidden]" ).each(function( index ) {
                      $(this).remove();
                      $('.imageHiddenContent13').html('<input type="hidden" value="'+data[1]+'" id="ProductoImg5" name="data[Linea][2][imagen]">');
                      p = 1;
                    });
                    if(p==0){
                      $('.imageHiddenContent13').html('<input type="hidden" value="'+data[1]+'" id="ProductoImg5" name="data[Linea][2][imagen]">');     
                    }
                  }



                   if(imgp==14){
                    var p = 0;
                    $( ".imageHiddenContent input[type=hidden]" ).each(function( index ) {
                      $(this).remove();
                      $('.imageHiddenContent14').html('<input type="hidden" value="'+data[1]+'" id="ProductoImg5" name="data[Linea][3][imagen]">');
                      p = 1;
                    });
                    if(p==0){
                      $('.imageHiddenContent14').html('<input type="hidden" value="'+data[1]+'" id="ProductoImg5" name="data[Linea][3][imagen]">');     
                    }
                  }




                  $('.file').remove();
                  options.onFileSuccess(file,data[0]);
                }
                else{
                  options.onFileError(file,data);
                  obj.next('a').next('div').find('.file:first').remove();
                  if((options.theme == "bootstrap")&&(options.showErrorAlerts==true)){
                    obj.next('a').next('div').prepend('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button> '+data+'</div>');
                    bootstrapclosenotification();
                  }
                  if((options.theme == "custom")&&(options.showErrorAlerts==true)){

                    obj.next('a').next('div').prepend('<div class="alert-pekeupload"><button type="button" class="close" data-dismiss="alert">&times;</button> '+data+'</div>');
                    customclosenotification();
                  }
                  error = false;
                }
            },
            xhr: function() {  // custom xhr
                  myXhr = $.ajaxSettings.xhr();
                  if(myXhr.upload){ // check if upload property exists
                    myXhr.upload.addEventListener('progress',progressHandlingFunction, false); // for handling the progress of the upload
                }
                return myXhr;
              },
            cache: false,
                  contentType: false,
                  processData: false
          });
      return error;
    }
    //Function that updates bars progress
    function progressHandlingFunction(e){
        if(e.lengthComputable){
          var total = e.total;
          var loaded = e.loaded;
          if (options.showFilename==true){
          obj.next('a').next('div').find('.file').first().find('.filename:first').text(file.name);
          }
          if (options.showPercent==true){
          var percent = Number(((e.loaded * 100)/e.total).toFixed(2));
            obj.next('a').next('div').find('.file').first().find('.pekeup-progress-bar:first').width(percent+'%');
            }
            obj.next('a').next('div').find('.file').first().find('.pekeup-progress-bar:first').html('<center>'+percent+"%</center>");
        }
    }
    //Validate master
    function validateresult(){
      var canUpload = true;
      if (options.allowedExtensions!=""){
        var validationresult = validateExtension();
        if (validationresult == false){
          canUpload = false;
          if((options.theme == "bootstrap")&&(options.showErrorAlerts==true)){
            obj.next('a').next('div').prepend('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button> '+options.invalidExtError+'</div>');
            bootstrapclosenotification();
          }
          if((options.theme == "custom")&&(options.showErrorAlerts==true)){
            obj.next('a').next('div').prepend('<div class="alert-pekeupload"><button type="button" class="close">&times;</button> '+options.invalidExtError+'</div>');
            customclosenotification();
          }
          options.onFileError(file,options.invalidExtError);
        }
        else{
          canUpload = true;
        }
      }
      if (options.maxSize>0){
        var validationresult = validateSize();
        if (validationresult == false){
          canUpload = false;
          if((options.theme == "bootstrap")&&(options.showErrorAlerts==true)){
            obj.next('a').next('div').prepend('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button> '+options.sizeError+'</div>');
            bootstrapclosenotification();
          }
          if((options.theme == "custom")&&(options.showErrorAlerts==true)){
            obj.next('a').next('div').prepend('<div class="alert-pekeupload"><button type="button" class="close" data-dismiss="alert">&times;</button> '+options.sizeError+'</div>');
            customclosenotification();
          }
          options.onFileError(file,options.sizeError);
        }
        else{
          canUpload = true;
        }
      }
      return canUpload
    }
    //Validate extension of file
    function validateExtension(){
      var ext = obj.val().split('.').pop().toLowerCase();
      var allowed = options.allowedExtensions.split("|");
      if($.inArray(ext, allowed) == -1) {
          return false;
      }
      else{
        return true;
      }
    }
    //Validate Size of the file
    function validateSize(){
      if (file.size > options.maxSize){
        console.log("asdasd");
        return false;
      }
      else{
        return true;
      }
    }
    //Function that allows close alerts of bootstap
    function bootstrapclosenotification(){
      obj.next('a').next('div').find('.alert-error').click(function(){
        $(this).remove();
      });
    }
    function customclosenotification(){
      obj.next('a').next('div').find('.alert-pekeupload').click(function(){
        $(this).remove();
      });
    }
  };

})(jQuery);