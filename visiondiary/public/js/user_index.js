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
        $("#filter_type").val("%");
        $("#filter_type").trigger("chosen:updated");

        $('html, body').animate({
            scrollTop: $(".row").offset().top
        }, 1000);

        loadlist();
    });
    });
    
    $(".upload_image").hide();  
    eventactions();
});

function submitform(event)
{
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
    $('#listTable').on('click', '.editpassword', function() {
        editactions(event);
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
    var error = passwordError = false;
    var emailerror = false;
    var emailpattern = /^(([a-zA-Z0-9_.-]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z0-9]{2,4}))+([,;:](([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z0-9]{2,4}))+)*$/;
    var passwordpattern = /([a-zA-Z0-9*#@!]{6,20})/;                    
    $(".has-error").removeClass("has-error");
    $("#addedit_form input,textarea,select").each(function(i,node){
        if($(node).attr("required"))
        {
            if(node.value == "")
            {
                error = true;
                $(node).parent().addClass("has-error");

            }
            else
            {
                switch(node.name)
                {
                    case "email":
                        if(node.value != "")
                        {
                            if(!emailpattern.test(node.value))
                            {
                                error = true;
                                emailerror = true;
                                $(node).parent().addClass("has-error");
                            }
                        }
                    break;
                    case "old_password":
                        if (node.value == $("#password").val())
                        {
                            error = true;
                            passwordError = true;
                            $("#old_password").parent().addClass("has-error");
                            $("#password").parent().addClass("has-error");
                            toastr.error('Password/Old password should not be same','Message',{
                               timeOut: 5000,
                               "closeButton": true,
                               "tapToDismiss": false
                           });
                        }
                    break;
                    case "password":
                    case "password_confirmation":
                        if (node.value != $("#password_confirmation").val())
                        {
                           $(node).parent().addClass("has-error");
                           $("#password_confirmation").parent().addClass("has-error");
                           passwordError = true;
                           error = true;
                           toastr.error('Password/confirm password should be same','Message',{
                               timeOut: 5000,
                               "closeButton": true,
                               "tapToDismiss": false
                           });
                        }
                        else if(!passwordpattern.test(node.value))
                        {
                           $(node).parent().addClass("has-error");
                           $("#password_confirmation").parent().addClass("has-error");
                           passwordError = true;
                           error = true;
                           toastr.error('Password should contain atleast 6 characters.Allowed Special Characters are *#@! only!','Message',{
                               timeOut: 5000,
                               "closeButton": true,
                               "tapToDismiss": false
                           });
                        }
                        break;
                        
                }   
            }

        }
    });
    
    if(emailerror){
        toastr.error('Invalid Email','Message',{
            timeOut: 5000,
            "closeButton": true,
            "tapToDismiss": false
        });
    }
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
                    if(data.result)
                    {
                        if(data.view)
                        {
                           $("#addedit_form_div").html(data.view);
                            
//                           $('.panel-collapse').collapse('show');
                           $("#addedit_form_submit").click(addactions);
                           $("#addedit_form").submit(addactions); 
                        }
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
                    }else{
                        hideoverlay(1);
                        toastr.error(data.data,'Message',{
                            timeOut: 5000,
                            "closeButton": true,
                            "tapToDismiss": false
                        });
                    }
                    
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

function deleteactions()
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