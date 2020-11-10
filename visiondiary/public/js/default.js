//stop event
function stopevent(event)
{
    event.stopPropagation();
    event.preventDefault();
}

//hide the overlay and the standby widget
function hideoverlay(duration)
{
    // Page Preloader
    $('#status').fadeOut("explode");
    $('#preloader').delay(duration).fadeOut(function () {
        $('body').delay(duration).css({'overflow': 'visible'});
    });
}

//show the overlay and the standby widget
function showoverlay(duration)
{
    $('#status').fadeIn("swing");
    $('#preloader').delay(duration).fadeIn("swing", function () {
        $('body').delay(duration).css({'overflow': 'visible'});
        $('#preloader').css({'opacity': '0.5'});
    });
}
//show the overlay and the standby widget
function toggledataTables(id)
{
    $(id).dataTable();  
}
//Toggle plus minus icon
function togglePlusMinus()
{
    // Add minus icon for collapse element which is open by default
    $(".collapse.in").each(function(){
        $(this).siblings(".panel-heading").find(".glyphicon").addClass("glyphicon-minus").removeClass("glyphicon-plus");
    });
    
    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
        $(this).parent().find(".glyphicon").removeClass("glyphicon-plus").addClass("glyphicon-minus");
    }).on('hide.bs.collapse', function(){
        $(this).parent().find(".glyphicon").removeClass("glyphicon-minus").addClass("glyphicon-plus");
    });
}
//copy to clipboard
function copyTextToClipboard(text) {
  var textArea = document.createElement("textarea");

  // Place in top-left corner of screen regardless of scroll position.
  textArea.style.position = 'fixed';
  textArea.style.top = 0;
  textArea.style.left = 0;

  // Ensure it has a small width and height. Setting to 1px / 1em
  // doesn't work as this gives a negative w/h on some browsers.
  textArea.style.width = '2em';
  textArea.style.height = '2em';

  // We don't need padding, reducing the size if it does flash render.
  textArea.style.padding = 0;

  // Clean up any borders.
  textArea.style.border = 'none';
  textArea.style.outline = 'none';
  textArea.style.boxShadow = 'none';

  // Avoid flash of white box if rendered for any reason.
  textArea.style.background = 'transparent';


  textArea.value = text;

  document.body.appendChild(textArea);
  textArea.focus();
  textArea.select();

  try {
    var successful = document.execCommand('copy');
    var msg = successful ? 'successful' : 'unsuccessful';
    console.log('Copying text command was ' + msg);
  } catch (err) {
    console.log('Oops, unable to copy');
  }

  document.body.removeChild(textArea);
}