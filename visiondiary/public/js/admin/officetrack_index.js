$(document).ready(function() {
    //        $('#start_date').datetimepicker({
    //            startDate:'+1971/05/01'//or 1986/12/08
    //        });
    //        $('#end_date').datetimepicker({
    //            startDate:'+1971/05/01'//or 1986/12/08
    //        });
});
//https://xdsoft.net/jqplugins/datetimepicker/
$(function(){
    $('#start_date').datetimepicker({
        startDate:'+1971/05/01',
     onShow:function( ct ){
      this.setOptions({
       maxDate:$('#end_date').val()?$('#end_date').val():false
      })
     },
     timepicker:true
    });
    $('#end_date').datetimepicker({
        startDate:'+1971/05/01',
     onShow:function( ct ){
      this.setOptions({
       minDate:$('#start_date').val()?$('#start_date').val():false
      })
     },
     timepicker:true
    });
});