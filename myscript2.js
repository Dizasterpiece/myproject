$(document).ready(function(){
	$('#brand').on('change',function(){
        var brandID = $(this).val();
        if(brandID){
            $.ajax({
                type:'POST',
                url:'ajax_data.php',
                data:'make_id='+brandID,
                success:function(html){
                    $('#model').html(html);
                    //$('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#model').html('<option value="">Select brand first</option>');
            //$('#city').html('<option value="">Select state first</option>'); 
        }
    }
    )
};
