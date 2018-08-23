$(document).ready(function() {

   

    $('#visible-future1').Zebra_DatePicker({
        always_visible: $('#container1'),
		 direction: true
    });
    $('#visible-future2').Zebra_DatePicker({
           always_visible: $('#container2'),
            direction: true
       });

       $('#departure_date').Zebra_DatePicker();

       $('.departure_date').Zebra_DatePicker();

       $('.departure_time').Zebra_DatePicker({
        format:'H:i'
       });
});