<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?=base_url('assets/js/appointment_approval.js')?>"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/
  sweetalert2.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>

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