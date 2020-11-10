//Js is a shorthand notation of javascript
$().ready(function(){
    
    //Toggle PlusMinus
    togglePlusMinus();

    //bind datatable
    toggledataTables("#list table");
     
    $("#addedit_form_submit").click(addactions);
    $("#addedit_form").submit(addactions);
   
    $("#filter_form_submit").click(submitform);
    $("#filter_form").submit(submitform);
    $("#filter_form_reset").click(function(event){
            $("#list").fadeOut("slow",function(){
            $("#list").html();

            $("#filter_title").val("");
            
            $("#filter_id_user").val("%");
            $("#filter_id_user").trigger("chosen:updated");
            
            $("#filter_status").val("%");
            $("#filter_status").trigger("chosen:updated");
            
            $("#filter_project_type").val("%");
            $("#filter_project_type").trigger("chosen:updated");

            $('html, body').animate({
                scrollTop: $(".row").offset().top
            }, 1000);

            loadlist();
        });
    });
    
    eventactions();
    
    
});

function submitform(event)
{
    $(".eventData").show();
    $(".eventImageData").hide();
    stopevent(event);
//    $("#page").val(1);
    loadlist();
}

function eventactions()
{
    $('#listTable').on('click', '.delete', function() {
        deleteactions(event);
    });
    $('#listTable').on('click', '.edit', function() {
       editactions(event);
    });
    $('#listTable').on('click', '.upload', function() {
       loadImageactions(event);
    });
}

function loadlist(event)
{
    showoverlay(1);
    
    var postData = $($("#filter_form")).serializeArray();
    var formURL = $($("#filter_form")).attr("action");
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(data, textStatus, jqXHR) 
        {
            if(textStatus == "success")
            {
                 
                $($("#addedit_form input,#addedit_form select,#addedit_form textarea")).each(function(i,node){  $(node).val(""); });
                $('.panel-collapse').collapse('hide');
                $("#list").html(data.data);
                $("#list").fadeIn("slow",function(){
                    $('html, body').animate({
                        scrollTop: $("#list").offset().top
                    }, 1000);
                    $('[data-toggle="tooltip"]').tooltip();
                    eventactions();
                });
                
                toggledataTables("#list table");
                
//                $(".edit").click(editactions);
            }
            hideoverlay(1);
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
        }
   });
}

function addactions()
{
    stopevent(event);
    var error = false;

    $(".has-error").removeClass("has-error");
    $("#addedit_form input,textarea,select").each(function(i,node){
        if($(node).attr("required"))
        {
            if(node.value == "")
            {
                error = true;
                $(node).parent().addClass("has-error");
            }

        }
    });

    if(!error)
    {
        showoverlay(1);
    
        var postData = $($("#addedit_form")).serializeArray();
        var formURL  = $($("#addedit_form")).attr("action");
        $.ajax(
        {
            url : formURL,
            type: "POST",
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
            data : postData,
            success:function(data, textStatus, jqXHR) 
            {
                if(textStatus == "success")
                {
                    $("#title").html("ADD");
                    $("#addedit_form_submit").html("CREATE");
//                    url = $($("#addedit_form")).attr("action");
//                    $($("#addedit_form")).attr("action",url.substr(0,url.lastIndexOf('/')));
                    toastr.success('Record has been updated successfully','Message',{
                        timeOut: 5000,
                        "closeButton": true,
                        "tapToDismiss": false
                    });
                    loadlist();
                }
                hideoverlay(1);
            },
            error: function(jqXHR, textStatus, errorThrown) 
            {
            }
       });
    }

}

function editactions(event)
{
    stopevent(event);
    showoverlay(1);
    
    var formURL  = $($(event.target)).attr("href");
    $.ajax(
    {
        url : formURL,
        type: "GET",
        success:function(data, textStatus, jqXHR) 
        {
            if(textStatus == "success")
            {
                $("#addedit_form_div").html(data.data);
                 $('html, body').animate({
                        scrollTop: $(".page-titles").offset().top
                    }, 1000);
                $('.panel-collapse').collapse('show');
                
                $("#addedit_form_submit").click(addactions);
                $("#addedit_form").submit(addactions);
            }
            hideoverlay(1);
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
        }
   });
}

function deleteactions(event)
{
    if(!confirm("Are you sure to delete this?")){
      event.preventDefault();
        return true;
    }
    
    stopevent(event);
    showoverlay(1);
    
    var formURL  = $($(event.target)).attr("href");
    $.ajax(
    {
        url : formURL,
        type: "GET",
        success:function(data, textStatus, jqXHR) 
        {
            if(textStatus == "success")
            {
                toastr.success('Record has been deleted successfully','Message',{
                    timeOut: 5000,
                    "closeButton": true,
                    "tapToDismiss": false
                });
                loadlist();
            }
            hideoverlay(1);
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
        }
   });
}

var formURL = id = "";

//Handle Images
function loadImageactions(event)
{
    stopevent(event);
    showoverlay(1);
    formURL  = $($(event.target)).attr("href");
    id  = $($(event.target)).attr("data-id");
    uploadImageactions();
}
function uploadImageactions()
{
    $.ajax(
    {
        url : formURL,
        type: "GET",
        success:function(data, textStatus, jqXHR) 
        {
            if(textStatus == "success")
            {
                $(".eventData").hide();
                $(".eventImageData").show();
                
//                 $("#list_image").show();
                 $("#list_image").html(data.data);
                 $('html, body').animate({
                        scrollTop: $("#list_image").offset().top
                    }, 1000);
                $('.panel-collapse').collapse('show');
                
                setTimeout(function(){
                    $("#my-awesome-dropzone").dropzone({ url: "/storeImage/"+id });
                }, 10)
                
                imageeventactions();
                
                //Attach Dropzone
                Dropzone.options.myAwesomeDropzone = {
                    paramName: "file", // The name that will be used to transfer the file
                    maxFilesize: 2, // MB
                    init: function () {
                      var self = this;
                      // config
                      self.options.addRemoveLinks = true;
                      self.options.dictRemoveFile = "Remove";
                      // bind events

                      /*
                      * Success file upload
                      */
                        self.on("success", function (file, response) {
                            $('.allImages').html(response.html);
                            file.serverId = response.id;
                            uploadImageactions();
                                toastr.success('One more Memory has been added successfully','Message',{
                                    timeOut: 5000,
                                    "closeButton": true,
                                    "tapToDismiss": false
                                });
                          });
                          }
                      };
                      

            }
            hideoverlay(1);
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
        }
   });
}

function imageeventactions()
{
    $(".back").click(submitform);
    $('#listImageTable').on('click', '.delete', function() {
        imagedeleteactions(event);
    });
    $('#listImageTable').on('click', '.edit', function() {
        imageeditactions(event);
    });
}
function imageeditactions(event)
{
    $("#image_addedit_form_div").removeClass("hide");
    stopevent(event);
    showoverlay(1);
    
    var formURL  = $($(event.target)).attr("href");
    $.ajax(
    {
        url : formURL,
        type: "GET",
        success:function(data, textStatus, jqXHR) 
        {
            if(textStatus == "success")
            {
                $("#image_addedit_form_div").html(data.data);
                $("#image_addedit_form_div").removeClass("hide");
                 $('html, body').animate({
                        scrollTop: $("#image_addedit_form_div").offset().top
                    }, 1000);
                
                
                $('.panel-collapse').collapse('show');
                
                $("#image_addedit_form_submit").click(imageaddactions);
                $("#image_addedit_form").submit(imageaddactions);
            }
            hideoverlay(1);
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
        }
   });
}
function imageaddactions()
{
    stopevent(event);
    var error = false;

    $(".has-error").removeClass("has-error");
    $("#image_addedit_form input,textarea,select").each(function(i,node){
        if($(node).attr("required"))
        {
            if(node.value == "")
            {
                error = true;
                $(node).parent().addClass("has-error");
            }

        }
    });

    if(!error)
    {
        showoverlay(1);
    
        var postData = $($("#image_addedit_form")).serializeArray();
        var formURL  = $($("#image_addedit_form")).attr("action");
        $.ajax(
        {
            url : formURL,
            type: "POST",
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
            data : postData,
            success:function(data, textStatus, jqXHR) 
            {
                if(textStatus == "success")
                {
                    $("#title").html("ADD");
                    $("#image_addedit_form_submit").html("CREATE");
                    url = $($("#image_addedit_form")).attr("action");
                    $($("#image_addedit_form")).attr("action",url.substr(0,url.lastIndexOf('/')));
                    toastr.success('Record has been updated successfully','Message',{
                        timeOut: 5000,
                        "closeButton": true,
                        "tapToDismiss": false
                    });
                    uploadImageactions();
                }
                hideoverlay(1);
            },
            error: function(jqXHR, textStatus, errorThrown) 
            {
            }
       });
    }

}


function imagedeleteactions(event)
{
    if(!confirm("Are you sure to delete this?")){
      event.preventDefault();
        return true;
    }
    
    stopevent(event);
    showoverlay(1);
    
    var formURL  = $($(event.target)).attr("href");
    $.ajax(
    {
        url : formURL,
        type: "GET",
        success:function(data, textStatus, jqXHR) 
        {
            if(textStatus == "success")
            {
                toastr.success('One memory has been deleted successfully','Message',{
                    timeOut: 5000,
                    "closeButton": true,
                    "tapToDismiss": false
                });
                uploadImageactions();
            }
            hideoverlay(1);
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
        }
   });
}