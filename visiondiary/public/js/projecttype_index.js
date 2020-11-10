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

//Datatable function
$(document).ready(function(){
    
}); 