$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});

	
});

$('.delete-button').on('click', function (e) {
	var id = $(this).attr('data-id');
	 $('.confirm-delete').attr('data-id',id);
	
	});
	$(".confirm-delete").on('click', function (e) {
		var id = $(this).attr('data-id');
		console.log(id);
		
	});