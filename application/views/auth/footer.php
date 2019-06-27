<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?=base_url('assets/js/appointment_approval.js')?>"></script>

<script>
  $( function() {
    $( "#datepicker" ).datepicker(
    	{ 
    		minDate: 0, 
    		maxDate: "7D",
	    		beforeShowDay: function(date) {
		        var day = date.getDay();
		        return [(day != 0 && day != 6)];
	    		}
    		}
    	);
  } );
  </script>
</body>
</html>