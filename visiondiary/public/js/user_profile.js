//Js is a shorthand notation of javascript
$().ready(function(){
    
    eventactions();
});

function eventactions()
{
    //Bind Edit profile
    $("#addedit_form_submit").click(addactions);
    $("#addedit_form").submit(addactions);
    
    $("#addedit_form_div").hide();  
    $("#uploadAvatars_form_div").hide();  
    
    $('.edit_image').click(uploadAvatars);
    $('.edit_profile').click(editactions);
    $('.edit_password').click(editactions);
}

function uploadAvatars()
{
    stopevent(event);
    $("#uploadAvatars_form_div").show();  
    $("#add_upload").addClass("in");  
    $("#main_div").hide();
    $("#addedit_form_div").hide();
    
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
                        $("#addedit_form_div").hide();
//                        if(data.view)
//                        {
//                           $("#addedit_form_div").html(data.view);
//                            
////                           $('.panel-collapse').collapse('show');
//                           $("#addedit_form_submit").click(addactions);
//                           $("#addedit_form").submit(addactions); 
//                        }
                        toastr.success('Your Profile has been updated successfully','Message',{
                            timeOut: 5000,
                            "closeButton": true,
                            "tapToDismiss": false
                        });
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
    
    var formURL  = $($(event.target)).parent().attr("href");
    $.ajax(
    {
        url : formURL,
        type: "GET",
        success:function(data, textStatus, jqXHR) 
        {
            if(textStatus == "success")
            {
                $("#addedit_form_div").show();
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