<script type="text/javascript" src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js?'.rand(1,999))?>"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>

  $( function() {
    $( "#_datepicker" ).datepicker({ 
    	minDate: 0, 
    	maxDate: "10D",
    	changeMonth: true,
    	changeYear: true
     
    });
  } );   
  </script>

</body>
</html>