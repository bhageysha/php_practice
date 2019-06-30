jQuery(function(){

	$('.appoint_id').on('change',function(){
		$.LoadingOverlay("show");
		 var is_approved = 0;

		 if($(this).prop("checked") == true)
 		 	 is_approved = 1;
  		 // console.log(is_approved);
 		  var id = $(this).data('id')
 		
		 		 	$.ajax({
					  method: "POST",
					  url: "http://dev.com/php_morning_batch/index.php/doctor/set_is_approval_value",
					  data: { is_approved: is_approved,id:id}
					})
					  .done(function( res ) {
					  	if(res)
					  		$.LoadingOverlay("hide");
					  	// if(parseInt(res)){

					  	// 	Swal.fire({
								//   type: 'success',
								//   title:'Appointment approved successfully',
								//   showCancelButton: false
								// })
					  	// }else{
					  	// 	Swal.fire({
								//   type: 'warning',
								//   title:'Appointment canceled successfully',
								//   showCancelButton: false
								// })
					  	// }

					    // console.log(res);
					});




	});
});