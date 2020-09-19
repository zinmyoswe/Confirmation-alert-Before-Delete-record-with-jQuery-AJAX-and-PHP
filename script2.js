$(document).ready(function(){

    // Delete 
    $('.delete').click(function(){
        var el = this;
      
        // Delete id
        var deleteid = $(this).data('id');
        
        // Confirm box
        bootbox.confirm({
            title: "Destroy planet?",
            message: "Do you want to activate the Deathstar now? This cannot be undone.",
            buttons: {
                cancel: {
                    label: '<i class="fa fa-times"></i> Cancel'
                },
                confirm: {
                    label: '<i class="fa fa-check"></i> Confirm'
                }
            },


            callback: function(result) {
            
            if(result){
                // AJAX Request
                $.ajax({
                    url: 'ajaxfile.php',
                    type: 'POST',
                    data: { id:deleteid },
                    success: function(response){

                        // Removing row from HTML Table
                        if(response == 1){
							$(el).closest('tr').css('background','tomato');
							$(el).closest('tr').fadeOut(800,function(){
								$(this).remove();
							});
						}else{
							bootbox.alert('Record not deleted.');
						}

                    }
                });
            }
            
            
        }});
        
    });
});